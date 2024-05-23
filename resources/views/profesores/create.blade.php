@extends('layout')

@section('content')
    <h1>Crear Profesor</h1>

    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">
        <button type="submit">Guardar</button>
    </form>
@endsection