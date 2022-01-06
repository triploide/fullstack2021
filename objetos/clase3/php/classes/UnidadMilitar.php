<?php

class UnidadMilitar extends Unidad
{
    public $rangoDeAtaque;

    // Sobreescribo el contructor de mi padre
    // public function __construct($x, $y, $rangoDeAtaque)
    // {
    //     parent::__construct($x, $y);

    //     $this->rangoDeAtaque = $rangoDeAtaque;
    // }

    // Sobreescribo el contructor de mi padre
    public function __construct($rangoDeAtaque)
    {
        parent::__construct(0, 0);

        $this->rangoDeAtaque = $rangoDeAtaque;
    }

    public function atacar($unidad)
    {
        if ($this->enRango($unidad)) {
            echo 'Se está ejecutando <i>atacar</i> en '. get_class($this) .' <br>';
        } else {
            // TODO: moverme hasta el contrincante y luego atacar 
        }
    }

    public function enRango($unidad)
    {
        $distanciaX = abs($this->x - $unidad->x);
        $distanciaY = abs($this->y - $unidad->y);

        echo "La distancia en x es: $distanciaX y la distancia en y es: $distanciaY<br>";

        return ($distanciaX <= $this->rangoDeAtaque && $distanciaY <= $this->rangoDeAtaque);
    }
}
