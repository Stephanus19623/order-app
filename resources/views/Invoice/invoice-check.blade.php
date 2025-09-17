<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f2ff;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #1d4e89;
            padding: 12px;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .form-box {
            background: #ffffffcc;
            border-radius: 8px;
            padding: 25px;
            margin: 50px auto;
            max-width: 500px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .btn-orange {
            background-color: #f26522;
            color: white;
            font-weight: bold;
        }
        .btn-orange:hover {
            background-color: #d35400;
        }
        .btn-back {
            margin-top: 15px;
            background-color: #1d4e89;
            color: white;
            font-weight: bold;
        }
        .btn-back:hover {
            background-color: #163a63;
        }
    </style>
</head>
<body>

    <div class="header">Invoice Check</div>

    <div class="form-box text-center">
        <form action="{{ route('invoice.check.search') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Input your Order Number below</label>
                <input type="text" name="order_number" class="form-control" placeholder="Enter Order Number" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Select your Company</label>
                <input type="text" name="company" class="form-control" placeholder="Enter Company Name" required>
            </div>
            <button type="submit" class="btn btn-orange w-100">Search Invoice</button>
        </form>

        <!-- Tombol Back to Home -->
        <a href="{{ url('/') }}" class="btn btn-back w-100">⬅ Back to Home</a>
    </div>

</body>
</html>
