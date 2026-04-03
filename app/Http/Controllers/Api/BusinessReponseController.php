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
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $query = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->select(
                'r.id_reponse','r.donnees','r.longitude','r.latitude',
                'r.statut','r.submitted_at','r.created_at',
                'a.name_agent','a.lastname_agent','a.phone_agent',
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
    public function show(Request $request, $id, $rid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponse = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.id_reponse', $rid)
            ->where('r.mission_id', $id)
            ->select('r.*', 'a.name_agent','a.lastname_agent','a.email_agent','a.phone_agent','a.image_agent', 'f.nom as nom_formulaire')
            ->first();

        if (! $reponse) {
            return response()->json(['success' => false, 'message' => 'Réponse introuvable'], 404);
        }

        // Décoder les données JSON
        $reponse->donnees = json_decode($reponse->donnees);

        return response()->json(['success' => true, 'data' => $reponse]);
    }

    // PUT /api/business/missions/{id}/reponses/{rid}/valider
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
    public function export(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $reponses = DB::table('reponses as r')
            ->leftJoin('agents as a', 'r.agent_id', '=', 'a.id_agent')
            ->leftJoin('formulaires as f', 'r.formulaire_id', '=', 'f.id_formulaire')
            ->where('r.mission_id', $id)
            ->select('r.*', 'a.name_agent','a.lastname_agent','a.phone_agent','f.nom as nom_formulaire')
            ->orderByDesc('r.submitted_at')
            ->get();

        // Construire CSV
        $csv  = "ID Reponse,Agent,Telephone,Formulaire,Statut,Date Soumission,Latitude,Longitude,Donnees\n";
        foreach ($reponses as $r) {
            $donnees = json_decode($r->donnees, true);
            $donneesStr = is_array($donnees) ? implode(' | ', array_map(fn($k,$v) => "$k: $v", array_keys($donnees), $donnees)) : '';
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

// ─────────────────────────────────────────────
// BusinessPlanController
// ─────────────────────────────────────────────
class BusinessPlanController extends Controller
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

    // GET /api/business/missions/{id}/plans
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $plans = DB::table('plans')->where('mission_id', $id)->get();
        return response()->json(['success' => true, 'data' => $plans]);
    }

    // POST /api/business/missions/{id}/plans
    public function store(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'montant'      => 'required|numeric|min:0',
            'duree'        => 'required|integer|min:1',
            'unite_duree'  => 'required|in:jours,mois,annees',
        ]);

        $pid = (string) Str::uuid();
        DB::table('plans')->insert([
            'id_plan'     => $pid,
            'montant'     => $validated['montant'],
            'duree'       => $validated['duree'],
            'unite_duree' => $validated['unite_duree'],
            'mission_id'  => $id,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Plan créé',
            'data'    => DB::table('plans')->where('id_plan', $pid)->first(),
        ], 201);
    }

    // PUT /api/business/missions/{id}/plans/{pid}
    public function update(Request $request, $id, $pid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $plan = DB::table('plans')->where('id_plan', $pid)->where('mission_id', $id)->first();
        if (! $plan) return response()->json(['success' => false, 'message' => 'Plan introuvable'], 404);

        $validated = $request->validate([
            'montant'     => 'sometimes|numeric|min:0',
            'duree'       => 'sometimes|integer|min:1',
            'unite_duree' => 'sometimes|in:jours,mois,annees',
        ]);

        $validated['updated_at'] = now();
        DB::table('plans')->where('id_plan', $pid)->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Plan mis à jour',
            'data'    => DB::table('plans')->where('id_plan', $pid)->first(),
        ]);
    }

    // DELETE /api/business/missions/{id}/plans/{pid}
    public function destroy(Request $request, $id, $pid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('plans')->where('id_plan', $pid)->where('mission_id', $id)->delete();
        if (! $rows) return response()->json(['success' => false, 'message' => 'Plan introuvable'], 404);

        return response()->json(['success' => true, 'message' => 'Plan supprimé']);
    }
}

// ─────────────────────────────────────────────
// BusinessModePaiementController
// ─────────────────────────────────────────────
class BusinessModePaiementController extends Controller
{
    private function getMissionOrFail($missionId, $businessId)
    {
        $mission = DB::table('missions')->where('id_mission', $missionId)->where('created_by', $businessId)->first();
        if (! $mission) abort(404, 'Mission introuvable');
        return $mission;
    }

    // GET /api/business/missions/{id}/modes-paiement
    public function index(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $modes = DB::table('modes_paiement')->where('mission_id', $id)->get();
        return response()->json(['success' => true, 'data' => $modes]);
    }

    // POST /api/business/missions/{id}/modes-paiement
    public function store(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'provider' => 'required|in:wave,orange,moov,mtn,visa',
            'actif'    => 'boolean',
        ]);

        // Éviter doublon même provider/mission
        $exists = DB::table('modes_paiement')
            ->where('mission_id', $id)
            ->where('provider', $validated['provider'])
            ->exists();

        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Ce mode de paiement existe déjà'], 422);
        }

        $mid = (string) Str::uuid();
        DB::table('modes_paiement')->insert([
            'id_mode_paiemnt' => $mid,
            'provider'        => $validated['provider'],
            'actif'           => $validated['actif'] ?? true,
            'mission_id'      => $id,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mode de paiement ajouté',
            'data'    => DB::table('modes_paiement')->where('id_mode_paiemnt', $mid)->first(),
        ], 201);
    }

    // DELETE /api/business/missions/{id}/modes-paiement/{mid}
    public function destroy(Request $request, $id, $mid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $rows = DB::table('modes_paiement')->where('id_mode_paiemnt', $mid)->where('mission_id', $id)->delete();
        if (! $rows) return response()->json(['success' => false, 'message' => 'Mode de paiement introuvable'], 404);

        return response()->json(['success' => true, 'message' => 'Mode de paiement supprimé']);
    }
}

// ─────────────────────────────────────────────
// BusinessPaiementController
// ─────────────────────────────────────────────
class BusinessPaiementController extends Controller
{
    private function getMissionOrFail($missionId, $businessId)
    {
        $mission = DB::table('missions')->where('id_mission', $missionId)->where('created_by', $businessId)->first();
        if (! $mission) abort(404, 'Mission introuvable');
        return $mission;
    }

    // POST /api/business/missions/{id}/agents/{aid}/payer
    public function payerAgent(Request $request, $id, $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'montant'             => 'required|numeric|min:1',
            'provider'            => 'required|in:wave,orange,mtn,moov,visa',
            'reference_paiement'  => 'nullable|string|max:100',
        ]);

        $missionAgent = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->where('agent_id', $aid)
            ->first();

        if (! $missionAgent) {
            return response()->json(['success' => false, 'message' => 'Agent introuvable dans cette mission'], 404);
        }

        $pId = (string) Str::uuid();
        DB::transaction(function () use ($pId, $validated, $id, $aid, $business) {
            DB::table('paiements_agents')->insert([
                'id_paiement'        => $pId,
                'montant'            => $validated['montant'],
                'statut'             => 'complete',
                'provider'           => $validated['provider'],
                'reference_paiement' => $validated['reference_paiement'] ?? null,
                'mission_id'         => $id,
                'agent_id'           => $aid,
                'business_id'        => $business->id_business,
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);

            // Créditer le wallet de l'agent
            $wallet = DB::table('wallets')->where('agent_id', $aid)->first();
            if ($wallet) {
                DB::table('wallets')->where('id_wallet', $wallet->id_wallet)->update([
                    'solde'      => $wallet->solde + $validated['montant'],
                    'updated_at' => now(),
                ]);

                DB::table('transactions')->insert([
                    'id_transaction' => (string) Str::uuid(),
                    'wallet_id'      => $wallet->id_wallet,
                    'mission_id'     => $id,
                    'type'           => 'credit',
                    'montant'        => $validated['montant'],
                    'description'    => 'Paiement mission',
                    'statut'         => 'complete',
                    'reference'      => $validated['reference_paiement'] ?? null,
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);
            }
        });

        return response()->json([
            'success' => true,
            'message' => 'Paiement effectué avec succès',
            'data'    => DB::table('paiements_agents')->where('id_paiement', $pId)->first(),
        ]);
    }

    // POST /api/business/missions/{id}/agents/payer-tous
    public function payerTous(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'provider'           => 'required|in:wave,orange,mtn,moov,visa',
            'reference_paiement' => 'nullable|string',
        ]);

        // Récupérer les agents actifs avec leur rémunération définie
        $agents = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->whereIn('statut', ['accepte', 'actif'])
            ->whereNotNull('remuneration')
            ->where('remuneration', '>', 0)
            ->get();

        if ($agents->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Aucun agent éligible au paiement'], 422);
        }

        $payes  = 0;
        $total  = 0;

        DB::transaction(function () use ($agents, $id, $business, $validated, &$payes, &$total) {
            foreach ($agents as $agent) {
                // Vérifier pas déjà payé pour cette mission
                $dejaPaye = DB::table('paiements_agents')
                    ->where('mission_id', $id)
                    ->where('agent_id', $agent->agent_id)
                    ->where('statut', 'complete')
                    ->exists();

                if ($dejaPaye) continue;

                DB::table('paiements_agents')->insert([
                    'id_paiement'        => (string) Str::uuid(),
                    'montant'            => $agent->remuneration,
                    'statut'             => 'complete',
                    'provider'           => $validated['provider'],
                    'reference_paiement' => $validated['reference_paiement'] ?? null,
                    'mission_id'         => $id,
                    'agent_id'           => $agent->agent_id,
                    'business_id'        => $business->id_business,
                    'created_at'         => now(),
                    'updated_at'         => now(),
                ]);

                $wallet = DB::table('wallets')->where('agent_id', $agent->agent_id)->first();
                if ($wallet) {
                    DB::table('wallets')->where('id_wallet', $wallet->id_wallet)->update([
                        'solde'      => $wallet->solde + $agent->remuneration,
                        'updated_at' => now(),
                    ]);

                    DB::table('transactions')->insert([
                        'id_transaction' => (string) Str::uuid(),
                        'wallet_id'      => $wallet->id_wallet,
                        'mission_id'     => $id,
                        'type'           => 'credit',
                        'montant'        => $agent->remuneration,
                        'description'    => 'Paiement mission groupé',
                        'statut'         => 'complete',
                        'created_at'     => now(),
                        'updated_at'     => now(),
                    ]);
                }

                $payes++;
                $total += $agent->remuneration;
            }
        });

        return response()->json([
            'success' => true,
            'message' => "{$payes} agent(s) payé(s)",
            'data'    => [
                'agents_payes' => $payes,
                'montant_total' => $total,
            ],
        ]);
    }

    // GET /api/business/missions/{id}/paiements
    public function historique(Request $request, $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $paiements = DB::table('paiements_agents as p')
            ->join('agents as a', 'p.agent_id', '=', 'a.id_agent')
            ->where('p.mission_id', $id)
            ->select(
                'p.*',
                'a.name_agent','a.lastname_agent','a.phone_agent','a.email_agent'
            )
            ->orderByDesc('p.created_at')
            ->paginate(20);

        $total = DB::table('paiements_agents')
            ->where('mission_id', $id)
            ->where('statut', 'complete')
            ->sum('montant');

        return response()->json([
            'success' => true,
            'data'    => $paiements,
            'meta'    => ['total_paye' => $total],
        ]);
    }
}
