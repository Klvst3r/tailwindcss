<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Klvst3r') }}</title>

    <!-- Se cargan los estilos Styles / Scripts de Tailwind-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .container {
            /* background-color: red; */
        }
    </style>
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

    {{-- Verificamos funcionamiento de TailwindCSS --}}
    {{-- <h1 class="text-4xl font-bold text-blue-600">Tailwind está funcionando 🎉</h1> --}}

    <div class="container mx-auto">
        <h1 class="">Este es un titulo de prueba con TailwindCSS</h1>

        <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio
            fugiat
            tempora accusamus
            reiciendis et rerum
            explicabo incidunt dicta omnis fugit repellat repudiandae, sunt at beatae. Modi saepe dolor ad natus.</p>
        <ul>
            <li class="">Elemento #01</li>
            <li class="">Elemento #02</li>
            <li class="">Elemento #03</li>
        </ul>
    </div>
</body>

</html>
