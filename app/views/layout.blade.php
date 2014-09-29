<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <div id="izq">
            <picture>
                <img class="logo_principal" src="{{ asset('images/logo_revextrema.png') }}">
            </picture>
            <div class="noticias">
                @yield('noticias')
            </div>
                                                                                                                                                                                    </div>
        <div id="der">
            <header>
                @yield('header')
                @yield('navegacion-principal')
            </header>

            @yield('contenido')
            <footer>
            </footer>
        </div>

    </div>
</body>

</html>