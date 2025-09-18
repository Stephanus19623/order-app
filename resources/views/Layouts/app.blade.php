<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perusahaan Kami')</title>
    {{-- Memuat file CSS dari direktori public/assets --}}
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body class="bg-blue-50">

    {{-- Top-bar Navigasi Utama --}}
    <div class="top-bar">
        {{-- Tombol hamburger --}}
        <button @click="open = true" style="background:none; border:none; cursor:pointer;">
            <svg width="40" height="40" style="color:white;" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" d="M4 8h16M4 16h16"/>
            </svg>
        </button>
    </div>

    {{-- Konten Utama Halaman --}}
    <main class="container mx-auto p-8">
        {{-- Bagian ini akan diisi oleh konten dari halaman lain (contoh: inventory.blade.php) --}}
        @yield('content')
    </main>

</body>
</html>