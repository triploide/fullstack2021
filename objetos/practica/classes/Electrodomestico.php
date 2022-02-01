<?php

class Electrodomestico extends Producto
{
    private $consumo;

    public function __construct($nombre, $precio, $consumo)
    {
        parent::__construct($nombre, $precio);
        $this->consumo = $consumo;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . ", consumo: {$this->consumo}";
    }
}
