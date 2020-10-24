
@extends('layouts.plantilla')

@section('tittle',"Cursos")

@section("content")
<h1>bienvenido a la pagina cursos</h1> <br>
<a href="{{route('cursos.create')}}">Crear curso</a> <br>


<ul>
    @foreach($cursos as $curso)
    <li><a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a></li>    
    @endforeach
</ul>
{{$cursos->links()}}
@endsection