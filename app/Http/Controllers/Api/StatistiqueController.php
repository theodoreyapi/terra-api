<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Reponse;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistiqueController extends Controller
{
    /**
     * Dashboard global des statistiques
     *
     * Retourne les statistiques globales de la plateforme.
     *
     * @group Statistiques
     * @authenticated
     *
     * @response 200 {
     *   "missions_total": 120,
     *   "missions_actives": 45,
     *   "reponses_total": 5600,
     *   "reponses_aujourd_hui": 120,
     *   "agents_total": 300,
     *   "missions_recentes": [],
     *   "performance_mensuelle": []
     * }
     */
    public function dashboard(): JsonResponse
    {
        $stats = [
            'missions_total' => Mission::count(),
            'missions_actives' => Mission::where('statut', 'actif')->count(),
            'reponses_total' => Reponse::count(),
            'reponses_aujourd_hui' => Reponse::whereDate('created_at', today())->count(),
            'agents_total' => User::where('role', 'agent')->count(),
            'missions_recentes' => Mission::latest()->take(5)->get(),
            'performance_mensuelle' => Reponse::selectRaw('MONTH(created_at) as mois, COUNT(*) as total')
                ->whereYear('created_at', now()->year)
                ->groupBy('mois')
                ->get(),
        ];

        return response()->json($stats);
    }

    /**
     * Statistiques d'une mission
     *
     * Analyse complète des performances d'une mission spécifique.
     *
     * @group Statistiques
     * @authenticated
     *
     * @urlParam missionId string required ID de la mission
     *
     * @response 200 {
     *   "mission": {},
     *   "reponses_total": 250,
     *   "objectif_atteint": 75.5,
     *   "progression_par_jour": [],
     *   "top_agents": []
     * }
     *
     * @response 404 {
     *   "message": "Mission not found"
     * }
     */
    public function missionStats(string $missionId): JsonResponse
    {
        $mission = Mission::findOrFail($missionId);

        $stats = [
            'mission' => $mission,
            'reponses_total' => $mission->reponses()->count(),
            'objectif_atteint' => $mission->objectif_nombre ?
                ($mission->reponses()->count() / $mission->objectif_nombre) * 100 : 0,
            'progression_par_jour' => $mission->reponses()
                ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
                ->groupBy('date')
                ->orderBy('date', 'desc')
                ->get(),
            'top_agents' => $mission->reponses()
                ->select('agent_id', DB::raw('COUNT(*) as total'))
                ->with('agent:id,nom,prenoms')
                ->groupBy('agent_id')
                ->orderBy('total', 'desc')
                ->limit(10)
                ->get(),
        ];

        return response()->json($stats);
    }

    /**
     * Statistiques d'un agent
     *
     * Analyse des performances individuelles d’un agent.
     *
     * @group Statistiques
     * @authenticated
     *
     * @urlParam agentId string required ID de l'agent
     *
     * @response 200 {
     *   "agent": {},
     *   "reponses_total": 120,
     *   "reponses_validees": 100,
     *   "missions_actives": 5,
     *   "performance_7_jours": []
     * }
     */
    public function agentStats(string $agentId): JsonResponse
    {
        $agent = User::findOrFail($agentId);

        $stats = [
            'agent' => $agent,
            'reponses_total' => Reponse::where('agent_id', $agentId)->count(),
            'reponses_validees' => Reponse::where('agent_id', $agentId)
                ->where('statut', 'valide')->count(),
            'missions_actives' => Reponse::where('agent_id', $agentId)
                ->distinct('mission_id')->count('mission_id'),
            'performance_7_jours' => Reponse::where('agent_id', $agentId)
                ->where('created_at', '>=', now()->subDays(7))
                ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
                ->groupBy('date')
                ->get(),
        ];

        return response()->json($stats);
    }

    /**
     * Analyse de performance globale
     *
     * Fournit une vue globale des performances de la plateforme.
     *
     * @group Statistiques
     * @authenticated
     *
     * @response 200 {
     *   "missions_par_type": [],
     *   "reponses_par_statut": [],
     *   "taux_completion": 85.4
     * }
     */
    public function performance(): JsonResponse
    {
        $performance = [
            'missions_par_type' => Mission::select('type_mission', DB::raw('COUNT(*) as total'))
                ->groupBy('type_mission')
                ->get(),
            'reponses_par_statut' => Reponse::select('statut', DB::raw('COUNT(*) as total'))
                ->groupBy('statut')
                ->get(),
            'taux_completion' => Mission::where('statut', 'termine')->count() /
                max(Mission::count(), 1) * 100,
        ];

        return response()->json($performance);
    }
}
