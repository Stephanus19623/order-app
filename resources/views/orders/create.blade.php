<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E6F2FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #004A99;
            margin-bottom: 20px;
        }

        input, textarea, button {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        button {
            background: #FF6600;
            color: white;
            border: none;
            font-weight: bold;
        }

        button:hover {
            background: #E65C00;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Create Order</h2>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <input type="text" name="product" placeholder="Product Name" required>
            <input type="number" name="quantity" placeholder="Quantity" required>
            <textarea name="notes" placeholder="Notes (optional)"></textarea>
            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>
