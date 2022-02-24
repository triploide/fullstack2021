<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function form()
    {
        return view('admin.form');
    }

    public function save()
    {
        // Devuelve todo el request en formato de array
        // En el array, cada key es el name de un input y el value de esa key es el value del input
        // $data = request()->all();  
        // dd($data['comment']); // Así puedo recuperar un valor en particular

        // dd(request()->input('comment')); // Recupera el valor de un input dado a partir de su name

        // dd(request()->except('_token',  'submit')); // devuelve un array de resultados

        dd(request()->only('firstname',  'lastname')); // devuelve un array de resultados

        return 'Éxito!';
    }
}
