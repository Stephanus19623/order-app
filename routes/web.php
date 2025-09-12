<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
Route::get('/invoice/{id}/download', [OrderController::class, 'downloadInvoice'])->name('download.invoice');

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
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

// Invoices
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::get('/invoice/form', [InvoiceController::class, 'form'])->name('invoice.form');
Route::post('/invoice/search', [InvoiceController::class, 'search'])->name('invoice.search');


// Invoice check
Route::get('/invoice/check', [InvoiceController::class, 'index'])->name('invoice.check');
Route::post('/invoice/search', [InvoiceController::class, 'search'])->name('invoice.search');
Route::get('/invoice-check', [InvoiceController::class, 'index'])->name('invoice.check');
Route::post('/invoice-check', [InvoiceController::class, 'search'])->name('invoice.search');


Route::get('/invoice-check', [InvoiceController::class, 'index'])->name('invoice.index');
Route::post('/invoice-search', [InvoiceController::class, 'search'])->name('invoice.search');

// halaman invoice detail
Route::get('/invoice/{orderNumber}/{company}', [InvoiceController::class, 'show'])->name('invoice.show');

// download PDF & Image
Route::get('/invoice/{orderNumber}/{company}/pdf', [InvoiceController::class, 'downloadPDF'])->name('invoice.downloadPDF');
Route::get('/invoice/{orderNumber}/{company}/image', [InvoiceController::class, 'downloadImage'])->name('invoice.downloadImage');

Route::get('/invoice/{id}', [OrderController::class, 'invoice'])->name('invoice.show');

