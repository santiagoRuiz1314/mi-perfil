<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas del sitio "Mi Perfil"
|--------------------------------------------------------------------------
|
| Cada ruta responde con una vista Blade ubicada en resources/views.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil/intereses', function () {
    return view('intereses');
});

Route::get('/perfil/habilidades', function () {
    return view('habilidades');
});

Route::get('/perfil/metas', function () {
    return view('metas');
});
