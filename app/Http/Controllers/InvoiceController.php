<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function checkForm()
    {
        return view('invoice-check');
    }

    public function search(Request $request)
    {
        $orderNumber = $request->order_number;
        $company = $request->company;

        return view('invoice-result', compact('orderNumber', 'company'));
    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
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

    public function edit($id)
    {
        //
    }
}
