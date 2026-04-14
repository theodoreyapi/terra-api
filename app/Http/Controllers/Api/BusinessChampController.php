<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessChampController extends Controller
{
    private function getFormulaireOrFail(string $formulaireId, string $businessId)
    {
        $formulaire = DB::table('formulaires as f')
            ->join('missions as m', 'f.mission_id', '=', 'm.id_mission')
            ->where('f.id_formulaire', $formulaireId)
            ->where('m.created_by', $businessId)
            ->select('f.*', 'm.statut as statut_mission')
            ->first();

        if (! $formulaire) {
            abort(404, 'Formulaire introuvable');
        }

        return $formulaire;
    }

    // POST /api/business/formulaires/{fid}/champs
    /**
 * Ajouter un champ à un formulaire
 *
 * @group Business Champs
 *
 * @authenticated
 *
 * @urlParam fid string required ID du formulaire
 *
 * @bodyParam type_champ string required Type du champ (text, number, select, radio, checkbox, date, etc.)
 * @bodyParam label string required Libellé du champ
 * @bodyParam obligatoire boolean Champ obligatoire ou non. Example: true
 * @bodyParam ordre integer Position du champ
 * @bodyParam options array Liste d’options (pour select, radio, checkbox)
 * @bodyParam jours_options array Options jours
 * @bodyParam mois_options array Options mois
 * @bodyParam annee_options array Options années
 *
 * @response 201 {
 *   "success": true,
 *   "message": "Champ ajouté",
 *   "data": {
 *     "id_champ_formulaire": "uuid",
 *     "type_champ": "text",
 *     "label": "Nom",
 *     "obligatoire": true,
 *     "ordre": 0,
 *     "options": null
 *   }
 * }
 *
 * @response 404 {
 *   "message": "Formulaire introuvable"
 * }
 */
    public function store(Request $request, string $fid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $validated = $request->validate([
            'type_champ'   => 'required|string|max:50',
            'label'        => 'required|string|max:255',
            'obligatoire'  => 'boolean',
            'ordre'        => 'nullable|integer|min:0',
            'options'      => 'nullable|array',
            'jours_options'=> 'nullable|array',
            'mois_options' => 'nullable|array',
            'annee_options'=> 'nullable|array',
        ]);

        if (! isset($validated['ordre'])) {
            $max             = DB::table('champs_formulaire')->where('formulaire_id', $fid)->max('ordre');
            $validated['ordre'] = ($max ?? -1) + 1;
        }

        $cid = (string) Str::uuid();

        DB::table('champs_formulaire')->insert([
            'id_champ_formulaire' => $cid,
            'formulaire_id'       => $fid,
            'type_champ'          => $validated['type_champ'],
            'label'               => $validated['label'],
            'obligatoire'         => $validated['obligatoire'] ?? false,
            'ordre'               => $validated['ordre'],
            'options'             => isset($validated['options'])       ? json_encode($validated['options'])       : null,
            'jours_options'       => isset($validated['jours_options']) ? json_encode($validated['jours_options']) : null,
            'mois_options'        => isset($validated['mois_options'])  ? json_encode($validated['mois_options'])  : null,
            'annee_options'       => isset($validated['annee_options']) ? json_encode($validated['annee_options']) : null,
            'created_at'          => now(),
            'updated_at'          => now(),
        ]);

        $champ = DB::table('champs_formulaire')->where('id_champ_formulaire', $cid)->first();
        $champ->options       = $champ->options       ? json_decode($champ->options)       : null;
        $champ->jours_options = $champ->jours_options ? json_decode($champ->jours_options) : null;
        $champ->mois_options  = $champ->mois_options  ? json_decode($champ->mois_options)  : null;
        $champ->annee_options = $champ->annee_options ? json_decode($champ->annee_options) : null;

        return response()->json([
            'success' => true,
            'message' => 'Champ ajouté',
            'data'    => $champ,
        ], 201);
    }

    // PUT /api/business/formulaires/{fid}/champs/{cid}
    /**
 * Mettre à jour un champ
 *
 * @group Business Champs
 *
 * @authenticated
 *
 * @urlParam fid string required ID formulaire
 * @urlParam cid string required ID champ
 *
 * @bodyParam type_champ string Type du champ
 * @bodyParam label string Libellé
 * @bodyParam obligatoire boolean Champ obligatoire
 * @bodyParam ordre integer Position
 * @bodyParam options array Liste d’options
 * @bodyParam jours_options array
 * @bodyParam mois_options array
 * @bodyParam annee_options array
 *
 * @response 200 {
 *   "success": true,
 *   "message": "Champ mis à jour",
 *   "data": {
 *     "id_champ_formulaire": "uuid",
 *     "label": "Nom modifié"
 *   }
 * }
 *
 * @response 404 {
 *   "success": false,
 *   "message": "Champ introuvable"
 * }
 */
    public function update(Request $request, string $fid, string $cid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $champ = DB::table('champs_formulaire')
            ->where('id_champ_formulaire', $cid)
            ->where('formulaire_id', $fid)
            ->first();

        if (! $champ) {
            return response()->json(['success' => false, 'message' => 'Champ introuvable'], 404);
        }

        $validated = $request->validate([
            'type_champ'   => 'sometimes|string|max:50',
            'label'        => 'sometimes|string|max:255',
            'obligatoire'  => 'boolean',
            'ordre'        => 'sometimes|integer|min:0',
            'options'      => 'nullable|array',
            'jours_options'=> 'nullable|array',
            'mois_options' => 'nullable|array',
            'annee_options'=> 'nullable|array',
        ]);

        foreach (['options', 'jours_options', 'mois_options', 'annee_options'] as $field) {
            if (array_key_exists($field, $validated)) {
                $validated[$field] = $validated[$field] ? json_encode($validated[$field]) : null;
            }
        }

        $validated['updated_at'] = now();
        DB::table('champs_formulaire')->where('id_champ_formulaire', $cid)->update($validated);

        $updated                = DB::table('champs_formulaire')->where('id_champ_formulaire', $cid)->first();
        $updated->options       = $updated->options       ? json_decode($updated->options)       : null;
        $updated->jours_options = $updated->jours_options ? json_decode($updated->jours_options) : null;
        $updated->mois_options  = $updated->mois_options  ? json_decode($updated->mois_options)  : null;
        $updated->annee_options = $updated->annee_options ? json_decode($updated->annee_options) : null;

        return response()->json([
            'success' => true,
            'message' => 'Champ mis à jour',
            'data'    => $updated,
        ]);
    }

    // DELETE /api/business/formulaires/{fid}/champs/{cid}
    /**
 * Supprimer un champ
 *
 * @group Business Champs
 *
 * @authenticated
 *
 * @urlParam fid string required ID formulaire
 * @urlParam cid string required ID champ
 *
 * @response 200 {
 *   "success": true,
 *   "message": "Champ supprimé"
 * }
 *
 * @response 404 {
 *   "success": false,
 *   "message": "Champ introuvable"
 * }
 */
    public function destroy(Request $request, string $fid, string $cid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $rows = DB::table('champs_formulaire')
            ->where('id_champ_formulaire', $cid)
            ->where('formulaire_id', $fid)
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Champ introuvable'], 404);
        }

        // Supprimer aussi les paramètres liés
        DB::table('parametres_champs')->where('champ_id', $cid)->delete();

        return response()->json(['success' => true, 'message' => 'Champ supprimé']);
    }

    // PUT /api/business/formulaires/{fid}/champs/ordre
    /**
 * Réordonner les champs d’un formulaire
 *
 * @group Business Champs
 *
 * @authenticated
 *
 * @urlParam fid string required ID formulaire
 *
 * @bodyParam ordre array required Liste des champs avec leur position
 * @bodyParam ordre[].id string required ID du champ
 * @bodyParam ordre[].position integer required Nouvelle position
 *
 * @response 200 {
 *   "success": true,
 *   "message": "Ordre des champs mis à jour",
 *   "data": [
 *     {
 *       "id_champ_formulaire": "uuid",
 *       "ordre": 0
 *     }
 *   ]
 * }
 */
    public function reordonner(Request $request, string $fid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $request->validate([
            'ordre'            => 'required|array|min:1',
            'ordre.*.id'       => 'required|uuid',
            'ordre.*.position' => 'required|integer|min:0',
        ]);

        foreach ($request->ordre as $item) {
            DB::table('champs_formulaire')
                ->where('id_champ_formulaire', $item['id'])
                ->where('formulaire_id', $fid)
                ->update([
                    'ordre'      => $item['position'],
                    'updated_at' => now(),
                ]);
        }

        $champs = DB::table('champs_formulaire')
            ->where('formulaire_id', $fid)
            ->orderBy('ordre')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Ordre des champs mis à jour',
            'data'    => $champs,
        ]);
    }

    // PUT /api/business/champs/{cid}/parametres
    /**
 * Mettre à jour les paramètres d’un champ
 *
 * @group Business Champs
 *
 * @authenticated
 *
 * @urlParam cid string required ID du champ
 *
 * @bodyParam rendre_facultatif boolean
 * @bodyParam rendre_obligatoire boolean
 * @bodyParam gestion_appelite boolean
 *
 * @response 200 {
 *   "success": true,
 *   "message": "Paramètres du champ mis à jour",
 *   "data": {
 *     "champ_id": "uuid",
 *     "rendre_facultatif": false,
 *     "rendre_obligatoire": true,
 *     "gestion_appelite": false
 *   }
 * }
 *
 * @response 404 {
 *   "success": false,
 *   "message": "Champ introuvable"
 * }
 */
    public function parametres(Request $request, string $cid)
    {
        $business = $request->attributes->get('business');

        // Vérifier que ce champ appartient à une mission du business
        $champ = DB::table('champs_formulaire as cf')
            ->join('formulaires as f', 'cf.formulaire_id', '=', 'f.id_formulaire')
            ->join('missions as m', 'f.mission_id', '=', 'm.id_mission')
            ->where('cf.id_champ_formulaire', $cid)
            ->where('m.created_by', $business->id_business)
            ->select('cf.id_champ_formulaire')
            ->first();

        if (! $champ) {
            return response()->json(['success' => false, 'message' => 'Champ introuvable'], 404);
        }

        $validated = $request->validate([
            'rendre_facultatif'  => 'boolean',
            'rendre_obligatoire' => 'boolean',
            'gestion_appelite'   => 'boolean',
        ]);

        $existing = DB::table('parametres_champs')->where('champ_id', $cid)->first();

        if ($existing) {
            $validated['updated_at'] = now();
            DB::table('parametres_champs')->where('champ_id', $cid)->update($validated);
        } else {
            DB::table('parametres_champs')->insert(array_merge($validated, [
                'id_param_champs' => (string) Str::uuid(),
                'champ_id'        => $cid,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]));
        }

        return response()->json([
            'success' => true,
            'message' => 'Paramètres du champ mis à jour',
            'data'    => DB::table('parametres_champs')->where('champ_id', $cid)->first(),
        ]);
    }
}
