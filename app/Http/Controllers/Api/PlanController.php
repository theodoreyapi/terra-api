<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlanController extends Controller
{
     public function index(Request $request): JsonResponse
    {
        $query = Plan::with('mission');

        if ($request->has('mission_id')) {
            $query->where('mission_id', $request->mission_id);
        }

        $plans = $query->paginate($request->get('per_page', 15));

        return response()->json($plans);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'mission_id' => 'required|uuid|exists:missions,id',
            'montant' => 'required|numeric|min:0',
            'duree' => 'required|integer|min:1',
            'unite_duree' => 'required|string|in:mois',
        ]);

        $plan = Plan::create($validated);

        return response()->json($plan->load('mission'), 201);
    }

    public function show(string $id): JsonResponse
    {
        $plan = Plan::with('mission')->findOrFail($id);

        return response()->json($plan);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $plan = Plan::findOrFail($id);

        $validated = $request->validate([
            'montant' => 'numeric|min:0',
            'duree' => 'integer|min:1',
            'unite_duree' => 'string|in:mois',
        ]);

        $plan->update($validated);

        return response()->json($plan->load('mission'));
    }

    public function destroy(string $id): JsonResponse
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();

        return response()->json(['message' => 'Plan supprimé avec succès']);
    }

    public function byMission(string $missionId): JsonResponse
    {
        $plans = Plan::where('mission_id', $missionId)->get();

        return response()->json($plans);
    }
}
