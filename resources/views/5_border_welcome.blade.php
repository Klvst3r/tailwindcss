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

    <div class="container mx-auto pt-5">
        <div class="w-24 h-64 bg-gray-400 border border-8 border-blue-800 border-double rounded-full"></div>
    </div>

    <div class="divide-y divide-gray-600">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt in
            perspiciatis corrupti tempora.
            Quidem, saepe culpa maxime dicta autem quis dolorem labore quaerat similique, recusandae officia. Inventore,
            animi quae?</p>
        <p>Explicabo repellendus laudantium est culpa saepe officiis exercitationem sit tempora facilis temporibus
            magni
            quidem ex voluptatibus modi nobis, eaque qui distinctio veritatis! Vero eligendi dolor ut sint earum?
            Obcaecati,
            odio!</p>
        <p>Corrupti quis incidunt, quo commodi obcaecati ad itaque minima dolores nam. Ex hic accusantium, mollitia
            ullam a
            quam itaque autem distinctio magni facere molestias rerum quaerat praesentium, reprehenderit sapiente
            magnam?
        </p>
        <p>Fugiat voluptatibus nulla deserunt quia dolorem tenetur veritatis, culpa animi cupiditate. Voluptatibus
            soluta,
            ratione ipsa ipsam recusandae velit dicta similique obcaecati iste dolorum? Recusandae quis eveniet,
            sint
            autem
            perferendis ipsum!</p>
        <p>Accusantium excepturi, recusandae odio beatae sapiente eum ipsa assumenda minima culpa laboriosam numquam
            fugit
            quod itaque sit ad tempore. Explicabo exercitationem fuga blanditiis sed. Iste molestiae maiores
            consectetur
            non
            suscipit.</p>
    </div>

    <div>
        <nav class="divide-x-2 divide-blue-600">
            <a href="">Link 1</a>
            <a href="">Link 2</a>
            <a href="">Link 3</a>
            <a href="">Link 4</a>
            <a href="">Link 5</a>
        </nav>
    </div>
</body>

</html>
