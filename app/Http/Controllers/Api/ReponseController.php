<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Reponse::with(['mission', 'formulaire', 'agent']);

        if ($request->has('mission_id')) {
            $query->where('mission_id', $request->mission_id);
        }

        if ($request->has('agent_id')) {
            $query->where('agent_id', $request->agent_id);
        }

        if ($request->has('statut')) {
            $query->where('statut', $request->statut);
        }

        $reponses = $query->paginate($request->get('per_page', 15));

        return response()->json($reponses);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'mission_id' => 'required|uuid|exists:missions,id',
            'formulaire_id' => 'nullable|uuid|exists:formulaires,id',
            'donnees' => 'required|array',
            'localisation' => 'nullable|string', // Format: "lat,lng"
            'agent_id' => 'nullable|uuid|exists:users,id',
        ]);

        $validated['agent_id'] = $validated['agent_id'] ?? auth()->id();

        $reponse = Reponse::create($validated);

        return response()->json($reponse, 201);
    }

    public function show(string $id): JsonResponse
    {
        $reponse = Reponse::with(['mission', 'formulaire', 'agent'])->findOrFail($id);

        return response()->json($reponse);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $reponse = Reponse::findOrFail($id);

        $validated = $request->validate([
            'donnees' => 'array',
            'localisation' => 'nullable|string',
            'statut' => 'string|in:soumis,valide,rejete',
        ]);

        $reponse->update($validated);

        return response()->json($reponse);
    }

    public function destroy(string $id): JsonResponse
    {
        $reponse = Reponse::findOrFail($id);
        $reponse->delete();

        return response()->json(['message' => 'Réponse supprimée avec succès']);
    }

    public function updateStatus(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'statut' => 'required|string|in:soumis,valide,rejete'
        ]);

        $reponse = Reponse::findOrFail($id);
        $reponse->update(['statut' => $validated['statut']]);

        return response()->json($reponse);
    }

    public function byMission(string $missionId): JsonResponse
    {
        $reponses = Reponse::where('mission_id', $missionId)
            ->with(['agent', 'formulaire'])
            ->paginate(15);

        return response()->json($reponses);
    }

    public function byAgent(string $agentId): JsonResponse
    {
        $reponses = Reponse::where('agent_id', $agentId)
            ->with(['mission', 'formulaire'])
            ->paginate(15);

        return response()->json($reponses);
    }

    public function bulkStore(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'reponses' => 'required|array',
            'reponses.*.mission_id' => 'required|uuid|exists:missions,id',
            'reponses.*.formulaire_id' => 'nullable|uuid|exists:formulaires,id',
            'reponses.*.donnees' => 'required|array',
        ]);

        $reponses = [];
        foreach ($validated['reponses'] as $data) {
            $data['agent_id'] = auth()->id();
            $reponses[] = Reponse::create($data);
        }

        return response()->json($reponses, 201);
    }

    public function statistics(string $missionId): JsonResponse
    {
        $stats = [
            'total' => Reponse::where('mission_id', $missionId)->count(),
            'valides' => Reponse::where('mission_id', $missionId)->where('statut', 'valide')->count(),
            'soumis' => Reponse::where('mission_id', $missionId)->where('statut', 'soumis')->count(),
            'rejetes' => Reponse::where('mission_id', $missionId)->where('statut', 'rejete')->count(),
            'par_jour' => Reponse::where('mission_id', $missionId)
                ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
                ->groupBy('date')
                ->orderBy('date', 'desc')
                ->limit(30)
                ->get(),
        ];

        return response()->json($stats);
    }
}
