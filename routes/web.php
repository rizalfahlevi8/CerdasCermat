<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.main');
});

//---------------------Auth-----------------------------
//Regiter
Route::get('/register', [RegisterController::class, 'index']);
Route::prefix('register')->group(function () {
    Route::get('/ketua', [RegisterController::class, 'createKetua']);
    Route::get('/anggota', [RegisterController::class, 'createAnggota']);
    Route::post('/ketua', [RegisterController::class, 'createKetua']);
    Route::post('/anggota', [RegisterController::class, 'createAnggota']);
});