<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// ─────────────────────────────────────────────
// BusinessReponseController
// ─────────────────────────────────────────────
class BusinessReponseController extends Controller
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

    // GET /api/business/missions/{id}/reponses
    /**
     * Lister les réponses d'une mission
     *
     * Récupère toutes les réponses associées à une mission.
     *
     * @group Business Réponses
     * @authenticated
     *
     * @urlParam id string required ID de la mission. Example: 8f3a-uuid
     *
     * @queryParam statut string Filtrer par statut. Example: valide
     * @queryParam agent_id string Filtrer par agent. Example: uuid-agent
     * @queryParam formulaire_id string Filtrer par formulaire. Example: uuid-form
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "data": [
     *       {
     *         "id_reponse": "uuid",
     *         "statut": "valide",
     *         "nom_formulaire": "Enquête terrain",
     *         "name_agent": "Yapi",
     *         "lastname_agent": "Theo"
     *       }
     *     ]
     *   }
     * }
     */
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $query = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->select(
                'r.id_reponse',
                'r.donnees',
                'r.longitude',
                'r.latitude',
                'r.statut',
                'r.submitted_at',
                'r.created_at',
                'a.name_agent',
                'a.lastname_agent',
                'a.phone_agent',
                'f.nom as nom_formulaire'
            );

        if ($request->has('statut')) {
            $query->where('r.statut', $request->statut);
        }

        if ($request->has('agent_id')) {
            $query->where('r.agent_id', $request->agent_id);
        }

        if ($request->has('formulaire_id')) {
            $query->where('r.formulaire_id', $request->formulaire_id);
        }

        $reponses = $query->orderByDesc('r.submitted_at')->paginate(20);

        return response()->json(['success' => true, 'data' => $reponses]);
    }

    // GET /api/business/missions/{id}/reponses/{rid}
    /**
     * Détail d'une réponse
     *
     * @group Business Réponses
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam rid string required ID réponse
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_reponse": "uuid",
     *     "statut": "soumis",
     *     "donnees": {
     *       "nom": "Jean",
     *       "age": 25
     *     }
     *   }
     * }
     */
    public function show(Request $request, $id, $rid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponse = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.id_reponse', $rid)
            ->where('r.mission_id', $id)
            ->select('r.*', 'a.name_agent', 'a.lastname_agent', 'a.email_agent', 'a.phone_agent', 'a.image_agent', 'f.nom as nom_formulaire')
            ->first();

        if (! $reponse) {
            return response()->json(['success' => false, 'message' => 'Réponse introuvable'], 404);
        }

        // Décoder les données JSON
        $reponse->donnees = json_decode($reponse->donnees);

        return response()->json(['success' => true, 'data' => $reponse]);
    }

    // PUT /api/business/missions/{id}/reponses/{rid}/valider
    /**
     * Valider une réponse
     *
     * Passe une réponse au statut "valide".
     *
     * @group Business Réponses
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam rid string required ID réponse
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Réponse validée"
     * }
     */
    public function valider(Request $request, $id, $rid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponse = DB::table('reponses')
            ->where('id_reponse', $rid)
            ->where('mission_id', $id)
            ->where('statut', 'soumis')
            ->first();

        if (! $reponse) {
            return response()->json(['success' => false, 'message' => 'Réponse introuvable ou déjà traitée'], 404);
        }

        DB::table('reponses')->where('id_reponse', $rid)->update([
            'statut'     => 'valide',
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Réponse validée']);
    }

    // PUT /api/business/missions/{id}/reponses/{rid}/rejeter
    /**
     * Rejeter une réponse
     *
     * Passe une réponse au statut "rejete".
     *
     * @group Business Réponses
     * @authenticated
     *
     * @urlParam id string required ID mission
     * @urlParam rid string required ID réponse
     *
     * @bodyParam motif string Motif du rejet. Example: Données incorrectes
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Réponse rejetée"
     * }
     */
    public function rejeter(Request $request, $id, $rid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $request->validate(['motif' => 'nullable|string|max:500']);

        $reponse = DB::table('reponses')
            ->where('id_reponse', $rid)
            ->where('mission_id', $id)
            ->where('statut', 'soumis')
            ->first();

        if (! $reponse) {
            return response()->json(['success' => false, 'message' => 'Réponse introuvable ou déjà traitée'], 404);
        }

        DB::table('reponses')->where('id_reponse', $rid)->update([
            'statut'     => 'rejete',
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Réponse rejetée']);
    }

    // GET /api/business/missions/{id}/reponses/export
    /**
     * Exporter les réponses en CSV
     *
     * Télécharge toutes les réponses d'une mission au format CSV.
     *
     * @group Business Réponses
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 scenario="Succès" {
     *   "file": "reponses_mission.csv"
     * }
     */
    public function export(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponses = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->select('r.*', 'a.name_agent', 'a.lastname_agent', 'a.phone_agent', 'f.nom as nom_formulaire')
            ->orderByDesc('r.submitted_at')
            ->get();

        // Construire CSV
        $csv  = "ID Reponse,Agent,Telephone,Formulaire,Statut,Date Soumission,Latitude,Longitude,Donnees\n";
        foreach ($reponses as $r) {
            $donnees = json_decode($r->donnees, true);
            $donneesStr = is_array($donnees) ? implode(' | ', array_map(fn($k, $v) => "$k: $v", array_keys($donnees), $donnees)) : '';
            $csv .= implode(',', [
                $r->id_reponse,
                "\"{$r->name_agent} {$r->lastname_agent}\"",
                $r->phone_agent,
                "\"{$r->nom_formulaire}\"",
                $r->statut,
                $r->submitted_at,
                $r->latitude ?? '',
                $r->longitude ?? '',
                "\"" . str_replace('"', '""', $donneesStr) . "\"",
            ]) . "\n";
        }

        $mission = DB::table('missions')->where('id_mission', $id)->first();
        $filename = 'reponses_' . Str::slug($mission->nom_application) . '_' . date('Ymd') . '.csv';

        return response($csv, 200, [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }
}
