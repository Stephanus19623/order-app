!DOCTYPE html>
<html>
<head>
    <title>Purchasing Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <h2>Purchasing Order Form</h2>
        <p>Welcome! Please make an order below before purchasing at our services.</p>

        <a href="{{ route('order') }}" class="btn btn-warning btn-lg">Order Now</a>
        <br><br>
        <a href="{{ route('invoice.index') }}" class="btn btn-danger btn-lg">Invoice Check</a>
    </div>

</body>
</html>
