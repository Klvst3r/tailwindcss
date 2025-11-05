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
    <div class="container">
        <div class="bg-green-600 h-32 w-screen custom-class">
            <p class="text-white p-4">Este div tiene una clase personalizada aplicada.</p>

        </div>
    </div>
</body>

</html>