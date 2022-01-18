<?php

class Arquero extends UnidadMilitar
{
    public function __construct()
    {
        parent::__construct();

        $this->rangoDeAtaque = 3;
    }
}
