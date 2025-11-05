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

        <img src="https://images.pexels.com/photos/34336341/pexels-photo-34336341.jpeg" alt="Night"
            class="w-72 h-64 object-cover rounded-lg shadow-md float-left" />

        <img src="https://images.pexels.com/photos/33430991/pexels-photo-33430991.jpeg" alt="Night"
            class="w-72 h-64 object-cover rounded-lg shadow-md float-right" />

        <p class="mb-2 clear-both">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellat cum,
            qui
            tempora odio incidunt vitae et illum quia nesciunt deserunt doloribus nemo eum aperiam eius atque ut.
            Itaque, rerum.</p>
        <p class="mb-2">Ut maiores eligendi saepe ipsa culpa nam, possimus vero incidunt quisquam sed illo minima,
            explicabo, ad alias voluptatem ratione asperiores itaque quaerat nobis voluptatibus consectetur modi
            officiis quibusdam voluptas? Modi.</p>
        <p class="mb-2">Dignissimos quae consectetur excepturi quis adipisci veniam animi vitae eligendi libero
            repellat similique quibusdam impedit ullam, praesentium magnam quos molestias omnis illum velit sint, in
            eaque sunt expedita. Laborum, maxime.</p>
        <p class="mb-2">Quasi excepturi saepe atque eum molestiae dolores repellat ipsa similique, facere commodi
            dignissimos maxime? Exercitationem sunt autem nemo, impedit debitis unde ab laboriosam nisi praesentium
            distinctio dignissimos accusantium quisquam earum.</p>
        <p class="mb-2">Similique quasi illo inventore corrupti consectetur ab hic, quis, neque fugit repellendus
            nesciunt voluptas velit, pariatur aliquid voluptatibus mollitia quas asperiores odio nihil eveniet eum
            voluptatem porro necessitatibus! Facere, in!</p>
    </div>
</body>

</html>
