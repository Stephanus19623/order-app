<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home()
    {
        return view('welcome'); // ganti dengan view home kamu
    }

    public function invoice()
    {
        return view('Invoice.show'); // ganti dengan view invoice yang kamu punya
    }

    public function create()
    {
        return view('Order.order'); // ganti dengan view form order yang kamu punya
    }

    // =====================
    // Tambahan baru untuk tombol Home
    // =====================
   public function orderNow()
{
    // arahkan ke halaman order
    return redirect()->route('order');
}

public function invoiceCheck()
{
    // arahkan ke halaman invoice
    return redirect()->route('invoice.index');
}

}

