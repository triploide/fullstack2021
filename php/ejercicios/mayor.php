<?php

/**
 * NIVEL 3
 * 
 * La función de php rand devuelve un número aleatorio entre el número inicial y el número final que se pasan como parámetros.
 * 
 * Nuestro objetivo es crear una función llamada mayor.
 * La función mayor va recibir como parámetro un número entero y devolver un número aleatorio entre el número pasado como parámetro un número hasta 100 unidades mayor.
 * Es decir, si ejecuto la función mayor pasando el número 50, la función debe devolver un número aleatorio entre 50 y 150.
 * Una vez que resolvamos el problema, modificar la función para que devuelva un número aleatorio entre el número pasado como PRIMER parámetro y un número hasta N unidades mayor. Esa cantidad N debe ser el SEGUNDO parámetro. En el caso que no se pase el segundo parámetro, el número "tope" debe ser 100 unidades mayor al número inicial.
 */


function mayor($desde, $cuantos=100) {
    $hasta = $desde + $cuantos;

    return rand($desde, $hasta);
}

var_dump(mayor(10)); // la función debe devolver: un número aleatorio entre 10 y 110

// TODO: modificar mayor para que funcione también así.
var_dump(mayor(50, 30)); // la función debe devolver: un número aleatorio entre 50 y 80
