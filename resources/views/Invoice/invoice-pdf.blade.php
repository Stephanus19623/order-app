<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $invoice->invoice_number }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; color:#333; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #eee; }
        .total { text-align: right; margin-top: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Invoice</h2>
        <p>Invoice Number: {{ $invoice->invoice_number }}</p>
        <p>Order Number: {{ $orderNumber }}</p>
        <p>Company: {{ $company }}</p>
        <p>Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($order->items))
                @foreach($order->items as $i => $item)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $item->product->name ?? '-' }}</td>
                    <td>{{ $item->quantity ?? 1 }}</td>
                    <td>{{ number_format($item->price ?? 0,2) }}</td>
                    <td>{{ number_format(($item->price ?? 0) * ($item->quantity ?? 1),2) }}</td>
                </tr>
                @endforeach
            @else
                <tr><td colspan="5" style="text-align:center;">No items</td></tr>
            @endif
        </tbody>
    </table>

    <p class="total">
        Total: {{ number_format($order->total ?? 0,2) }}
    </p>
</body>
</html>
