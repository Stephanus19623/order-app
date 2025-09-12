<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice {{ $invoice['order_number'] }}</title>
    <style>
        body { font-family:Arial, sans-serif; background:#f4f7fb; padding:30px; }
        .invoice { background:#fff; padding:25px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); max-width:800px; margin:auto; }
        h2 { color:#004080; margin-bottom:20px; }
        table { width:100%; border-collapse:collapse; margin-bottom:20px; }
        table th, table td { border:1px solid #ccc; padding:10px; text-align:left; }
        table th { background:#004080; color:#fff; }
        .total { text-align:right; font-size:18px; font-weight:bold; }
        .btn { padding:10px 15px; margin-right:10px; background:#ff6600; color:#fff; border:none; border-radius:5px; text-decoration:none; }
    </style>
</head>
<body>
    <div class="invoice">
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

        <a href="{{ route('invoice.downloadPDF', [$invoice['order_number'], $invoice['company']]) }}" class="btn">Download PDF</a>
        <a href="{{ route('invoice.downloadImage', [$invoice['order_number'], $invoice['company']]) }}" class="btn">Download Image</a>
        <a href="{{ url('/') }}" class="btn" style="background:#004080;">Back Home</a>
    </div>
</body>
</html>
