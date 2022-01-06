<?php
echo '<pre>';
include __DIR__ . '/php/autoload.php';

// $aldeano = new Aldeano(5, 5);
// var_dump($aldeano);
// $aldeano->mover(10, 15);

// echo '<hr>';

// $arquero = new Arquero(3);
// var_dump($arquero);
// $arquero->mover(22, 25);

// echo '<hr>';

$arquero = new Arquero(3); // TODO: el rango de ataque tiene que estar preseteado en cada clase
$jinete = new Jinete(1); // TODO: el rango de ataque tiene que estar preseteado en cada clase
$jinete->mover(1, 1);

$jinete->atacar($arquero); // 1
$arquero->atacar($jinete); // 3

echo '<hr>';

// $arquero->atacar($aldeano);

