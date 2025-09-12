<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homepage</title>
  <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body style="text-align:center; padding:5rem;">
  <h1>Welcome to Our Ordering System</h1>
  <a href="{{ route('invoice.check') }}" 
     class="btn-main"
     style="padding:1rem 2rem; background:#f97316; color:#fff; border-radius:8px; text-decoration:none; font-weight:bold;">
     Order Now
  </a>
</body>
</html>
