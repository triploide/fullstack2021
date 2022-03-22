<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required|min:3|max:255',
            'release_date' => 'required|date|before:today',
            'genre_id' => 'exists:genres,id'
        ]);

        $movie = Movie::create(request()->all());

        return redirect()->route('admin.movies.index')->with('message', "La película {$movie->title} se creó con éxito.");
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::orderBy('value')->get(); // ORDER BY

        return view('admin.movies.edit', ['movie' => $movie, 'genres' => $genres]);
    }

    public function update(Movie $movie)
    {
        request()->validate([
            'title' => 'required|min:3|max:255',
            'release_date' => 'required|date|before:today',
            'genre_id' => 'exists:genres,id'
        ]);

        $movie->update(request()->all());

        return redirect()->route('admin.movies.index')->with('message', "La película {$movie->title} se editó con éxito.");
    }

    public function destroy(Movie $movie)
    {
        $title = $movie->title;

        $movie->delete();

        return redirect()->route('admin.movies.index')->with('message', "La película {$title} se eliminó con éxito.");;
    }
}
