<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// ─────────────────────────────────────────────
// BusinessFormulaireController
// ─────────────────────────────────────────────
class BusinessFormulaireController extends Controller
{
    private function getMissionOrFail($missionId, $businessId)
    {
        $mission = DB::table('missions')
            ->where('id_mission', $missionId)
            ->where('created_by', $businessId)
            ->first();

        if (! $mission) abort(404, 'Mission introuvable');
        return $mission;
    }

    // GET /api/business/missions/{id}/formulaires
    /**
     * Liste des formulaires d’une mission
     *
     * @group Business Formulaires
     *
     * @authenticated
     *
     * @urlParam id string required ID de la mission
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_formulaire": "uuid",
     *       "nom": "Formulaire principal",
     *       "ordre": 0,
     *       "champs": [
     *         {
     *           "id_champ_formulaire": "uuid",
     *           "label": "Nom",
     *           "type": "text",
     *           "ordre": 0,
     *           "rendre_facultatif": false,
     *           "rendre_obligatoire": true,
     *           "gestion_appelite": false
     *         }
     *       ]
     *     }
     *   ]
     * }
     *
     * @response 404 {
     *   "message": "Mission introuvable"
     * }
     */
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $formulaires = DB::table('formulaires')->where('mission_id', $id)->orderBy('ordre')->get();

        foreach ($formulaires as $formulaire) {
            $formulaire->champs = DB::table('champs_formulaire as cf')
                ->leftJoin('parametres_champs as pc', 'cf.id_champ_formulaire', '=', 'pc.champ_id')
                ->where('cf.formulaire_id', $formulaire->id_formulaire)
                ->orderBy('cf.ordre')
                ->select('cf.*', 'pc.rendre_facultatif', 'pc.rendre_obligatoire', 'pc.gestion_appelite')
                ->get();
        }

        return response()->json(['success' => true, 'data' => $formulaires]);
    }

    // POST /api/business/missions/{id}/formulaires
    /**
     * Créer un formulaire pour une mission
     *
     * @group Business Formulaires
     *
     * @authenticated
     *
     * @urlParam id string required ID de la mission
     *
     * @bodyParam nom string required Nom du formulaire. Example: Informations client
     * @bodyParam ordre integer Ordre d'affichage. Example: 0
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Formulaire créé",
     *   "data": {
     *     "id_formulaire": "uuid",
     *     "nom": "Informations client",
     *     "ordre": 0
     *   }
     * }
     *
     * @response 404 {
     *   "message": "Mission introuvable"
     * }
     */
    public function store(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'nom'   => 'required|string|max:255',
            'ordre' => 'nullable|integer|min:0',
        ]);

        // Ordre auto si non fourni
        if (! isset($validated['ordre'])) {
            $maxOrdre = DB::table('formulaires')->where('mission_id', $id)->max('ordre');
            $validated['ordre'] = ($maxOrdre ?? -1) + 1;
        }

        $fId = (string) Str::uuid();
        DB::table('formulaires')->insert([
            'id_formulaire' => $fId,
            'nom'           => $validated['nom'],
            'ordre'         => $validated['ordre'],
            'mission_id'    => $id,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Formulaire créé',
            'data'    => DB::table('formulaires')->where('id_formulaire', $fId)->first(),
        ], 201);
    }

    // PUT /api/business/missions/{id}/formulaires/{fid}
    /**
     * Mettre à jour un formulaire
     *
     * @group Business Formulaires
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam fid string required ID formulaire
     *
     * @bodyParam nom string Nom du formulaire
     * @bodyParam ordre integer Ordre d'affichage
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Formulaire mis à jour",
     *   "data": {
     *     "id_formulaire": "uuid",
     *     "nom": "Nouveau nom",
     *     "ordre": 1
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Formulaire introuvable"
     * }
     */
    public function update(Request $request, $id, $fid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $formulaire = DB::table('formulaires')
            ->where('id_formulaire', $fid)
            ->where('mission_id', $id)
            ->first();

        if (! $formulaire) {
            return response()->json(['success' => false, 'message' => 'Formulaire introuvable'], 404);
        }

        $validated = $request->validate([
            'nom'   => 'sometimes|string|max:255',
            'ordre' => 'sometimes|integer|min:0',
        ]);

        $validated['updated_at'] = now();
        DB::table('formulaires')->where('id_formulaire', $fid)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Formulaire mis à jour',
            'data'    => DB::table('formulaires')->where('id_formulaire', $fid)->first(),
        ]);
    }

    // DELETE /api/business/missions/{id}/formulaires/{fid}
    /**
     * Supprimer un formulaire
     *
     * @group Business Formulaires
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam fid string required ID formulaire
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Formulaire supprimé"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Formulaire introuvable"
     * }
     */
    public function destroy(Request $request, $id, $fid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('formulaires')
            ->where('id_formulaire', $fid)
            ->where('mission_id', $id)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Formulaire introuvable'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Formulaire supprimé']);
    }
}
