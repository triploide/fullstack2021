<?php

class Producto
{
    protected $nombre;
    protected $precio;
    protected $descuento;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descuento = 0;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        $precio = $this->precio;

        if ($this->descuento != 0) {
            $precio = $precio - ($precio * $this->descuento / 100);
        }

        return $precio;
    }

    public function mostrarInfo()
    {
        return "{$this->nombre}, Precio: {$this->precio}";
    }

    public function aplicarDescuento($descuento)
    {
        $this->descuento = $descuento;
    }
}
