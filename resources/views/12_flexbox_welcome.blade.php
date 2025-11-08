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
    <div class="container ">
        <div class="bg-gray-300 flex ">
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1 lg:order-2">1</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1 lg:order-1">2</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1 order-3">3</div>
        </div>
    </div>
</body>


</html>