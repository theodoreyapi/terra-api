<?php

use App\Http\Controllers\ConditionController;
use App\Http\Controllers\PolitiqueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('conditions', ConditionController::class);
Route::resource('politiques', PolitiqueController::class);
