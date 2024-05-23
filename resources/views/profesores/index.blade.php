@extends('layout')

@section('content')
    <h1>Profesores</h1>
    <a href="{{ route('profesores.create') }}">Crear Profesor</a>
    <ul>
        @foreach($profesores as $profesor)
            <li>{{ $profesor->nombre }} - 
                <a href="{{ route('profesores.show', $profesor->id) }}">Ver</a> - 
                <a href="{{ route('profesores.edit', $profesor->id) }}">Editar</a> - 
                <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
