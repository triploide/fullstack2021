<?php

class Persona
{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar()
    {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años";
    }
}
