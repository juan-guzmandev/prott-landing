<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi app')</title>
    @vite('resources/css/app.css') {{-- Incluye Tailwind via Vite --}}
</head>
<body class="antialiased">
    <main>
        @yield('content') {{-- Aquí se carga la vista --}}
    </main>
</body>
</html>