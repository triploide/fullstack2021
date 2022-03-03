<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.movies.form');
    }

    public function store()
    {
        $movie = new Movie;
        $movie->title = request()->input('title');
        $movie->release_date = request()->input('release_date');
        $movie->length = request()->input('length');
        $movie->genre_id = request()->input('genre_id');
        $movie->price = request()->input('price');
        $movie->save();

        return redirect()->route('admin.movies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return redirect()->route('admin.movies.index');
    }
}
