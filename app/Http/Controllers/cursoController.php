<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    

    public function Index(){
        return "Bienvenido a la pagina de cursos";
    }

    public function create(){
        return "nueva ruta de prueba de creacion";
    }

    public function show($valor){
        return "Bienvenido a la opcion: $valor";
    }

}
