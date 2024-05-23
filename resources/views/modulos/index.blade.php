@extends('layout')

@section('content')
    <h1>Módulos</h1>
    <a href="{{ route('modulos.create') }}">Crear Módulo</a>
    <ul>
        @foreach($modulos as $modulo)
            <li>{{ $modulo->nombre }} ({{ $modulo->codigo }}) - Profesor: {{ $modulo->profesor->nombre }} - 
                <a href="{{ route('modulos.show', $modulo->id) }}">Ver</a> - 
                <a href="{{ route('modulos.edit', $modulo->id) }}">Editar</a> - 
                <form action="{{ route('modulos.destroy', $modulo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection