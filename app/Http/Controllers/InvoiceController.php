<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // Tampilkan form invoice check
    public function checkForm()
    {
        return view('invoice-check'); 
    }

    // Proses pencarian invoice (sementara dummy saja)
    public function search(Request $request)
    {
        $orderNumber = $request->input('order_number');
        $company = $request->input('company');

        // Sementara kita return view sederhana
        return view('invoice-result', compact('orderNumber', 'company'));
    }
}
