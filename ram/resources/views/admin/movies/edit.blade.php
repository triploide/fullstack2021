@extends('admin.layouts.app')

@section('content')
    <h1>Editar</h1>

    @if ($errors->count())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    

    <form action="{{ route('admin.movies.update', ['movie' => $movie->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mt-3">
            <label for="title">Título</label>
            <input class="form-control" id="title" type="text" name="title" value="{{ $movie->title }}">
        </div>
        <div class="form-group mt-3">
            <label for="release_date">Fecha de estreno</label>
            <input class="form-control" id="release_date" type="date" name="release_date" value="{{ $movie->release_date }}">
        </div>
        <div class="form-group mt-3">
            <label for="length">Duración (en minutos)</label>
            <input class="form-control" id="length" type="text" name="length" value="{{ $movie->length }}">
        </div>
        <div class="form-group mt-3">
            <label for="genre_id">Género</label>
            {{-- <input class="form-control" id="genre_id" type="number" name="genre_id" value="{{ $movie->genre_id }}"> --}}
            <select class="form-control" name="genre_id" id="genre">
                @foreach ($genres as $genre)
                    <option {{ ($movie->genre_id == $genre->id) ? 'selected' : '' }} value="{{ $genre->id }}">{{ $genre->value }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="price">Precio</label>
            <input class="form-control" id="price" type="number" name="price" value="{{ $movie->price }}">
        </div>
        <div class="form-group mt-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
        </div>
        
    </form>
@endsection
