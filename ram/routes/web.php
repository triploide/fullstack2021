<?php

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Front\{AboutController, ContactController, MovieController};
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// --------------------
// ----- Ejemplos -----
// --------------------
// El método get recibe dos parámetros:
// 1. La ruta a la que se va a redirigir
// 2. Un callback (o un método de un controllador) que se ejecutará cuando se haga acceda a dicha ruta
// El callback debe devolver una cadena de texto. Generalmente esa cadena de texto es el HTML que se mostrará en la pantalla.
Route::get('ejemplo/quienes-somos', function () {
    return 'Quienes Somos';
});

Route::get('ejemplo', function () {
    // Para devolver una vista, se usa el helper de Laravel view()
    // El primer parámetro es el nombre de la vista, el segundo es un array con los datos que se le pasarán a la vista, en donde cada íncide del array es una variable que se puede usar en la vista y que tiene el valor del array asociado a ese índice.
    return view('ejemplo', [
        'nombre' => 'Bort',
        'apellido' => 'Ejemplo',
        'edad' => 10
    ]);
});

// Ejemplo de vista sin parámetros
Route::get('ejemplo/home', function () {
    return view('examples.home');
});


// ---------------
// ----- RAM -----
// ---------------

// --- Front ---
Route::get('/', [HomeController::class, 'home']);
Route::get('peliculas', [MovieController::class, 'index'])->name('movies.index');
Route::get('peliculas/{id}', [MovieController::class, 'show'])->name('movies.show'); // Resuelve la ruta PeliculaController y el método avatar
// Route::get('peliculas/{id}/borrar', [MovieController::class, 'deleteMovie'])->name('movies.delete'); // Resuelve la ruta PeliculaController y el método avatar

Route::get('contacto', [ContactController::class, 'index'])->name('contact.index');
Route::get('nosotros', [AboutController::class, 'index'])->name('about.index');


// --- Admin ---

// Route::get('admin/form', [AdminMovieController::class, 'form']);
// Route::post('admin/form', [AdminMovieController::class, 'save']);

Route::get('admin/movies', [AdminMovieController::class, 'index'])->name('admin.movies.index');
Route::get('admin/movies/create', [AdminMovieController::class, 'create'])->name('admin.movies.create');
Route::post('admin/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
Route::delete('admin/movies/{id}', [AdminMovieController::class, 'destroy'])->name('admin.movies.destroy');


/**
 * Crear una ruta con el nombre principal de la entidad (juegos, mis-trabjos, servicios)
 * Van a crear un controlador con ese nombre (JuegoController, etc)
 * La ruta la va a resolver el método show de ese controller
 * El método en el controller va a devolver un array hardcodeado y le pasan el array a la vista
 * Van a crear la vista con el nombre de la entidad principal (juego.blade.php)
 * En la vista listan el array con un foreach y muestran un par de entidades
 */