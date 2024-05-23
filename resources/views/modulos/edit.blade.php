@extends('layout')

@section('content')
    <h1>Editar Módulo</h1>

    <form action="{{ route('modulos.update', $modulo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $modulo->nombre }}">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="{{ $modulo->codigo }}">
        <label for="profesor_id">Profesor:</label>
        <select id="profesor_id" name="profesor_id">
            @foreach($profesores as $profesor)
                <option value="{{ $profesor->id }}" {{ $profesor->id == $modulo->profesor_id ? 'selected' : '' }}>{{ $profesor->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
