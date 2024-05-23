@extends('layout')

@section('content')
    <h1>{{ $profesor->nombre }}</h1>
    <p>DNI: {{ $profesor->dni }}</p>
    <p>Dirección: {{ $profesor->direccion }}</p>
    <p>Teléfono: {{ $profesor->telefono }}</p>
    <a href="{{ route('profesores.index') }}">Volver</a>
@endsection
