<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Tambahkan ini

class CompanyController extends Controller
{
    /**
     * Display the company registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created company in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|unique:users|max:255', // Sesuaikan 'users' dengan tabel Anda jika berbeda
        ]);

        // Simulasikan penyimpanan ke database
        // Misalnya: Company::create($request->all());

        // Setelah berhasil, arahkan kembali ke halaman form dengan pesan sukses
        return redirect()->route('company.register')->with('success', 'Registry Success!');
    }

    // Method `success` sudah tidak diperlukan lagi
    // karena pop-up akan ditampilkan di halaman yang sama
    // Hapus method ini dan route terkait untuk menjaga kode tetap bersih
}