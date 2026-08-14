@extends('layouts.app')

@section('titulo', 'Habilidades')

@section('contenido')

    <section class="encabezado">
        <h1 class="encabezado__titulo">Habilidades</h1>
        <p class="encabezado__subtitulo">Lenguajes, frameworks y herramientas con los que trabajo.</p>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Habilidades técnicas</h2>

        <div class="grupos">
            <article class="grupo">
                <h3 class="grupo__titulo">Lenguajes</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">JavaScript</li>
                    <li class="etiqueta">TypeScript</li>
                    <li class="etiqueta">PHP</li>
                    <li class="etiqueta">Python</li>
                    <li class="etiqueta">Java</li>
                    <li class="etiqueta">C#</li>
                    <li class="etiqueta">HTML5</li>
                    <li class="etiqueta">CSS3</li>
                    <li class="etiqueta">SQL</li>
                </ul>
            </article>

            <article class="grupo">
                <h3 class="grupo__titulo">Frontend</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">React</li>
                    <li class="etiqueta">React Router</li>
                    <li class="etiqueta">Tailwind CSS</li>
                    <li class="etiqueta">Diseño responsive</li>
                </ul>
            </article>

            <article class="grupo">
                <h3 class="grupo__titulo">Backend y APIs</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">Node.js</li>
                    <li class="etiqueta">Laravel</li>
                    <li class="etiqueta">.NET Framework</li>
                    <li class="etiqueta">APIs REST</li>
                </ul>
            </article>

            <article class="grupo">
                <h3 class="grupo__titulo">Bases de datos</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">MySQL</li>
                    <li class="etiqueta">PostgreSQL</li>
                    <li class="etiqueta">SQLite</li>
                </ul>
            </article>

            <article class="grupo">
                <h3 class="grupo__titulo">Herramientas y DevOps</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">Git</li>
                    <li class="etiqueta">GitHub</li>
                    <li class="etiqueta">Docker</li>
                    <li class="etiqueta">Composer</li>
                    <li class="etiqueta">Visual Studio</li>
                    <li class="etiqueta">Figma</li>
                </ul>
            </article>

            <article class="grupo">
                <h3 class="grupo__titulo">QA y testing</h3>
                <ul class="etiquetas">
                    <li class="etiqueta">Pruebas manuales</li>
                    <li class="etiqueta">Pruebas exploratorias</li>
                    <li class="etiqueta">Diseño de casos de prueba</li>
                    <li class="etiqueta">Reporte de defectos</li>
                    <li class="etiqueta">Postman</li>
                    <li class="etiqueta">Jira</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Nivel de dominio</h2>
        <p class="parrafo">
            Una lectura honesta de dónde estoy hoy con las tecnologías que más uso.
        </p>

        <ul class="barras">
            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">React y TypeScript</span>
                    <span class="barra__nivel">Avanzado</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 85%"></span></div>
            </li>

            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">HTML y CSS</span>
                    <span class="barra__nivel">Avanzado</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 90%"></span></div>
            </li>

            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">Node.js y APIs REST</span>
                    <span class="barra__nivel">Intermedio</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 70%"></span></div>
            </li>

            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">Bases de datos SQL</span>
                    <span class="barra__nivel">Intermedio</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 70%"></span></div>
            </li>

            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">Git y control de versiones</span>
                    <span class="barra__nivel">Intermedio</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 75%"></span></div>
            </li>

            <li class="barra">
                <div class="barra__cabecera">
                    <span class="barra__nombre">PHP y Laravel</span>
                    <span class="barra__nivel">En formación</span>
                </div>
                <div class="barra__pista"><span class="barra__relleno" style="width: 45%"></span></div>
            </li>
        </ul>
    </section>

    <section class="seccion">
        <h2 class="seccion__titulo">Habilidades blandas</h2>
        <ul class="lista">
            <li>Trabajo en equipo y comunicación con desarrolladores durante la verificación de correcciones.</li>
            <li>Atención al detalle y mentalidad de calidad, heredadas de mi experiencia en QA.</li>
            <li>Documentación clara: reportes reproducibles y código pensado para que otro lo mantenga.</li>
            <li>Autonomía para sacar adelante proyectos de principio a fin, como el trabajo freelance.</li>
            <li>Bilingüe: español nativo e inglés B2, suficiente para documentación técnica y equipos remotos.</li>
        </ul>
    </section>

@endsection
