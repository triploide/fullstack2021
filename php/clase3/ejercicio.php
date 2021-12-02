<?php

// 'superadmin';
// 'admin';
// 'seller';
// 'buyer';
// 'guest';

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