<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <title>LowBud</title>
    </head>
    <body>
        <header>@include('navbar')</header>

        <div class="grid-main-menu">
            <div class="grid-main-element">
                <h2>Con LowBud puedes ver los mejores <strong>productos</strong> que los supermercados te pueden ofrecer</h2>
            </div>
            <div class="grid-main-element">
                <h1>¿Quieres probar?</h1><br />
                <a style="color: aliceblue" class="button" href="products">Voy a probarlo</a>
            </div>
        </div>
        <footer><h1>LowBud</h1>
            <p>Creado por Maxim Deryabin</p>
            <ul>
                <li><a href="https://www.linkedin.com/in/maxim-deryabin-5826401b2/">LinKedIn</a></li>
                <li><a href="https://github.com/maxder1902">GitHub</a></li>
            </ul>
        </footer>
    </body>
</html>
