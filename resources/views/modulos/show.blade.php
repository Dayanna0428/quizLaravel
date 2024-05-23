@extends('layout')

@section('content')
    <h1>{{ $modulo->nombre }}</h1>
    <p>Código: {{ $modulo->codigo }}</p>
    <p>Profesor: {{ $modulo->profesor->nombre }}</p>
    <a href="{{ route('modulos.index') }}">Volver</a>
@endsection
