<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homepage</title>
  <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body style="text-align:center; padding:5rem;">
  <h1>Welcome to Our Ordering System</h1>
  <form action="{{ route('invoice.search') }}" method="GET" style="text-align:center; margin-top:20px;">
    <input type="text" name="invoice_id" placeholder="Enter Invoice ID" required
        style="padding:8px; border:1px solid #ccc; border-radius:5px;">
    <button type="submit" class="btn-secondary">
        Search Invoice
    </button>
</form>
</a>
@if(session('error'))
    <div style="color:red; text-align:center; margin-bottom:15px;">
        {{ session('error') }}
    </div>
@endif
</body>
</html>
