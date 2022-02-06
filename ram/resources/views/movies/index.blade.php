@extends('layout')

@section('title', 'Películas')

@section('container')
    <div class="row">
        @each('movies.partials.card', $peliculas, 'pelicula', 'movies.partials.empty')
    </div>
   
@endsection
