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
<a href="{{ route('orders.create') }}" 
   class="btn-main animate-slideUp" 
   style="animation-delay:0.7s;animation-fill-mode:forwards;">
   Order Now
</a>
<a href="{{ route('invoice.index') }}" 
   class="btn-secondary animate-slideUp" 
   style="animation-delay:0.9s;animation-fill-mode:forwards; margin-left:10px;">
   Check Invoice
</body>
</html>
