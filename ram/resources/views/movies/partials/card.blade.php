<div class="col-md-4 my-3">
    <article class="card">
        <img src="{{ $pelicula['Images'][0] }}" class="card-img-top" alt="Banner - {{ $pelicula['Title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $pelicula['Title'] }}</h5>
            <p class="card-text">
                <strong>Fecha de estreno:</strong> {{ $pelicula['Released'] }}<br>
                <strong>Género: </strong>{{ $pelicula['Genre'] }}
            <p>
            {{-- <a href="/peliculas/{{ $pelicula['imdbID'] }}" class="btn btn-primary">Ver</a> --}}
            <a href="{{ route('movies.show', ['id' => $pelicula['imdbID']]) }}" class="btn btn-primary">Ver</a>
        </div>
    </article>
</div>