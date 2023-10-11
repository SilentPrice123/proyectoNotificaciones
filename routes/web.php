<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cursoController;

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

Route::get('/', HomeController::class);

Route::get('cursos', [HomeController::class,'Index']);

Route::get('cursos/{valor}', [cursoController::class,'show']);

Route::get('cursos/create', [cursoController::class,'create']);

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
//     if($categoria){
//         return "bienvenido al curso $curso, de la categoria: $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });