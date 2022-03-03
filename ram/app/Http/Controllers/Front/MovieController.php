<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $pelis = Movie::all();

        return view('front.movies.index', ['movies' => $pelis]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('front.movies.show', ['movie' => $movie]);
    }
}
