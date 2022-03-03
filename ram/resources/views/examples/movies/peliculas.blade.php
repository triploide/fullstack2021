@extends('examples.layout')

@section('title', 'Películas')

@section('container')
<h1>Películas</h1>

{{-- @forelse ($peliculas as $pelicula)
    @include('partials.movie-card')
@empty
    <p>No hay resultados</p>
@endforelse --}}

@each('partials.movie-card', $peliculas, 'pelicula', 'partials.empty-movie')

@endsection

@push('head')
<style>
    .footer {
        padding: 50px 100px;
        background-color: rgb(56, 56, 56);
        color: #fff
    }
</style>
@endpush
