<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <h1>Bienvenido a mi sitio</h1>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>© 2025 - Todos los derechos reservados</p>
</footer>

</body>
</html>
