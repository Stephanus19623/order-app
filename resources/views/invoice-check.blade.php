<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e6f0ff; margin:0; padding:0; }
        .container { max-width:600px; margin:50px auto; background:#fff; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); }
        h2 { text-align:center; background:#004080; color:#fff; padding:10px; border-radius:5px; }
        label { display:block; margin:15px 0 5px; color:#004080; }
        input, select { width:100%; padding:10px; border:1px solid #ccc; border-radius:5px; margin-bottom:20px; }
        .btn { display:block; width:100%; background:#ff6600; color:#fff; padding:12px; border:none; border-radius:5px; font-size:16px; cursor:pointer; }
        .btn:hover { background:#e65c00; }
        .invoice-box { margin-top:20px; padding:20px; background:#f9f9f9; border:1px solid #ddd; border-radius:8px; }
        .back-link { display:block; margin-top:20px; text-align:center; }
        .back-link a { color:#004080; text-decoration:none; font-weight:bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Invoice Check</h2>
        <form action="{{ route('invoice.search') }}" method="POST">
            @csrf
            <label for="order_number">Input your Order Number below</label>
            <input type="text" id="order_number" name="order_number" required>

            <label for="company">Select your Company</label>
            <select id="company" name="company" required>
                <option value="">-- Choose Company --</option>
                @foreach($companies as $c)
                    <option value="{{ $c }}">{{ $c }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn">Search Invoice</button>
        </form>

        @isset($invoice)
        <div class="invoice-box">
            <h3>Invoice Result</h3>
            <p><b>Order Number:</b> {{ $invoice['order_number'] }}</p>
            <p><b>Company:</b> {{ $invoice['company'] }}</p>
            <p><b>Status:</b> {{ $invoice['status'] }}</p>
            <p><b>Amount:</b> {{ $invoice['amount'] }}</p>
            <p><b>Date:</b> {{ $invoice['date'] }}</p>
        </div>
        @endisset

        <div class="back-link">
            <a href="{{ url('/') }}">← Back to Home</a>
        </div>
    </div>
</body>
</html>
