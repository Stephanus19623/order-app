<?php

use Illuminate\Support\Facades\Route;
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
    return view('show');
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
Route::get('/orders', [OrderController::class, 'index']);         // tampilan tabel order

// Halaman pilih company
Route::get('/order-lists', [OrderController::class, 'choose'])->name('orders.choose');

// Setelah pilih company → tampilkan order
Route::post('/order-lists', [OrderController::class, 'listByCompany'])->name('orders.listByCompany');


// Invoices
Route::get('/invoice/{orderNumber}', [InvoiceController::class, 'show']);
Route::get('/invoice/{orderNumber}/download', [InvoiceController::class, 'downloadPDF']);