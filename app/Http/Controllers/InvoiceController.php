<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // tampilkan form invoice check
    public function index()
    {
        return view('invoice.check');
    }

    // proses pencarian invoice
    public function search(Request $request)
    {
        $request->validate([
            'order_number' => 'required',
            'company' => 'required'
        ]);

        // logika pencarian invoice bisa disesuaikan
        // misalnya cek database atau kirim pesan sukses

        return back()->with('success', 'Invoice ditemukan untuk Order #' . $request->order_number . ' - ' . $request->company);
    }
}
