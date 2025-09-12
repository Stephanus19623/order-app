<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice PDF</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background: #f2f2f2; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Invoice #{{ $order->id }}</h2>
    <p><strong>Company:</strong> {{ $order->company_name }}</p>
    <p><strong>Date:</strong> {{ $order->created_at->format('d M Y') }}</p>

    <table>
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
            <td>{{ number_format($order->quantity * $order->price, 0, ',', '.') }}</td>
        </tr>
    </table>
</body>
</html>
