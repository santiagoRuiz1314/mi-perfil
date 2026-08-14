@extends('layouts.app')

@section('titulo', 'Metas')

@section('contenido')

    <section class="encabezado">
        <h1 class="encabezado__titulo">Metas</h1>
        <p class="encabezado__subtitulo">Hacia dónde quiero llevar mi carrera.</p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Mi objetivo profesional</h2>
        <p class="parrafo">
            Quiero consolidarme como desarrollador full-stack en un equipo donde se
            construya software con criterio técnico y no solo a punta de entregas rápidas.
            Me interesa especialmente el backend: entender bien la arquitectura, las bases
            de datos y el diseño de APIs, sin soltar el frontend que es donde empecé.
        </p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Corto plazo</h2>
        <p class="parrafo parrafo--nota">Lo que estoy trabajando ahora mismo.</p>

        <ol class="metas">
            <li class="meta">
                <span class="meta__plazo">2026</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Dominar Laravel y el ecosistema PHP</h3>
                    <p class="meta__texto">
                        Pasar de los fundamentos que veo en Desarrollo Backend a construir
                        aplicaciones completas con Eloquent, migraciones, middleware y
                        autenticación.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">2026</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Fortalecer bases de datos y APIs REST</h3>
                    <p class="meta__texto">
                        Profundizar en modelado relacional, optimización de consultas y
                        diseño de APIs bien documentadas.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">2026</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Ampliar mi portafolio</h3>
                    <p class="meta__texto">
                        Sumar proyectos full-stack propios, publicados y documentados, que
                        muestren decisiones técnicas y no solo pantallas bonitas.
                    </p>
                </div>
            </li>
        </ol>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Mediano plazo</h2>
        <p class="parrafo parrafo--nota">Los próximos dos o tres años.</p>

        <ol class="metas">
            <li class="meta">
                <span class="meta__plazo">2027</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Conseguir una práctica o rol junior full-stack</h3>
                    <p class="meta__texto">
                        Trabajar en una empresa de tecnología, presencial o remota, con un
                        equipo del que pueda aprender buenas prácticas reales.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">2027</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Llevar mi inglés a nivel C1</h3>
                    <p class="meta__texto">
                        Abrir la puerta a equipos internacionales y a documentación técnica
                        sin fricción.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">2027</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Aprender DevOps y despliegue</h3>
                    <p class="meta__texto">
                        Profundizar en Docker, CI/CD y despliegue en la nube para
                        responsabilizarme del ciclo completo, no solo del código.
                    </p>
                </div>
            </li>
        </ol>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Largo plazo</h2>
        <p class="parrafo parrafo--nota">La meta grande.</p>

        <ol class="metas">
            <li class="meta">
                <span class="meta__plazo">2028</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Graduarme de Ingeniería de Sistemas</h3>
                    <p class="meta__texto">
                        Terminar la carrera en la UNAB con un proyecto de grado que aporte
                        algo real y no quede solo en el papel.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">2030</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Crecer hacia un rol senior</h3>
                    <p class="meta__texto">
                        Tomar decisiones de arquitectura, hacer code review con criterio y
                        acompañar a desarrolladores que estén empezando.
                    </p>
                </div>
            </li>

            <li class="meta">
                <span class="meta__plazo">Siempre</span>
                <div class="meta__cuerpo">
                    <h3 class="meta__titulo">Seguir aprendiendo</h3>
                    <p class="meta__texto">
                        La tecnología cambia rápido. La constancia que aplico en el gimnasio
                        y la que admiro en el deporte es la misma que quiero mantener aquí.
                    </p>
                </div>
            </li>
        </ol>
    </section>

@endsection
