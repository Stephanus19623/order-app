<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('show');
});


// Route untuk menampilkan halaman pendaftaran perusahaan (GET)
Route::get('/register-company', [CompanyController::class, 'create'])->name('company.register');

// Route untuk memproses data pendaftaran perusahaan (POST)
Route::post('/register-company', [CompanyController::class, 'store'])->name('company.store');

// Route untuk menampilkan halaman sukses setelah pendaftaran
Route::get('/register-success', [CompanyController::class, 'success'])->name('company.success');