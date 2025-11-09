<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Mi Aplicación Laravel' }}</title>

    {{-- Google Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- Tailwind (Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire styles --}}
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">

    {{-- Barra de navegación Livewire --}}
    <livewire:navigation />

    {{-- Contenido de la página --}}
    <main class="container mx-auto py-8">
        {{ $slot }}
    </main>

    {{-- Livewire scripts --}}
    @livewireScripts
</body>
</html>