<!DOCTYPE html>
<html>
<head>
    <title>Invoice Check</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f7fa; }
        .container { max-width:500px; margin:80px auto; background:#fff; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1);}
        h2 { text-align:center; margin-bottom:20px; color:#333; }
        label { font-weight:bold; margin-top:10px; display:block; }
        input { width:100%; padding:10px; margin-top:5px; border:1px solid #ccc; border-radius:5px; }
        button { width:100%; margin-top:20px; padding:12px; background:#007bff; border:none; color:#fff; border-radius:5px; cursor:pointer; font-size:16px;}
        button:hover { background:#0056b3; }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('invoice.search') }}">
    @csrf
    <label>Order Number</label>
    <input type="text" name="order_number" required>

    <label>Company</label>
    <input type="text" name="company" required>

    <button type="submit">Search Invoice</button>
</form>
</body>
</html>
