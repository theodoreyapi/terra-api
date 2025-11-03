<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulaire;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
     public function index(Request $request): JsonResponse
    {
        $query = Formulaire::with(['mission', 'champs']);

        if ($request->has('mission_id')) {
            $query->where('mission_id', $request->mission_id);
        }

        $formulaires = $query->orderBy('ordre')->paginate($request->get('per_page', 15));

        return response()->json($formulaires);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'mission_id' => 'required|uuid|exists:missions,id',
            'nom' => 'required|string|max:255',
            'ordre' => 'integer|min:0',
        ]);

        // Définir l'ordre automatiquement si non fourni
        if (!isset($validated['ordre'])) {
            $maxOrdre = Formulaire::where('mission_id', $validated['mission_id'])->max('ordre');
            $validated['ordre'] = $maxOrdre ? $maxOrdre + 1 : 0;
        }

        $formulaire = Formulaire::create($validated);

        return response()->json($formulaire->load('champs'), 201);
    }

    public function show(string $id): JsonResponse
    {
        $formulaire = Formulaire::with(['mission', 'champs.parametres'])->findOrFail($id);

        return response()->json($formulaire);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $formulaire = Formulaire::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'string|max:255',
            'ordre' => 'integer|min:0',
        ]);

        $formulaire->update($validated);

        return response()->json($formulaire->load('champs'));
    }

    public function destroy(string $id): JsonResponse
    {
        $formulaire = Formulaire::findOrFail($id);
        $formulaire->delete();

        return response()->json(['message' => 'Formulaire supprimé avec succès']);
    }

    public function byMission(string $missionId): JsonResponse
    {
        $formulaires = Formulaire::where('mission_id', $missionId)
            ->with('champs')
            ->orderBy('ordre')
            ->get();

        return response()->json($formulaires);
    }

    public function duplicate(string $id): JsonResponse
    {
        $formulaire = Formulaire::with('champs.parametres')->findOrFail($id);

        $newFormulaire = $formulaire->replicate();
        $newFormulaire->nom = $formulaire->nom . ' (Copie)';
        $newFormulaire->save();

        foreach ($formulaire->champs as $champ) {
            $newChamp = $champ->replicate();
            $newChamp->formulaire_id = $newFormulaire->id;
            $newChamp->save();

            if ($champ->parametres) {
                $newParametres = $champ->parametres->replicate();
                $newParametres->champ_id = $newChamp->id;
                $newParametres->save();
            }
        }

        return response()->json($newFormulaire->load('champs'), 201);
    }

    public function reorder(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'ordre' => 'required|integer|min:0'
        ]);

        $formulaire = Formulaire::findOrFail($id);
        $formulaire->update(['ordre' => $validated['ordre']]);

        return response()->json($formulaire);
    }
}
