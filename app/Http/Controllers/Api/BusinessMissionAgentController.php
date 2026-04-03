<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessMissionAgentController extends Controller
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

    // GET /api/business/missions/{id}/agents
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $query = DB::table('mission_agents as ma')
            ->join('agents as a', 'ma.agent_id', '=', 'a.id_agent')
            ->leftJoin('city as c', 'a.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'a.country_id', '=', 'co.id_country')
            ->where('ma.mission_id', $id)
            ->select(
                'ma.id_mission_agent','ma.statut as statut_mission','ma.remuneration',
                'ma.objectif_agent','ma.date_acceptation',
                'a.id_agent','a.name_agent','a.lastname_agent','a.email_agent',
                'a.phone_agent','a.image_agent','a.profession_agent',
                'c.name_city','co.name as name_country'
            );

        if ($request->has('statut')) {
            $query->where('ma.statut', $request->statut);
        }

        $agents = $query->orderByDesc('ma.created_at')->paginate(20);

        // Ajouter nb_reponses pour chaque agent
        $agents->getCollection()->transform(function ($agent) use ($id) {
            $agent->nb_reponses = DB::table('reponses')
                ->where('mission_id', $id)
                ->where('agent_id', $agent->id_agent)
                ->count();
            return $agent;
        });

        return response()->json(['success' => true, 'data' => $agents]);
    }

    // GET /api/business/missions/{id}/agents/{aid}
    public function show(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $agent = DB::table('mission_agents as ma')
            ->join('agents as a', 'ma.agent_id', '=', 'a.id_agent')
            ->leftJoin('diplomes as d', 'a.diplome_id', '=', 'd.id_diplome')
            ->leftJoin('etudes as e', 'a.etude_id', '=', 'e.id_etude')
            ->leftJoin('city as c', 'a.city_id', '=', 'c.id_city')
            ->leftJoin('country as co', 'a.country_id', '=', 'co.id_country')
            ->leftJoin('commune as cm', 'a.commune_id', '=', 'cm.id_commune')
            ->where('ma.mission_id', $id)
            ->where('ma.agent_id', $aid)
            ->select(
                'ma.*',
                'a.id_agent','a.genre_agent','a.name_agent','a.lastname_agent',
                'a.email_agent','a.phone_agent','a.image_agent','a.profession_agent',
                'a.experience_mission_agent','a.permis_agent',
                'd.name_diplome','e.name_etude',
                'c.name_city','co.name as name_country','cm.name_commune'
            )
            ->first();

        if (! $agent) {
            return response()->json(['success' => false, 'message' => 'Agent introuvable dans cette mission'], 404);
        }

        // Langues de l'agent
        $agent->langues = DB::table('langue_agent as la')
            ->join('langues as l', 'la.langue_id', '=', 'l.id_langue')
            ->where('la.agent_id', $aid)
            ->select('l.name_langue')
            ->get();

        return response()->json(['success' => true, 'data' => $agent]);
    }

    // POST /api/business/missions/{id}/agents/inviter
    public function inviter(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'agent_ids'     => 'required|array|min:1',
            'agent_ids.*'   => 'uuid|exists:agents,id_agent',
            'remuneration'  => 'nullable|numeric|min:0',
            'objectif_agent'=> 'nullable|integer|min:1',
        ]);

        $invites  = 0;
        $skipped  = 0;

        foreach ($validated['agent_ids'] as $agentId) {
            $exists = DB::table('mission_agents')
                ->where('mission_id', $id)
                ->where('agent_id', $agentId)
                ->exists();

            if ($exists) {
                $skipped++;
                continue;
            }

            DB::table('mission_agents')->insert([
                'id_mission_agent' => (string) Str::uuid(),
                'mission_id'       => $id,
                'agent_id'         => $agentId,
                'statut'           => 'invite',
                'remuneration'     => $validated['remuneration'] ?? null,
                'objectif_agent'   => $validated['objectif_agent'] ?? null,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);

            $invites++;
        }

        return response()->json([
            'success' => true,
            'message' => "{$invites} agent(s) invité(s). {$skipped} déjà dans la mission.",
        ]);
    }

    // DELETE /api/business/missions/{id}/agents/{aid}
    public function retirer(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->whereIn('statut', ['invite', 'refuse'])
            ->delete();

        if (! $rows) {
            return response()->json(['success' => false, 'message' => 'Impossible de retirer cet agent (actif ou inexistant)'], 422);
        }

        return response()->json(['success' => true, 'message' => 'Agent retiré de la mission']);
    }

    // PUT /api/business/missions/{id}/agents/{aid}/objectif
    public function objectif(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'objectif_agent' => 'required|integer|min:1',
            'remuneration'   => 'nullable|numeric|min:0',
        ]);

        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Agent introuvable dans cette mission'], 404);
        }

        $update = ['updated_at' => now(), 'objectif_agent' => $validated['objectif_agent']];
        if (isset($validated['remuneration'])) {
            $update['remuneration'] = $validated['remuneration'];
        }

        DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->update($update);

        return response()->json([
            'success' => true,
            'message' => 'Objectif mis à jour',
            'data'    => DB::table('mission_agents')->where('mission_id', $id)->where('agent_id', $aid)->first(),
        ]);
    }

    // GET /api/business/missions/{id}/agents/{aid}/statistiques
    public function statistiques(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Agent introuvable dans cette mission'], 404);
        }

        $total    = DB::table('reponses')->where('mission_id', $id)->where('agent_id', $aid)->count();
        $validees = DB::table('reponses')->where('mission_id', $id)->where('agent_id', $aid)->where('statut', 'valide')->count();
        $rejetees = DB::table('reponses')->where('mission_id', $id)->where('agent_id', $aid)->where('statut', 'rejete')->count();

        $objectif    = $missionAgent->objectif_agent ?? 0;
        $progression = $objectif > 0 ? round(($total / $objectif) * 100, 2) : 0;

        $parJour = DB::table('reponses')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->groupBy(DB::raw('DATE(submitted_at)'))
            ->select(DB::raw('DATE(submitted_at) as date'), DB::raw('COUNT(*) as nb'))
            ->orderBy('date')
            ->get();

        return response()->json([
            'success' => true,
            'data'    => [
                'agent_id'          => $aid,
                'statut'            => $missionAgent->statut,
                'objectif_agent'    => $objectif,
                'remuneration'      => $missionAgent->remuneration,
                'total_reponses'    => $total,
                'reponses_validees' => $validees,
                'reponses_rejetees' => $rejetees,
                'en_attente'        => $total - $validees - $rejetees,
                'progression'       => $progression . '%',
                'stats_par_jour'    => $parJour,
            ],
        ]);
    }

    // GET /api/business/missions/{id}/agents/{aid}/reponses
    public function reponses(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponses = DB::table('reponses as r')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->where('r.agent_id', $aid)
            ->select('r.*', 'f.nom as nom_formulaire')
            ->orderByDesc('r.submitted_at')
            ->paginate(20);

        return response()->json(['success' => true, 'data' => $reponses]);
    }
}
