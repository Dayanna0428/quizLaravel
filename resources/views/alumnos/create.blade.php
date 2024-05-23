@extends('layout')

@section('content')
    <h1>Crear Alumno</h1>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="expediente">Expediente:</label>
        <input type="text" id="expediente" name="expediente">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos">
        <label for="modulos">Módulos:</label>
        <select multiple id="modulos" name="modulos[]">
            @foreach($modulos as $modulo)
                <option value="{{ $modulo->id }}">{{ $modulo->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
