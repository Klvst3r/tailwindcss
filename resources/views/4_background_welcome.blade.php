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
    <style>
        .imagen {
            background-image: url("{{ asset('img/nTNR5b.jpeg') }}");
            height: 400px;
            width: 750px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

    {{-- Verificamos funcionamiento de TailwindCSS --}}
    {{-- <h1 class="text-4xl font-bold text-blue-600">Tailwind está funcionando 🎉</h1> --}}

    <div class="container">
        <div
            class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
            Hola Mundo</div>

    </div>
</body>

</html>
