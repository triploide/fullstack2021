<?php

// Condicionales

// if
$edad = 21;

// if ($edad >= 18) {
//     echo "Eres mayor de edad";
//     echo '<br>';
//     echo 'otra cosa';
//     echo '<br>';

//     $acceso = true;
// }

// else
// if ($edad >= 18) {
//     echo "Eres mayor de edad";
//     echo '<br>';
//     $acceso = true;
// } else {
//     echo "Eres menor de edad";
//     echo '<br>';
//     $acceso = false;
// }

// var_dump($acceso);

// if elseif else
// if ($edad < 18) {
//     echo 'No podés acceder'; // menos de 18
// } elseif ($edad >= 18 && $edad < 21) {
//     echo 'Accediste pero no podés comprar'; // entre 18 y 20
// } else {
//     echo 'Accediste y podés comprar'; // 21 o más
// }

$diaDeLaSemana = 11; // 0 = domingo, 1 = lunes, etc

if ($diaDeLaSemana == 0) {
    echo 'Es domingo';
} elseif ($diaDeLaSemana == 1) {
    echo 'Es lunes';
} elseif ($diaDeLaSemana == 2) {
    echo 'Es martes';
} elseif ($diaDeLaSemana == 3) {
    echo 'Es miércoles';
} elseif ($diaDeLaSemana == 4) {
    echo 'Es jueves';
} elseif ($diaDeLaSemana == 5) {
    echo 'Es viernes';
} elseif ($diaDeLaSemana == 6) {
    echo 'Es sábado';
} else {
    echo 'No es un día de la semana';
}
