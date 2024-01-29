@extends('layouts.plantilla')

@section('content')
    <h1>Editar dragon</h1>
    <form action="" method="POST">
        @csrf
        <label>
            Nombre: 
            <input type="text" name="name" value="{{old('name', $dragon->nombre)}}">
            <br>
        </label>

        <label>
            tipo: 
            <select name="tipo">
            @foreach($tipos as $tipo)
                @if(old('tipo', $dragon->tipo) == $tipo)
                <option value="{{ $tipo }}" selected>{{ $tipo }}</option>
                @else
                <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endif
            @endforeach
            </select>
            <br>
        </label>
        <label>
            color:
            <select name="color">
            @foreach($colores as $color)
                @if(old('color', $dragon->color) == $color)
                <option value="{{ $color }}" selected>{{ $color }}</option>
                @else
                <option value="{{ $color }}">{{ $color }}</option>
                @endif
            @endforeach
            </select>
            <br>
        </label>
        <label>
            peso: 
            <input type="text" name="peso" value="{{old('peso', $dragon->peso)}}">
            <br>
        </label>
        <label>
            <select name="alas">
            @if($dragon->alas == 0)
                <option value="0" selected>0</option>
                <option value="1">1</option>
            @else
                <option value="0">0</option>
                <option value="1" selected>1</option>
            @endif
            </select>
            <br>
        </label>
        <label>
            foto: 
            <input type="text" name="foto" value="{{old('foto', $dragon->foto)}}">
            <br>
        </label>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{route('dragones.index')}}"><button>Cancelar</button></a>
@endsection
