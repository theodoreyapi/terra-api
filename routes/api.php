<?php

use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\ChampFormulaireController;
use App\Http\Controllers\Api\FormulaireController;
use App\Http\Controllers\Api\MissionController;
use App\Http\Controllers\Api\ModePaiementController;
use App\Http\Controllers\Api\ParametreChampController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\ReponseController;
use App\Http\Controllers\Api\StatistiqueController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Routes publiques (sans authentification)
Route::prefix('v1')->group(function () {

    // Authentification agent
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);

    // Authentification business
    Route::post('/business/login', [BusinessController::class, 'login']);
    Route::post('/business/register', [BusinessController::class, 'register']);

    // Routes protégées
    Route::middleware('auth:sanctum')->group(function () {

        // ============ USERS ============
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index']);
            Route::get('/{id}', [UserController::class, 'show']);
            Route::post('/', [UserController::class, 'store']);
            Route::put('/{id}', [UserController::class, 'update']);
            Route::delete('/{id}', [UserController::class, 'destroy']);
            Route::get('/{id}/missions', [UserController::class, 'missions']);
            Route::get('/{id}/reponses', [UserController::class, 'reponses']);
        });

        // ============ BUSINESS ============
        Route::prefix('business')->group(function () {
            Route::get('/', [BusinessController::class, 'index']);
            Route::get('/{id}', [BusinessController::class, 'show']);
            Route::post('/', [BusinessController::class, 'store']);
            Route::put('/{id}', [BusinessController::class, 'update']);
            Route::delete('/{id}', [BusinessController::class, 'destroy']);
            Route::get('/{id}/missions', [BusinessController::class, 'missions']);
            Route::get('/{id}/reponses', [BusinessController::class, 'reponses']);
        });

        // ============ MISSIONS ============
        Route::prefix('missions')->group(function () {
            Route::get('/', [MissionController::class, 'index']); // Liste toutes les missions
            Route::post('/', [MissionController::class, 'store']); // Créer une mission
            Route::get('/{id}', [MissionController::class, 'show']); // Détails d'une mission
            Route::put('/{id}', [MissionController::class, 'update']); // Modifier une mission
            Route::delete('/{id}', [MissionController::class, 'destroy']); // Supprimer une mission
            Route::patch('/{id}/status', [MissionController::class, 'updateStatus']); // Changer le statut
            Route::get('/{id}/duplicate', [MissionController::class, 'duplicate']); // Dupliquer une mission
            Route::get('/{id}/export', [MissionController::class, 'export']); // Exporter les données
            Route::get('/type/{type}', [MissionController::class, 'byType']); // Filtrer par type
            Route::get('/statut/{statut}', [MissionController::class, 'byStatus']); // Filtrer par statut
        });

        // ============ FORMULAIRES ============
        Route::prefix('formulaires')->group(function () {
            Route::get('/', [FormulaireController::class, 'index']);
            Route::post('/', [FormulaireController::class, 'store']);
            Route::get('/{id}', [FormulaireController::class, 'show']);
            Route::put('/{id}', [FormulaireController::class, 'update']);
            Route::delete('/{id}', [FormulaireController::class, 'destroy']);
            Route::get('/mission/{missionId}', [FormulaireController::class, 'byMission']);
            Route::post('/{id}/duplicate', [FormulaireController::class, 'duplicate']);
            Route::patch('/{id}/reorder', [FormulaireController::class, 'reorder']);
        });

        // ============ CHAMPS FORMULAIRE ============
        Route::prefix('champs')->group(function () {
            Route::get('/', [ChampFormulaireController::class, 'index']);
            Route::post('/', [ChampFormulaireController::class, 'store']);
            Route::get('/{id}', [ChampFormulaireController::class, 'show']);
            Route::put('/{id}', [ChampFormulaireController::class, 'update']);
            Route::delete('/{id}', [ChampFormulaireController::class, 'destroy']);
            Route::get('/formulaire/{formulaireId}', [ChampFormulaireController::class, 'byFormulaire']);
            Route::patch('/{id}/reorder', [ChampFormulaireController::class, 'reorder']);
            Route::post('/bulk', [ChampFormulaireController::class, 'bulkStore']); // Créer plusieurs champs
        });

        // ============ PARAMETRES CHAMPS ============
        Route::prefix('parametres-champs')->group(function () {
            Route::get('/', [ParametreChampController::class, 'index']);
            Route::post('/', [ParametreChampController::class, 'store']);
            Route::get('/{id}', [ParametreChampController::class, 'show']);
            Route::put('/{id}', [ParametreChampController::class, 'update']);
            Route::delete('/{id}', [ParametreChampController::class, 'destroy']);
            Route::get('/champ/{champId}', [ParametreChampController::class, 'byChamp']);
        });

        // ============ PLANS ============
        Route::prefix('plans')->group(function () {
            Route::get('/', [PlanController::class, 'index']);
            Route::post('/', [PlanController::class, 'store']);
            Route::get('/{id}', [PlanController::class, 'show']);
            Route::put('/{id}', [PlanController::class, 'update']);
            Route::delete('/{id}', [PlanController::class, 'destroy']);
            Route::get('/mission/{missionId}', [PlanController::class, 'byMission']);
        });

        // ============ MODES DE PAIEMENT ============
        Route::prefix('modes-paiement')->group(function () {
            Route::get('/', [ModePaiementController::class, 'index']);
            Route::post('/', [ModePaiementController::class, 'store']);
            Route::get('/{id}', [ModePaiementController::class, 'show']);
            Route::put('/{id}', [ModePaiementController::class, 'update']);
            Route::delete('/{id}', [ModePaiementController::class, 'destroy']);
            Route::get('/mission/{missionId}', [ModePaiementController::class, 'byMission']);
            Route::patch('/{id}/toggle', [ModePaiementController::class, 'toggleActive']);
        });

        // ============ REPONSES ============
        Route::prefix('reponses')->group(function () {
            Route::get('/', [ReponseController::class, 'index']);
            Route::post('/', [ReponseController::class, 'store']);
            Route::get('/{id}', [ReponseController::class, 'show']);
            Route::put('/{id}', [ReponseController::class, 'update']);
            Route::delete('/{id}', [ReponseController::class, 'destroy']);
            Route::patch('/{id}/status', [ReponseController::class, 'updateStatus']);
            Route::get('/mission/{missionId}', [ReponseController::class, 'byMission']);
            Route::get('/agent/{agentId}', [ReponseController::class, 'byAgent']);
            Route::get('/mission/{missionId}/export', [ReponseController::class, 'export']);
            Route::post('/bulk', [ReponseController::class, 'bulkStore']); // Soumission multiple
            Route::get('/mission/{missionId}/stats', [ReponseController::class, 'statistics']);
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
});
