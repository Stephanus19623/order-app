<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Result</title>
</head>
<body>
  <h2>Invoice Found</h2>
  <p><b>Order Number:</b> {{ $invoice->order_number }}</p>
  <p><b>Company:</b> {{ $invoice->company }}</p>
  <p><b>Amount:</b> ${{ $invoice->amount }}</p>
  <a href="/">Back</a>
</body>
</html>
        <button type="submit">Check Invoice</button>
        </form>
    </div>