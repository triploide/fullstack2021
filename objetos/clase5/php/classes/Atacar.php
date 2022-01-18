<?php

trait Atacar
{
    public function atacar($enemigo)
    {
        if ($this->enRango($enemigo->getX(), $enemigo->getY())) {
            echo 'Atacando<br>';
        } else {
            // Me muevo hasta el contrincante 
            $this->setPosition($enemigo->getX() - $this->getRangoDeAtaque(), $enemigo->getY() - $this->getRangoDeAtaque());
            // Y luego ataco
            $this->atacar($enemigo);
        }
    }

    protected function enRango($x, $y)
    {
        $distanciaX = abs($this->getX() - $x);
        $distanciaY = abs($this->getY() - $y);

        return ($distanciaX <= $this->getRangoDeAtaque() && $distanciaY <= $this->getRangoDeAtaque());
    }
}
