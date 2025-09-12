<!DOCTYPE html>
<html>
<head>
    <title>Purchasing Order Form</title>
    <style>
        body { background:#dbeafe; font-family: Arial, sans-serif; text-align: center; padding:50px; }
        .btn { background:#f97316; padding:10px 20px; border-radius:5px; color:white; text-decoration:none; display:inline-block; margin:10px; font-weight:bold; }
        .btn:hover { background:#ea580c; }
    </style>
</head>
<body>
    <h1>Purchasing Order Form</h1>
    <p>Welcome! Please make an order below before purchasing at our services.</p>
    <a href="#" class="btn">Order Now</a>
    <br><br>
    <p>Or if you have placed an order, you can check for your invoice.</p>
    <a href="{{ route('invoice.check.form') }}" class="btn">Invoice Check</a>
</body>
</html>
