<?php
// app/Http/Controllers/CompanyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create()
    {
        return view('company.create');
    }

    public function success()
    {
        return view('company.success');
    }

    public function store(Request $request)
    {
        // PERBAIKAN: Gunakan nama field yang benar sesuai form (name="...")
        $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|unique:companies|max:255'
        ]);

        // PERBAIKAN: Gunakan nama field yang sama untuk menyimpan ke database
        Company::create([
            'company_name' => $request->company_name,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
        ]);
        
        // PERBAIKAN: Redirect kembali ke halaman pendaftaran dengan pesan sukses
        return redirect()->route('company.register')->with('success', 'Pendaftaran berhasil!');
    }
}