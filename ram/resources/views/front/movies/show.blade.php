@extends('front.layouts.app')

@section('title', 'Película')

@section('section', $movie->title)

@section('section-title', 'Los mejores estrenos')

@section('breadcrumb')
    <ul class="list-inline">
        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
        <li class="list-inline-item"><span class="text-white">/</span></li>
        <li class="list-inline-item"><a href="#" class="text-white-50">Películas</a></li>
    </ul>
@endsection

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p><strong>Fecha de estreno: </strong> {{ $movie->release_date }}</p>
    <p><strong>Género:</strong> {{ $movie->genre->value }}</p>
    <p>
        <strong>Tags:</strong>
        {{--         
        @php
            dd($movie->tags->all());
        @endphp --}}
        {{--
            @foreach ($movie->tags as $tag)
                {{ $tag->myFunction() }}<br>
            @endforeach
        --}}
        @foreach ($movie->tags as $tag)
            {{ $tag->value }}<br>
        @endforeach
    </p>

    <p><strong>Tags:</strong> {{ $movie->tagsToHtml() }}</p>

    <br>
    <br>
    <br>
    <p><a href="{{ route('movies.index') }}">Volver atrás</a></p>
@endsection
