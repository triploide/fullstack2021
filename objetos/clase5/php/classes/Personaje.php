<?php

class Personaje
{
    use Mover;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
    }
}
