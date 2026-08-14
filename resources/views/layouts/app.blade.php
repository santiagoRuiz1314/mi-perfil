<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perfil personal de Santiago Ruiz, desarrollador web full-stack y estudiante de Ingeniería de Sistemas en la UNAB.">
    <meta name="author" content="Santiago Ruiz">
    <meta name="theme-color" content="#12263f">
    <title>@yield('titulo', 'Mi Perfil') | Santiago Ruiz</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <a href="#contenido" class="salto-contenido">Saltar al contenido</a>

    <header class="cabecera">
        <div class="contenedor cabecera__interior">
            <a href="{{ url('/') }}" class="marca">
                <span class="marca__inicial">SR</span>
                <span class="marca__nombre">Santiago Ruiz</span>
            </a>

            <nav class="menu" aria-label="Navegación principal">
                <a href="{{ url('/') }}"
                   class="menu__enlace {{ request()->is('/') ? 'menu__enlace--activo' : '' }}">Inicio</a>

                <a href="{{ url('/perfil') }}"
                   class="menu__enlace {{ request()->is('perfil') ? 'menu__enlace--activo' : '' }}">Perfil</a>

                <a href="{{ url('/perfil/intereses') }}"
                   class="menu__enlace {{ request()->is('perfil/intereses') ? 'menu__enlace--activo' : '' }}">Intereses</a>

                <a href="{{ url('/perfil/habilidades') }}"
                   class="menu__enlace {{ request()->is('perfil/habilidades') ? 'menu__enlace--activo' : '' }}">Habilidades</a>

                <a href="{{ url('/perfil/metas') }}"
                   class="menu__enlace {{ request()->is('perfil/metas') ? 'menu__enlace--activo' : '' }}">Metas</a>
            </nav>
        </div>
    </header>

    <main id="contenido" class="contenedor principal">
        @yield('contenido')
    </main>

    <footer class="pie">
        <div class="contenedor pie__interior">
            <p>&copy; {{ date('Y') }} Santiago Ruiz — Bucaramanga, Colombia</p>
            <p class="pie__nota">Taller de Introducción a Laravel · Desarrollo Backend · UNAB</p>
        </div>
    </footer>

</body>
</html>
