@extends('admin.layouts.app')

@section('content')
    <h1>Crear / Editar</h1>

    <form action="{{ route('admin.movies.store') }}" method="POST">
        @csrf

        <div class="form-group mt-3">
            <label for="title">Título</label>
            <input class="form-control" id="title" type="text" name="title" value="">
        </div>
        <div class="form-group mt-3">
            <label for="release_date">Fecha de estreno</label>
            <input class="form-control" id="release_date" type="date" name="release_date" value="">
        </div>
        <div class="form-group mt-3">
            <label for="length">Duración (en minutos)</label>
            <input class="form-control" id="length" type="text" name="length" value="">
        </div>
        <div class="form-group mt-3">
            <label for="genre_id">Género</label>
            <input class="form-control" id="genre_id" type="number" name="genre_id" value="">
        </div>
        <div class="form-group mt-3">
            <label for="price">Precio</label>
            <input class="form-control" id="price" type="number" name="price" value="">
        </div>
        <div class="form-group mt-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
        </div>
        
    </form>
@endsection
