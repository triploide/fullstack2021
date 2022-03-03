@extends('examples.layout')

@section('title', $pelicula['Title'])

@section('container')
    <h1>{{ $pelicula['Title'] }}</h1>
    <h1><?php echo $pelicula['Title'] ?></h1>
    <p><strong>Fecha de estreno::</strong> {{ $pelicula['Released'] }}</p>
    <p><strong>Géneros:</strong> {{ $pelicula['Genre'] }}</p>
@endsection