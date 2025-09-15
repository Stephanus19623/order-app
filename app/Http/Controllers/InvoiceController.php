<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    /**
     * Menampilkan tampilan invoice.
     * * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data dummy invoice, ganti dengan data dari database atau input pelanggan
        $invoice = [
            'number' => 'INV-2025-001',
            'date' => '15 September 2025',
            'due_date' => '30 September 2025',
            'customer_name' => 'John Doe',
            'customer_address' => 'Jl. Merdeka No. 123, Jakarta',
            'customer_city' => 'Jakarta, 12345',
            'customer_email' => 'john.doe@example.com',
            'items' => [
                ['description' => 'Layanan Desain Web', 'quantity' => 1, 'unit_price' => 5000000, 'total' => 5000000],
                ['description' => 'Penyewaan Domain', 'quantity' => 1, 'unit_price' => 150000, 'total' => 150000]
            ],
            'subtotal' => 5150000,
            'tax' => 515000,
            'grand_total' => 5665000
        ];

        // Mengirim data $invoice ke view
        return view('invoice', compact('invoice'));
    }

    /**
     * Mengunduh invoice sebagai file PDF.
     * * @return \Illuminate\Http\Response
     */
    public function downloadPdf()
    {
        // Data invoice yang sama (penting untuk konsistensi)
        // Dalam aplikasi nyata, data ini akan diambil dari database
        $invoice = [
            'number' => 'INV-2025-001',
            'date' => '15 September 2025',
            'due_date' => '30 September 2025',
            'customer_name' => 'John Doe',
            'customer_address' => 'Jl. Merdeka No. 123, Jakarta',
            'customer_city' => 'Jakarta, 12345',
            'customer_email' => 'john.doe@example.com',
            'items' => [
                ['description' => 'Layanan Desain Web', 'quantity' => 1, 'unit_price' => 5000000, 'total' => 5000000],
                ['description' => 'Penyewaan Domain', 'quantity' => 1, 'unit_price' => 150000, 'total' => 150000]
            ],
            'subtotal' => 5150000,
            'tax' => 515000,
            'grand_total' => 5665000
        ];

        // Konversi tampilan 'invoice' menjadi PDF
        $pdf = Pdf::loadView('invoice', compact('invoice'));

        // Mengunduh file PDF dengan nama unik
        return $pdf->download('invoice-' . $invoice['number'] . '.pdf');
    }
}