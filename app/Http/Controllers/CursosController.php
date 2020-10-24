<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        //inicio de la pagina
        $cursos =Curso::paginate();
        
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        //retorna la vista del formulacio para crear cursos
        return view("cursos.create");
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route("cursos.show",$curso);
    }

    public function edit(Curso $curso){
       //return $curso;  
       return view("cursos.edit",compact("curso"));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route("cursos.show",$curso);
    }

    public function show(Curso $curso){
        //mostar los datos 
        return view("cursos.show",compact("curso"));
    }

}
