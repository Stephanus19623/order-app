<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $invoice['order_number'] }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h2 { color:#004080; }
        table { width:100%; border-collapse:collapse; margin-bottom:20px; }
        table th, table td { border:1px solid #ccc; padding:8px; }
        table th { background:#004080; color:#fff; }
        .total { text-align:right; font-weight:bold; }
    </style>
</head>
<body>
    <h2>Invoice #{{ $invoice['order_number'] }}</h2>
    <p><b>Company:</b> {{ $invoice['company'] }}</p>
    <p><b>Date:</b> {{ $invoice['date'] }}</p>
    <p><b>Status:</b> {{ $invoice['status'] }}</p>

    <table>
        <tr>
            <th>Description</th><th>Qty</th><th>Unit Price</th><th>Total</th>
        </tr>
        @foreach($invoice['items'] as $item)
        <tr>
            <td>{{ $item['desc'] }}</td>
            <td>{{ $item['qty'] }}</td>
            <td>Rp {{ number_format($item['price'],0,',','.') }}</td>
            <td>Rp {{ number_format($item['total'],0,',','.') }}</td>
        </tr>
        @endforeach
    </table>

    <p class="total">Grand Total: {{ $invoice['amount'] }}</p>
</body>
</html>
