<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pilih Company</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <!-- Alpine.js for sidebar interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #d7e7fa;
        }
        .card {
            justify-content: center;
            align-items: center;
            margin: 60px auto;
            border-radius: 10px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 700px;
            animation: fadeIn 0.8s ease-in-out;
        }
        .card-header {
            background: #295c93;
            color: #fff;
            font-weight: 700;
            font-size: 25px;
            text-align: center;
            padding: 5px 230px;
        }
        .card-header i {
            font-size: 42px;
            margin-right: 10px;
        }
        .card-body {
            padding: 40px;
        }
        .form-label {
            font-weight: 600;
            font-size: 18px;
        }
        .form-select {
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
        }
        .form-select:focus {
            box-shadow: 0 0 10px rgba(13,110,253,0.6);
            transform: scale(1.02);
        }
        .btn-search {
            background: linear-gradient(90deg, #fd7e14, #ff922b);
            color: white;
            border-radius: 12px;
            font-weight: 600;
            padding: 15px 20px;
            font-size: 18px;
            transition: 0.3s ease;
            width: 100%;
        }
        .btn-search:hover {
            background: linear-gradient(90deg, #e7680c, #ff7f0f);
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 6px 14px rgba(0,0,0,0.2);
        }
        .subtitle {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 30px;
            text-align: center;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
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
                <a href="{{ route('orderlist.choose') }}" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.25s;animation-fill-mode:forwards;">
                    Order Lists
                </a>
                <a href="#" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.4s;animation-fill-mode:forwards;">
                    Our Company
                </a>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-center align-items-center">
            <i class="bi bi-buildings"></i> Pilih Perusahaan
        </div>
        <div class="card-body">
            <p class="subtitle">Silakan pilih perusahaan Anda untuk melihat daftar order</p>
            <form method="POST" action="{{ route('orders.listByCompany') }}">
                @csrf
                <div class="mb-4">
                    <label for="company" class="form-label">Select Company</label>
                    <select name="company_id" id="company" class="form-select form-select-lg shadow-sm" required>
                        <option value="">-- Choose Company --</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-search">
                    <i class="bi bi-search"></i> Search Orders
                </button>
            </form>
        </div>
    </div>
</body>
</html>
