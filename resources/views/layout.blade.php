<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('saludo', $nombre) }}">Saludo</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
        @yield('contenido')
        <footer>Copyright {{ date('Y') }}</footer>
    </header>
</body>
</html>
