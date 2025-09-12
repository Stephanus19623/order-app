<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Check</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e6f2ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 400px;
      text-align: center;
    }
    .header {
      background-color: #004a99;
      color: white;
      padding: 10px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #ff6600;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #e65c00;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">Invoice Check</div>
    @if(session('error'))
      <p style="color:red;">{{ session('error') }}</p>
    @endif
    <form action="{{ route('Search.Invoice') }}" method="POST">
      @csrf
      <p>Input your Order Number below</p>
      <input type="text" name="order_number" placeholder="Order Number" required>
      <p>Select your Company</p>
      <input type="text" name="company" placeholder="Company Name" required>
      <br>
      <button type="submit">Search Invoice</button>
    </form>
  </div>
</body>
</html>
