<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    //Funcion index 
    public function index()
    {
        //CON BASE DE DATOS
        //Se incorpora DB tambienn debe incorporarse en la parte superior
        //Esto funciona: Crean una conexion a la base de datos, encuenta la tabla con el nombre 'entradas' y obtenme los datos con get()
        //Esto sustituye al ejemplo sin base de datos, en ese caso lo que obteneos son objetos y no arreglos
        $entradas = DB::table('entradas')->get();

        //SIN BASE DE DATOS
        // $entradas = [
        //     ['titulo' => 'Primera entrada'],
        //     ['titulo' => 'Segunda entrada'],
        //     ['titulo' => 'Tercera entrada'],
        //     ['titulo' => 'Cuarta entrada'],
        // ];

        //Retorna la vista indicada
        //El primer parametro es el nombre de la vista, en este caso es blog.blade.php
        //Como segundo parametro son los datos que se mostraran en la vista
        return view('blog', ['entradas' => $entradas]);
    }
}
