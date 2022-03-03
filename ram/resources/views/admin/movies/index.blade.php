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

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre->value }}</td>
                    <td>
                        <a href="#">Editar</a>
                        <form action="{{ route('admin.movies.destroy', ['id' => $movie->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" name="submit" value="borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
