@extends('front.layouts.app')

@section('title', 'Película')

@section('section', $pelicula->title)

@section('section-title', 'Los mejores estrenos')

@section('breadcrumb')
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
        <li class="list-inline-item"><span class="text-white">/</span></li>
        <li class="list-inline-item"><a href="#" class="text-white-50">Películas</a></li>
    </ul>
@endsection

@section('content')
    <h1>{{ $pelicula->title }}</h1>
    <p><strong>Fecha de estreno: </strong> {{ $pelicula->release_date }}</p>
    <p><strong>Géneros:</strong> {{ $pelicula->genre_id }}</p>

    <br>
    <br>
    <br>
    <p><a href="{{ route('movies.index') }}">Volver atrás</a></p>
@endsection
