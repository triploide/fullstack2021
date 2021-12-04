<?php

// 'superadmin';
// 'admin';
// 'seller';
// 'buyer';
// 'guest';

/**
 * Dado un nombre de usuario, devolver el nivel de acceso.
 * El array de roles no puede ser modificado.
 * Al editar la variable $user, se debe devolver el nivel de acceso correpondiente.
 * El objetivo es reducir la cantidad de ifs en el código.
 */

$roles = [
    'superadmin' => 'El usuario puede hacer todo y crear admins',
    'admin' => 'El usuario puede hacer todo menos crear admins',
    'seller' => 'El usuario puede vender y comprar',
    'buyer' => 'El usuario puede comprar',
    'guest' => 'El usuario no puede hacer nada',
];

$user = 'admin';

if ($user == 'superadmin') {
    echo 'El usuario puede hacer todo y crear admins';
}

if ($user == 'admin') {
    echo 'El usuario puede hacer todo menos crear admins';
}

if ($user == 'seller') {
    echo 'El usuario puede vender y comprar';
}

if ($user == 'buyer') {
    echo 'El usuario puede comprar';
}

if ($user == 'guest') {
    echo 'El usuario no puede hacer nada';
}