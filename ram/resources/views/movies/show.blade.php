@extends('layout')

@section('title', $pelicula['Title'])

@section('container')
    <h1>{{ $pelicula['Title'] }}</h1>
    <p><strong>Fecha de estreno::</strong> {{ $pelicula['Released'] }}</p>
    <p><strong>Géneros:</strong> {{ $pelicula['Genre'] }}</p>

    <br>
    <br>
    <br>
    <p><a href="{{ route('movies.index') }}">Volver atrás</a></p>
@endsection