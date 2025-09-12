<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice-check');
    }

    public function search(Request $request)
    {
        $orderNumber = $request->order_number;
        $company = $request->company;

        // Dummy hasil invoice
        $invoice = [
            'order_number' => $orderNumber,
            'company' => $company,
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => '2025-09-12',
        ];

        return view('invoice-check', compact('invoice'));
    }
}
