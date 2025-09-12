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
     <button class="btn-main animate-slideUp" style="animation-delay:0.7s;animation-fill-mode:forwards;"
        onclick="window.location.href='{{ route('invoice.check') }}'">
    Order Now
</button>
</a>

</body>
</html>
