@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order List</h2>
    <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">+ Tambah Order</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->item_name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>
                    <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST">
                        @csrf
                        <select name="status" onchange="this.form.submit()" class="form-select">
                            <option value="On Progress" {{ $order->status == 'On Progress' ? 'selected' : '' }}>On Progress</option>
                            <option value="Checked" {{ $order->status == 'Checked' ? 'selected' : '' }}>Checked</option>
                            <option value="Deliver" {{ $order->status == 'Deliver' ? 'selected' : '' }}>Deliver</option>
                        </select>
                    </form>
                </td>
                <td>
                    <span class="badge 
                        @if($order->status == 'On Progress') bg-warning 
                        @elseif($order->status == 'Checked') bg-info 
                        @else bg-success @endif">
                        {{ $order->status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
