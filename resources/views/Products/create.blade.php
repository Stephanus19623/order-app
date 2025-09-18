@extends('layouts.app')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="inventory-container">
    <div class="inventory-header">
        Tambah Produk Baru
    </div>
    
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="product_name">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_image">Gambar Produk</label>
            <input type="file" name="product_image" id="product_image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stock">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>
        
        <div class="form-group mt-4">
            <button type="submit" class="homepage-button">Simpan Produk</button>
            <a href="{{ route('products.index') }}" class="back-button">Batal</a>
        </div>
    </form>
</div>
@endsection