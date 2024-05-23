@extends('layout')

@section('content')
    <h1>Editar Alumno</h1>

    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="expediente">Expediente:</label>
        <input type="text" id="expediente" name="expediente" value="{{ $alumno->expediente }}">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}">
        <label for="modulos">Módulos:</label>
        <select multiple id="modulos" name="modulos[]">
            @foreach($modulos as $modulo)
                <option value="{{ $modulo->id }}" {{ in_array($modulo->id, $alumno->modulos->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $modulo->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
