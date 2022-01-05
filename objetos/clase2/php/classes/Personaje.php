<?php

class Personaje
{
    // atributos
    public $vida;
    public $civi;
    public $x;
    public $y;

    // métodos
    public function __construct($vida, $civi)
    {
        $this->vida =$vida;
        $this->civi = $civi;
        $this->x = 0;
        $this->y = 0;
    }

    public function mover($x, $y)
    {
        for($this->x; $this->x < $x; ) {
            $this->x++;
        }

        for($this->y; $this->y < $y; ) {
            $this->y++;
        }
    }
}
