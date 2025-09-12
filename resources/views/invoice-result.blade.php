<!DOCTYPE html>
<html>
<head>
    <title>Invoice Result</title>
    <style>
        body { background:#f1f5f9; font-family: Arial, sans-serif; text-align:center; padding:50px; }
        .invoice-box { background:white; padding:20px; border-radius:10px; width:400px; margin:auto; text-align:left; box-shadow:0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align:center; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <h2>Invoice Result</h2>
        <p><strong>Order Number:</strong> {{ $orderNumber }}</p>
        <p><strong>Company:</strong> {{ $company }}</p>
    </div>
</body>
</html>
