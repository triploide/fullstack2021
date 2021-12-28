<?php

$categorias = [
    'deportes',
    'tecnologia',
    'cocina',
    'salud',
    'moda',
    'cine',
    'musica',
    'juegos',
    'viajes',
    'otros'
];

// var_dump($_GET);

// Además de la página, también van a recibir de a cuantos se pagina.

$pagina = $_GET['pagina'];

$cuantos = 3;
$desde = ($pagina - 1) * $cuantos;
$hasta = $desde + $cuantos;

for($i=$desde; $i<$hasta; $i++) {
    echo $categorias[$i] . '<br>';
}

// var_dump($_POST);
