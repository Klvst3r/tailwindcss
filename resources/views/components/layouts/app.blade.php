<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Mi Aplicación Laravel' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">

    {{-- ÚNICA barra de navegación --}}
    <livewire:navigation />

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>
