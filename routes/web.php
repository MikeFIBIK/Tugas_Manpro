<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DTRController;
use App\Http\Controllers\HSLController;
// use App\Models\profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [DataController::class, 'index']);

Route::get('/pasien', [DataController::class, 'index']);

Route::get('/dokter', [DTRController::class, 'index2']);

Route::get('/hasil', [HSLController::class, 'index3']);

