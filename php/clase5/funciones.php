<?php

// Ejemplo 1
function holaMundo() {
    echo 'Hola mundo' . PHP_EOL;
}

// Problema

function holaColo() {
    echo 'Hola Colo' . PHP_EOL;
}

function holaFran() {
    echo 'Hola Fran' . PHP_EOL;
}

// Ejemplo 2
function saludar(string $persona) {
    echo 'Hola ' . $persona . PHP_EOL; // La variable nombre vive dentro de la función
}

// saludar('Fran');
// saludar('Colo');
// saludar('Max');

// $nombres = [
//     'Fran',
//     'Colo',
//     'Max',
// ];

// foreach ($nombres as $nombre) {
//     echo saludar($nombre);
// }

function saludarATodos(array $listadoDeNombres) {
    foreach ($listadoDeNombres as $name) {
        echo 'Hola ' . $name . PHP_EOL;
        // saludar($name);
    }
}

$nombres = [
    'Colo',
    'Fran',
    'Max',
];

// saludarATodos($nombres);

// -------------


function saludarFormal(string $nombre, string $titulo='Sra.') { // definición
    echo 'Hola ' . $titulo . ' ' . $nombre . PHP_EOL;
}

// saludarFormal('Mari'); // uso - ejecución
// saludarFormal('Fran', 'Sr.');


// -------------------

function cubo($n) {
    $resultado = $n * $n * $n;

    return $resultado;
}

$numero = 3;
$numeroAlCubo = cubo($numero);
$resultado = $numeroAlCubo + 10;

echo $resultado;

// ----
/**
 * Listado de tipos:
 * int: entero
 * float: decimal
 * string: cadena de texto
 * bool: booleano
 * array: array
 */


