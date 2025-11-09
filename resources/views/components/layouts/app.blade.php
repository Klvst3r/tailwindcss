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

    {{-- Barra superior --}}
    <nav class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-lg font-semibold text-gray-800">Mi Sistema</div>

            @php $user = session('user'); @endphp

            @if ($user)
                <div class="flex items-center space-x-3">
                    <span class="text-gray-700">Hola, {{ $user['name'] }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                    Iniciar sesión
                </a>
            @endif
        </div>
    </nav>

    {{-- Barra de navegación Livewire --}}
    <livewire:navigation />

    {{-- Contenido principal --}}
    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    {{-- Livewire scripts --}}
    @livewireScripts
</body>
</html>
