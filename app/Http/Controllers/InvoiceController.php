<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // pastikan sudah install barryvdh/laravel-dompdf

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice-check');
    }

    public function search(Request $request)
    {
        $data = [
            'id' => rand(1000,9999), // contoh dummy, nanti bisa ambil dari DB
            'order_number' => $request->order_number,
            'company' => $request->company,
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => now()->format('d-m-Y'),
        ];

        return view('invoice-result', compact('data'));
    }

    public function download($id)
    {
        $data = [
            'id' => $id,
            'order_number' => 'ORD-'.$id,
            'company' => 'PT Contoh Sejahtera',
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => now()->format('d-m-Y'),
        ];

        $pdf = Pdf::loadView('invoice-pdf', compact('data'));
        return $pdf->download("invoice-{$id}.pdf");
    }
}
