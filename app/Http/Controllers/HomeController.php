<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //php artisan make:controller nameController
    public function __invoke(){
        return "Bienvenido a la pagina principal";
        //return view("welcome");
    }
    public function Index(){
        return "Bienvenido a la pagina de cursos";
    }
}
