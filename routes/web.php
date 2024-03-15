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
Route::get('/register', [RegisterController::class, 'index']);
Route::prefix('register')->group(function () {
    Route::get('/ketua', [RegisterController::class, 'createKetua']);
    Route::get('/anggota', [RegisterController::class, 'createAnggota']);
    Route::post('/ketua', [RegisterController::class, 'storeKetua']);
    Route::post('/anggota', [RegisterController::class, 'storeAnggota']);
});
//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//---------------------Admin----------------------------
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'indexAdmin']);
});


//---------------------Peserta----------------------------
Route::prefix('peserta')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'indexPeserta']);
});