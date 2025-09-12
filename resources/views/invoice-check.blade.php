<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
</head>
<body style="font-family:Arial, sans-serif;background:#eef3f9;padding:40px;">
    <h2>Check Your Invoice</h2>
    <form action="{{ route('invoice.search') }}" method="POST">
        @csrf
        <label>Order Number</label>
        <input type="text" name="order_number" required><br><br>

        <label>Company</label>
        <input type="text" name="company" required><br><br>

        <button type="submit">Search Invoice</button>
    </form>
</body>
</html>
