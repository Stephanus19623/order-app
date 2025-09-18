@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Product Inventory</h5>
            <a href="{{ route('products.create') }}" class="btn btn-warning">Add Product</a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text">Show</span>
                    <select class="form-select">
                        <option value="10">10</option>
                    </select>
                    <span class="input-group-text">entries</span>
                </div>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text">Search</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="bg-light">
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
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                @if($product->product_image)
                                    <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image)) }}" alt="{{ $product->product_name }}" class="img-thumbnail" style="width: 60px; height: 60px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <span class="text-muted">Showing {{ $products->count() }} of {{ $products->count() }} entries</span>
            <ul class="pagination mb-0">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsections