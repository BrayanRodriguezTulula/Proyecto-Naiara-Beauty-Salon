<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jugueteria El Trompo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <p class="marca">Jugueteria El Trompo</p>
        <nav>
            <button type="button" id="btn-menu" class="hamburguesa">☰ Menú</button>
            <ul>
                <li><a href="{{ url('/inicio') }}">Inicio</a></li>
                <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                <li><a href="{{ url('/panel') }}">Panel</a></li>
                <li><a href="{{ url('/juguetes') }}">Juguetes</a></li>
            </ul>
        </nav>
        <button type="button" id="btn-tema" class="boton-modo">🌙 Modo Noche</button>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Integradora - Brayan Rodriguez Tulula - 27 de octubre de 2026</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>