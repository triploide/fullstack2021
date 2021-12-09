<?php

$diasEs = [
    'domingo' => 'Domingo',
    'lunes' => 'Lunes',
    'martes' => 'Martes',
    'miercoles' => 'Miércoles',
    'jueves' => 'Jueves',
    'viernes' => 'Viernes',
    'sabado' => 'Sábado',
];

$diasEn = [
    'domingo' => 'Sunday',
    'lunes' => 'Monday',
    'martes' => 'Tuesday',
    'miercoles' => 'Wednesday',
    'jueves' => 'Thursday',
    'viernes' => 'Friday',
    'sabado' => 'Saturday',
];

$lang = 'es';

$dia = date('l');

$dias = [
    'es' => $diasEs,
    'en' => $diasEn,
];

// Usando la función date('l') para obtener el día de la semana, modificar los arrays asociativos $diasEs y $diasEn para poder obtener el día en el idioma correspondiente.
