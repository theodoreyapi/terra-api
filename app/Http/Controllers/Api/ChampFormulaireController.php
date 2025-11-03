<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChampFormulaire;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChampFormulaireController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = ChampFormulaire::with(['formulaire', 'parametres']);

        if ($request->has('formulaire_id')) {
            $query->where('formulaire_id', $request->formulaire_id);
        }

        if ($request->has('type_champ')) {
            $query->where('type_champ', $request->type_champ);
        }

        $champs = $query->orderBy('ordre')->paginate($request->get('per_page', 15));

        return response()->json($champs);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'formulaire_id' => 'required|uuid|exists:formulaires,id',
            'type_champ' => 'required|string|in:nom,prenoms,nom_et_prenoms,age,date_naissance,telephone,telephone_domicile,whatsapp,email',
            'label' => 'required|string|max:255',
            'obligatoire' => 'boolean',
            'ordre' => 'integer|min:0',
            'jours_options' => 'nullable|array',
            'mois_options' => 'nullable|array',
            'annee_options' => 'nullable|array',
            'options' => 'nullable|array',
        ]);

        // Définir l'ordre automatiquement si non fourni
        if (!isset($validated['ordre'])) {
            $maxOrdre = ChampFormulaire::where('formulaire_id', $validated['formulaire_id'])->max('ordre');
            $validated['ordre'] = $maxOrdre ? $maxOrdre + 1 : 0;
        }

        $champ = ChampFormulaire::create($validated);

        return response()->json($champ->load('parametres'), 201);
    }

    public function show(string $id): JsonResponse
    {
        $champ = ChampFormulaire::with(['formulaire', 'parametres'])->findOrFail($id);

        return response()->json($champ);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $champ = ChampFormulaire::findOrFail($id);

        $validated = $request->validate([
            'type_champ' => 'string|in:nom,prenoms,nom_et_prenoms,age,date_naissance,telephone,telephone_domicile,whatsapp,email',
            'label' => 'string|max:255',
            'obligatoire' => 'boolean',
            'ordre' => 'integer|min:0',
            'jours_options' => 'nullable|array',
            'mois_options' => 'nullable|array',
            'annee_options' => 'nullable|array',
            'options' => 'nullable|array',
        ]);

        $champ->update($validated);

        return response()->json($champ->load('parametres'));
    }

    public function destroy(string $id): JsonResponse
    {
        $champ = ChampFormulaire::findOrFail($id);
        $champ->delete();

        return response()->json(['message' => 'Champ supprimé avec succès']);
    }

    public function byFormulaire(string $formulaireId): JsonResponse
    {
        $champs = ChampFormulaire::where('formulaire_id', $formulaireId)
            ->with('parametres')
            ->orderBy('ordre')
            ->get();

        return response()->json($champs);
    }

    public function reorder(Request $request, string $id): JsonResponse
    {
        $validated = $request->validate([
            'ordre' => 'required|integer|min:0'
        ]);

        $champ = ChampFormulaire::findOrFail($id);
        $champ->update(['ordre' => $validated['ordre']]);

        return response()->json($champ);
    }

    public function bulkStore(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'formulaire_id' => 'required|uuid|exists:formulaires,id',
            'champs' => 'required|array',
            'champs.*.type_champ' => 'required|string|in:nom,prenoms,nom_et_prenoms,age,date_naissance,telephone,telephone_domicile,whatsapp,email',
            'champs.*.label' => 'required|string|max:255',
            'champs.*.obligatoire' => 'boolean',
            'champs.*.options' => 'nullable|array',
        ]);

        $champs = [];
        $ordre = ChampFormulaire::where('formulaire_id', $validated['formulaire_id'])->max('ordre') ?? -1;

        foreach ($validated['champs'] as $champData) {
            $ordre++;
            $champData['formulaire_id'] = $validated['formulaire_id'];
            $champData['ordre'] = $ordre;
            $champs[] = ChampFormulaire::create($champData);
        }

        return response()->json($champs, 201);
    }
}
