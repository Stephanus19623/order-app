<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Success</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #dbeeff;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0d47a1;
            color: white;
            font-weight: bold;
            font-size: 1.25rem;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .list-group-item span.label {
            color: #0d47a1;
            font-weight: 600;
        }
        .page-title {
            color: #2e7d32;
            font-weight: 700;
        }
        .btn-orange {
            background-color: #f9690e;
            color: white;
        }
        .btn-orange:hover {
            background-color: #f45d00;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5" style="max-width: 850px;">
    <div class="text-center mb-4">
        <h2 class="page-title">Order Confirmed Successfully!</h2>
    </div>

    <div class="card">
        <div class="card-header">
            Order Summary
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="label">Buyer name:</span> {{ $data['buyer_name'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Company name:</span> {{ $data['company_name'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Address:</span> {{ $data['address'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Email:</span> {{ $data['email'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Parts name:</span> {{ $data['parts_name'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Due date:</span> {{ $data['due_date'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Materials:</span> {{ $data['materials'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Delivery:</span> {{ $data['delivery'] ?? 'N/A' }}</li>
            <li class="list-group-item"><span class="label">Quantity:</span> {{ $data['quantity'] ?? 'N/A' }}</li>
        </ul>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('order') }}" class="btn btn-orange px-4">Create New Order</a>
    </div>
</div>

<!-- Modal Popup -->
<div class="modal fade" id="orderSuccessModal" tabindex="-1" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
    <div class="modal-content" style="border: 4px solid #3b5998; border-radius: 15px;">
      <div style="background-color: #5386e4; height: 50px; margin: -16px -16px 10px -16px; border-top-left-radius: 15px; border-top-right-radius: 15px;"></div>
      <div class="modal-body text-center" style="font-weight: 600; color: #144b93; font-size: 1.2rem;">
        <p><strong>Thank You for your order!</strong></p>
        <p>Please proceed to the next page if you want to print the invoice as needed.</p>
      </div>
      <div class="modal-footer justify-content-center" style="border-top: none; padding-bottom: 1rem;">
    <a href="{{ url('/') }}" class="btn btn-danger px-4" style="font-weight: 700; font-size: 1rem;">Back to Homepage</a>
        <a href="{{ route('invoice.index') }}" class="btn btn-success px-4 ms-3" style="font-weight: 700; font-size: 1rem;">NEXT</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Tampilkan modal setelah halaman selesai load
  var orderSuccessModal = new bootstrap.Modal(document.getElementById('orderSuccessModal'));
  orderSuccessModal.show();
</script>

</body>
</html>
