<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Tampilkan form order
    public function create()
    {
        return view('order');
    }

    // Simpan data order
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'product' => 'required',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
            'created_at' => 'nullable|date',
        ]);

        // nanti di sini bisa simpan ke database
        // Order::create([...]);

        return redirect()->route('order.complete')->with('success', 'Order berhasil disimpan!');
    }
}
    