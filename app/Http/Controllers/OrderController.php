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
        return view('order.choose', compact('companies'));
    }

    // Tampilkan list order berdasarkan company
    public function listByCompany(Request $request)
    {
        $companyId = $request->company_id;

        $orders = Order::with('items.product')
                    ->where('company_id', $companyId)
                    ->get();

        return view('order.index', compact('orders'));
    }

    // Tabel semua order (kalau mau tanpa filter)
    public function index()
    {
        $orders = Order::with('items.product')->get();
        return view('order.index', compact('orders'));
    }
}