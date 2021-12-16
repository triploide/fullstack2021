<?php

/**
 * 
 * NIVEL 5 
 * 
 * La función mostrarRepetidos debe recibir como parámetro un array de strings y devolver nuevo array con todos los elementos que estaban repetidos en el array original.
 * 
 * Ejemplo: para la lista ['Acción', 'Aventura', 'Cienca Ficción', 'Terror', 'Comedia', 'Acción', 'Terror', 'Comedia', 'Acción', 'Terror', 'Comedia']
 * 
 * La función debe devolver: ['Acción', 'Terror', 'Comedia']
 * 
 * Una forma de solucionar este problema podría ser:
 * Dentro de la función tener un array vacío llamado $repetidos.
 * Recorrer el array original.
 * En cada iteración:
 *      - Si el elemento actual no está en el array $repetidos, agregarlo al array $repetidos.
 *        Una forma de agregarlo podría ser usar el elemento actual como key del array repetidos y como valor poner el número cero.
 *      - Si el elemento actual está en el array $repetidos, incrementar el valor del elemento actual en el array $repetidos.
 * Al finalizar de iterar el array original el array repetidos va a contener íncides y valores.
 * Sólo en los casos que el elemento del array original estuviera repetido, el valor del elemento del array repetidos debe ser mayor a cero.
 * Ahora, con este nuevo array de repetidos, iterarlo y devolver un nuevo array con los elementos que tengan un valor mayor a cero.
 * 
 * NOTA: para saber si un elemento existe en el array podemos usar la función isset.
 * Ejemplo:
 *  $array = ['uno', 'dos', 'tres'];
 *  isset($array['uno']); // devuelve true
 *  isset($array['cuatro']); // devuelve false
 */


$categorias = ['Acción', 'Aventura', 'Cienca Ficción', 'Terror', 'Comedia', 'Acción', 'Terror', 'Comedia', 'Acción', 'Terror', 'Comedia', 'Animada'];

// var_dump($categorias);

function mostrarRepetidos($elementos) {
    $repetidos = [];

    foreach($elementos as $elemento) {
        if (isset($repetidos[$elemento])) {
            $repetidos[$elemento]++;
        } else {
            $repetidos[$elemento] = 0;
        }
    }

    // iterar sobre el array de repetidos y mostrar todos aquellos elementos que tengan un valor mayor a cero

    var_dump($repetidos);
}

mostrarRepetidos($categorias);


