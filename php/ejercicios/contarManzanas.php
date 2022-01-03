<?php

/**
 * NIVEL 1
 * 
 * Un aldeano sale a recolectar frutas en un campo.
 * El aldeano va pasando por distintos frutales, pero a nosotros nos interesa saber cuántas manzanas recolectó.
 * 
 * Crear la función contarManzanas.
 * La funcion debe recibir como parámetro un array de frutas.
 * Dentro de la función se debe recorrer el array de frutas y devolver cuantas manzanas se recolectaron.
 */

function contarManzanas($frutas) {
    $totalManzanas = 0;

    foreach ($frutas as $fruta) {
        if ($fruta == 'manzana') {
            $totalManzanas++;
        }
    }

    return $totalManzanas;
}

$frutas = [
    'manzana',
    'pera',
    'manzana',
    'naranja',
    'manzana',
    'pera',
    'naranja',
    'naranja',
    'manzana',
    'pera',
    'manzana',
];

var_dump(contarManzanas($frutas)); // la función debe devolver: 5
