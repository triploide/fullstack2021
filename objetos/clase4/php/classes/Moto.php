<?php

class Moto extends Vehiculo
{
    public function __construct($color = 'Negro')
    {
        parent::__construct($color, 2);
    }
}
