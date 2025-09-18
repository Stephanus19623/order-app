@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Order Baru</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="item_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Order</button>
    </form>
</div>
@endsection