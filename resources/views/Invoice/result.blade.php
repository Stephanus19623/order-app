<!DOCTYPE html>
<html>
<head>
    <title>Invoice Result</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f7fa; }
        .container { max-width:700px; margin:50px auto; background:#fff; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1);}
        h2 { text-align:center; color:#333; }
        table { width:100%; margin-top:20px; border-collapse:collapse; }
        th, td { border:1px solid #ddd; padding:10px; text-align:left; }
        th { background:#007bff; color:white; }
        .btn { display:inline-block; margin-top:20px; padding:12px 20px; background:#28a745; color:white; text-decoration:none; border-radius:5px; }
        .btn:hover { background:#218838; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Invoice #{{ $data['id'] }}</h2>
        <table>
            <tr><th>Order Number</th><td>{{ $data['order_number'] }}</td></tr>
            <tr><th>Company</th><td>{{ $data['company'] }}</td></tr>
            <tr><th>Status</th><td>{{ $data['status'] }}</td></tr>
            <tr><th>Amount</th><td>{{ $data['amount'] }}</td></tr>
            <tr><th>Date</th><td>{{ $data['date'] }}</td></tr>
        </table>

        <a href="{{ route('invoice.download', $data['id']) }}" class="btn">Download PDF</a>
    </div>
</body>
</html>
