<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// =====================
// ROUTE HOME
// =====================
Route::get('/', function () {
    return view('home'); // file resources/views/home.blade.php
})->name('home');

// =====================
// COMPANY
// =====================
Route::get('/register-company', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
Route::post('/register-company', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');

// =====================
// PRODUCTS
// =====================
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

// =====================
// ORDERS (multi step form + controller)
// =====================

// Step 1 - Form awal
Route::get('/order', function () {
    return view('order-step1'); // file: resources/views/order-step1.blade.php
})->name('order.step1');

// Step 1 submit → ke Step 2
Route::post('/order/step1', function (Request $request) {
    session([
        'order_step1' => $request->only([
            'buyer_name',
            'company_name',
            'address',
            'email',
            'parts_name',
            'due_date',
        ]),
    ]);

    return redirect()->route('order.step2');
})->name('order.step1.submit');

// Step 2 - Form lanjutan
Route::get('/order/step2', function () {
    return view('order-step2'); // file: resources/views/order-step2.blade.php
})->name('order.step2');

// Step 2 submit → Success page
Route::post('/order/step2', function (Request $request) {
    $step1 = session('order_step1', []);
    $step2 = $request->only(['materials', 'delivery', 'quantity']);

    $data = array_merge($step1, $step2);

    // clear session biar ga numpuk
    session()->forget('order_step1');

    return view('order-success', compact('data')); // file: resources/views/order-success.blade.php
})->name('order.step2.submit');


Route::get('/invoices', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoices.index');