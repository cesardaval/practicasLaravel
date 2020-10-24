
@extends('layouts.plantilla')

@section('tittle',"Curso: ".$curso->name)

@section("content")
<h1>bienvenido al curso {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">cursos</a><br>
<a href="{{route('cursos.edit',$curso)}}">editar curso</a>


<p><strong>categoria: </strong> {{$curso->categoria}}</p>
<p><strong>descripcion: </strong> {{$curso->description}}</p>
<p><strong>name: </strong> {{$curso->name}}</p>
@endsection