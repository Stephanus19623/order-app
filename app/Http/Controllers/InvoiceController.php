<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'order_number' => 'required',
            'company' => 'required',
        ]);

        $invoice = Invoice::where('order_number', $request->order_number)
                          ->where('company', $request->company)
                          ->first();

        if ($invoice) {
            return view('invoice.result', compact('invoice'));
        } else {
            return back()->with('error', 'Invoice not found');
        }
    }
}
