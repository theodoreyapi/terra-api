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
                ->select('cf.*','pc.rendre_facultatif','pc.rendre_obligatoire','pc.gestion_appelite')
                ->get();
        }

        return response()->json(['success' => true, 'data' => $formulaires]);
    }

    // POST /api/business/missions/{id}/formulaires
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

// ─────────────────────────────────────────────
// BusinessChampController
// ─────────────────────────────────────────────
class BusinessChampController extends Controller
{
    private function getFormulaireOrFail($formulaireId, $businessId)
    {
        $formulaire = DB::table('formulaires as f')
            ->join('missions as m', 'f.mission_id', '=', 'm.id_mission')
            ->where('f.id_formulaire', $formulaireId)
            ->where('m.created_by', $businessId)
            ->first();

        if (! $formulaire) abort(404, 'Formulaire introuvable');
        return $formulaire;
    }

    // POST /api/business/formulaires/{fid}/champs
    public function store(Request $request, $fid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $validated = $request->validate([
            'type_champ'   => 'required|string|max:50',
            'label'        => 'required|string|max:255',
            'obligatoire'  => 'boolean',
            'ordre'        => 'nullable|integer',
            'options'      => 'nullable|array',
            'jours_options'  => 'nullable|array',
            'mois_options'   => 'nullable|array',
            'annee_options'  => 'nullable|array',
        ]);

        if (! isset($validated['ordre'])) {
            $maxOrdre = DB::table('champs_formulaire')->where('formulaire_id', $fid)->max('ordre');
            $validated['ordre'] = ($maxOrdre ?? -1) + 1;
        }

        $cId = (string) Str::uuid();
        DB::table('champs_formulaire')->insert([
            'id_champ_formulaire' => $cId,
            'formulaire_id'       => $fid,
            'type_champ'          => $validated['type_champ'],
            'label'               => $validated['label'],
            'obligatoire'         => $validated['obligatoire'] ?? false,
            'ordre'               => $validated['ordre'],
            'options'             => isset($validated['options']) ? json_encode($validated['options']) : null,
            'jours_options'       => isset($validated['jours_options']) ? json_encode($validated['jours_options']) : null,
            'mois_options'        => isset($validated['mois_options']) ? json_encode($validated['mois_options']) : null,
            'annee_options'       => isset($validated['annee_options']) ? json_encode($validated['annee_options']) : null,
            'created_at'          => now(),
            'updated_at'          => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Champ ajouté',
            'data'    => DB::table('champs_formulaire')->where('id_champ_formulaire', $cId)->first(),
        ], 201);
    }

    // PUT /api/business/formulaires/{fid}/champs/{cid}
    public function update(Request $request, $fid, $cid)
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
            'ordre'        => 'sometimes|integer',
            'options'      => 'nullable|array',
            'jours_options'  => 'nullable|array',
            'mois_options'   => 'nullable|array',
            'annee_options'  => 'nullable|array',
        ]);

        // Encode JSON fields
        foreach (['options','jours_options','mois_options','annee_options'] as $jsonField) {
            if (isset($validated[$jsonField])) {
                $validated[$jsonField] = json_encode($validated[$jsonField]);
            }
        }

        $validated['updated_at'] = now();
        DB::table('champs_formulaire')->where('id_champ_formulaire', $cid)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Champ mis à jour',
            'data'    => DB::table('champs_formulaire')->where('id_champ_formulaire', $cid)->first(),
        ]);
    }

    // DELETE /api/business/formulaires/{fid}/champs/{cid}
    public function destroy(Request $request, $fid, $cid)
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

        return response()->json(['success' => true, 'message' => 'Champ supprimé']);
    }

    // PUT /api/business/formulaires/{fid}/champs/ordre
    public function reordonner(Request $request, $fid)
    {
        $business = $request->attributes->get('business');
        $this->getFormulaireOrFail($fid, $business->id_business);

        $request->validate([
            'ordre'            => 'required|array',
            'ordre.*.id'       => 'required|uuid',
            'ordre.*.position' => 'required|integer|min:0',
        ]);

        foreach ($request->ordre as $item) {
            DB::table('champs_formulaire')
                ->where('id_champ_formulaire', $item['id'])
                ->where('formulaire_id', $fid)
                ->update(['ordre' => $item['position'], 'updated_at' => now()]);
        }

        return response()->json(['success' => true, 'message' => 'Ordre mis à jour']);
    }

    // PUT /api/business/champs/{cid}/parametres
    public function parametres(Request $request, $cid)
    {
        $business = $request->attributes->get('business');

        // Vérifier que ce champ appartient bien à une mission du business
        $champ = DB::table('champs_formulaire as cf')
            ->join('formulaires as f', 'cf.formulaire_id', '=', 'f.id_formulaire')
            ->join('missions as m', 'f.mission_id', '=', 'm.id_mission')
            ->where('cf.id_champ_formulaire', $cid)
            ->where('m.created_by', $business->id_business)
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
            'message' => 'Paramètres mis à jour',
            'data'    => DB::table('parametres_champs')->where('champ_id', $cid)->first(),
        ]);
    }
}
