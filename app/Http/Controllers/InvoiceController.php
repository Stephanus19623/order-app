<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // pastikan sudah install barryvdh/laravel-dompdf
use Intervention\Image\ImageManagerStatic as Image; // untuk export image (intervention/image)

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

        return redirect()->route('invoice.show', [$orderNumber, $company]);
    }

    public function show($orderNumber, $company)
    {
        // Dummy data
        $invoice = [
            'order_number' => $orderNumber,
            'company' => $company,
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => now()->toDateString(),
            'items' => [
                ['desc' => 'Product A', 'qty' => 2, 'price' => 2500000, 'total' => 5000000]
            ]
        ];

        return view('invoice-detail-pdf', compact('invoice'));
    }

    public function downloadPDF($orderNumber, $company)
    {
        $invoice = [
            'order_number' => $orderNumber,
            'company' => $company,
            'status' => 'Paid',
            'amount' => 'Rp 5.000.000',
            'date' => now()->toDateString(),
            'items' => [
                ['desc' => 'Product A', 'qty' => 2, 'price' => 2500000, 'total' => 5000000]
            ]
        ];

        $pdf = Pdf::loadView('invoice-detail-pdf', compact('invoice'));
        return $pdf->download("invoice-{$orderNumber}.pdf");
    }

    public function downloadImage($orderNumber, $company)
    {
        $html = view('invoice-detail-pdf', [
            'invoice' => [
                'order_number' => $orderNumber,
                'company' => $company,
                'status' => 'Paid',
                'amount' => 'Rp 5.000.000',
                'date' => now()->toDateString(),
                'items' => [
                    ['desc' => 'Product A', 'qty' => 2, 'price' => 2500000, 'total' => 5000000]
                ]
            ]
        ])->render();

        // convert HTML ke image pakai dompdf -> png
        $pdf = Pdf::loadHTML($html);
        $output = $pdf->output();

        // sementara: simpan PDF lalu convert ke PNG manual
        $filename = storage_path("app/public/invoice-{$orderNumber}.pdf");
        file_put_contents($filename, $output);

        // NOTE: Laravel sendiri tidak bisa langsung convert pdf ke image tanpa library tambahan (ghostscript/imagemagick)
        // Jadi biasanya kita cukup pakai PDF aja untuk download
        return response()->download($filename);
    }
}
