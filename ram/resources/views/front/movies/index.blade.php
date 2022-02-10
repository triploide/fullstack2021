@extends('front.layouts.app')

@section('title', 'Películas')

@section('section', 'Listado de películas')

@section('section-title', 'Los mejores estrenos')

@section('breadcrumb')
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
        <li class="list-inline-item"><span class="text-white">/</span></li>
        <li class="list-inline-item"><a href="#" class="text-white-50">Películas</a></li>
    </ul>
@endsection

@section('content')
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                @each('front.movies.partials.card', $movies, 'movie', 'front.movies.partials.empty')
            </div>
        </div>
    </section>
@endsection
