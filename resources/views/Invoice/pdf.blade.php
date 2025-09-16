<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Invoice PDF</title>
  <style>
    body { font-family: Arial, sans-serif; font-size: 14px; }
    .header { background: #004a99; color: #fff; padding: 10px; text-align: center; }
    .content { margin: 20px; }
    .footer { margin-top: 30px; text-align: center; font-size: 12px; color: #666; }
  </style>
</head>
<body>
  <div class="header">Invoice Document</div>
  <div class="content">
    <p><strong>Invoice Number:</strong> {{ $invoice->invoice_number }}</p>
    <p><strong>Order Number:</strong> {{ $orderNumber }}</p>
    <p><strong>Company:</strong> {{ $company }}</p>
    <p><strong>Date:</strong> {{ now()->toFormattedDateString() }}</p>
  </div>
  <div class="footer">
    &copy; {{ date('Y') }} Your Company. All rights reserved.
  </div>
</body>
</html>
