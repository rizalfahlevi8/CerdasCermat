<?php

use App\Http\Controllers\BankSoalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriSoalController;

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
})->middleware('guest');
//Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//-------------------------------- Bank Soal ---------------------------------------

//kategori soal
Route::get('/kategorisoal', [KategoriSoalController::class, 'index']);

//bank soal
Route::get('/banksoal/{id}', [BankSoalController::class, 'index']);

