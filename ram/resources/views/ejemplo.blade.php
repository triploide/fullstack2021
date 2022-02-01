@extends('layout')

@section('title', 'Ejemplo')

@section('container')
    <h1>Ejemplo</h1>

    @if (false)
        <p>Listado de pelis</p>
    @else
        <p>No hay pelis</p>
    @endif

    @for ($i = 0; $i < 3; $i++)
        <p>Iteración n° {{ $i }}</p>
    @endfor

    @foreach(['uno', 'dos'] as $value)
        <p>{{ $value }}</p>
    @endforeach

    <h2>Variables pasadas desde la ruta</h2>

    {{ $nombre }}

    <br>

    {{ $edad }}

    <br>

    {{ $apellido }}

    
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
