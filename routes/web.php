<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landingPage.main');
});

//---------------------Auth-----------------------------
//Regiter
Route::prefix('register')->group(function () {
    Route::get('/ketua', [RegisterController::class, 'indexKetua']);
    Route::get('/anggota', [RegisterController::class, 'indexAnggota']);
    Route::post('/ketua', [RegisterController::class, 'storeKetua']);
    Route::post('/anggota', [RegisterController::class, 'storeAnggota']);
});
//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::prefix('pages')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
