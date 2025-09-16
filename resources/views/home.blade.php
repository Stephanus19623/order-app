<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background-color: #2c3e50;
      color: white;
      height: 100vh;
      padding: 20px;
    }
    .sidebar h2 {
      margin-top: 0;
      text-align: center;
    }
    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      margin: 8px 0;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }
    .sidebar a:hover {
      background-color: #34495e;
    }

    /* Main content */
    .content {
      flex: 1;
      padding: 50px;
      text-align: center;
      background: #ecf0f1;
    }
    .content h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .btn-order {
      background-color: #3498db;
      border: none;
      padding: 15px 40px;
      color: white;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn-order:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Menu</h2>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('products.index') }}">Products</a>
    <a href="{{ route('company.create') }}">Register Company</a>
    <a href="{{ route('invoice.index') }}">Invoices</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h1>Welcome to Order System</h1>
    <a href="{{ route('order.step1') }}">
      <button class="btn-order">Order Now</button>
    </a>
  </div>

</body>
</html>
