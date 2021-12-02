<?php

// $user1 = 'superadmin';
// $user2 = 'admin';
// $user3 = 'seller';
// $user4 = 'buyer';
// $user5 = 'guest';

// if ($user == 'superadmin') {
//     echo 'El usuario es superadmin';
// } elseif ($user == 'admin') {
//     echo 'El usuario es admin';
// } elseif ($user == 'seller') {
//     echo 'El usuario es seller';
// } elseif ($user == 'buyer') {
//     echo 'El usuario es buyer';
// } else {
//     echo 'El usuario es guest';
// }


// Arrays
// $users = [18, 150.33, 'Bort', false];
// echo '<pre>';
// var_dump($users);


// --------------------------------------------------
// Alternativa para el caso anterior
// --------------------------------------------------

$users = [
    'superadmin',
    'admin',
    'seller',
    'buyer',
    'guest',
];

// $total = count($users);
// var_dump($total);

// echo '<pre>';
// var_dump($users);
// echo $users[5];

// echo $users[0];
// echo '<br>';
// echo $users[1];
// echo '<br>';
// echo $users[2];
// echo '<br>';


// Declaración de una variable - se inicializa la variable contador - SE EJECUTA UNA VEZ
// El condicional - SE EVALUA N VECES AL INICIO
// El incremento - SE EJECUTA N VECES AL FINAL

// echo 'primer for<br>';
// for ($i=0; $i < count($users); $i = $i + 1) {
//     echo $users[$i];
//     echo '<br>';
// }

// echo 'segundo for<br>';
// foreach ($users as $user) {
//     echo $user;
//     echo '<br>';
// }

// --------------------------------------------------
// Modificar el valor de un elemento del array
// --------------------------------------------------

// $users[0] = 'master';
// echo $users[0];

// echo '<pre>';
// var_dump($users);

// --------------------------------------------------
// Agregar un elemento al array
// --------------------------------------------------
// $users[] = 'último user';
// $users[] = 'Un user más';

// echo '<pre>';
// var_dump($users);

$permisos = [
    'El usuario puede hacer todo y crear admins',
    'El usuario puede hacer todo menos crear admins',
    'El usuario puede vender y comprar',
    'El usuario puede comprar',
    'El usuario no puede hacer nada',
];

// echo '<pre>';
// var_dump($permisos);

// for ($i=0; $i < count($permisos); $i++) {
//     echo $users[$i];
//     echo ': ';
//     echo $permisos[$i];
//     echo '<br>';
// }

// --------------------------------------------------
// La solución para lo anterior
// --------------------------------------------------
$roles = [
    'superadmin' => 'El usuario puede hacer todo y crear admins',
    'admin' => 'El usuario puede hacer todo menos crear admins',
    'seller' => 'El usuario puede vender y comprar',
    'buyer' => 'El usuario puede comprar',
    'guest' => 'El usuario no puede hacer nada',
];

// echo '<pre>';
// var_dump($roles['buyer']);

// for ($i=0; $i < count($roles); $i++) {
//     echo $roles[$i];
// }

// foreach simple
// foreach ($roles as $role) {
//     echo $role;
//     echo '<br>';
// }

// foreach complejo
// foreach ($roles as $clave => $valor) {
//     echo $clave;
//     echo ': ';
//     echo $valor;
//     echo '<br>';
// }

// sinónimos
$i = 0;
$i = $i + 1;
echo $i . '<br>';

// $i = 0;
// $i++;
// echo $i . '<br>';
