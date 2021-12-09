<?php

// Funciones de array
// array_push, array_pop, array_shift, array_unshift, sort, rsort, array_reverse, count, implode, explode
// https://www.php.net/manual/es/ref.array.php


$nombres = [
    'Barclay',
    'Bort',
    'Bert',
    'Barry',
];

// ----------
// array_push
// ----------
// Agrega un elemento al final del array
// array_push($nombres, 'Bart');
// var_dump($nombres);

// ---------
// array_pop
// ---------
// Toma el último elemento del array y lo devuelve. Además remueve el elemento.
// $ultimo = array_pop($nombres);
// var_dump($nombres);
// var_dump($ultimo);

// -------------
// array_unshift
// -------------
// Agregar un elemento al inicio del array
// array_unshift($nombres, 'Bart');
// var_dump($nombres);

// -----------
// array_shift
// -----------
// Toma el primer elemento del array y lo devuelve. Además elimina el elemento.
// $primer = array_shift($nombres);
// var_dump($nombres);

// ----
// sort
// ----
// Ordena los elementos del array
// sort($nombres);
// var_dump($nombres);

// ----
// rsort
// ----
// Ordena los elementos del array de forma inversa
// rsort($nombres);
// var_dump($nombres);

// -------------
// array_reverse
// -------------
// Invierte los elementos del array dado y devuelve un nuevo array. No modifica el array original
// $orden = array_reverse($nombres);
// var_dump($orden);

// -----
// count
// -----
// Cuenta los elementos de un array
// $largo = count($nombres);
// var_dump($largo);

// -------
// implode
// -------
// Une los elementos del array usando el "pegamento" que se pasó como parámetro y devuelve una cadena de texto
// $texto = implode(', ', $nombres);
// var_dump($texto);

// -------
// explode
// -------
// Separa una cadena de texto por el separador pasado como parámetro y devuelve un array
// $path = 'kamecode/fullstack2021/php/clase4';
// $carpetas = explode('/', $path);
// var_dump($carpetas); // csv

// ----------------------------------------------------------

// ----------------------
// Array multidimensional
// ----------------------
// El array multidimensional es un array cuyos elementos pueden ser otro array.



// $categorias = [
//     'cine' => [
//         'cine',
//         'peliculas', // echo 'peliculas';
//     ],
//     'musica' => [
//         'rock',
//     ],
//     'deportes' => [
//         'futbol',
//         'baloncesto',
//         'tenis',
//         'beisbol',
//         'deportes de nieve' => [
//             'futbol de nieve',
//             'beisbol de nieve',
//             'olimpicos' => [
//                 'futbol de nieve olimpico',
//                 'beisbol de nieve olimpico',
//             ],
//         ],
//     ],
// ];

// var_dump($categorias['deportes']['deportes de nieve']['olimpicos'][0]);


// $categorias = [
//     [
//         'cine',
//         'peliculas', // echo 'peliculas';
//     ],
//     [
//         'rock',
//     ],
//     [
//         'futbol',
//         'baloncesto',
//         'tenis',
//         'beisbol',
//         [
//             'futbol de nieve',
//             'beisbol de nieve',
//             [
//                 'futbol de nieve olimpico',
//                 'beisbol de nieve olimpico',
//             ],
//         ],
//     ],
// ];

// var_dump($categorias[2][4][2][0]);

$diasEs = [
    'domingo' => 'Domingo',
    'lunes' => 'Lunes',
    'martes' => 'Martes',
    'miercoles' => 'Miércoles',
    'jueves' => 'Jueves',
    'viernes' => 'Viernes',
    'sabado' => 'Sábado',
];

$diasEn = [
    'domingo' => 'Sunday',
    'lunes' => 'Monday',
    'martes' => 'Tuesday',
    'miercoles' => 'Wednesday',
    'jueves' => 'Thursday',
    'viernes' => 'Friday',
    'sabado' => 'Saturday',
];

$diasPt = [
    'domingo' => 'Domingo',
    'lunes' => 'Segunda-feira',
    'martes' => 'Terça-feira',
    'miercoles' => 'Quarta-feira',
    'jueves' => 'Quinta-feira',
    'viernes' => 'Sexta-feira',
    'sabado' => 'Sábado',
];

$lang = 'pt';

$dias = [
    'es' => $diasEs,
    'en' => $diasEn,
    'pt' => $diasPt
];

// echo $dias[$lang]['miercoles'];

echo date('l');

// echo date('d/m/Y h:i:s');



