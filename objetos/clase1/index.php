<?php

include 'Paladin.php';

// La instancia es el objeto concreto
$paladinHuno = new Paladin(100, 110, 'Huno', 'rojo');
// $paladinHuno->ataque = 100;
// $paladinHuno->civi = 'Huno';
// $paladinHuno->estandarte = 'rojo';

echo '<pre>';
var_dump($paladinHuno);

$paladinEspanol = new Paladin(120, 50, 'Español');
$paladinEspanol->atacarA($paladinHuno);
// $paladinEspanol->ataque = 120;
// $paladinEspanol->civi = 'Español';
// $paladinEspanol->estandarte = 'azul';

// $paladinEspanol->civi = 'Huno';

echo '<pre>';
var_dump($paladinEspanol);
