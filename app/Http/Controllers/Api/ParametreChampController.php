<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ParametreChamp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ParametreChampController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = ParametreChamp::with('champ');

        if ($request->has('champ_id')) {
            $query->where('champ_id', $request->champ_id);
        }

        $parametres = $query->paginate($request->get('per_page', 15));

        return response()->json($parametres);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'champ_id' => 'required|uuid|exists:champs_formulaire,id',
            'rendre_facultatif' => 'boolean',
            'rendre_obligatoire' => 'boolean',
            'gestion_appelite' => 'boolean',
        ]);

        $parametre = ParametreChamp::create($validated);

        return response()->json($parametre->load('champ'), 201);
    }

    public function show(string $id): JsonResponse
    {
        $parametre = ParametreChamp::with('champ')->findOrFail($id);

        return response()->json($parametre);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $parametre = ParametreChamp::findOrFail($id);

        $validated = $request->validate([
            'rendre_facultatif' => 'boolean',
            'rendre_obligatoire' => 'boolean',
            'gestion_appelite' => 'boolean',
        ]);

        $parametre->update($validated);

        return response()->json($parametre->load('champ'));
    }

    public function destroy(string $id): JsonResponse
    {
        $parametre = ParametreChamp::findOrFail($id);
        $parametre->delete();

        return response()->json(['message' => 'Paramètre supprimé avec succès']);
    }

    public function byChamp(string $champId): JsonResponse
    {
        $parametre = ParametreChamp::where('champ_id', $champId)->first();

        if (!$parametre) {
            return response()->json(['message' => 'Aucun paramètre trouvé'], 404);
        }

        return response()->json($parametre);
    }
}
