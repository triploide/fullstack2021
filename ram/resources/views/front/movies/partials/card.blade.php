<div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
        <img src="https://www.fillmurray.com/800/600" alt="Banner - {{ $movie->title }}" class="img-fluid rounded">

        <div class="blog-item-content bg-white p-5">
            <div class="blog-item-meta bg-gray py-1 px-2">
                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
            </div>

            <h3 class="mt-3 mb-3"><a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a></h3>

            <p class="mb-4">
                <strong>Fecha de estreno:</strong> {{ $movie->release_date }}<br>
                <strong>Género: </strong>{{ $movie->genre_id }}
            </p>

            <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-small btn-main btn-round-full">Ver</a>
        </div>
    </div>
</div>

{{-- <div class="col-lg-6 col-md-6 mb-5">
    <div class="blog-item">
        <img src="{{ $movie['Images'][0] }}" alt="Banner - {{ $movie['Title'] }}" class="img-fluid rounded">

        <div class="blog-item-content bg-white p-5">
            <div class="blog-item-meta bg-gray py-1 px-2">
                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
            </div>

            <h3 class="mt-3 mb-3"><a href="{{ route('movies.show', ['id' => $movie['imdbID']]) }}">{{ $movie['Title'] }}</a></h3>

            <p class="mb-4">
                <strong>Fecha de estreno:</strong> {{ $movie['Released'] }}<br>
                <strong>Género: </strong>{{ $movie['Genre'] }}
            </p>

            <a href="{{ route('movies.show', ['id' => $movie['imdbID']]) }}" class="btn btn-small btn-main btn-round-full">Ver</a>
        </div>
    </div>
</div> --}}