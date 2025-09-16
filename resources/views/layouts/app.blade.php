<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Order System')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f0f4f8;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #004a99 !important;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .btn-primary {
      background-color: #004a99;
      border: none;
    }
    .btn-warning {
      background-color: #ff6600;
      border: none;
    }
    .btn-success {
      background-color: #28a745;
      border: none;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">⚙️ Order System</a>
  </div>
</nav>

<div class="container my-5">
  @yield('content')
</div>

</body>
</html>
