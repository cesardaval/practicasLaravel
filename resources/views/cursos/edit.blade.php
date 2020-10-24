
@extends('layouts.plantilla')

@section('tittle',"editar curso ")

@section("content")
<h1>Editar curso: {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">cursos</a><br>

<form action="{{route('cursos.update',$curso)}}" method="post">
    @csrf
    @method('put')
<label for="">
    Nombre: 
<input type="text" name="name" id="" placeholder="Nombre" value="{{old("namr",$curso->name)}}">
</label><br>
@error('name')
    <br>
    *{{$message}}
    <br>
@enderror
<label for="">
    Descripcion: <br>
    <textarea name="description" id="" cols="30" rows="5" >{{old("description",$curso->description)}}</textarea>
</label><br>
@error('description')
    <br>
    *{{$message}}
    <br>
@enderror
<label for="">
    Categoria: 
    <input type="text" name="categoria" id="" placeholder="Categoria" value="{{old("categoria",$curso->categoria)}}">
</label><br>
@error('categoria')
    <br>
    *{{$message}}
    <br>
@enderror
<input type="submit" value="Actualizar Curso">
</form>
<br>


@endsection