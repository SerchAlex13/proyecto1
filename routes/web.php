<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', function () {
    return view('paginas.landingpage');
});

Route::get('/contacto/{version_id?}', function ($version_id = null) {
    
    $versiones = [
        'Datos v1',
        'Datos v2',
        'Datos v3',
        'Datos v4',
    ];

    if (!empty($version_id)) {
        $version = $versiones[$version_id];
    } else {
        $version = null;
    }
    
    return view('paginas.contacto', compact('versiones', 'version'));
});

/*En la carpeta public sólo tener css, js, fonts, img
para la entrega hacer una carpeta, por ejemplo proy1 y dentro meter lo que hay en public(css, js, fonts, img) y en index.html copiar lo de landingpage.blade.php*/