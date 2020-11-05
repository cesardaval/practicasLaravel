
@extends('layouts.plantilla')

@section('tittle',"Crear curso")

@section("content")
<h1>Creacion de cursos</h1>
<div class="contrainer">
    <x-card/>
</div>
<a href="{{route('cursos.index')}}">cursos</a><br>

<form action="{{route('cursos.store')}}" method="post">
    @csrf
<label for="">
    Nombre: 
    <input type="text" name="name" id="" placeholder="Nombre" value="{{old('name')}}">
</label><br>
@error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
@enderror
<label for="">
    Descripcion: <br>
    <textarea name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
</label><br>
@error('description')
    <br>
    *{{$message}}
    <br>
@enderror
<label for="">
    Categoria: 
    <input type="text" name="categoria" id="" placeholder="Categoria" value="{{old('categoria')}}">
</label><br>

@error('categoria')
    <br>
    *{{$message}}
    <br>
@enderror
<input type="submit" value="enviar">
</form>
<br>


@endsection