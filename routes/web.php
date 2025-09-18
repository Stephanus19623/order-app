<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;

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
    return view('homepage');
});

// Rute untuk halaman "Our Company"
Route::get('/ourcompany', function () {
    return view('company');
});

// Rute untuk halaman beranda (Homepage)
Route::get('/', function () {
    return view('homepage');
});


// Company Registration
Route::get('/register-company', [CompanyController::class, 'create']);
Route::post('/register-company', [CompanyController::class, 'store']);

// Products
Route::get('/products', [ProductController::class, 'index']);


// Orders
Route::get('/orders/create', [OrderController::class, 'create']); // order form
Route::post('/orders', [OrderController::class, 'store']);        // save order
Route::get('/orders/{id}', [OrderController::class, 'show']);     // view order details
Route::get('/my-orders', [OrderController::class, 'myOrders']);   // list company’s orders

// Invoices
Route::get('/invoice/{orderNumber}', [InvoiceController::class, 'show']);
Route::get('/invoice/{orderNumber}/download', [InvoiceController::class, 'downloadPDF']);

// Inventory
Route::resource('products', ProductController::class);

