<?php

// PSR-12

// La clase es el molde
class Paladin
{
    // atributos
    public $ataque;
    public $vida;
    public $civi;
    public $estandarte;

    // métodos
    public function __construct($ataque, $vida, $civi, $estandarte = 'azul')
    {
        $this->ataque =$ataque;
        $this->vida =$vida;
        $this->civi = $civi;
        $this->estandarte = $estandarte;
    }

    // public function atacar()
    // {
    //     // $ataque = 12;

    //     // echo $ataque; // acá es una variable

    //     echo "El paladín está haciendo un daño de {$this->ataque} <br>"; // acá es un atributo de la INSTANCIA / OBJETO
    // }

    // El paladín actual ("yo") ataca al paladín que recibe por parámetro
    // En el ataque le resta al contrincante igual cantidad de vida que el ataque que poseo
    // Luego de eso, preguntar cuanta vida le queda al contrincante y si la vida es mayor a cero hacer un echo de "El golpe no fue suficiente"
    // Si la vida es menor o igual a cero hacer un echo de "El golpe fue certero"
    public function atacarA($personaje)
    {
        // TODO:
    }
}

