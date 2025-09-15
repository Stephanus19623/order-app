<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchasing Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f2ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Header */
        .header {
            background-color: #1d4e89;
            height: 50px;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }
        /* Hamburger Button */
        .menu-btn {
            cursor: pointer;
            width: 30px;
            height: 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .menu-btn div {
            height: 4px;
            background-color: white;
            border-radius: 2px;
        }
        /* Sidebar */
        .sidebar {
            width: 230px;
            background: #4a90e2;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 50px;
            left: -230px; /* disembunyikan default */
            transition: left 0.3s ease;
        }
        .sidebar.active {
            left: 0;
        }
        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 18px 0;
            font-size: 16px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
        /* Content */
        .content {
            margin-left: 0; /* default tanpa sidebar */
            padding: 40px;
            text-align: center;
            transition: margin-left 0.3s ease;
        }
        .content.shift {
            margin-left: 250px;
        }
        .content h1 {
            font-size: 30px;
            font-weight: bold;
            color: #1d3557;
        }
        .content p {
            color: #333;
            margin-bottom: 30px;
        }
        .btn-orange {
            background-color: #f26522;
            color: white;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border: none;
        }
        .btn-orange:hover {
            background-color: #d35400;
            color: white;
        }
        /* Footer */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #1d4e89;
            height: 40px;
        }
    </style>
</head>
<body>

    <!-- Header Bar -->
    <div class="header">
        <div class="menu-btn" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{ url('/register-company') }}">✔ Register Your Company</a></li>
            <li><a href="{{ url('/my-orders') }}">📦 Order Lists</a></li>
            <li><a href="{{ url('/products') }}">🔍 Our Company</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        <h1>Purchasing Order Form</h1>
        <p>Welcome! Please make an order below before purchasing at our services.</p>

        <!-- Buttons -->
        <a href="{{ url('/orders/create') }}" class="btn-orange">Order Now</a>
        <br>
        <small>Or if you have placed an order, you can check for your invoice.</small>
        <br>
        <a href="{{ route('invoice.check.form') }}" class="btn-orange">Invoice Check</a>
    </div>

    <!-- Footer -->
    <div class="footer"></div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('content').classList.toggle('shift');
        }
    </script>

</body>
</html>
