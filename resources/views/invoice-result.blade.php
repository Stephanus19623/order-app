<!DOCTYPE html>
<html>
<head>
    <title>Invoice Result</title>
    <style>
        body { background:#dbeafe; font-family: Arial, sans-serif; text-align:center; padding:50px; }
        .box { background:white; padding:20px; border-radius:10px; width:400px; margin:auto; box-shadow:0 0 10px rgba(0,0,0,0.1); }
        h2 { color:#1e40af; }
        p { font-size:16px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Invoice Result</h2>
        <p><strong>Order Number:</strong> {{ $orderNumber }}</p>
        <p><strong>Company:</strong> {{ $company }}</p>
    </div>
</body>
</html>
