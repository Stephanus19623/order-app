<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h2 { text-align:center; margin-bottom:20px; }
        table { width:100%; border-collapse:collapse; }
        th, td { border:1px solid #000; padding:10px; text-align:left; }
        th { background:#eee; }
    </style>
</head>
<body>
    <h2>Invoice #{{ $data['id'] }}</h2>
    <table>
        <tr><th>Order Number</th><td>{{ $data['order_number'] }}</td></tr>
        <tr><th>Company</th><td>{{ $data['company'] }}</td></tr>
        <tr><th>Status</th><td>{{ $data['status'] }}</td></tr>
        <tr><th>Amount</th><td>{{ $data['amount'] }}</td></tr>
        <tr><th>Date</th><td>{{ $data['date'] }}</td></tr>
    </table>
</body>
</html>
