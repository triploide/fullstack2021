<?php
echo '<pre>';

require __DIR__ . '/php/classes/Personaje.php';
require __DIR__ . '/php/classes/Aldeano.php';
require __DIR__ . '/php/classes/Paladin.php';

$aldeano = new Aldeano(15, 'Maya');
$paladin = new Paladin(50, 'Español', 30);

// $paladin->atacar($aldeano);


// var_dump($aldeano);

// var_dump($paladin);

$paladin->mover(10, 30);
$aldeano->mover(10, 30);

var_dump($paladin, $aldeano);

