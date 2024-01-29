@extends('layouts.plantilla')

@section('content')
    <br>
    <h1>{{$dragon->nombre}}</h1>
    <br>
    <label>tipo {{$dragon->tipo}}</label>
    <label>color {{$dragon->color}}</label>
    <label>id {{$dragon->id}}</label>
    <label>imagen {{$dragon->imagen}}</label>
    <label>alas {{$dragon->alas}}</label>
    <label>peso {{$dragon->peso}}</label>

    <a href="{{Route('dragones.edit', ['dragon' => $dragon])}}"><button>Editar registro de dragon</button></a>
    <form action="{{route('dragones.destroy', $dragon)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar registro de dragon</button>
    </form>
    @endsection
