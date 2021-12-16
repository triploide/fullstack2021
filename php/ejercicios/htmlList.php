<?php

/**
 * NIVEL 3
 * 
 * Muchas veces al escribir html nos encontramos que tenemos que escribir varias veces el mismo código.
 * Por ejemplo, si tenemos que escribir una lista de enlaces, vamos a usar la etiqueta <a> en varias oportunidades.
 * Lo mismo pasa si tengo que escribir varias etiquetas <li> dentro de una lista.
 * La idea sería tener una función que reciba un array de strings y que devuelva una lista html con todos los elementos del array dentro de una etiqueta.
 * 
 * Crear una función llamada htmlList.
 * La función debe recibir como PRIMER parámetro un array de strings y como SEGUNDO parámetro un string que represente la etiqueta que queremos usar para cada elemento de la lista.
 * Dicha función debe devolver una lista html con todos los elementos del array dentro de una etiqueta (la que se paso como segundo parámetro).
 * Se puede user la función tag si así se lo desea.
 */

$categorias = [
    'Acción',
    'Aventura',
    'Terror',
    'Comedia',
];

function listar($categorias, $etiqueta) {
    // TODO: Implementar
}

listar($categorias, 'li'); // la función debe devolver: <li>Acción</li><li>Aventura</li><li>Terror</li><li>Comedia</li>
