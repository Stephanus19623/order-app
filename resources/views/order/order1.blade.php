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
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <!-- Alpine.js for sidebar interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div x-data="{ open: false }" class="relative min-h-screen">
        <!-- Top Bar -->
        <div class="top-bar">
            <!-- Hamburger Button (top left) -->
            <button @click="open = true" style="background:none; border:none; cursor:pointer;">
                <svg width="40" height="40" style="color:var(--white);" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M4 8h16M4 16h16"/>
                </svg>
            </button>
        </div>

        <!-- Sidebar Overlay -->
        <div 
            x-show="open"
            x-transition.opacity
            class="sidebar-overlay"
            @click="open = false"
            style="display: none;"
        ></div>
        <!-- Sidebar Panel -->
        <div 
            x-show="open"
            class="sidebar-panel"
            x-transition
            style="display: none;"
            @click.away="open = false"
        >
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;">
                <span style="font-size:2rem;font-weight:bold;color:var(--white);">Menu</span>
                <button @click="open = false" style="background:none;border:none;color:var(--white);cursor:pointer;">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <nav style="display:flex;flex-direction:column;gap:2rem;margin-top:2rem;">
                <a href="#" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.1s;animation-fill-mode:forwards;">
                    Register Your Company
                </a>
                <a href="#" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.25s;animation-fill-mode:forwards;">
                    Order Lists
                </a>
                <a href="#" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.4s;animation-fill-mode:forwards;">
                    Our Company
                </a>
            </nav>
        </div>
    </div>

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
    <a href="{{ url('/') }}" class="btn px-4" style="font-weight: 700; font-size: 1rem;">Back to Homepage</a>
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
