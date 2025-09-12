<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f1fd;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #1d4e89;
            height: 20px;
        }
        .container {
            max-width: 500px;
            margin: 3rem auto;
            background: #dceeff;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
        }
        .title {
            background-color: #004c97;
            color: #fff;
            padding: 0.7rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }
        .input-box {
            width: 100%;
            padding: 0.8rem;
            margin: 0.8rem 0;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
        }
        .btn-main {
            background: #f97316;
            color: white;
            border: none;
            padding: 0.9rem 1.5rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-main:hover {
            background: #ea580c;
        }
        .success {
            background: #d1fae5;
            color: #065f46;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="header"></div>

    <div class="container">
        <div class="title">Invoice Check</div>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('invoice.search') }}">
            @csrf
            <label>Input your Order Number below</label>
            <input type="text" name="order_number" class="input-box" placeholder="Enter Order Number" required>

            <label>Select your Company</label>
            <input type="text" name="company" class="input-box" placeholder="Enter Company Name" required>

            <button type="submit" class="btn-main">Search Invoice</button>
        </form>
    </div>
</body>
</html>
