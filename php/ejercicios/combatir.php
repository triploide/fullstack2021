<?php

/**
 * NIVEL 2
 * 
 * Un paladín va montando en su caballo a combatir con cuantos enemigos se encuentre en su camino.
 * El paladín tiene una vida de 100 puntos.
 * Cada vez que combate contra un enemigo, se le resta a la vida del paladín la vida que tenía el enemigo.
 * Si la vida del paladín llega a 0, el paladín muere.
 * Por ejemplo: el paladín se encuentra con un enemigo que tiene 30 puntos de vida, combate contra este enemigo y al final de la batalla el paladín tiene 70 puntos de vida.
 * En cada batalla el paladín puede combatir contra varios enemigos.
 * 
 * Crear la función combatir.
 * La función debe recibir como parámetro un array de enemigos.
 * Cada posición del array es la "vida" de cada uno de los enemigos.
 * Dentro de la función se debe setear una variable $vidaPaladin que sea igual 100.
 * Dentro de la función se debe recorrer el array de enemigos y restarle a la vida del paladín la vida de cada uno de los enemigos.
 * Al final, la función debe avisar si el paladín está vivo o muerto.
 */

function combatir($enemigos) {
    $vidaPaladin = 100;

    // TODO: Implementar
}

$enemigos = [
    20,
    30,
    10,
];

combatir($enemigos); // la función debe devolver: "El paladín sigue con vida";

$enemigos = [
    50,
    30,
    40,
];

combatir($enemigos); // la función debe devolver: "El paladín ha dado su vida en combate";

