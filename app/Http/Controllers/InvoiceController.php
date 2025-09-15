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
    public function checkForm()
    {
        return view('invoice-check');
    }

    public function search(Request $request)
    {
        $orderNumber = $request->order_number;
        $company     = $request->company;

        return view('invoice-result', compact('orderNumber', 'company'));
    }

    //  fitur baru
    public function downloadPDF($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->first();

        if (! $order) {
            return redirect()->route('invoice.check.form')
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

        $pdf = Pdf::loadView('invoice-pdf', $data);

        $filename = 'invoice_' . $invoice->invoice_number . '.pdf';

        Storage::put('invoices/' . $filename, $pdf->output());

        return $pdf->download($filename);
    }

    // fungsi default bawaan
    public function index() {}
    public function store(Request $request) {}
    public function show($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
    public function edit($id) {}
}
