<?php

/**
 * NIVEL 3
 * 
 * Cada vez que queremos encerrar texto dentro de un tag de html tenemos que escribir el tag de apertura y el de cierre.
 * Para reducir este tiempo podemos crear una función que nos ayude a escribir el tag de apertura y cierre de forma automática.
 * 
 * Crear la función tag.
 * La función debe recbir como PRIMER parámetro el texto a encerrar dentro del tag y como SEGUNDO parámetro un string que represente el nombre del tag.
 */

function tag($texto, $tag) {
    //TO DO: Implementar
}

tag('Hola Mundo', 'h1'); // la función debe devolver: <h1>Hola Mundo</h1>
tag('Hola Mundo', 'p'); // la función debe devolver: <p>Hola Mundo</p>

