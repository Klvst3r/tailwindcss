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

        <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline uppercase">Este es el titulo</h1>

        <p class="text-red-700 hover:text-opacity-75">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Repellendus, voluptatibus perferendis
            dolorem consectetur fugit quas esse harum rem vitae et natus officia, provident consequuntur tempore,
            reiciendis recusandae ipsum nam. Impedit!</p>
        <ul class="list-decimal md:list-disc list-inside">
            <li class="line-through">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi tempora porro
                exercitationem perspiciatis aperiam natus consequatur nam, officia quibusdam laudantium quas. Obcaecati
                nemo saepe inventore blanditiis modi libero voluptatum?</li>
            <li>Molestiae reprehenderit nulla quo cumque blanditiis enim eveniet porro ea nihil quidem sed eius
                exercitationem et placeat consectetur accusantium consequuntur dolorem sequi repellendus, a quasi labore
                molestias. Vel, rerum in.</li>
            <li>Reiciendis, dicta. Aperiam earum esse, ab repellat tempore magni deserunt eveniet maiores cum amet hic
                modi similique dolorum maxime, veniam in aspernatur quod perferendis! Molestias fugit soluta totam.
                Itaque, quia.</li>
            <li class="lowercase">Numquam voluptate non doloremque praesentium alias maiores illo expedita nobis enim!
                Provident
                perferendis quod eveniet, assumenda facere quia voluptatibus ipsam sed quos similique cumque? Minus
                placeat nam reiciendis repellendus ducimus.</li>
        </ul>

        <p class="capitalize">klvst3r io</p>

    </div>
</body>

</html>
