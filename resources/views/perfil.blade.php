@extends('layouts.app')

@section('titulo', 'Perfil')

@section('contenido')

    <section class="encabezado">
        <h1 class="encabezado__titulo">Perfil</h1>
        <p class="encabezado__subtitulo">Quién soy, dónde estudio y en qué he trabajado.</p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Sobre mí</h2>
        <p class="parrafo">
            Soy Santiago Ruiz, desarrollador web full-stack y estudiante de Ingeniería de
            Sistemas en la Universidad Autónoma de Bucaramanga. Me muevo con comodidad en
            todo el ciclo de desarrollo: desde la interfaz con React y TypeScript hasta la
            lógica de backend y las bases de datos relacionales.
        </p>
        <p class="parrafo">
            Mi paso por QA me dejó una forma de trabajar que hoy agradezco: probar antes de
            entregar, documentar lo que falla y escribir código que otra persona pueda
            mantener sin sufrir. Busco roles de desarrollo web o full-stack en equipos
            colaborativos donde se construya con criterio.
        </p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Datos generales</h2>

        <dl class="ficha">
            <div class="ficha__fila">
                <dt class="ficha__clave">Nombre</dt>
                <dd class="ficha__valor">Santiago Ruiz</dd>
            </div>
            <div class="ficha__fila">
                <dt class="ficha__clave">Rol</dt>
                <dd class="ficha__valor">Full-Stack Web Developer</dd>
            </div>
            <div class="ficha__fila">
                <dt class="ficha__clave">Ubicación</dt>
                <dd class="ficha__valor">Bucaramanga, Colombia</dd>
            </div>
            <div class="ficha__fila">
                <dt class="ficha__clave">Universidad</dt>
                <dd class="ficha__valor">UNAB — Ingeniería de Sistemas (2024 – 2028)</dd>
            </div>
            <div class="ficha__fila">
                <dt class="ficha__clave">Idiomas</dt>
                <dd class="ficha__valor">Español (nativo) · Inglés (B2 avanzado)</dd>
            </div>
            <div class="ficha__fila">
                <dt class="ficha__clave">Enlaces</dt>
                <dd class="ficha__valor">
                    <a href="https://mi-portafolio-khaki-nine.vercel.app" target="_blank" rel="noopener">Portafolio</a>
                    ·
                    <a href="https://github.com/santiagoRuiz1314" target="_blank" rel="noopener">GitHub</a>
                </dd>
            </div>
        </dl>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Experiencia profesional</h2>

        <ol class="linea-tiempo">
            <li class="linea-tiempo__item">
                <span class="linea-tiempo__fecha">Jun 2025 – Ago 2025</span>
                <h3 class="linea-tiempo__cargo">QA Tester — Práctica</h3>
                <p class="linea-tiempo__lugar">PelicanInvests (startup)</p>
                <ul class="lista">
                    <li>Pruebas de aplicaciones móviles en iOS y Android dentro de un entorno real de startup.</li>
                    <li>Diseño y ejecución de casos de prueba manuales, documentando defectos reproducibles en Jira.</li>
                    <li>Pruebas de API con Postman y verificación de correcciones junto al equipo de desarrollo.</li>
                </ul>
            </li>

            <li class="linea-tiempo__item">
                <span class="linea-tiempo__fecha">Abr 2025 – May 2025</span>
                <h3 class="linea-tiempo__cargo">Desarrollador Web Freelance</h3>
                <p class="linea-tiempo__lugar">Proyecto independiente para cliente</p>
                <ul class="lista">
                    <li>Plataforma web full-stack para inscripción a eventos estudiantiles y seguimiento de participación.</li>
                    <li>Sistema automatizado para controlar las horas extracurriculares obligatorias de grado.</li>
                    <li>Panel personalizado e interactivo con información propia de cada estudiante.</li>
                    <li>Diseño responsive para una experiencia consistente en cualquier dispositivo.</li>
                </ul>
                <p class="linea-tiempo__stack">React · TypeScript · Tailwind CSS · Docker</p>
            </li>
        </ol>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Formación académica</h2>

        <ol class="linea-tiempo">
            <li class="linea-tiempo__item">
                <span class="linea-tiempo__fecha">2024 – 2028</span>
                <h3 class="linea-tiempo__cargo">Ingeniería de Sistemas</h3>
                <p class="linea-tiempo__lugar">Universidad Autónoma de Bucaramanga (UNAB)</p>
                <ul class="lista">
                    <li>Asignaturas relevantes: Algoritmos, Estructuras de Datos, Programación Orientada a Objetos y Desarrollo Web.</li>
                </ul>
            </li>

            <li class="linea-tiempo__item">
                <span class="linea-tiempo__fecha">2013 – 2023</span>
                <h3 class="linea-tiempo__cargo">Bachillerato</h3>
                <p class="linea-tiempo__lugar">Colegio Agustiniano Tagaste</p>
                <ul class="lista">
                    <li>Énfasis en tecnología y participación en actividades extracurriculares de innovación.</li>
                </ul>
            </li>
        </ol>
    </section>

@endsection
