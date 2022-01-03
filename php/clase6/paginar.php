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

if (isset($_GET['cuantos'])) {
    $cuantos = $_GET['cuantos'];
} else {
    $cuantos = 3;
}

$desde = ($pagina - 1) * $cuantos;
$hasta = $desde + $cuantos;

for($i=$desde; $i<$hasta; $i++) {
    echo $categorias[$i] . '<br>';
}

// paginar.php?pagina=1&cuantos=5;
// paginar.php?pagina=1;
// paginar.php?pagina=2&cuantos=5;
// paginar.php?pagina=2;

// var_dump($_POST);
