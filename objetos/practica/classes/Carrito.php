<?php

class Carrito
{
    private $productos;

    public function __construct()
    {
        $this->productos = [];
    }

    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    public function getTotal()
    {
        $total = 0;

        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }

        return $total;
    }
}