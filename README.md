# Mi Perfil — Sitio personal en Laravel

Aplicación web desarrollada con **Laravel 13** como parte del *Taller Básico – Introducción a Laravel* de la asignatura **Desarrollo Backend** de la Universidad Autónoma de Bucaramanga (UNAB).

---

## Descripción

`mi-perfil` es un sitio web personal de cinco páginas navegables que presenta información sobre mí: quién soy, mis intereses, mis habilidades técnicas y mis metas profesionales.

El proyecto se construyó desde cero aplicando los conceptos base de Laravel: definición de rutas en `routes/web.php`, vistas con el motor de plantillas **Blade** y herencia de plantillas mediante un layout común. Todo el diseño visual se realizó con **CSS propio escrito a mano**, sin Bootstrap ni ningún otro framework de estilos.

### Páginas del sitio

| Ruta | Vista | Contenido |
|---|---|---|
| `/` | `welcome.blade.php` | Portada de presentación y accesos a las demás secciones |
| `/perfil` | `perfil.blade.php` | Información personal, experiencia y formación académica |
| `/perfil/intereses` | `intereses.blade.php` | Pasatiempos y gustos personales |
| `/perfil/habilidades` | `habilidades.blade.php` | Habilidades técnicas y blandas |
| `/perfil/metas` | `metas.blade.php` | Objetivos profesionales a corto, mediano y largo plazo |

### Características

- Menú de navegación funcional entre todas las páginas, con indicador de la sección activa.
- Paleta de colores personalizada definida con variables CSS.
- Espaciado y márgenes consistentes mediante una escala de 8 píxeles.
- Tipografía legible basada en fuentes del sistema.
- Diseño responsive para escritorio, tableta y teléfono.
- Detalles de accesibilidad: foco visible al navegar con teclado, enlace para saltar al contenido y soporte de `prefers-reduced-motion`.

---

## Requisitos del sistema

| Herramienta | Versión mínima | Notas |
|---|---|---|
| PHP | 8.3 o superior | Con las extensiones habituales de Laravel (`mbstring`, `openssl`, `pdo`, `pdo_sqlite`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo`) |
| Composer | 2.x | Gestor de dependencias de PHP |
| Git | 2.x | Control de versiones |
| Navegador web | Cualquiera actualizado | Chrome, Firefox, Edge o Safari |

> Alternativamente se puede usar **XAMPP** o **Laragon**, que ya incluyen PHP y las extensiones necesarias.

Este proyecto fue desarrollado y probado con **PHP 8.5**, **Composer 2.10** y **Laravel 13.25**.

---

## Instrucciones de instalación

**1. Clonar el repositorio**

```bash
git clone https://github.com/santiagoRuiz1314/mi-perfil.git
cd mi-perfil
```

**2. Instalar las dependencias de PHP**

```bash
composer install
```

**3. Crear el archivo de configuración de entorno**

```bash
cp .env.example .env
```

En Windows (CMD), usar `copy .env.example .env`.

**4. Generar la clave de la aplicación**

```bash
php artisan key:generate
```

**5. Preparar la base de datos**

El proyecto usa **SQLite** y almacena las sesiones y la caché en base de datos, por lo que este paso es necesario aunque el sitio no guarde información propia.

```bash
php artisan migrate
```

Si el comando pregunta por crear el archivo `database/database.sqlite`, responder que sí.

---

## Cómo ejecutar el proyecto

```bash
php artisan serve
```

Luego abrir en el navegador:

```
http://localhost:8000
```

Desde la portada se puede navegar a las secciones **Perfil**, **Intereses**, **Habilidades** y **Metas** usando el menú superior.

Para detener el servidor, presionar `Ctrl + C` en la terminal.

---

## Estructura del proyecto

Archivos y carpetas relevantes para este taller:

```
mi-perfil/
├── public/
│   └── css/
│       └── estilos.css              # Hoja de estilos propia (sin frameworks)
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Layout base con cabecera, menú y pie
│       ├── welcome.blade.php        # Portada
│       ├── perfil.blade.php         # Información personal
│       ├── intereses.blade.php      # Pasatiempos y gustos
│       ├── habilidades.blade.php    # Habilidades técnicas
│       └── metas.blade.php          # Objetivos profesionales
├── routes/
│   └── web.php                      # Definición de las cinco rutas
└── README.md
```

### Sobre el layout de Blade

Las cuatro vistas de contenido y la portada extienden `layouts/app.blade.php` mediante `@extends`. Ese layout contiene el enlace a la hoja de estilos:

```blade
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
```

De esta forma la cabecera, el menú de navegación y el pie de página se escriben una sola vez y se reutilizan en todas las páginas, evitando duplicar código.

---

## Tecnologías utilizadas

- **Laravel 13** — framework PHP
- **Blade** — motor de plantillas
- **PHP 8.5** — lenguaje del backend
- **CSS3** — estilos propios, sin frameworks
- **SQLite** — almacenamiento de sesiones y caché
- **Git y GitHub** — control de versiones

---

## Autor

**Santiago Ruiz**
Estudiante de Ingeniería de Sistemas — Universidad Autónoma de Bucaramanga (UNAB)
Bucaramanga, Colombia

- Portafolio: <https://mi-portafolio-khaki-nine.vercel.app>
- GitHub: <https://github.com/santiagoRuiz1314>

---

## Información académica

- **Asignatura:** Desarrollo Backend
- **Docente:** Fabián Enrique Suárez Carvajal
- **Facultad:** Ingeniería — UNAB
- **Fecha de entrega:** 13 de agosto de 2026
