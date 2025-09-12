<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Check</title>
  <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body>
  <div class="container">
    <h2>Invoice Check</h2>

    @if(session('error'))
      <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('invoice.search') }}" method="POST">
      @csrf
      <label>Order Number</label>
      <input type="text" name="order_number" required>

      <label>Company</label>
      <input type="text" name="company" required>

      <button type="submit">Search Invoice</button>
    </form>
  </div>
</body>
</html>
