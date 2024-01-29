@extends('layouts.plantilla')

@section('content')
    <h1>Registrar dragon</h1>
    <form action="" method="POST">
        @csrf
        <label>
            Nombre: 
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        <br>
        <label>
            tipo: 
            <br>
            <select name="tipo">
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
        </label>
        <label>
            color: 
            <br>
            <select name="color">
                @foreach($colores as $color)
                    <option value="{{ $color }}">{{ $color }}</option>
                @endforeach
            </select>
        </label>
        <label>
            peso: 
            <br>
            <input type="text" name="peso" value="{{old('peso')}}">
        </label>
        <label>
            tiene alas: 
            <br>
            <select name="alas">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </label>
        <label>
            foto: 
            <br>
            <input type="text" name="foto" value="{{old('foto')}}">
        </label>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('dragones.index')}}"><button>Cancelar</button></a>
@endsection
