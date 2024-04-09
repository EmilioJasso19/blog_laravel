<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .active {
            text-decoration: none;
            color: lightseagreen;
        }
        label {
            display: block;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <header>
        <?php
            function activeMenu($url)
            {
                return request()->is($url) ? 'active' : '';
            }
        ?>
        <nav>
            <a class="{{ activeMenu('/') }}"
               href="{{ route('home') }}">Inicio</a>

            <a class="{{ activeMenu('saludo/*') }}"
               href="{{ route('saludos', 'Emilio') }}">Saludo</a>

            <a class="{{ activeMenu('contacto') }}"
               href="{{ route('messages.create') }}">Contacto</a>
        </nav>
        @yield('contenido')
        <footer>Copyright {{ date('Y') }}</footer>
    </header>
</body>
</html>
