<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dbe9f4;
            font-family: Arial, sans-serif;
        }
        .sidebar-bar {
            background-color: #1d4e89;
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }
        .hamburger {
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
        .content-box {
            background-color: #f4efdf;
            border: 6px solid #2f2b2a;
            border-radius: 8px;
            margin: 40px auto;
            max-width: 500px;
            padding: 60px 20px;
            text-align: center;
        }
        .content-box img {
            width: 120px;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff5c5c;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            margin: 10px;
        }
        .btn-custom:hover {
            background-color: #e14e4e;
        }
    </style>
</head>
<body>

    <!-- Bar atas -->
    <div class="sidebar-bar">
        <div class="hamburger">&#9776;</div>
    </div>

    <!-- Isi -->
    <div class="content-box">
        <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="Invoice Icon">

        <h4>Invoice Number: {{ $orderNumber }}</h4>
        <p>Company: {{ $company }}</p>

        <!-- Tombol navigasi -->
        <div>
            <a href="{{ route('invoice.check.form') }}" class="btn btn-custom">Back</a>
            <a href="{{ url('/') }}" class="btn btn-custom">Homepage</a>
            <a href="{{ url('/invoice/'.$orderNumber.'/download') }}" class="btn btn-custom">
                Download PDF
            </a>
        </div>
    </div>

</body>
</html>
