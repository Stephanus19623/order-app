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
})->name('homepage');

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
    return view('orders.orders'); // form step 1
    
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
    $step1 = session('step1');
    if (! $step1) {
        return redirect()->route('order'); // jika belum ada data step 1, kembali ke form awal
    }
    return view('orders.orders-step2', ['data' => $step1]);
})->name('order.step2');

Route::post('/order/complete', function (Request $request) {
    $data = array_merge(
        session('step1', []),
        $request->only(['materials', 'delivery', 'quantity'])
    );

    session()->forget('step1'); // hapus session setelah selesai

    return view('orders.orders-success', ['data' => $data]);
})->name('order.complete');

// =====================
// INVOICES
// =====================
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoice/pdf', [InvoiceController::class, 'downloadPdf'])->name('invoice.pdf');

// OPTIONAL: test lihat pdf view
Route::get('/test-pdf', function () {
    return view('invoice.pdf'); // untuk tes tampilan pdf.blade.php
});



Route::get('/invoice-printing', [InvoiceController::class, 'showPrintingPage'])->name('invoice.print');

Route::get('/invoice/download', [InvoiceController::class, 'downloadPdf'])->name('invoice.download');


Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');

Route::post('/orders/step2/submit', [OrderController::class, 'step2Submit'])->name('orders.step2.submit');