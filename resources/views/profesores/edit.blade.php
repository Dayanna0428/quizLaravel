@extends('layout')

@section('content')
    <h1>Editar Profesor</h1>

    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" value="{{ $profesor->dni }}">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $profesor->nombre }}">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $profesor->direccion }}">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $profesor->telefono }}">
        <button type="submit">Guardar</button>
    </form>
@endsection