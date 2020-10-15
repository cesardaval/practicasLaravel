<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        //inicio de la pagina
        return view('cursos.index');
    }

    public function create(){
        //retorna la vista del formulacio para crear cursos
        return view("cursos.create");
    }
    public function show($curso){
        //mostar los datos 
        
        return view("cursos.show",compact("curso"));
    }
}
