<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $request){
        
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        $curso = Curso::create($request->all());
        return redirect()->route("cursos.show",$curso);
    }

    public function edit(Curso $curso){
       //return $curso;  
       return view("cursos.edit",compact("curso"));
    }

    public function update(StoreCurso $request, Curso $curso){
        
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all());
        return redirect()->route("cursos.show",$curso);
    }

    public function show(Curso $curso){
        //mostar los datos 
        return view("cursos.show",compact("curso"));
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route("cursos.index");
    }

}
