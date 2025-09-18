<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <!-- Alpine.js for sidebar interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            background-color: #e0e7ff;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
        }
        .header-bar {
            background-color: #2b3990;
            color: white;
            padding: 1rem;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 2rem;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0.75rem;
        }
        .btn-next {
            background-color: #f77f00;
            color: white;
            font-weight: bold;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            border: none;
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
                <a href="{{ route('companies.create') }}" class="flex items-center gap-3 text-lg font-semibold animate-slideUp" style="color:var(--white);animation-delay:0.1s;animation-fill-mode:forwards;">
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
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-5 form-container">
            <div class="header-bar text-center">
                <h2>Register Company</h2>
            </div>
            <form action="{{ route('companies.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="col-md-6">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                    <button type="submit" class="btn btn-next">NEXT</button>
                </div>
            </form>
        </div>
    </div>
    
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if ("{{ session('success') }}") {
            Swal.fire({
                icon: 'success',
                title: 'Registry Success!',
                html: '<div style="color: #333;">Please go back to homepage in order to place an order.</div>',
                showConfirmButton: true,
                confirmButtonText: 'Homepage',
                confirmButtonColor: '#f77f00',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('homepage') }}";
                }
            });
        }
    </script>
</body>
</html>