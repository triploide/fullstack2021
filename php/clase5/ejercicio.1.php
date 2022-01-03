<?php

function breadcrumbsCreator($list) {
    $html =  '<nav>' . PHP_EOL;
    $html .=    '<ul>' . PHP_EOL;
    foreach ($list as $element) {
        $html .= "<li>$element</li>" . PHP_EOL;
    }
    $html .=    '</ul>' . PHP_EOL;
    $html .=  '</nav>' . PHP_EOL;

    return $html;
}

$breadcrumbs = [
    'Home',
    'Electrodomésticos',
    'Lavarropas',
    'Auroa'
];

var_dump(breadcrumbsCreator($breadcrumbs));

/**
 * <nav>
        <ul>
            <li>Home</li>
            <li>Electrodomésticos</li>
            <li>Lavarropas</li>
            <li>Auroa</li>
        </ul>
    </nav>
 */