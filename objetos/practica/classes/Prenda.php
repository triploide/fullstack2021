<?php

class Prenda extends Producto
{
    private $talle;
    private $color;

    public function __construct($nombre, $precio, $talle, $color)
    {
        parent::__construct($nombre, $precio);
        $this->talle = $talle;
        $this->color = $color;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . ", color: {$this->color}, talle: {$this->talle}";
    }
}
