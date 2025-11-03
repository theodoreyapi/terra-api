<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class BusinessController extends Controller
{
     public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $business = Business::where('email', $request->email)->first();

        if (!$business || !Hash::check($request->password, $business->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les identifiants sont incorrects.'],
            ]);
        }

        $token = $business->createToken('auth-token')->plainTextToken;

        return response()->json([
            'user' => $business,
            'token' => $token,
        ]);
    }

    public function register(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenoms' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'telephone' => 'nullable|string|max:20',
            'role' => 'string|in:admin,superviseur,agent',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $business = Business::create($validated);
        $token = $business->createToken('auth-token')->plainTextToken;

        return response()->json([
            'user' => $business,
            'token' => $token,
        ], 201);
    }

    public function index(Request $request): JsonResponse
    {
        $query = Business::query();

        if ($request->has('role')) {
            $query->where('role', $request->role);
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nom', 'like', "%{$search}%")
                  ->orWhere('prenoms', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $businesss = $query->paginate($request->get('per_page', 15));

        return response()->json($businesss);
    }

    public function show(string $id): JsonResponse
    {
        $business = Business::findOrFail($id);

        return response()->json($business);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'prenoms' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'telephone' => 'nullable|string|max:20',
            'role' => 'string|in:admin,superviseur,agent',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $business = Business::create($validated);

        return response()->json($business, 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $business = Business::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'string|max:100',
            'prenoms' => 'string|max:100',
            'email' => 'email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'telephone' => 'nullable|string|max:20',
            'role' => 'string|in:admin,superviseur,agent',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $business->update($validated);

        return response()->json($business);
    }

    public function destroy(string $id): JsonResponse
    {
        $business = Business::findOrFail($id);
        $business->delete();

        return response()->json(['message' => 'Utilisateur supprimé avec succès']);
    }

    public function missions(string $id): JsonResponse
    {
        $business = Business::findOrFail($id);
        $missions = $business->missions()->with(['formulaires', 'plans'])->paginate(15);

        return response()->json($missions);
    }

    public function reponses(string $id): JsonResponse
    {
        $business = Business::findOrFail($id);
        $reponses = $business->reponses()->with(['mission', 'formulaire'])->paginate(15);

        return response()->json($reponses);
    }
}
