<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Tampilkan form order
    public function create()
    {
        return view('orders.create');
    }

    // Simpan data order
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string'
        ]);

        // (sementara tidak disimpan ke database, hanya simulasi)
        return redirect()->route('orders.create')
            ->with('success', 'Order berhasil disimpan!');
    }
}
