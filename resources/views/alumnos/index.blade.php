@extends('layout')

@section('content')
    <h1>Alumnos</h1>
    <a href="{{ route('alumnos.create') }}">Crear Alumno</a>
    <ul>
        @foreach($alumnos as $alumno)
            <li>{{ $alumno->nombre }} {{ $alumno->apellidos }} - 
                <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a> - 
                <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a> - 
                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
