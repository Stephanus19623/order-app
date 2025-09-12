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
        $order = Order::create([
            'company_name' => $request->company_name,
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

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
}
