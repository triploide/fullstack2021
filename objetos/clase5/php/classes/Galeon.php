<?php

class Galeon
{
    use Mover;
    use Atacar;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
    }

    public function getRangoDeAtaque()
    {
        return 3;
    }
}
