<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Satra Gps')</title>
    <!-- Incluye archivos CSS o JS globales aquí -->
</head>
<body>
    <!-- Agregar el header/navegación -->
    <nav>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/about">Acerca de</a></li>
        <li><a href="/contact">Contacto</a></li>
        <!-- Agregar más enlaces de navegación -->
    </ul>
    </nav>
    <div class="container">
        <!-- El contenido de cada página se mostrará aquí -->
        @yield('content')
    </div>

    <!-- Agregar el footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>


    <!-- Archivos JS opcionales -->
</body>
</html>
