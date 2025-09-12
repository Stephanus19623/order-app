<!DOCTYPE html>
<html>
<head>
    <title>Purchasing Order Form</title>
    <style>
        body { background:#dbeafe; font-family: Arial, sans-serif; text-align: center; padding:50px; }
        h1 { color:#1e40af; }
        p { color:#1e3a8a; }
        .btn { background:#f97316; padding:15px 30px; border-radius:8px; color:white; text-decoration:none; display:inline-block; margin:10px; font-weight:bold; font-size:18px; }
        .btn:hover { background:#ea580c; }
    </style>
</head>
<body>
    <h1>Purchasing Order Form</h1>
    <p>Welcome! Please make an order below before purchasing at our services.</p>
    
    <a href="#" class="btn">Order Now</a>
    
    <p>Or if you have placed an order, you can check for your invoice.</p>
    <a href="{{ route('invoice.check.form') }}" class="btn">Invoice Check</a>
</body>
</html>
