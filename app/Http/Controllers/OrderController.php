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
}
