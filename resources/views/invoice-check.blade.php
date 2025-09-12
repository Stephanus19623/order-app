<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background:#f4f7fb; margin:0; padding:0; }
        .container { max-width:800px; margin:50px auto; background:#fff; padding:30px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.15); }
        h2 { text-align:center; background:#004080; color:#fff; padding:12px; border-radius:8px; }
        label { display:block; margin:15px 0 5px; color:#004080; font-weight:600; }
        input { width:100%; padding:12px; border:1px solid #ccc; border-radius:6px; margin-bottom:20px; }
        .btn { display:block; width:100%; background:#ff6600; color:#fff; padding:14px; border:none; border-radius:6px; font-size:16px; cursor:pointer; transition:0.3s; }
        .btn:hover { background:#e65c00; }

        /* INVOICE STYLING */
        .invoice-box { margin-top:30px; padding:25px; background:#fff; border:1px solid #ddd; border-radius:10px; }
        .invoice-header { display:flex; justify-content:space-between; align-items:center; border-bottom:2px solid #004080; padding-bottom:10px; margin-bottom:20px; }
        .invoice-header h3 { margin:0; color:#004080; }
        .invoice-header .company-info { text-align:right; }
        .invoice-header .company-info h4 { margin:0; color:#333; }
        .invoice-header .company-info p { margin:0; font-size:14px; color:#555; }

        table { width:100%; border-collapse:collapse; margin-bottom:20px; }
        table th, table td { border:1px solid #ccc; padding:10px; text-align:left; }
        table th { background:#004080; color:#fff; }
        table tr:nth-child(even) { background:#f9f9f9; }

        .invoice-total { text-align:right; font-size:18px; font-weight:bold; margin-top:15px; color:#004080; }
        .status-paid { display:inline-block; padding:6px 12px; background:#28a745; color:#fff; border-radius:5px; font-size:14px; }
        .status-unpaid { display:inline-block; padding:6px 12px; background:#dc3545; color:#fff; border-radius:5px; font-size:14px; }

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

            <label for="company">Input your Company</label>
            <input type="text" id="company" name="company" required>

            <button type="submit" class="btn">Search Invoice</button>
        </form>

        @isset($invoice)
        <div class="invoice-box">
            <div class="invoice-header">
                <h3>Invoice #{{ $invoice['order_number'] }}</h3>
                <div class="company-info">
                    <h4>{{ $invoice['company'] }}</h4>
                    <p>Jl. Merdeka No.123</p>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>

            <table>
                <tr>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Product A</td>
                    <td>2</td>
                    <td>Rp 2.500.000</td>
                    <td>Rp 5.000.000</td>
                </tr>
            </table>

            <div class="invoice-total">
                Total: {{ $invoice['amount'] }}
            </div>

            <p><b>Status:</b> 
                @if($invoice['status'] === 'Paid')
                    <span class="status-paid">Paid</span>
                @else
                    <span class="status-unpaid">Unpaid</span>
                @endif
            </p>
            <p><b>Date:</b> {{ $invoice['date'] }}</p>
        </div>
        @endisset

        <div class="back-link">
            <a href="{{ url('/') }}">← Back to Home</a>
        </div>
    </div>
</body>
</html>
