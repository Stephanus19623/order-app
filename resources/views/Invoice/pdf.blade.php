<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #aaa;
            padding: 6px;
            text-align: left;
        }

        h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Invoice #{{ $invoice['invoice_number'] }}</h2>
    <p>Customer: {{ $invoice['customer_name'] }}</p>
    <p>Date: {{ $invoice['date'] }}</p>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Sub</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice['items'] as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item['qty'] * $item['price'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total: Rp {{ number_format($invoice['total'], 0, ',', '.') }}</h3>
</body>
</html>
