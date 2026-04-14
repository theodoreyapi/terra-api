<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// ─────────────────────────────────────────────
// AgentInvitationController
// ─────────────────────────────────────────────
class AgentInvitationController extends Controller
{
    // GET /api/agent/invitations
    /**
     * Liste des invitations de l’agent
     *
     * @group Invitations Agent
     *
     * @authenticated
     *
     * @queryParam statut string Filtrer par statut (invite, accepte, refuse, actif). Example: invite
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id_mission_agent": "uuid",
     *       "statut": "invite",
     *       "remuneration": 5000,
     *       "objectif_agent": 100,
     *       "date_invitation": "2026-01-01 10:00:00",
     *       "id_mission": "uuid",
     *       "nom_application": "App X",
     *       "type_mission": "recensement",
     *       "logo_url": "url",
     *       "date_debut": "2026-01-01",
     *       "date_fin": "2026-02-01",
     *       "entreprise_business": "Entreprise",
     *       "name_business": "Nom Responsable"
     *     }
     *   ]
     * }
     */
    public function index(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $invitations = DB::table('mission_agents as ma')
            ->join('missions as m', 'ma.mission_id', '=', 'm.id_mission')
            ->leftJoin('business as b', 'm.created_by', '=', 'b.id_business')
            ->where('ma.agent_id', $agent->id_agent)
            ->select(
                'ma.id_mission_agent',
                'ma.statut',
                'ma.remuneration',
                'ma.objectif_agent',
                'ma.created_at as date_invitation',
                'm.id_mission',
                'm.nom_application',
                'm.type_mission',
                'm.logo_url',
                'm.date_debut',
                'm.date_fin',
                'b.entreprise_business',
                'b.name_business'
            )
            ->orderByDesc('ma.created_at')
            ->get();

        // Filtrer par statut si demandé
        if ($request->has('statut')) {
            $invitations = $invitations->where('statut', $request->statut)->values();
        }

        return response()->json(['success' => true, 'data' => $invitations]);
    }

    // GET /api/agent/invitations/{id}
    /**
     * Détails d’une invitation
     *
     * @group Invitations Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID de l’invitation (mission_agent). Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_mission_agent": "uuid",
     *     "statut": "invite",
     *     "remuneration": 5000,
     *     "objectif_agent": 100,
     *     "mission_id": "uuid",
     *     "nom_application": "App X",
     *     "type_mission": "recensement",
     *     "cible": "personnes",
     *     "logo_url": "url",
     *     "couleur_primaire": "#FFFFFF",
     *     "dark_mode": false,
     *     "date_debut": "2026-01-01",
     *     "date_fin": "2026-02-01",
     *     "statut_mission": "actif",
     *     "entreprise_business": "Entreprise",
     *     "name_business": "Nom Responsable",
     *     "description_business": "Description",
     *     "pays": "Côte d'Ivoire",
     *     "ville": "Abidjan",
     *     "commune": "Cocody"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Invitation introuvable"
     * }
     */
    public function show(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $invitation = DB::table('mission_agents as ma')
            ->join('missions as m', 'ma.mission_id', '=', 'm.id_mission')
            ->leftJoin('business as b', 'm.created_by', '=', 'b.id_business')
            ->leftJoin('country as co', 'm.country_id', '=', 'co.id_country')
            ->leftJoin('city as c', 'm.city_id', '=', 'c.id_city')
            ->leftJoin('commune as cm', 'm.commune_id', '=', 'cm.id_commune')
            ->where('ma.id_mission_agent', $id)
            ->where('ma.agent_id', $agent->id_agent)
            ->select(
                'ma.*',
                'm.nom_application',
                'm.type_mission',
                'm.cible',
                'm.logo_url',
                'm.couleur_primaire',
                'm.couleur_secondaire',
                'm.dark_mode',
                'm.date_debut',
                'm.date_fin',
                'm.objectif_nombre',
                'm.statut as statut_mission',
                'b.entreprise_business',
                'b.name_business',
                'b.description_business',
                'co.name as pays',
                'c.name_city as ville',
                'cm.name_commune as commune'
            )
            ->first();

        if (! $invitation) {
            return response()->json(['success' => false, 'message' => 'Invitation introuvable'], 404);
        }

        return response()->json(['success' => true, 'data' => $invitation]);
    }

    // POST /api/agent/invitations/{id}/accepter
    /**
     * Accepter une invitation de mission
     *
     * @group Invitations Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID de l’invitation (mission_agent). Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Invitation acceptée. Vous faites maintenant partie de la mission.",
     *   "data": {
     *     "mission_id": "uuid",
     *     "statut": "accepte",
     *     "remuneration": 5000,
     *     "objectif_agent": 100,
     *     "date_acceptation": "2026-01-01 10:00:00"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Invitation introuvable ou déjà traitée"
     * }
     */
    public function accepter(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $invitation = DB::table('mission_agents')
            ->where('id_mission_agent', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'invite')
            ->first();

        if (! $invitation) {
            return response()->json(['success' => false, 'message' => 'Invitation introuvable ou déjà traitée'], 404);
        }

        DB::table('mission_agents')->where('id_mission_agent', $id)->update([
            'statut'           => 'accepte',
            'date_acceptation' => now(),
            'updated_at'       => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Invitation acceptée. Vous faites maintenant partie de la mission.',
            'data'    => [
                'mission_id'      => $invitation->mission_id,
                'statut'          => 'accepte',
                'remuneration'    => $invitation->remuneration,
                'objectif_agent'  => $invitation->objectif_agent,
                'date_acceptation' => now(),
            ],
        ]);
    }

    // POST /api/agent/invitations/{id}/refuser
    /**
     * Refuser une invitation de mission
     *
     * @group Invitations Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID de l’invitation (mission_agent). Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Invitation refusée"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Invitation introuvable ou déjà traitée"
     * }
     */
    public function refuser(Request $request, $id)
    {
        $agent = $request->attributes->get('agent');

        $invitation = DB::table('mission_agents')
            ->where('id_mission_agent', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'invite')
            ->first();

        if (! $invitation) {
            return response()->json(['success' => false, 'message' => 'Invitation introuvable ou déjà traitée'], 404);
        }

        DB::table('mission_agents')->where('id_mission_agent', $id)->update([
            'statut'     => 'refuse',
            'updated_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Invitation refusée',
        ]);
    }
}

// ─────────────────────────────────────────────
// AgentWalletController
// ─────────────────────────────────────────────
class AgentWalletController extends Controller
{
    // GET /api/agent/wallet
    /**
     * Informations du portefeuille agent
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_wallet": "uuid",
     *     "solde": 15000,
     *     "devise": "XOF",
     *     "total_gagne": 50000,
     *     "total_retire": 20000
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Portefeuille introuvable"
     * }
     */
    public function index(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        // Statistiques rapides
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

        return response()->json([
            'success' => true,
            'data'    => [
                'id_wallet'    => $wallet->id_wallet,
                'solde'        => $wallet->solde,
                'devise'       => $wallet->devise,
                'total_gagne'  => $totalGagne,
                'total_retire' => $totalRetire,
            ],
        ]);
    }

    // GET /api/agent/wallet/transactions
    /**
     * Liste des transactions du portefeuille
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "data": [
     *       {
     *         "id_transaction": "uuid",
     *         "type": "credit",
     *         "montant": 5000,
     *         "statut": "complete",
     *         "description": "Gain mission",
     *         "nom_application": "App X",
     *         "created_at": "2026-01-01 10:00:00"
     *       }
     *     ]
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Portefeuille introuvable"
     * }
     */
    public function transactions(Request $request)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        $transactions = DB::table('transactions as t')
            ->leftJoin('missions as m', 't.mission_id', '=', 'm.id_mission')
            ->where('t.wallet_id', $wallet->id_wallet)
            ->select('t.*', 'm.nom_application')
            ->orderByDesc('t.created_at')
            ->paginate(20);

        return response()->json(['success' => true, 'data' => $transactions]);
    }

    // GET /api/agent/wallet/transactions/{id}
    /**
     * Détail d’une transaction
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID de la transaction. Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_transaction": "uuid",
     *     "type": "credit",
     *     "montant": 5000,
     *     "statut": "complete",
     *     "description": "Gain mission",
     *     "nom_application": "App X"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Transaction introuvable"
     * }
     */
    public function transaction(Request $request, $id)
    {
        $agent  = $request->attributes->get('agent');
        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        $transaction = DB::table('transactions as t')
            ->leftJoin('missions as m', 't.mission_id', '=', 'm.id_mission')
            ->where('t.id_transaction', $id)
            ->where('t.wallet_id', $wallet->id_wallet)
            ->select('t.*', 'm.nom_application')
            ->first();

        if (! $transaction) {
            return response()->json(['success' => false, 'message' => 'Transaction introuvable'], 404);
        }

        return response()->json(['success' => true, 'data' => $transaction]);
    }

    // POST /api/agent/wallet/retrait
    /**
     * Créer une demande de retrait
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @bodyParam montant numeric required Montant minimum 500
     * @bodyParam provider string required Moyen de paiement (wave, orange, mtn, moov, visa)
     * @bodyParam numero_compte string required Numéro de compte ou téléphone
     *
     * @response 201 {
     *   "success": true,
     *   "message": "Demande de retrait soumise avec succès",
     *   "data": {
     *     "id_retrait": "uuid",
     *     "montant": 10000,
     *     "provider": "wave",
     *     "numero_compte": "01020304",
     *     "statut": "en_attente"
     *   }
     * }
     *
     * @response 422 {
     *   "success": false,
     *   "message": "Solde insuffisant"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Portefeuille introuvable"
     * }
     */
    public function retrait(Request $request)
    {
        $agent = $request->attributes->get('agent');

        $validated = $request->validate([
            'montant'        => 'required|numeric|min:500',
            'provider'       => 'required|in:wave,orange,mtn,moov,visa',
            'numero_compte'  => 'required|string|max:50',
        ]);

        $wallet = DB::table('wallets')->where('agent_id', $agent->id_agent)->first();

        if (! $wallet) {
            return response()->json(['success' => false, 'message' => 'Portefeuille introuvable'], 404);
        }

        if ($wallet->solde < $validated['montant']) {
            return response()->json(['success' => false, 'message' => 'Solde insuffisant'], 422);
        }

        // Vérifier pas de retrait en attente
        $enAttente = DB::table('retraits')
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'en_attente')
            ->exists();

        if ($enAttente) {
            return response()->json(['success' => false, 'message' => 'Vous avez déjà un retrait en attente'], 422);
        }

        $retraitId = \Illuminate\Support\Str::uuid();
        DB::table('retraits')->insert([
            'id_retrait'     => $retraitId,
            'montant'        => $validated['montant'],
            'provider'       => $validated['provider'],
            'numero_compte'  => $validated['numero_compte'],
            'statut'         => 'en_attente',
            'agent_id'       => $agent->id_agent,
            'wallet_id'      => $wallet->id_wallet,
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Demande de retrait soumise avec succès',
            'data'    => [
                'id_retrait'    => $retraitId,
                'montant'       => $validated['montant'],
                'provider'      => $validated['provider'],
                'numero_compte' => $validated['numero_compte'],
                'statut'        => 'en_attente',
            ],
        ], 201);
    }

    // GET /api/agent/wallet/retraits
    /**
     * Liste des retraits de l’agent
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "data": [
     *       {
     *         "id_retrait": "uuid",
     *         "montant": 10000,
     *         "provider": "wave",
     *         "numero_compte": "01020304",
     *         "statut": "en_attente",
     *         "created_at": "2026-01-01 10:00:00"
     *       }
     *     ]
     *   }
     * }
     */
    public function retraits(Request $request)
    {
        $agent   = $request->attributes->get('agent');
        $retraits = DB::table('retraits')
            ->where('agent_id', $agent->id_agent)
            ->orderByDesc('created_at')
            ->paginate(15);

        return response()->json(['success' => true, 'data' => $retraits]);
    }

    // GET /api/agent/wallet/retraits/{id}
    /**
     * Détail d’un retrait
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID du retrait. Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "data": {
     *     "id_retrait": "uuid",
     *     "montant": 10000,
     *     "provider": "wave",
     *     "numero_compte": "01020304",
     *     "statut": "en_attente"
     *   }
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Retrait introuvable"
     * }
     */
    public function showRetrait(Request $request, $id)
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
    /**
     * Annuler une demande de retrait
     *
     * @group Wallet Agent
     *
     * @authenticated
     *
     * @urlParam id string required ID du retrait. Example: uuid
     *
     * @response 200 {
     *   "success": true,
     *   "message": "Demande de retrait annulée"
     * }
     *
     * @response 404 {
     *   "success": false,
     *   "message": "Retrait introuvable ou non annulable"
     * }
     */
    public function annulerRetrait(Request $request, $id)
    {
        $agent   = $request->attributes->get('agent');
        $retrait = DB::table('retraits')
            ->where('id_retrait', $id)
            ->where('agent_id', $agent->id_agent)
            ->where('statut', 'en_attente')
            ->first();

        if (! $retrait) {
            return response()->json(['success' => false, 'message' => 'Retrait introuvable ou non annulable'], 404);
        }

        DB::table('retraits')->where('id_retrait', $id)->update([
            'statut'     => 'annule',
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Demande de retrait annulée']);
    }
}
