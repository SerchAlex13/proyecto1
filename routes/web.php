<?php

use App\Http\Controllers\PaginaController;
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

Route::get('/landingpage', [PaginaController::class, 'landingpage']);
Route::get('/contacto/{codigo?}', [PaginaController::class, 'contacto']);
Route::post('/recibir-form-contacto', [PaginaController::class, 'recibirFormContacto']);

/*En la carpeta public sólo tener css, js, fonts, img
para la entrega hacer una carpeta, por ejemplo proy1 y dentro meter lo que hay en public(css, js, fonts, img) y en index.html copiar lo de landingpage.blade.php*/