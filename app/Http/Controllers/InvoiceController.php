<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('Invoice.index'); // halaman daftar/awal invoice
    }

    public function checkForm()
    {
        return view('Invoice.check');
    }

    public function search(Request $request)
    {
        $orderNumber = $request->order_number;
        $company     = $request->company;

        // nanti bisa tambahin logic cari order
        return view('Invoice.result', compact('orderNumber', 'company'));
    }

    public function show($orderNumber)
    {
        $order   = Order::where('order_number', $orderNumber)->firstOrFail();
        $invoice = $order->invoice;

        return view('Invoice.show', compact('order', 'invoice'));
    }

    public function downloadPDF($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->first();

        if (! $order) {
            return redirect()->route('nvoice.check.form')
                             ->with('error', 'Order not found.');
        }

        $invoice = $order->invoice ?? Invoice::create([
            'order_id' => $order->id,
            'invoice_number' => 'INV-' . now()->format('Ymd') . '-' . strtoupper(Str::random(5)),
        ]);

        $data = [
            'order'       => $order,
            'invoice'     => $invoice,
            'company'     => $order->company->name ?? null,
            'orderNumber' => $orderNumber,
        ];

        $pdf = Pdf::loadView('invoice.pdf', $data);

        $filename = 'invoice_' . $invoice->invoice_number . '.pdf';

        Storage::put('invoices/' . $filename, $pdf->output());

        return $pdf->download($filename);
    }

    public function printing()
    {
        return view('Invoice.printing');
    }
}
