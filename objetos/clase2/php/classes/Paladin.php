<?php

class Paladin extends Personaje
{
    public $ataque;

    // Sobreescritura del constructor
    public function __construct($vida, $civi, $ataque)
    {
        // $this->vida =$vida;
        // $this->civi = $civi;
        // $this->__construct($vida, $civi); Esto no se tiene que hacer NUNCA
        parent::__construct($vida, $civi);
        $this->ataque = $ataque;
    }

    public function atacar($contrincante=null)
    {
        if ($this->civi == $contrincante->civi) {
            echo 'No puedo atacar a un compañero<br>';
        } else {
            // $contrincante->vida = $contrincante->vida - $this->ataque; Es igual a la línea de abajo
            $contrincante->vida -= $this->ataque;
        }
    }

    public function mover($x, $y)
    {
        for($this->x; $this->x < $x; ) {
            $this->x += 3;
            echo "{$this->x}<br>";
        }

        for($this->y; $this->y < $y; ) {
            $this->y += 3;
            echo "{$this->y}<br>";
        }
    }
}
