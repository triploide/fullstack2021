<?php

// Operadores lógicos

// && (AND)
// || (OR)
// > (Mayor que)
// < (Menor que)
// >= (Mayor o igual que)
// <= (Menor o igual que)
// == (Igual que)
// === (Igual estricto)
// != (Diferente que)
// !== (Diferente estricto)
// ! (Negación)


// Tipos booleanos  (true, false)

// $verdadero = true;
// $falso = false;

// var_dump($falso);

// $resultado = 2 > 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 7 > 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 > 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 >= 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 == 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 == '5'; // chequea si el valor es el mismo
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 === '5'; // chequea si el valor y el tipo son iguales
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 === 5.0; // chequea si el valor y el tipo son iguales
// var_dump($resultado);
// echo '<br>';


// $resultado = 5 != 5;
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 != '5'; // chequea si el valor es el mismo
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 !== '5'; // chequea si el valor y el tipo son iguales
// var_dump($resultado);
// echo '<br>';

// $resultado = 5 !== 5.0; // chequea si el valor y el tipo son iguales
// var_dump($resultado);
// echo '<br>';

// $dado = 5;
// $resultado = $dado >= 1 && $dado <= 6;
// var_dump($resultado);

// p q resultado
// v v v
// f v f
// v f f
// f f f

// login de admin
// $user = 'otro'; // sudo
// $resultado = $user == 'admin' || $user == 'sudo';
// var_dump($resultado);

// p q resultado
// v v v
// f v v
// v f v
// f f f

// login de client
$user = 'admin'; // sudo
$resultado = !($user == 'admin' || $user == 'sudo'); // ¿Se puede loguear el admin? ¡NO!
var_dump($resultado);
