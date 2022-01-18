<?php

class UnidadMilitar extends Personaje implements Range, Atacable
{
    use Atacar;

    public $rangoDeAtaque;

    public function __construct()
    {
        parent::__construct();

        $this->rangoDeAtaque = 1;
    }

    public function getRangoDeAtaque()
    {
        return $this->rangoDeAtaque;
    }
}
