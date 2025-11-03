<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Mission::with(['formulaires', 'plans', 'modesPaiement']);

        // Filtres
        if ($request->has('type_mission')) {
            $query->where('type_mission', $request->type_mission);
        }

        if ($request->has('statut')) {
            $query->where('statut', $request->statut);
        }

        if ($request->has('search')) {
            $query->where('nom_application', 'like', '%' . $request->search . '%');
        }

        $missions = $query->paginate($request->get('per_page', 15));

        return response()->json($missions);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'type_mission' => 'required|string|in:recrutement,recensement,prospection,sensibilisation,activation_service',
            'cible' => 'required|string|in:entreprises,personnes',
            'nom_application' => 'required|string|max:255',
            'logo_url' => 'nullable|url',
            'couleur_primaire' => 'nullable|string|max:7',
            'couleur_secondaire' => 'nullable|string|max:7',
            'dark_mode' => 'boolean',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after:date_debut',
            'pays' => 'nullable|string|max:100',
            'ville' => 'nullable|string|max:100',
            'commune' => 'nullable|string|max:100',
            'objectif_nombre' => 'nullable|integer|min:1',
            'objectif_duree' => 'nullable|integer|min:1',
            'objectif_unite' => 'nullable|string|in:jours,mois',
            'methode_api' => 'boolean',
        ]);

        $validated['created_by'] = auth()->id();

        $mission = Mission::create($validated);

        return response()->json($mission, 201);
    }

    public function show(string $id): JsonResponse
    {
        $mission = Mission::with([
            'formulaires.champs.parametres',
            'plans',
            'modesPaiement',
            'reponses'
        ])->findOrFail($id);

        return response()->json($mission);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $mission = Mission::findOrFail($id);

        $validated = $request->validate([
            'type_mission' => 'string|in:recrutement,recensement,prospection,sensibilisation,activation_service',
            'cible' => 'string|in:entreprises,personnes',
            'nom_application' => 'string|max:255',
            'logo_url' => 'nullable|url',
            'couleur_primaire' => 'nullable|string|max:7',
            'couleur_secondaire' => 'nullable|string|max:7',
            'dark_mode' => 'boolean',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after:date_debut',
            'pays' => 'nullable|string|max:100',
            'ville' => 'nullable|string|max:100',
            'commune' => 'nullable|string|max:100',
            'objectif_nombre' => 'nullable|integer|min:1',
            'objectif_duree' => 'nullable|integer|min:1',
            'objectif_unite' => 'nullable|string|in:jours,mois',
            'methode_api' => 'boolean',
        ]);

        $mission->update($validated);

        return response()->json($mission);
    }

    public function destroy(string $id): JsonResponse
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return response()->json(['message' => 'Mission supprimée avec succès']);
    }

    public function updateStatus(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'statut' => 'required|string|in:brouillon,actif,termine'
        ]);

        $mission = Mission::findOrFail($id);
        $mission->update(['statut' => $validated['statut']]);

        return response()->json($mission);
    }

    public function duplicate(string $id): JsonResponse
    {
        $mission = Mission::with(['formulaires.champs', 'plans', 'modesPaiement'])->findOrFail($id);

        $newMission = $mission->replicate();
        $newMission->nom_application = $mission->nom_application . ' (Copie)';
        $newMission->statut = 'brouillon';
        $newMission->save();

        // Dupliquer les relations
        foreach ($mission->formulaires as $formulaire) {
            $newFormulaire = $formulaire->replicate();
            $newFormulaire->mission_id = $newMission->id;
            $newFormulaire->save();

            foreach ($formulaire->champs as $champ) {
                $newChamp = $champ->replicate();
                $newChamp->formulaire_id = $newFormulaire->id;
                $newChamp->save();
            }
        }

        foreach ($mission->plans as $plan) {
            $newPlan = $plan->replicate();
            $newPlan->mission_id = $newMission->id;
            $newPlan->save();
        }

        foreach ($mission->modesPaiement as $mode) {
            $newMode = $mode->replicate();
            $newMode->mission_id = $newMission->id;
            $newMode->save();
        }

        return response()->json($newMission->load(['formulaires', 'plans', 'modesPaiement']), 201);
    }

    public function export(string $id): JsonResponse
    {
        $mission = Mission::with('reponses')->findOrFail($id);

        // Logique d'export (CSV, Excel, JSON)
        // À implémenter selon vos besoins

        return response()->json([
            'message' => 'Export en cours',
            'data' => $mission->reponses
        ]);
    }

    public function byType(string $type): JsonResponse
    {
        $missions = Mission::where('type_mission', $type)
            ->with(['formulaires', 'plans'])
            ->paginate(15);

        return response()->json($missions);
    }

    public function byStatus(string $statut): JsonResponse
    {
        $missions = Mission::where('statut', $statut)
            ->with(['formulaires', 'plans'])
            ->paginate(15);

        return response()->json($missions);
    }
}
