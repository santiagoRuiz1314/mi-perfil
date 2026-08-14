@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

    <section class="portada">
        <p class="portada__saludo">Hola, soy</p>
        <h1 class="portada__titulo">Santiago Ruiz</h1>
        <p class="portada__rol">Full-Stack Web Developer</p>

        <p class="portada__texto">
            Estudiante de Ingeniería de Sistemas en la UNAB y desarrollador web.
            Construyo aplicaciones con React, TypeScript y Node.js, y vengo de una
            base en QA que me dejó el hábito de probar bien lo que escribo.
        </p>

        <div class="portada__acciones">
            <a href="{{ url('/perfil') }}" class="boton boton--principal">Ver mi perfil</a>
            <a href="https://mi-portafolio-khaki-nine.vercel.app" class="boton boton--secundario" target="_blank" rel="noopener">Portafolio</a>
        </div>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Explora mi perfil</h2>

        <div class="tarjetas">
            <a href="{{ url('/perfil') }}" class="tarjeta">
                <h3 class="tarjeta__titulo">Perfil</h3>
                <p class="tarjeta__texto">Quién soy, mi formación y mi experiencia profesional.</p>
                <span class="tarjeta__enlace">Entrar</span>
            </a>

            <a href="{{ url('/perfil/intereses') }}" class="tarjeta">
                <h3 class="tarjeta__titulo">Intereses</h3>
                <p class="tarjeta__texto">Lo que hago cuando no estoy programando.</p>
                <span class="tarjeta__enlace">Entrar</span>
            </a>

            <a href="{{ url('/perfil/habilidades') }}" class="tarjeta">
                <h3 class="tarjeta__titulo">Habilidades</h3>
                <p class="tarjeta__texto">Lenguajes, frameworks y herramientas que manejo.</p>
                <span class="tarjeta__enlace">Entrar</span>
            </a>

            <a href="{{ url('/perfil/metas') }}" class="tarjeta">
                <h3 class="tarjeta__titulo">Metas</h3>
                <p class="tarjeta__texto">Hacia dónde quiero llevar mi carrera.</p>
                <span class="tarjeta__enlace">Entrar</span>
            </a>
        </div>
    </section>

@endsection
