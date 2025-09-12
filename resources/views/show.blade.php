<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Purchasing Order Form</title>
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
                <!-- Hamburger Button -->
                <button @click="open = true" style="background:none; border:none; cursor:pointer;">
                    <svg width="40" height="40" style="color:var(--white);" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M4 8h16M4 16h16"/>
                    </svg>
                </button>
            </div>

            <!-- Sidebar -->
            <div x-show="open" x-transition.opacity class="sidebar-overlay" @click="open = false" style="display: none;"></div>
            <div x-show="open" class="sidebar-panel" x-transition style="display: none;" @click.away="open = false">
                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;">
                    <span style="font-size:2rem;font-weight:bold;color:var(--white);">Menu</span>
                    <button @click="open = false" style="background:none;border:none;color:var(--white);cursor:pointer;">
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <nav style="display:flex;flex-direction:column;gap:2rem;margin-top:2rem;">
                    <a href="#" style="color:var(--white);">Register Your Company</a>
                    <a href="#" style="color:var(--white);">Order Lists</a>
                    <a href="#" style="color:var(--white);">Our Company</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;min-height:calc(100vh - 5rem);padding:1rem;">
                <h1 style="font-size:3rem;font-weight:800;color:var(--primary);text-align:center;margin-top:4rem;margin-bottom:0.5rem;">
                    Purchasing<br>Order Form
                </h1>
                <p style="font-size:1.25rem;color:var(--primary);text-align:center;margin-bottom:2rem;">
                    Welcome! Please make an order below<br>before purchasing at our services.
                </p>
                <button class="btn-main">
                    Order Now
                </button>
                <p style="font-size:1.1rem;co
