@extends('layouts.app')

@section('titulo', 'Intereses')

@section('contenido')

    <section class="encabezado">
        <h1 class="encabezado__titulo">Intereses</h1>
        <p class="encabezado__subtitulo">Lo que hago cuando cierro el editor de código.</p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Pasatiempos</h2>

        <div class="tarjetas">
            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Gimnasio</h3>
                <p class="tarjeta__texto">
                    Entreno de forma constante. Es mi manera de despejar la cabeza después
                    de horas frente a la pantalla y de sostener una rutina que me ordena
                    el resto del día.
                </p>
            </article>

            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Tenis</h3>
                <p class="tarjeta__texto">
                    Mi deporte favorito, dentro y fuera de la cancha. Sigo el circuito de
                    cerca y disfruto tanto jugar como analizar los partidos grandes.
                </p>
            </article>

            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Fórmula 1</h3>
                <p class="tarjeta__texto">
                    Me atrapa la mezcla de ingeniería y estrategia: la telemetría, las
                    paradas en boxes y las decisiones que se toman en segundos definen
                    una carrera tanto como el piloto.
                </p>
            </article>

            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Videojuegos</h3>
                <p class="tarjeta__texto">
                    Buena parte de mi curiosidad por la programación empezó aquí. Me
                    interesa cómo están construidos por dentro, no solo jugarlos.
                </p>
            </article>

            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Fotografía digital</h3>
                <p class="tarjeta__texto">
                    Un hobby que entrena el ojo para la composición, el color y el
                    equilibrio visual, algo que termino aplicando cuando diseño interfaces.
                </p>
            </article>

            <article class="tarjeta tarjeta--estatica">
                <h3 class="tarjeta__titulo">Tecnologías emergentes</h3>
                <p class="tarjeta__texto">
                    Sigo de cerca lo que va apareciendo en desarrollo web e inteligencia
                    artificial, y trato de probarlo en proyectos pequeños antes de opinar.
                </p>
            </article>
        </div>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Mi referente deportivo</h2>

        <blockquote class="destacado">
            <p class="destacado__texto">
                <strong>Novak Djokovic</strong> es mi jugador favorito. Más allá de los
                títulos, admiro su disciplina y su capacidad de sostener el nivel en los
                puntos que realmente pesan. Es la misma idea que intento aplicar cuando
                programo: constancia, ajuste continuo y no aflojar en la parte difícil
                del problema.
            </p>
        </blockquote>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">En resumen</h2>
        <ul class="etiquetas">
            <li class="etiqueta">Gimnasio</li>
            <li class="etiqueta">Tenis</li>
            <li class="etiqueta">Fórmula 1</li>
            <li class="etiqueta">Videojuegos</li>
            <li class="etiqueta">Fotografía</li>
            <li class="etiqueta">Deporte</li>
            <li class="etiqueta">Nuevas tecnologías</li>
        </ul>
    </section>

@endsection
