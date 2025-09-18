<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Company;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    // Halaman pilih company
    public function choose()
    {
        $companies = Company::all();
        return view('orderlist.choose', compact('companies'));
    }

    // Tampilkan list order berdasarkan company
    public function listByCompany(Request $request)
    {
        $companyId = $request->id;

        $orders = Order::with('items.product')
                    ->where('id', $companyId)
                    ->get();

        return view('order.index', compact('orders'));
    }

    // Tabel semua order (kalau mau tanpa filter)
    public function index()
    {
        $orders = Order::with('items.product')->get();
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        return view('order.order'); // ganti dengan view form order yang kamu punya
    }

    // =====================
    // Tambahan baru untuk tombol Home
    // =====================
   public function order()
{
    // arahkan ke halaman order
    return view('order.order1');
}

public function invoiceCheck()
{
    // arahkan ke halaman invoice
    return redirect()->route('invoice.index');
}

public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'buyer_name' => 'required|string|max:255',
            'delivery' => 'nullable|string|max:255',
            'quantity' => 'required|integer|min:1',
            'due_date' => 'required|date',
        ]);

        Order::create([
            'company_name' => $request->company_name,
            'buyer_name' => $request->buyer_name,
            'delivery' => $request->delivery,
            'quantity' => $request->quantity,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('order.index')->with('success', 'Order created successfully!');
    }

    public function return()
    {
        return view('homepage');
    }

}