<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero {
            background: linear-gradient(90deg, #fd7e14, #0d6efd);
            color: white;
            padding: 60px 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .hero h1 {
            font-weight: 700;
            font-size: 2.5rem;
        }
        .hero p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        .card {
            border: none;
            border-radius: 15px;
        }
        .card-header {
            background: #0d6efd;
            color: white;
            font-weight: bold;
            border-radius: 15px 15px 0 0;
        }
        .table thead {
            background: #fd7e14;
            color: white;
        }
        .table tbody tr:hover {
            background-color: #fff3e6;
        }
        .badge-status {
            font-size: 0.9rem;
            padding: 8px 12px;
            border-radius: 12px;
        }
        .badge-progress { background: #fd7e14; color: white; }
        .badge-checked { background: #0d6efd; }
        .badge-deliver { background: #198754; }
    </style>
</head>
<body>

<div class="container mt-4">
    <!-- Hero Header -->
    <div class="hero text-center">
        <h1><i class="bi bi-box-seam"></i> Order Management</h1>
        <p>Kelola & pantau status order perusahaan dengan lebih mudah</p>
    </div>

    <!-- Card Order List -->
    <div class="card shadow">
        <div class="card-header">
            <i class="bi bi-list-check"></i> Daftar Order
        </div>
        <div class="card-body">
            <table class="table table-bordered align-middle text-center">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Items</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>
                                @if($order->status === 'On Progress')
                                    <span class="badge-status badge-progress">On Progress</span>
                                @elseif($order->status === 'Checked')
                                    <span class="badge-status badge-checked">Checked</span>
                                @elseif($order->status === 'Deliver')
                                    <span class="badge-status badge-deliver">Deliver</span>
                                @endif
                            </td>
                            <td>
                                <table class="table table-sm table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->items as $item)
                                            <tr>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">Belum ada order</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
