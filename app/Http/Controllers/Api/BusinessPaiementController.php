<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessPaiementController extends Controller
{
    private function getMissionOrFail(string $missionId, string $businessId)
    {
        $mission = DB::table('missions')
            ->where('id_mission', $missionId)
            ->where('created_by', $businessId)
            ->first();

        if (! $mission) {
            abort(404, 'Mission introuvable');
        }

        return $mission;
    }

    // POST /api/business/missions/{id}/agents/{aid}/payer
    public function payerAgent(Request $request, string $id, string $aid)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'montant'            => 'required|numeric|min:1',
            'provider'           => 'required|in:wave,orange,mtn,moov,visa',
            'reference_paiement' => 'nullable|string|max:100',
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
                DB::table('wallets')
                    ->where('id_wallet', $wallet->id_wallet)
                    ->update([
                        'solde'      => DB::raw('solde + ' . (float) $validated['montant']),
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
    public function payerTous(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $validated = $request->validate([
            'provider'           => 'required|in:wave,orange,mtn,moov,visa',
            'reference_paiement' => 'nullable|string|max:100',
        ]);

        // Agents actifs avec rémunération définie et pas encore payés
        $agents = DB::table('mission_agents')
            ->where('mission_id', $id)
            ->whereIn('statut', ['accepte', 'actif'])
            ->whereNotNull('remuneration')
            ->where('remuneration', '>', 0)
            ->get();

        if ($agents->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Aucun agent éligible au paiement (rémunération non définie ou aucun agent actif)',
            ], 422);
        }

        $payes       = 0;
        $ignorés     = 0;
        $montantTotal = 0;

        DB::transaction(function () use ($agents, $id, $business, $validated, &$payes, &$ignorés, &$montantTotal) {
            foreach ($agents as $agent) {
                // Ne pas payer deux fois la même mission
                $dejaPaye = DB::table('paiements_agents')
                    ->where('mission_id', $id)
                    ->where('agent_id', $agent->agent_id)
                    ->where('statut', 'complete')
                    ->exists();

                if ($dejaPaye) {
                    $ignorés++;
                    continue;
                }

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
                    DB::table('wallets')
                        ->where('id_wallet', $wallet->id_wallet)
                        ->update([
                            'solde'      => DB::raw('solde + ' . (float) $agent->remuneration),
                            'updated_at' => now(),
                        ]);

                    DB::table('transactions')->insert([
                        'id_transaction' => (string) Str::uuid(),
                        'wallet_id'      => $wallet->id_wallet,
                        'mission_id'     => $id,
                        'type'           => 'credit',
                        'montant'        => $agent->remuneration,
                        'description'    => 'Paiement groupé mission',
                        'statut'         => 'complete',
                        'created_at'     => now(),
                        'updated_at'     => now(),
                    ]);
                }

                $payes++;
                $montantTotal += $agent->remuneration;
            }
        });

        return response()->json([
            'success' => true,
            'message' => "{$payes} agent(s) payé(s). {$ignorés} ignoré(s) (déjà payés).",
            'data'    => [
                'agents_payes'  => $payes,
                'agents_ignores'=> $ignorés,
                'montant_total' => $montantTotal,
            ],
        ]);
    }

    // GET /api/business/missions/{id}/paiements
    public function historique(Request $request, string $id)
    {
        $business = $request->attributes->get('business');
        $this->getMissionOrFail($id, $business->id_business);

        $query = DB::table('paiements_agents as p')
            ->join('agents as a', 'p.agent_id', '=', 'a.id_agent')
            ->where('p.mission_id', $id)
            ->select(
                'p.id_paiement',
                'p.montant',
                'p.statut',
                'p.provider',
                'p.reference_paiement',
                'p.created_at as date_paiement',
                'a.id_agent',
                'a.name_agent',
                'a.lastname_agent',
                'a.phone_agent',
                'a.email_agent'
            );

        if ($request->filled('statut')) {
            $query->where('p.statut', $request->statut);
        }

        $paiements = $query->orderByDesc('p.created_at')->paginate(20);

        $totalPaye = DB::table('paiements_agents')
            ->where('mission_id', $id)
            ->where('statut', 'complete')
            ->sum('montant');

        return response()->json([
            'success' => true,
            'data'    => $paiements,
            'meta'    => [
                'total_paye' => (float) $totalPaye,
            ],
        ]);
    }
}
