<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModePaiement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ModePaiementController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = ModePaiement::with('mission');

        if ($request->has('mission_id')) {
            $query->where('mission_id', $request->mission_id);
        }

        if ($request->has('actif')) {
            $query->where('actif', $request->boolean('actif'));
        }

        $modes = $query->paginate($request->get('per_page', 15));

        return response()->json($modes);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'mission_id' => 'required|uuid|exists:missions,id',
            'provider' => 'required|string|in:wave,orange,moov,mtn,visa',
            'actif' => 'boolean',
        ]);

        $mode = ModePaiement::create($validated);

        return response()->json($mode->load('mission'), 201);
    }

    public function show(string $id): JsonResponse
    {
        $mode = ModePaiement::with('mission')->findOrFail($id);

        return response()->json($mode);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $mode = ModePaiement::findOrFail($id);

        $validated = $request->validate([
            'provider' => 'string|in:wave,orange,moov,mtn,visa',
            'actif' => 'boolean',
        ]);

        $mode->update($validated);

        return response()->json($mode->load('mission'));
    }

    public function destroy(string $id): JsonResponse
    {
        $mode = ModePaiement::findOrFail($id);
        $mode->delete();

        return response()->json(['message' => 'Mode de paiement supprimé avec succès']);
    }

    public function byMission(string $missionId): JsonResponse
    {
        $modes = ModePaiement::where('mission_id', $missionId)->get();

        return response()->json($modes);
    }

    public function toggleActive(string $id): JsonResponse
    {
        $mode = ModePaiement::findOrFail($id);
        $mode->update(['actif' => !$mode->actif]);

        return response()->json($mode);
    }
}
