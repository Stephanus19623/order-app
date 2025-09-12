<!DOCTYPE html>
<html>
<head>
    <title>Invoice Check</title>
    <style>
        body { background:#dbeafe; font-family: Arial, sans-serif; text-align:center; padding:50px; }
        h2 { background:#1e40af; color:white; padding:10px; border-radius:5px; width:50%; margin:auto; }
        .form-container { margin-top:30px; }
        input { width:300px; padding:12px; margin:15px auto; border-radius:8px; border:none; display:block; }
        .btn { background:#f97316; padding:15px 30px; border-radius:8px; color:white; text-decoration:none; display:inline-block; font-weight:bold; font-size:18px; border:none; cursor:pointer; }
        .btn:hover { background:#ea580c; }
    </style>
</head>
<body>
    <h2>Invoice Check</h2>
    <div class="form-container">
        <form action="{{ route('invoice.check.search') }}" method="POST">
            @csrf
            <label>Input your Order Number below</label>
            <input type="text" name="order_number" required>

            <label>Select your Company</label>
            <input type="text" name="company" required>

            <button type="submit" class="btn">Search Invoice</button>
        </form>
    </div>
</body>
</html>
