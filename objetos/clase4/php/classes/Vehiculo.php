<?php

class Vehiculo
{
    protected $cantidadDeRuedas;
    public $color;
    protected $x;
    protected $y;

    public function __construct($color, $cantidadDeRuedas)
    {
        $this->color = $color;
        $this->cantidadDeRuedas = $cantidadDeRuedas;
        $this->x = 0;
        $this->y = 0;
    }

    public function mover($x, $y)
    {
        // $estaPrendido = rand(0, 1);
        $estaPrendido = 0;

        if ($estaPrendido) {
            $this->x = $x;
            $this->y = $y;
        }
    }
}
