<!DOCTYPE html>
<html>
<head>
    <title>Invoice List</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <!-- Alpine.js for sidebar interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
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

    <!-- Main Content -->
    <div class="container">
        <h2 class="text-center mb-4">Check Your Invoice</h2>
        <form action="{{ route('invoice.check') }}" method="GET" class="mb-4">
            <div class="form-group">
                <input type="text" name="invoice_number" class="form-control" placeholder="Enter Invoice Number" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div class="invoice-list">
            <!-- Placeholder for invoice list -->
            <p>No invoices found. Please enter an invoice number to search.</p>
        </div>
        <a href="{{ url('/') }}" class="btn px-4" style="font-weight: 700; font-size: 1rem;">Back to Homepage</a>
    </div>
</body>
</html>
