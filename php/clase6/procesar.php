<?php

// usar un if y un else para varlidar si el usario puede ingrsar o no.
// En el if tengo que hacer un echo de "El usuario puede ingresar".
// En el else tengo que hacer un echo de "El usuario no puede ingresar".

// echo '<pre>';
// var_dump($_POST);

function login($mail, $password) {
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

    $isValid = false;

    foreach ($usuariosValidos as $usuario) {
        if ($mail == $usuario['mail'] && $password == $usuario['password']) {
            $isValid = true;
        }
    }

    return $isValid;
}

// var_dump(login($_POST['email'], $_POST['password']));
var_dump(login('admin@mail.com', '123456'));
var_dump(login('user@mail.com', '654321'));
var_dump(login('admin@mail.com', '111'));
var_dump(login('user@mail.com', '222'));
var_dump(login('unregistered@mail.com', '123456'));
var_dump(login('unregistered@mail.com', '654321'));
var_dump(login('unregistered@mail.com', '222'));

