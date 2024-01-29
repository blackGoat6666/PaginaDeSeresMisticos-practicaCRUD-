@extends('layouts.plantilla')

@section('content')
    <br>
    <h1>Dragones registrados</h1>
    <br>
    @foreach($dragones as $dragon)
    <list>{{$dragon->nombre}} {{$dragon->tipo}}<a href="{{route('dragones.show', ['dragon' => $dragon])}}"><button>Ver</button></a></list>
    <br>
    @endforeach
@endsection
