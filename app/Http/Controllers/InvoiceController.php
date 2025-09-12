<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // Tampilan awal form invoice check
    public function index()
    {
        // Dummy data company (nanti bisa diambil dari database)
        $companies = ['PT. Guntha', 'PT. Maju Jaya', 'PT. Sejahtera'];

        return view('invoice-check', compact('companies'));
    }

    // Hasil pencarian invoice
    public function search(Request $request)
    {
        $orderNumber = $request->order_number;
        $company = $request->company;

        // Dummy data hasil invoice (nanti bisa query ke DB)
        $invoice = [
            'order_number' => $orderNumber,
            'company' => $company,
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => '2025-09-12',
        ];

        $companies = ['PT. Guntha', 'PT. Maju Jaya', 'PT. Sejahtera'];

        return view('invoice-check', compact('companies', 'invoice'));
    }
}
