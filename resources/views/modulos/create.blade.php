@extends('layout')

@section('content')
    <h1>Crear Módulo</h1>

    <form action="{{ route('modulos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo">
        <label for="profesor_id">Profesor:</label>
        <select id="profesor_id" name="profesor_id">
            @foreach($profesores as $profesor)
                <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
