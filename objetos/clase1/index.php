<?php

include 'Paladin.php';

// La instancia es el objeto concreto
$paladinHuno = new Paladin(10, 100, 'Huno', 'rojo');
// $paladinHuno->ataque = 100;
// $paladinHuno->civi = 'Huno';
// $paladinHuno->estandarte = 'rojo';

// var_dump($paladinHuno);

$paladinEspanol = new Paladin(20, 100, 'Español');


// $paladinEspanol->ataque = 120;
// $paladinEspanol->civi = 'Español';
// $paladinEspanol->estandarte = 'azul';

// $paladinEspanol->civi = 'Huno';

// echo '<pre>';
// var_dump($paladinEspanol);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AOE</title>
    <style>
        .rojo {
            color: red;
        }

        .azul {
            color: blue
        }

        .amarillo {
            color: yellow
        }

        .verde {
            color: green
        }

        .violeta {
            color: purple
        }
    </style>
</head>
<body>
    <h1>Batalla</h1>
    <?php
        $paladinEspanol->atacarA($paladinHuno);

        echo '<pre>';
        var_dump($paladinEspanol, $paladinHuno);
        echo '</pre>';

    ?>
</body>
</html>


