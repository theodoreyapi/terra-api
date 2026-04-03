<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentWalletController extends Controller
{
    // GET /api/agent/wallet
    public function index(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        $totalGagne = DB::table('transactions')
            ->where('wallet_id', $wallet->id_wallet)
            ->where('type', 'credit')
            ->where('statut', 'complete')
            ->sum('montant');

        $totalRetire = DB::table('transactions')
            ->where('wallet_id', $wallet->id_wallet)
            ->where('type', 'retrait')
            ->where('statut', 'complete')
            ->sum('montant');

        $enAttente = DB::table('retraits')
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'en_attente')
            ->sum('montant');

        return response()->json([
            'success' => true,
            'data'    => [
                'id_wallet'      => $wallet->id_wallet,
                'solde'          => (float) $wallet->solde,
                'devise'         => $wallet->devise,
                'total_gagne'    => (float) $totalGagne,
                'total_retire'   => (float) $totalRetire,
                'retrait_attente'=> (float) $enAttente,
            ],
        ]);
    }

    // GET /api/agent/wallet/transactions
    public function transactions(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        $query = DB::table('transactions as t')
            ->leftJoin('missions as m', 't.mission_id', '=', 'm.id_mission')
            ->where('t.wallet_id', $wallet->id_wallet)
            ->select('t.*', 'm.nom_application');

        if ($request->filled('type')) {
            $query->where('t.type', $request->type);
        }

        $transactions = $query->orderByDesc('t.created_at')->paginate(20);

        return response()->json(['success' => true, 'data' => $transactions]);
    }

    // GET /api/agent/wallet/transactions/{id}
    public function transaction(Request $request, string $id)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        $transaction = DB::table('transactions as t')
            ->leftJoin('missions as m', 't.mission_id', '=', 'm.id_mission')
            ->where('t.id_transaction', $id)
            ->where('t.wallet_id', $wallet->id_wallet)
            ->select('t.*', 'm.nom_application', 'm.logo_url')
            ->first();

        if (! $transaction) {
            return response()->json(['success' => false, 'message' => 'Transaction introuvable'], 404);
        }

        return response()->json(['success' => true, 'data' => $transaction]);
    }

    // POST /api/agent/wallet/retrait
    public function retrait(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $validated = $request->validate([
            'montant'       => 'required|numeric|min:500',
            'provider'      => 'required|in:wave,orange,mtn,moov,visa',
            'numero_compte' => 'required|string|max:50',
        ]);

        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        if ((float) $wallet->solde < (float) $validated['montant']) {
            return response()->json([
                'success' => false,
                'message' => 'Solde insuffisant. Solde disponible : ' . number_format($wallet->solde, 0) . ' ' . $wallet->devise,
            ], 422);
        }

        // Un seul retrait en attente à la fois
        $enAttente = DB::table('retraits')
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'en_attente')
            ->exists();

        if ($enAttente) {
            return response()->json([
                'success' => false,
                'message' => 'Vous avez déjà une demande de retrait en attente',
            ], 422);
        }

        $retraitId = (string) Str::uuid();

        DB::table('retraits')->insert([
            'id_retrait'    => $retraitId,
            'montant'       => $validated['montant'],
            'provider'      => $validated['provider'],
            'numero_compte' => $validated['numero_compte'],
            'statut'        => 'en_attente',
            'agent_id'      => $agent->id_agent,
            'wallet_id'     => $wallet->id_wallet,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Demande de retrait soumise avec succès',
            'data'    => DB::table('retraits')->where('id_retrait', $retraitId)->first(),
        ], 201);
    }

    // GET /api/agent/wallet/retraits
    public function retraits(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $query = DB::table('retraits')->where('agent_id', $agent->id_agent);

        if ($request->filled('statut')) {
            $query->where('statut', $request->statut);
        }

        $retraits = $query->orderByDesc('created_at')->paginate(15);

        return response()->json(['success' => true, 'data' => $retraits]);
    }

    // GET /api/agent/wallet/retraits/{id}
    public function showRetrait(Request $request, string $id)
    {
        $agent   = $request->attributes->get('agent');
        $retrait = DB::table('retraits')
            ->where('id_retrait', $id)
            ->where('agent_id', $agent->id_agent)
            ->first();

        if (! $retrait) {
            return response()->json(['success' => false, 'message' => 'Retrait introuvable'], 404);
        }

        return response()->json(['success' => true, 'data' => $retrait]);
    }

    // DELETE /api/agent/wallet/retraits/{id}
    public function annulerRetrait(Request $request, string $id)
    {
        $agent   = $request->attributes->get('agent');
        $retrait = DB::table('retraits')
            ->where('id_retrait', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'en_attente')
            ->first();

        if (! $retrait) {
            return response()->json([
                'success' => false,
                'message' => 'Retrait introuvable ou non annulable (seulement les retraits en attente)',
            ], 404);
        }

        DB::table('retraits')->where('id_retrait', $id)->update([
            'statut'     => 'annule',
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Demande de retrait annulée']);
    }
}
