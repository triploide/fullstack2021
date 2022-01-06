<?php

class Unidad
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function mover($x, $y)
    {
        echo 'Se está ejecutando <i>mover</i> <br>';

        $this->x = $x;
        $this->y = $y;
    }
}
