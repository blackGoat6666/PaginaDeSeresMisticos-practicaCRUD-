@extends('layouts.plantilla')

@section('content')
    <h1>Registrar dragon</h1>
    <form action="" method="POST">
        @csrf
        <label>
            Nombre: 
            <input type="text" name="name" value="{{old('name')}}">
            <br>
        </label>

        <label>
            tipo: 
            <select name="tipo">
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
            <br>
        </label>
        <label>
            color: 
            <select name="color">
                @foreach($colores as $color)
                    <option value="{{ $color }}">{{ $color }}</option>
                @endforeach
            </select>
            <br>
        </label>
        <label>
            peso: 
            <input type="text" name="peso" value="{{old('peso')}}">
            <br>
        </label>
        <label>
            tiene alas: 
            <select name="alas">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
            <br>
        </label>
        <label>
            foto: 
            <input type="text" name="foto" value="{{old('foto')}}">
            <br>
        </label>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('dragones.index')}}"><button>Cancelar</button></a>
@endsection
