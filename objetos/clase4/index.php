<?php
declare( strict_types = 1 );

echo '<pre>';
require __DIR__ . '/php/autoload.php';

$auto = new Auto(2012);
$moto = new Moto('Azul');

// var_dump($auto);
// var_dump($auto, $moto);

$auto->mover(10, 20);
// $auto->x = 10;
// $auto->y = 20;

$auto->setPuertas(6);

// var_dump('El modelo del auto es: ' . $auto->getModelo());

var_dump($auto->getAntiguedad());