@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="inventory-container">
    <div class="inventory-header">
        Edit Produk
    </div>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form-update">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="product_image">Gambar Produk</label>
            @if($product->product_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image)) }}" alt="{{ $product->product_name }}" class="img-thumbnail" style="width: 100px;">
                </div>
            @endif
            <input type="file" name="product_image" id="product_image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="homepage-button">Update Produk</button>
            <a href="{{ route('products.index') }}" class="back-button">Batal</a>
        </div>
    </form>
</div>
@endsection