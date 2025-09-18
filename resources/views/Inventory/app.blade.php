<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perusahaan Kami')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#e6f0ff] min-h-screen flex flex-col">
    <header class="bg-[#1a4d8c] text-white p-4 shadow-lg">
        <nav class="container mx-auto flex items-center">
            <button class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <div class="hidden md:flex space-x-4 ml-auto">
                </div>
        </nav>
    </header>

    <main class="flex-grow flex items-center justify-center p-8">
        @yield('content')
    </main>
</body>
</html>