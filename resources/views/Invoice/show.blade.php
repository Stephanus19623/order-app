<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Detail</title>
</head>
<body>
  <h1>Invoice Detail</h1>

  <h3>Invoice Number: {{ $invoice->invoice_number ?? 'Not Generated' }}</h3>
  <h3>Order Number: {{ $order->order_number }}</h3>
  <h3>Company: {{ $order->company->name ?? 'Unknown' }}</h3>

  <p><a href="{{ route('invoice.download', $order->order_number) }}">⬇ Download PDF</a></p>
  <p><a href="{{ route('invoice.check.form') }}">🔙 Back to Check</a></p>
</body>
</html>
