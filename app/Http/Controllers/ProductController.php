<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan baris ini


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('inventory', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $imagePath = null;
        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('public/products');
        }

        Product::create([
            'product_name' => $request->product_name,
            'product_image' => $imagePath,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

   public function update(Request $request, Product $product)
{
    // Validasi data input
    $request->validate([
        'product_name' => 'required',
        'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
    ]);

    // Inisialisasi data yang akan diupdate
    $data = $request->except('product_image');

    // Periksa apakah ada file gambar baru yang diunggah
    if ($request->hasFile('product_image')) {
        // Hapus gambar lama jika ada
        if ($product->product_image) {
            Storage::delete($product->product_image);
        }
        // Simpan gambar baru dan tambahkan jalurnya ke data update
        $data['product_image'] = $request->file('product_image')->store('public/products');
    }

    // Perbarui data produk
    $product->update($data);

    return redirect()->route('products.index');
}

    public function destroy(Product $product)
    {
        if ($product->product_image) {
            Storage::delete($product->product_image);
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}