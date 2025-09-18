<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

// Rute untuk halaman utama
// PERBAIKAN: Tambahkan .name('welcome') agar dapat dipanggil dari blade
Route::get('/', function () {
    return view('show');
})->name('welcome');

// Rute untuk menampilkan halaman pendaftaran perusahaan (GET)
Route::get('/register-company', [CompanyController::class, 'create'])->name('company.register');

// Rute untuk memproses data pendaftaran perusahaan (POST)
Route::post('/register-company', [CompanyController::class, 'store'])->name('company.store');