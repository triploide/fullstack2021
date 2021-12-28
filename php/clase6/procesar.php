<?php

$usuariosValidos = [
    [
        'mail' => 'admin@mail.com',
        'password' => '123456',
    ],
    [
        'mail' => 'user@mail.com',
        'password' => '654321',
    ]
];

// usar un if y un else para varlidar si el usario puede ingrsar o no.
// En el if tengo que hacer un echo de "El usuario puede ingresar".
// En el else tengo que hacer un echo de "El usuario no puede ingresar".

echo '<pre>';
var_dump($_POST);
