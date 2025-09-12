<!DOCTYPE html>
<html>
<head>
    <title>Invoice Check</title>
    <style>
        body { background:#dbeafe; font-family: Arial, sans-serif; text-align: center; padding:50px; }
        .form-container { background:white; padding:20px; border-radius:10px; width:300px; margin:auto; }
        input { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
        .btn { background:#f97316; padding:10px 20px; border-radius:5px; color:white; text-decoration:none; display:inline-block; font-weight:bold; }
        .btn:hover { background:#ea580c; }
    </style>
</head>
<body>
    <h2>Invoice Check</h2>
    <div class="form-container">
        <form action="{{ route('invoice.check.search') }}" method="POST">
            @csrf
            <label>Input your Order Number below</label>
            <input type="text" name="order_number" placeholder="Order Number" required>

            <label>Select your Company</label>
            <input type="text" name="company" placeholder="Company Name" required>

            <button type="submit" class="btn">Search Invoice</button>
        </form>
    </div>
</body>
</html>
