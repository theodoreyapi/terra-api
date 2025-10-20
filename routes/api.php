<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\SubmissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Public: login/register
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);

// Protected
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('forms', FormController::class);

    // submit (mobile clients) - could be open with token
    Route::post('forms/{form}/submit', [SubmissionController::class, 'store']);
    Route::get('forms/{form}/submissions', [SubmissionController::class, 'index']);
    Route::get('forms/{form}/submissions/{submission}', [SubmissionController::class, 'show']);

    Route::post('media/upload', [SubmissionController::class, 'uploadMedia']);

    // exports
    Route::get('forms/{form}/export/csv', [FormController::class, 'exportCsv']);
});
