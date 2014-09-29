<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
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
                <div class="titulo">
                    <picture><img src="{{ asset('images/header_titulo.png') }}" alt=""/></picture>
                </div>
                <div class="social">
                    <ul>
                    <li><a href="#" class="social-twitter">Twitter</a></li>
                    <li><a href="https://www.facebook.com/RevelacionExtrema" class="social-facebook">Facebook</a></li>
                    <li><a href="#" class="social-youtube">YouTube</a></li>
                    </ul>
                </div>
                <nav class="menu-principal">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/staff">Staff</a></li>
                        <li><a href="/horarios">Horarios</a></li>
                        <li><a href="/tv">TV</a></li>
                        <li><a href="/evntos">Eventos</a></li>
                        <li><a href="/contacto">Contacto</a></li>
                    </ul>
                </nav>
            </header>

            @yield('contenido')
            <footer>
            </footer>
        </div>

    </div>
</body>

</html>