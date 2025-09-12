<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $order->id }}</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .invoice-box {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            border: 1px solid #eee;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,.15);
        }
        h1 { text-align: center; color: #333; }
        .details { margin: 20px 0; }
        .details th, .details td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .total { font-size: 18px; font-weight: bold; }
        .btn-download {
            display: inline-block;
            margin-top: 20px;
            background: #3498db;
            color: #fff;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
        }
        .btn-download:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <h1>Invoice</h1>
        <p><strong>Invoice ID:</strong> #{{ $order->id }}</p>
        <p><strong>Company:</strong> {{ $order->company_name }}</p>
        <p><strong>Date:</strong> {{ $order->created_at->format('d M Y') }}</p>

        <table class="details" width="100%">
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price (Rp)</th>
                <th>Total (Rp)</th>
            </tr>
            <tr>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ number_format($order->price, 0, ',', '.') }}</td>
                <td class="total">{{ number_format($order->quantity * $order->price, 0, ',', '.') }}</td>
            </tr>
        </table>

        <a href="{{ route('download.invoice', $order->id) }}" class="btn-download">Download Invoice</a>
    </div>
</body>
</html>
