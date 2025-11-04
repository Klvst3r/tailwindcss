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

        <h1 class="text-center text-3xl font-bo">Background</h1>

    </div>
</body>

</html>
