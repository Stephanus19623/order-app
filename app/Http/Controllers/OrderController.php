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
        // validasi input
        $request->validate([
            'product' => 'required',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string'
        ]);

        // nanti di sini bisa simpan ke database
        // Order::create([...]);

        return redirect()->route('orders.create')->with('success', 'Order berhasil disimpan!');
    }

    public function index()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
