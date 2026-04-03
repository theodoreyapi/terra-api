<?php

use App\Http\Controllers\Api\AgentAuthController;
use App\Http\Controllers\Api\AgentDiplomeController;
use App\Http\Controllers\Api\AgentInvitationController;
use App\Http\Controllers\Api\AgentLangueController;
use App\Http\Controllers\Api\AgentMissionController;
use App\Http\Controllers\Api\AgentPermisController;
use App\Http\Controllers\Api\AgentPieceController;
use App\Http\Controllers\Api\AgentProfileController;
use App\Http\Controllers\Api\AgentWalletController;
use App\Http\Controllers\Api\BusinessAuthController;
use App\Http\Controllers\Api\BusinessChampController;
use App\Http\Controllers\Api\BusinessFormulaireController;
use App\Http\Controllers\Api\BusinessMissionAgentController;
use App\Http\Controllers\Api\BusinessMissionController;
use App\Http\Controllers\Api\BusinessModePaiementController;
use App\Http\Controllers\Api\BusinessPaiementController;
use App\Http\Controllers\Api\BusinessPlanController;
use App\Http\Controllers\Api\BusinessProfileController;
use App\Http\Controllers\Api\BusinessReponseController;
use App\Http\Controllers\Api\ReferentielController;
use App\Http\Controllers\Api\StatistiqueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// routes/api.php
Route::prefix('internal/terra/v1')->group(function () {
    // ═══════════════════════════════════════════════
    // RÉFÉRENTIELS PUBLICS (pas de token requis)
    // ═══════════════════════════════════════════════
    Route::prefix('referentiels')->group(function () {
        Route::get('pays',                   [ReferentielController::class, 'pays']);
        Route::get('pays/{id}/villes',       [ReferentielController::class, 'villes']);
        Route::get('villes/{id}/communes',   [ReferentielController::class, 'communes']);
        Route::get('etudes',                 [ReferentielController::class, 'etudes']);
        Route::get('diplomes',               [ReferentielController::class, 'diplomes']);
        Route::get('langues',                [ReferentielController::class, 'langues']);
        Route::get('secteurs',               [ReferentielController::class, 'secteurs']);
    });

    // ═══════════════════════════════════════════════
    // AGENT ROUTES
    // ═══════════════════════════════════════════════
    Route::prefix('agent')->group(function () {

        // Auth publique (pas de token)
        Route::post('register',        [AgentAuthController::class, 'register']);
        Route::post('login',           [AgentAuthController::class, 'login']);
        Route::post('send-otp',        [AgentAuthController::class, 'sendOtp']);
        Route::post('verify-otp',      [AgentAuthController::class, 'verifyOtp']);
        Route::post('forgot-password', [AgentAuthController::class, 'forgotPassword']);
        Route::post('reset-password',  [AgentAuthController::class, 'resetPassword']);

        // Routes protégées (token requis)
        // Route::middleware('auth.agent')->group(function () {

        // ── Auth / Profil ──────────────────────────
        Route::post('logout',        [AgentAuthController::class, 'logout']);
        Route::get('me',             [AgentAuthController::class, 'me']);
        Route::put('me',             [AgentAuthController::class, 'update']);

        // ── Profil complet ──────────────────────────
        Route::get('profile',        [AgentProfileController::class, 'show']);
        Route::put('profile',        [AgentProfileController::class, 'update']);
        Route::post('profile/image', [AgentProfileController::class, 'uploadImage']);

        // ── Pièces d'identité ──────────────────────
        Route::get('pieces',         [AgentPieceController::class, 'index']);
        Route::post('pieces',        [AgentPieceController::class, 'store']);
        Route::put('pieces/{id}',    [AgentPieceController::class, 'update']);

        // ── Permis de conduire ─────────────────────
        Route::get('permis',         [AgentPermisController::class, 'index']);
        Route::post('permis',        [AgentPermisController::class, 'store']);
        Route::put('permis/{id}',    [AgentPermisController::class, 'update']);

        // ── Diplômes ───────────────────────────────
        Route::get('diplomes',       [AgentDiplomeController::class, 'index']);
        Route::post('diplomes',      [AgentDiplomeController::class, 'store']);
        Route::put('diplomes/{id}',  [AgentDiplomeController::class, 'update']);

        // ── Langues ────────────────────────────────
        Route::get('langues',            [AgentLangueController::class, 'index']);
        Route::post('langues',           [AgentLangueController::class, 'store']);
        Route::delete('langues/{id}',    [AgentLangueController::class, 'destroy']);

        // ── Missions ───────────────────────────────
        // IMPORTANT: mes-missions AVANT {id} pour éviter conflit de route
        Route::get('missions/mes-missions',              [AgentMissionController::class, 'mesMissions']);
        Route::get('missions',                           [AgentMissionController::class, 'index']);
        Route::get('missions/{id}',                      [AgentMissionController::class, 'show']);
        Route::post('missions/{id}/rejoindre',           [AgentMissionController::class, 'rejoindre']);
        Route::get('missions/{id}/formulaire',           [AgentMissionController::class, 'formulaire']);
        Route::post('missions/{id}/formulaire/soumettre', [AgentMissionController::class, 'soumettre']);
        Route::get('missions/{id}/mes-reponses',         [AgentMissionController::class, 'mesReponses']);
        Route::get('missions/{id}/statistiques',         [AgentMissionController::class, 'statistiques']);

        // ── Invitations ────────────────────────────
        Route::get('invitations',             [AgentInvitationController::class, 'index']);
        Route::get('invitations/{id}',        [AgentInvitationController::class, 'show']);
        Route::post('invitations/{id}/accepter', [AgentInvitationController::class, 'accepter']);
        Route::post('invitations/{id}/refuser',  [AgentInvitationController::class, 'refuser']);

        // ── Wallet & Finance ───────────────────────
        Route::get('wallet',                   [AgentWalletController::class, 'index']);
        Route::get('wallet/transactions',      [AgentWalletController::class, 'transactions']);
        Route::get('wallet/transactions/{id}', [AgentWalletController::class, 'transaction']);
        Route::post('wallet/retrait',          [AgentWalletController::class, 'retrait']);
        Route::get('wallet/retraits',          [AgentWalletController::class, 'retraits']);
        Route::get('wallet/retraits/{id}',     [AgentWalletController::class, 'showRetrait']);
        Route::delete('wallet/retraits/{id}',  [AgentWalletController::class, 'annulerRetrait']);
        // });
    });

    // ═══════════════════════════════════════════════
    // BUSINESS ROUTES
    // ═══════════════════════════════════════════════
    Route::prefix('business')->group(function () {

        // Auth publique
        Route::post('register',        [BusinessAuthController::class, 'register']);
        Route::post('login',           [BusinessAuthController::class, 'login']);
        Route::post('send-otp',        [BusinessAuthController::class, 'sendOtp']);
        Route::post('verify-otp',      [BusinessAuthController::class, 'verifyOtp']);
        Route::post('forgot-password', [BusinessAuthController::class, 'forgotPassword']);
        Route::post('reset-password',  [BusinessAuthController::class, 'resetPassword']);

        // Routes protégées
        // Route::middleware('auth.business')->group(function () {

        // ── Auth / Profil ──────────────────────────
        Route::post('logout',           [BusinessAuthController::class, 'logout']);
        Route::get('me',                [BusinessAuthController::class, 'me']);
        Route::put('me',                [BusinessAuthController::class, 'update']);
        Route::get('profile',           [BusinessProfileController::class, 'show']);
        Route::put('profile',           [BusinessProfileController::class, 'update']);
        Route::post('profile/logo',     [BusinessProfileController::class, 'uploadLogo']);

        // ── Missions ───────────────────────────────
        Route::get('missions',              [BusinessMissionController::class, 'index']);
        Route::post('missions',             [BusinessMissionController::class, 'store']);
        Route::get('missions/{id}',         [BusinessMissionController::class, 'show']);
        Route::put('missions/{id}',         [BusinessMissionController::class, 'update']);
        Route::delete('missions/{id}',      [BusinessMissionController::class, 'destroy']);
        Route::post('missions/{id}/publier', [BusinessMissionController::class, 'publier']);
        Route::post('missions/{id}/terminer', [BusinessMissionController::class, 'terminer']);
        Route::get('missions/{id}/statistiques', [BusinessMissionController::class, 'statistiques']);

        // ── Formulaires ────────────────────────────
        Route::get('missions/{id}/formulaires',           [BusinessFormulaireController::class, 'index']);
        Route::post('missions/{id}/formulaires',          [BusinessFormulaireController::class, 'store']);
        Route::put('missions/{id}/formulaires/{fid}',     [BusinessFormulaireController::class, 'update']);
        Route::delete('missions/{id}/formulaires/{fid}',  [BusinessFormulaireController::class, 'destroy']);

        // ── Champs de formulaire ───────────────────
        Route::post('formulaires/{fid}/champs',           [BusinessChampController::class, 'store']);
        Route::put('formulaires/{fid}/champs/{cid}',      [BusinessChampController::class, 'update']);
        Route::delete('formulaires/{fid}/champs/{cid}',   [BusinessChampController::class, 'destroy']);
        Route::put('formulaires/{fid}/champs/ordre',      [BusinessChampController::class, 'reordonner']);
        Route::put('champs/{cid}/parametres',             [BusinessChampController::class, 'parametres']);

        // ── Agents de la mission ───────────────────
        // IMPORTANT: inviter AVANT {aid} pour éviter conflit de route
        Route::get('missions/{id}/agents',                     [BusinessMissionAgentController::class, 'index']);
        Route::post('missions/{id}/agents/inviter',            [BusinessMissionAgentController::class, 'inviter']);
        Route::get('missions/{id}/agents/{aid}',               [BusinessMissionAgentController::class, 'show']);
        Route::delete('missions/{id}/agents/{aid}',            [BusinessMissionAgentController::class, 'retirer']);
        Route::put('missions/{id}/agents/{aid}/objectif',      [BusinessMissionAgentController::class, 'objectif']);
        Route::get('missions/{id}/agents/{aid}/statistiques',  [BusinessMissionAgentController::class, 'statistiques']);
        Route::get('missions/{id}/agents/{aid}/reponses',      [BusinessMissionAgentController::class, 'reponses']);

        // ── Réponses formulaires ───────────────────
        // IMPORTANT: export AVANT {rid} pour éviter conflit
        Route::get('missions/{id}/reponses/export',            [BusinessReponseController::class, 'export']);
        Route::get('missions/{id}/reponses',                   [BusinessReponseController::class, 'index']);
        Route::get('missions/{id}/reponses/{rid}',             [BusinessReponseController::class, 'show']);
        Route::put('missions/{id}/reponses/{rid}/valider',     [BusinessReponseController::class, 'valider']);
        Route::put('missions/{id}/reponses/{rid}/rejeter',     [BusinessReponseController::class, 'rejeter']);

        // ── Plans ──────────────────────────────────
        Route::get('missions/{id}/plans',           [BusinessPlanController::class, 'index']);
        Route::post('missions/{id}/plans',          [BusinessPlanController::class, 'store']);
        Route::put('missions/{id}/plans/{pid}',     [BusinessPlanController::class, 'update']);
        Route::delete('missions/{id}/plans/{pid}',  [BusinessPlanController::class, 'destroy']);

        // ── Modes de paiement ──────────────────────
        Route::get('missions/{id}/modes-paiement',          [BusinessModePaiementController::class, 'index']);
        Route::post('missions/{id}/modes-paiement',         [BusinessModePaiementController::class, 'store']);
        Route::delete('missions/{id}/modes-paiement/{mid}', [BusinessModePaiementController::class, 'destroy']);

        // ── Paiements agents ───────────────────────
        // IMPORTANT: payer-tous AVANT {aid}/payer
        Route::post('missions/{id}/agents/payer-tous',     [BusinessPaiementController::class, 'payerTous']);
        Route::post('missions/{id}/agents/{aid}/payer',    [BusinessPaiementController::class, 'payerAgent']);
        Route::get('missions/{id}/paiements',              [BusinessPaiementController::class, 'historique']);
        // });
    });

    // ============ STATISTIQUES & RAPPORTS ============
    Route::prefix('statistiques')->group(function () {
        Route::get('/dashboard', [StatistiqueController::class, 'dashboard']);
        Route::get('/mission/{missionId}', [StatistiqueController::class, 'missionStats']);
        Route::get('/agent/{agentId}', [StatistiqueController::class, 'agentStats']);
        Route::get('/performance', [StatistiqueController::class, 'performance']);
        Route::get('/geolocalisation', [StatistiqueController::class, 'geolocalisation']);
        Route::get('/tendances', [StatistiqueController::class, 'tendances']);
    });
});
