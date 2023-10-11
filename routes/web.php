<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('otras-opciones', function () {
    return "Bienvenido a la siguiente pagina";
});

// Route::get('otras-opciones/{valor}', function ($valor) {
//     return "Bienvenido a la opcion: $valor";
// });

Route::get('opcion/create', function () {
    return "en esta opcion podras hacer cambios";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if($categoria){
        return "bienvenido al curso $curso, de la categoria: $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
});