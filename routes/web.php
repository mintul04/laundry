<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginProses', [AuthController::class, 'loginProses'])->name('loginProses');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerProses', [AuthController::class, 'registerProses'])->name('registerProses');

Route::resource('layanan', ServiceController::class);

Route::resource('petugas', PetugasController::class);


Route::get('/', function () {
    return view('landing.landing-page');
})->name('landing');

Route::get('/pesan', function () {
    return view('pesan.pesan');
})->name('pesan');