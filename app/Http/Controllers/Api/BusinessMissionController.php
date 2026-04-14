<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessMissionController extends Controller
{
    // GET /api/business/missions
    /**
     * Liste des missions du business
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @queryParam statut string Filtrer par statut (brouillon, actif, termine). Example: actif
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "data": [
     *       {
     *         "id_mission": "uuid",
     *         "nom_application": "App X",
     *         "type_mission": "recensement",
     *         "statut": "actif",
     *         "pays": "Côte d'Ivoire",
     *         "ville": "Abidjan",
     *         "commune": "Cocody",
     *         "nb_agents": 20,
     *         "nb_reponses": 150
     *       }
     *     ]
     *   }
     * }
     */
    public function index(Request $request)
    {
        $business = $request->attributes->get('business');

        $query = DB::table('missions as m')
            ->leftJoin('country as co', 'm.country_id', '=', 'co.id_country')
            ->leftJoin('city as c', 'm.city_id', '=', 'c.id_city')
            ->leftJoin('commune as cm', 'm.commune_id', '=', 'cm.id_commune')
            ->where('m.created_by', $business->id_business)
            ->select('m.*', 'co.name as pays', 'c.name_city as ville', 'cm.name_commune as commune');

        if ($request->has('statut')) {
            $query->where('m.statut', $request->statut);
        }

        $missions = $query->orderByDesc('m.created_at')->paginate(15);

        // Ajouter stats rapides
        $missions->getCollection()->transform(function ($mission) {
            $mission->nb_agents  = DB::table('mission_agents')->where('mission_id', $mission->id_mission)->count();
            $mission->nb_reponses = DB::table('reponses')->where('mission_id', $mission->id_mission)->count();
            return $mission;
        });

        return response()->json(['success' => true, 'data' => $missions]);
    }

    // POST /api/business/missions
    /**
     * Créer une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @bodyParam type_mission string required Type de mission. Example: recensement
     * @bodyParam cible string required (entreprises, personnes)
     * @bodyParam nom_application string required Nom de l’application
     * @bodyParam logo_url string URL du logo
     * @bodyParam couleur_primaire string Code couleur HEX (#FFFFFF)
     * @bodyParam couleur_secondaire string Code couleur HEX (#000000)
     * @bodyParam dark_mode boolean Mode sombre
     * @bodyParam date_debut date Date début
     * @bodyParam date_fin date Date fin
     * @bodyParam country_id string UUID pays
     * @bodyParam city_id string UUID ville
     * @bodyParam commune_id string UUID commune
     * @bodyParam objectif_nombre integer Objectif nombre
     * @bodyParam objectif_duree integer Durée
     * @bodyParam objectif_unite string (jours, mois)
     * @bodyParam methode_api boolean API externe
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Mission créée en brouillon",
     *   "data": {
     *     "id_mission": "uuid",
     *     "statut": "brouillon"
     *   }
     * }
     */
    public function store(Request $request)
    {
        $business = $request->attributes->get('business');

        $validated = $request->validate([
            'type_mission'       => 'required|string|max:50',
            'cible'              => 'required|in:entreprises,personnes',
            'nom_application'    => 'required|string|max:255',
            'logo_url'           => 'nullable|url',
            'couleur_primaire'   => 'nullable|string|size:7',
            'couleur_secondaire' => 'nullable|string|size:7',
            'dark_mode'          => 'boolean',
            'date_debut'         => 'nullable|date',
            'date_fin'           => 'nullable|date|after_or_equal:date_debut',
            'country_id'         => 'nullable|uuid|exists:country,id_country',
            'city_id'            => 'nullable|uuid|exists:city,id_city',
            'commune_id'         => 'nullable|uuid|exists:commune,id_commune',
            'objectif_nombre'    => 'nullable|integer|min:1',
            'objectif_duree'     => 'nullable|integer|min:1',
            'objectif_unite'     => 'nullable|in:jours,mois',
            'methode_api'        => 'boolean',
        ]);

        $id = (string) Str::uuid();
        DB::table('missions')->insert([
            'id_mission'         => $id,
            'type_mission'       => $validated['type_mission'],
            'cible'              => $validated['cible'],
            'nom_application'    => $validated['nom_application'],
            'logo_url'           => $validated['logo_url'] ?? null,
            'couleur_primaire'   => $validated['couleur_primaire'] ?? null,
            'couleur_secondaire' => $validated['couleur_secondaire'] ?? null,
            'dark_mode'          => $validated['dark_mode'] ?? false,
            'date_debut'         => $validated['date_debut'] ?? null,
            'date_fin'           => $validated['date_fin'] ?? null,
            'country_id'         => $validated['country_id'] ?? null,
            'city_id'            => $validated['city_id'] ?? null,
            'commune_id'         => $validated['commune_id'] ?? null,
            'objectif_nombre'    => $validated['objectif_nombre'] ?? null,
            'objectif_duree'     => $validated['objectif_duree'] ?? null,
            'objectif_unite'     => $validated['objectif_unite'] ?? null,
            'methode_api'        => $validated['methode_api'] ?? false,
            'statut'             => 'brouillon',
            'created_by'         => $business->id_business,
            'created_at'         => now(),
            'updated_at'         => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mission créée en brouillon',
            'data'    => DB::table('missions')->where('id_mission', $id)->first(),
        ], 201);
    }

    // GET /api/business/missions/{id}
    /**
     * Détail d’une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_mission": "uuid",
     *     "nom_application": "App X",
     *     "statut": "actif",
     *     "formulaires": [],
     *     "plans": [],
     *     "modes_paiement": [],
     *     "nb_agents": 20,
     *     "nb_reponses": 150
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mission introuvable"
     * }
     */
    public function show(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions as m')
            ->leftJoin('country as co', 'm.country_id', '=', 'co.id_country')
            ->leftJoin('city as c', 'm.city_id', '=', 'c.id_city')
            ->leftJoin('commune as cm', 'm.commune_id', '=', 'cm.id_commune')
            ->where('m.id_mission', $id)
            ->where('m.created_by', $business->id_business)
            ->select('m.*', 'co.name as pays', 'c.name_city as ville', 'cm.name_commune as commune')
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable'], 404);
        }

        $mission->formulaires     = DB::table('formulaires')->where('mission_id', $id)->orderBy('ordre')->get();
        $mission->plans           = DB::table('plans')->where('mission_id', $id)->get();
        $mission->modes_paiement  = DB::table('modes_paiement')->where('mission_id', $id)->get();
        $mission->nb_agents       = DB::table('mission_agents')->where('mission_id', $id)->count();
        $mission->nb_reponses     = DB::table('reponses')->where('mission_id', $id)->count();

        return response()->json(['success' => true, 'data' => $mission]);
    }

    // PUT /api/business/missions/{id}
    /**
     * Mettre à jour une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mission mise à jour"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mission introuvable"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Impossible de modifier une mission terminée"
     * }
     */
    public function update(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions')
            ->where('id_mission', $id)
            ->where('created_by', $business->id_business)
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable'], 404);
        }

        if ($mission->statut === 'termine') {
            return response()->json(['success' => false, 'message' => 'Impossible de modifier une mission terminée'], 422);
        }

        $validated = $request->validate([
            'type_mission'       => 'sometimes|string|max:50',
            'cible'              => 'sometimes|in:entreprises,personnes',
            'nom_application'    => 'sometimes|string|max:255',
            'logo_url'           => 'nullable|url',
            'couleur_primaire'   => 'nullable|string|size:7',
            'couleur_secondaire' => 'nullable|string|size:7',
            'dark_mode'          => 'boolean',
            'date_debut'         => 'nullable|date',
            'date_fin'           => 'nullable|date',
            'country_id'         => 'nullable|uuid|exists:country,id_country',
            'city_id'            => 'nullable|uuid|exists:city,id_city',
            'commune_id'         => 'nullable|uuid|exists:commune,id_commune',
            'objectif_nombre'    => 'nullable|integer|min:1',
            'objectif_duree'     => 'nullable|integer|min:1',
            'objectif_unite'     => 'nullable|in:jours,mois',
            'methode_api'        => 'boolean',
        ]);

        $validated['updated_at'] = now();
        DB::table('missions')->where('id_mission', $id)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Mission mise à jour',
            'data'    => DB::table('missions')->where('id_mission', $id)->first(),
        ]);
    }

    // DELETE /api/business/missions/{id}
    /**
     * Supprimer une mission (brouillon uniquement)
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mission supprimée"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mission introuvable ou non supprimable (brouillon seulement)"
     * }
     */
    public function destroy(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions')
            ->where('id_mission', $id)
            ->where('created_by', $business->id_business)
            ->where('statut', 'brouillon')
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable ou non supprimable (brouillon seulement)'], 404);
        }

        DB::table('missions')->where('id_mission', $id)->delete();

        return response()->json(['success' => true, 'message' => 'Mission supprimée']);
    }

    // POST /api/business/missions/{id}/publier
    /**
     * Publier une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mission publiée et maintenant active"
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Veuillez ajouter au moins un formulaire avant de publier"
     * }
     */
    public function publier(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions')
            ->where('id_mission', $id)
            ->where('created_by', $business->id_business)
            ->where('statut', 'brouillon')
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable ou déjà publiée'], 404);
        }

        // Vérifications minimum
        $hasFormulaire = DB::table('formulaires')->where('mission_id', $id)->exists();
        if (! $hasFormulaire) {
            return response()->json(['success' => false, 'message' => 'Veuillez ajouter au moins un formulaire avant de publier'], 422);
        }

        DB::table('missions')->where('id_mission', $id)->update([
            'statut'     => 'actif',
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mission publiée et maintenant active',
            'data'    => DB::table('missions')->where('id_mission', $id)->first(),
        ]);
    }

    // POST /api/business/missions/{id}/terminer
    /**
     * Terminer une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Mission terminée"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mission introuvable ou non active"
     * }
     */
    public function terminer(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions')
            ->where('id_mission', $id)
            ->where('created_by', $business->id_business)
            ->where('statut', 'actif')
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable ou non active'], 404);
        }

        DB::table('missions')->where('id_mission', $id)->update([
            'statut'     => 'termine',
            'updated_at' => now(),
        ]);

        // Marquer agents actifs comme terminés
        DB::table('mission_agents')
            ->where('mission_id', $id)
            ->whereIn('statut', ['accepte', 'actif'])
            ->update(['statut' => 'termine', 'updated_at' => now()]);

        return response()->json([
            'success' => true,
            'message' => 'Mission terminée',
        ]);
    }

    // GET /api/business/missions/{id}/statistiques
    /**
     * Statistiques d’une mission
     *
     * @group Business Missions
     *
     * @authenticated
     *
     * @urlParam id string required ID mission
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "mission_id": "uuid",
     *     "nom_application": "App X",
     *     "statut": "actif",
     *     "objectif_total": 500,
     *     "reponses_soumises": 300,
     *     "reponses_validees": 250,
     *     "reponses_rejetees": 50,
     *     "en_attente": 0,
     *     "taux_completion": "60%",
     *     "agents_invites": 100,
     *     "agents_actifs": 60,
     *     "jours_restants": 10,
     *     "top_agents": [
     *       {
     *         "agent_id": "uuid",
     *         "name_agent": "Koffi",
     *         "lastname_agent": "Jean",
     *         "nb_reponses": 50
     *       }
     *     ],
     *     "stats_7_jours": [
     *       {
     *         "date": "2026-01-01",
     *         "nb": 40
     *       }
     *     ]
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Mission introuvable"
     * }
     */
    public function statistiques(Request $request, $id)
    {
        $business = $request->attributes->get('business');

        $mission = DB::table('missions')
            ->where('id_mission', $id)
            ->where('created_by', $business->id_business)
            ->first();

        if (! $mission) {
            return response()->json(['success' => false, 'message' => 'Mission introuvable'], 404);
        }

        $totalReponses = DB::table('reponses')->where('mission_id', $id)->count();
        $validees      = DB::table('reponses')->where('mission_id', $id)->where('statut', 'valide')->count();
        $rejetees      = DB::table('reponses')->where('mission_id', $id)->where('statut', 'rejete')->count();
        $agentsActifs  = DB::table('mission_agents')->where('mission_id', $id)->whereIn('statut', ['accepte', 'actif'])->count();
        $agentsInvites = DB::table('mission_agents')->where('mission_id', $id)->count();

        $objectif   = $mission->objectif_nombre ?? 0;
        $progression = $objectif > 0 ? round(($totalReponses / $objectif) * 100, 2) : 0;

        // Jours restants
        $joursRestants = null;
        if ($mission->date_fin) {
            $joursRestants = max(0, now()->diffInDays($mission->date_fin, false));
        }

        // Top agents
        $topAgents = DB::table('reponses as r')
            ->join('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->where('r.mission_id', $id)
            ->groupBy('r.agent_id', 'a.name_agent', 'a.lastname_agent')
            ->select('r.agent_id', 'a.name_agent', 'a.lastname_agent', DB::raw('COUNT(*) as nb_reponses'))
            ->orderByDesc('nb_reponses')
            ->limit(5)
            ->get();

        // Stats par jour (7 derniers jours)
        $statsByDay = DB::table('reponses')
            ->where('mission_id', $id)
            ->where('submitted_at', '>=', now()->subDays(7))
            ->groupBy(DB::raw('DATE(submitted_at)'))
            ->select(DB::raw('DATE(submitted_at) as date'), DB::raw('COUNT(*) as nb'))
            ->orderBy('date')
            ->get();

        return response()->json([
            'success' => true,
            'data'    => [
                'mission_id'         => $id,
                'nom_application'    => $mission->nom_application,
                'statut'             => $mission->statut,
                'objectif_total'     => $objectif,
                'reponses_soumises'  => $totalReponses,
                'reponses_validees'  => $validees,
                'reponses_rejetees'  => $rejetees,
                'en_attente'         => $totalReponses - $validees - $rejetees,
                'taux_completion'    => $progression . '%',
                'agents_invites'     => $agentsInvites,
                'agents_actifs'      => $agentsActifs,
                'jours_restants'     => $joursRestants,
                'top_agents'         => $topAgents,
                'stats_7_jours'      => $statsByDay,
            ],
        ]);
    }
}
