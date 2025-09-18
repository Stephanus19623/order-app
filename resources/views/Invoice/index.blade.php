<!DOCTYPE html>
<html>
<head>
    <title>Invoice Printing</title>
    <style>
        body {
            background-color: #e6f0ff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        .box {
            width: 400px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .btn {
            margin-top: 20px;
            background-color: #f26522;
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #d9531e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invoice Printing</h1>
        <div class="box">
            {{-- <p>Invoice #: <strong>{{ $invoice['invoice_number'] }}</strong></p> --}}
            {{-- <p>Customer: <strong>{{ $invoice['customer_name'] }}</strong></p>
            <p>Date: <strong>{{ $invoice['date'] }}</strong></p> --}}

            <table width="100%" style="margin-top: 10px;" border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Sub</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($invoice['items'] as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item['qty'] * $item['price'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>

            {{-- <h3>Total: Rp {{ number_format($invoice['total'], 0, ',', '.') }}</h3> --}}

            {{-- <a href="{{ route('invoice.download') }}" class="btn">Save to PDF</a> --}}
        </div>
    </div>
</body>
</html>
