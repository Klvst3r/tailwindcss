<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>Tailwind CSS</title>

    <!-- Se cargan los estilos Styles / Scripts de Tailwind-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container mt-4">
        <div class="bg-gray-300 p-4 relative">
            <div class="bg-gray-400 p-4 relative">
                <div class="bg-blue-400 p-4"></div>
                <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0"></div>
            </div>
        </div>

    </div>

</body>

</html>
