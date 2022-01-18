<?php

echo '<pre>';
require __DIR__ . '/php/autoload.php';

$aldeano = new Aldeano;
$aldeano->setPosition(20, 20);

$arquero = new Arquero;
$arquero->setPosition(10, 10);
// $arquero->atacar($aldeano);

$galeon = new Galeon;
$galeon->setPosition(30, 30);
// $galeon->atacar($aldeano);
// echo $galeon->getX();

$ejemplo = new Ejemplo;
$ejemplo->atacar();

$unidades = [$arquero, $galeon];

foreach ($unidades as $unidad) {
    $unidad->atacar($aldeano);
}

// var_dump($arquero, $aldeano, $galeon);

