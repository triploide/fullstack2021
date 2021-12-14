<?php

function imprimirLinks(array $links) {
    $html = '';

    foreach ($links as $link) {
        // $html = $html . "<a href='{$link['url']}'>{$link['nombre']}</a>";
        $html = $html . '<a href="' . $link['url'] .'">' . $link['nombre'] . '</a>';
    }
    
    return $html;
}

function debug($param, bool $mostraPre) {

    if ($mostraPre) {
        echo '<pre>';
    }

    var_dump($param);
}

$data = ['uno', 'dos'];

// Resolver
// debug($data); // quiero el echo de pre
// debug($data, false); // no muestres el pre
