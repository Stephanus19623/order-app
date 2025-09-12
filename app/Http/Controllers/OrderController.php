<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Simpan order
        // Cek apakah order dengan data yang sama sudah ada
        // Cek apakah order dengan data yang sama sudah ada
        $order = Order::where('company_name', $request->company_name)
            ->where('product_name', $request->product_name)
            ->where('quantity', $request->quantity)
            ->where('price', $request->price)
            ->first();
        if ($order) {
            // Jika order sudah ada, arahkan ke halaman invoice dengan pesan
            return redirect()->route('invoice.show', $order->id)
            ->with('message', 'Order already exists.');
        }

        if (!$order) {
            // Jika belum ada, buat order baru
            $order = Order::create([
            'company_name' => $request->company_name,
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            ]);
        }

        // Arahkan ke halaman invoice
        return redirect()->route('invoice.show', $order->id);
    }

    public function invoice($id)
    {
        $order = Order::findOrFail($id);
        return view('invoice', compact('order'));
    }

    public function downloadInvoice($id)
    {
        $order = Order::findOrFail($id);

        $pdf = Pdf::loadView('invoice-pdf', compact('order'));
        return $pdf->download('invoice-'.$order->id.'.pdf');
    }

    public function searchInvoice(Request $request)
{
    $id = $request->invoice_id;
    $order = Order::find($id);

    if (!$order) {
        return redirect()->back()->with('error', 'Invoice not found!');
    }

    return redirect()->route('invoice.show', $order->id);
}

}
