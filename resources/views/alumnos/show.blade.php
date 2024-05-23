@extends('layout')

@section('content')
    <h1>{{ $alumno->nombre }} {{ $alumno->apellidos }}</h1>
    <p>Expediente: {{ $alumno->expediente }}</p>
    <p>Módulos:</p>
    <ul>
        @foreach($alumno->modulos as $modulo)
            <li>{{ $modulo->nombre }} ({{ $modulo->codigo }})</li>
        @endforeach
    </ul>
    <a href="{{ route('alumnos.index') }}">Volver</a>
@endsection
