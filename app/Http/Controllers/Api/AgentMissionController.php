<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentMissionController extends Controller
{
    // GET /api/agent/missions
    // Liste les missions actives disponibles
    public function index(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $query = DB::table('missions as m')
            ->leftJoin('business as b', 'm.created_by', '=', 'b.id_business')
            ->leftJoin('country as co', 'm.country_id', '=', 'co.id_country')
            ->leftJoin('city as c', 'm.city_id', '=', 'c.id_city')
            ->leftJoin('commune as cm', 'm.commune_id', '=', 'cm.id_commune')
            ->where('m.statut', 'actif')
            ->select(
                'm.id_mission','m.type_mission','m.cible','m.nom_application',
                'm.logo_url','m.couleur_primaire','m.date_debut','m.date_fin',
                'm.objectif_nombre','m.statut',
                'b.entreprise_business','b.name_business',
                'co.name as pays', 'c.name_city as ville', 'cm.name_commune as commune'
            );

        if ($request->has('type')) {
            $query->where('m.type_mission', $request->type);
        }
        if ($request->has('country_id')) {
            $query->where('m.country_id', $request->country_id);
        }

        $missions = $query->orderByDesc('m.created_at')->paginate(15);

        return response()->json(['success' => true, 'data' => $missions]);
    }

    // GET /api/agent/missions/mes-missions
    public function mesMissions(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $missions = DB::table('mission_agents as ma')
            ->join('missions as m', 'ma.mission_id', '=', 'm.id_mission')
            ->leftJoin('business as b', 'm.created_by', '=', 'b.id_business')
            ->where('ma.agent_id', $agent->id_agent)
            ->select(
                'ma.id_mission_agent','ma.statut as statut_agent',
                'ma.remuneration','ma.objectif_agent','ma.date_acceptation',
                'm.id_mission','m.nom_application','m.type_mission','m.statut',
                'm.date_debut','m.date_fin','m.logo_url',
                'b.entreprise_business'
            )
            ->orderByDesc('ma.created_at')
            ->get();

        return response()->json(['success' => true, 'data' => $missions]);
    }

    // GET /api/agent/missions/{id}
    public function show(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $mission = DB::table('missions as m')
            ->leftJoin('business as b', 'm.created_by', '=', 'b.id_business')
            ->leftJoin('country as co', 'm.country_id', '=', 'co.id_country')
            ->leftJoin('city as c', 'm.city_id', '=', 'c.id_city')
            ->leftJoin('commune as cm', 'm.commune_id', '=', 'cm.id_commune')
            ->where('m.id_mission', $id)
            ->select('m.*', 'b.entreprise_business','b.name_business','b.description_business',
                'co.name as pays','c.name_city as ville','cm.name_commune as commune')
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable'], 404);
        }

        // Statut de l'agent pour cette mission
        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        $mission->mon_statut = $missionAgent ? $missionAgent->statut : null;

        // Formulaires
        $mission->formulaires = DB::table('formulaires')->where('mission_id', $id)->orderBy('ordre')->get();

        return response()->json(['success' => true, 'data' => $mission]);
    }

    // POST /api/agent/missions/{id}/rejoindre
    public function rejoindre(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $mission = DB::table('missions')->where('id_mission', $id)->where('statut', 'actif')->first();
        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable ou non active'], 404);
        }

        $exists = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->exists();

        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Vous êtes déjà dans cette mission'], 422);
        }

        $maId = (string) Str::uuid();
        DB::table('mission_agents')->insert([
            'id_mission_agent' => $maId,
            'mission_id'       => $id,
            'agent_id'         => $agent->id_agent,
            'statut'           => 'invite',
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Demande soumise. En attente de validation.',
            'data'    => DB::table('mission_agents')->where('id_mission_agent', $maId)->first(),
        ], 201);
    }

    // GET /api/agent/missions/{id}/formulaire
    public function formulaire(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        // Vérifier que l'agent est dans la mission
        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->whereIn('statut', ['accepte', 'actif'])
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Accès refusé à cette mission'], 403);
        }

        $formulaires = DB::table('formulaires')->where('mission_id', $id)->orderBy('ordre')->get();

        foreach ($formulaires as $formulaire) {
            $formulaire->champs = DB::table('champs_formulaire as cf')
                ->leftJoin('parametres_champs as pc', 'cf.id_champ_formulaire', '=', 'pc.champ_id')
                ->where('cf.formulaire_id', $formulaire->id_formulaire)
                ->orderBy('cf.ordre')
                ->select('cf.*', 'pc.rendre_facultatif','pc.rendre_obligatoire','pc.gestion_appelite')
                ->get();
        }

        return response()->json(['success' => true, 'data' => $formulaires]);
    }

    // POST /api/agent/missions/{id}/formulaire/soumettre
    public function soumettre(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->whereIn('statut', ['accepte', 'actif'])
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Accès refusé à cette mission'], 403);
        }

        $validated = $request->validate([
            'formulaire_id' => 'required|uuid|exists:formulaires,id_formulaire',
            'donnees'       => 'required|array',
            'longitude'     => 'nullable|string',
            'latitude'      => 'nullable|string',
        ]);

        // Vérifier que le formulaire appartient à la mission
        $formulaire = DB::table('formulaires')
            ->where('id_formulaire', $validated['formulaire_id'])
            ->where('mission_id', $id)
            ->first();

        if (! $formulaire) {
            return response()->json(['success' => false, 'message' => 'Formulaire invalide pour cette mission'], 422);
        }

        $reponseId = (string) Str::uuid();
        DB::table('reponses')->insert([
            'id_reponse'    => $reponseId,
            'mission_id'    => $id,
            'formulaire_id' => $validated['formulaire_id'],
            'agent_id'      => $agent->id_agent,
            'donnees'       => json_encode($validated['donnees']),
            'longitude'     => $validated['longitude'] ?? null,
            'latitude'      => $validated['latitude'] ?? null,
            'statut'        => 'soumis',
            'submitted_at'  => now(),
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        // Mettre à jour statut agent sur mission si première soumission
        if ($missionAgent->statut === 'accepte') {
            DB::table('mission_agents')
                ->where('id_mission_agent', $missionAgent->id_mission_agent)
                ->update(['statut' => 'actif', 'updated_at' => now()]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Réponse soumise avec succès',
            'data'    => [
                'id_reponse'   => $reponseId,
                'statut'       => 'soumis',
                'submitted_at' => now(),
            ],
        ], 201);
    }

    // GET /api/agent/missions/{id}/mes-reponses
    public function mesReponses(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $reponses = DB::table('reponses as r')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->where('r.agent_id', $agent->id_agent)
            ->select('r.*', 'f.nom as nom_formulaire')
            ->orderByDesc('r.submitted_at')
            ->paginate(20);

        return response()->json(['success' => true, 'data' => $reponses]);
    }

    // GET /api/agent/missions/{id}/statistiques
    public function statistiques(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Non inscrit à cette mission'], 403);
        }

        $totalReponses = DB::table('reponses')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->count();

        $validees = DB::table('reponses')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'valide')
            ->count();

        $rejetees = DB::table('reponses')
            ->where('mission_id', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'rejete')
            ->count();

        $objectif    = $missionAgent->objectif_agent ?? 0;
        $progression = $objectif > 0 ? round(($totalReponses / $objectif) * 100, 2) : 0;

        return response()->json([
            'success' => true,
            'data'    => [
                'mission_id'        => $id,
                'statut_agent'      => $missionAgent->statut,
                'remuneration'      => $missionAgent->remuneration,
                'objectif_agent'    => $objectif,
                'total_reponses'    => $totalReponses,
                'reponses_validees' => $validees,
                'reponses_rejetees' => $rejetees,
                'en_attente'        => $totalReponses - $validees - $rejetees,
                'progression'       => $progression . '%',
            ],
        ]);
    }
}
