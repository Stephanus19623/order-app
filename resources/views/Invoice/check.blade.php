<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E6F2FF;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            width: 450px;
            overflow: hidden;
        }

        .form-header {
            background-color: #004A99;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .form-body {
            padding: 25px;
            text-align: center;
        }

        .form-body p {
            margin-bottom: 8px;
            font-size: 15px;
            color: #333;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #FF6600;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #E65C00;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            Invoice Check
        </div>
        <div class="form-body">
            @if(session('error'))
                <p style="color:red; text-align:center;">{{ session('error') }}</p>
            @endif

            <form action="{{ route('invoice.check.search') }}" method="POST">
                @csrf
                <p>Input your Order Number below</p>
                <input type="text" name="order_number" placeholder="Order Number" required>

                <p>Select your Company</p>
                <input type="text" name="company" placeholder="Company Name" required>

                <button type="submit">Search Invoice</button>
            </form>
        </div>
    </div>
</body>
</html>
