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

    
    <table class="table w-full border-separate lg:border-collapse table-fixed"">
        <thead>
            <tr>
                <th class="w-1/4">Nombre</th>
                <th class="w-1/4">Apellido</th>
                <th class="w-1/2">Domicilio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan</td>
                <td>Pérez</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, hic. Debitis velit officiis eveniet reprehenderit, eligendi ex dicta repellat modi quam, nihil qui asperiores nulla, harum adipisci commodi doloremque ipsa.</td>
            </tr>
            <tr>
                <td>María</td>
                <td>Gómez</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum facere placeat ex itaque perspiciatis blanditiis odit voluptatum veniam, veritatis similique sit eligendi optio unde assumenda? Saepe est architecto consectetur eum.</td>
            </tr>
            <tr>
                <td>Luis</td>
                <td>Rodríguez</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum alias odio officiis esse earum, ipsum exercitationem consequuntur numquam ut, rem dolores, in labore laborum ipsam repudiandae suscipit dolor iusto cupiditate? </td>
            </tr>
        </tbody>

    </table>
    </div>
</body>

</html>
