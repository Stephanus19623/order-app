<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;


// =====================
// ROUTE HOME
// =====================
Route::get('/', function () {
    return view('homepage');  // halaman utama
});

// =====================
// COMPANY
// =====================
Route::get('/register-company', [CompanyController::class, 'create']);
Route::post('/register-company', [CompanyController::class, 'store']);

// =====================
// PRODUCTS
// =====================
Route::get('/products', [ProductController::class, 'index']);

// =====================
// ORDERS
// =====================
Route::get('/order', function () {
    return view('order'); // form step 1
})->name('order');

Route::post('/order/submit', function (Request $request) {
    session([
        'step1' => $request->only([
            'buyer_name', 'company_name', 'address', 'email', 'parts_name', 'due_date'
        ])
    ]);
    return redirect()->route('order.step2');
})->name('order.submit');

Route::get('/order/step2', function () {
    return view('order-step2');
})->name('order.step2');

Route::post('/order/complete', function (Request $request) {
    $data = array_merge(
        session('step1', []),
        $request->only(['materials', 'delivery', 'quantity'])
    );

    session()->forget('step1'); // hapus session setelah selesai

    return view('order-success', ['data' => $data]);
})->name('order.complete');

// Order Controller Routes (kalau kamu pakai controller juga)
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/my-orders', [OrderController::class, 'myOrders']);

// =====================
// INVOICES
// =====================
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoice/pdf', [InvoiceController::class, 'downloadPdf'])->name('invoice.pdf');

// OPTIONAL: test lihat pdf view
Route::get('/test-pdf', function () {
    return view('invoice.pdf'); // untuk tes tampilan pdf.blade.php
});


// ... (route lainnya mungkin sudah ada di sini)

Route::get('/invoice-printing', [InvoiceController::class, 'showPrintingPage'])->name('invoice.print');

Route::get('/invoice/download', [InvoiceController::class, 'downloadPdf'])->name('invoice.download');

