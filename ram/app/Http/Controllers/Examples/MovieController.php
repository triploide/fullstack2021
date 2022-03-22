<?php

namespace App\Http\Controllers\Examples;

use App\Classes\Movie as ClassesMovie;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Ejemplo de uso de clases propias dentro de un Controller
    public function customClass($id)
    {
        $movie = new ClassesMovie($id);
        $movie->myMethod();
    }

    public function index()
    {
        // Collection que se puede iterar igual que un array
        // Cada uno de los elementos de la collection es un objeto del tipo Movie
        // Cada objeto movie tiene un atributo por cada una de las columnas de la tabla (movies)

        $pelis = Movie::all(); 

        // Ejemplo de iteración sobre una collection
        // foreach ($pelis as $peli) {
        //     dd($peli->release_date);
        // }

        return view('front.movies.index', ['movies' => $pelis]);
    }

    public function show($id)
    {
        // $peli = Movie::find($id); // Trae una instacia Movie, si el id no existe, devuelve null
        $movie = Movie::findOrFail($id); // Trae una instancia del modelo Movie, si el id no existe, devuelve un error 404

        // Se puede acceder a cualquiera de los atributos del modelo Movie con la notación flecha
        // Es importante tener en cuenta que los atributos de un modelo son las columnas que seteamos en la migración
        // dd($movie->genre);
        // dd($movie->tags);

        return view('front.movies.show', ['movie' => $movie]);
    }

    public function form()
    {
        return view('examples.form');
    }

    public function save()
    {
        // Devuelve todo el request en formato de array
        // En el array, cada key es el name de un input y el value de esa key es el value del input
        // $data = request()->all();  
        // dd($data['comment']); // Así puedo recuperar un valor en particular

        // dd(request()->input('comment')); // Recupera el valor de un input dado a partir de su name

        // dd(request()->except('_token',  'submit')); // devuelve un array de resultados

        // dd(request()->only('firstname',  'lastname')); // devuelve un array de resultados

        // ----- Creación de un nuevo registro -----
        // Ver forma reducida en Admin\MovieController
        // $movie = new Movie; // Crea una instancia del modelo Movie
        // $movie->title = request()->input('title');
        // $movie->release_date = request()->input('release_date');
        // $movie->length = request()->input('length');
        // $movie->genre_id = request()->input('genre_id');
        // $movie->price = request()->input('price');
        // $movie->save();

        // ----- Actualización de un registro -----
        // Ver forma reducida en Admin\MovieController
        // $movie = Movie::find($id); // Busca un registro por su id
        // $movie->title = request()->input('title');
        // $movie->release_date = request()->input('release_date');
        // $movie->length = request()->input('length');
        // $movie->genre_id = request()->input('genre_id');
        // $movie->price = request()->input('price');
        // $movie->save();

        return 'Éxito!';
    }
}
