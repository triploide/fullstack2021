@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Películas</h1>
        </div>
        <div class="col" style="text-align: right">
            <a class="btn btn-success" href="{{ route('admin.movies.create') }}">Crear Peli</a>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th style="text-align: right; width: 20%">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre->value }}</td>
                    <td style="text-align: right; width: 20%">
                        <a class="btn btn-primary" href="{{ route('admin.movies.edit', ['movie' => $movie->id]) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.movies.destroy', ['movie' => $movie->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
