@extends('layouts.app')

@section('title', 'Product Inventory')

@section('content')

{{-- Navigasi Inventaris --}}
<div class="nav-links">
    {{-- Grup elemen kiri --}}
    <div style="display: flex; gap: 20px;">
        <a href="#">Products</a>
        <a href="#">Invoices</a>
    </div>

    {{-- Grup elemen kanan --}}
    <div class="profile" style="display: flex; align-items: center; gap: 15px;">
        <span>Selamat Datang di GACOAN</span>
        <span>You are: admin</span>
        <a href="#">Logout</a>
    </div>
</div>

<div class="inventory-container">
    <div class="inventory-controls">
        <div style="display: flex; align-items: center; gap: 5px;">
            Show 
            <select class="border p-1 rounded">
                <option>10</option>
            </select>
            entries
        </div>
        <div style="display: flex; align-items: center; gap: 5px;">
            Search: <input type="text" class="border p-1 rounded">
        </div>
        <a href="{{ route('products.create') }}" class="add-product-btn">Add Product</a>
    </div>

    <table class="inventory-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($products) && $products->count() > 0)
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>
                        {{-- Kode untuk menampilkan gambar --}}
                        @if ($product->product_image)
                            <img src="{{ Storage::url($product->product_image) }}" alt="{{ $product->product_name }}" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('products.edit', $product->id) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" style="text-align: center;">Tidak ada produk yang ditemukan.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
        <span>Showing 1 to {{ isset($products) ? $products->count() : 0 }} of {{ isset($products) ? $products->count() : 0 }} entries</span>
        <div style="display: flex; gap: 5px;">
            <a href="#" style="text-decoration: none; color: #666; padding: 8px 12px; border: 1px solid #ccc; border-radius: 4px;">Previous</a>
            <a href="#" style="text-decoration: none; color: white; background-color: var(--dark-blue); padding: 8px 12px; border: 1px solid var(--dark-blue); border-radius: 4px;">1</a>
            <a href="#" style="text-decoration: none; color: #666; padding: 8px 12px; border: 1px solid #ccc; border-radius: 4px;">Next</a>
        </div>
    </div>
</div>
@endsection