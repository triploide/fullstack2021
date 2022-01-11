<?php

class Auto extends Vehiculo
{
    private $puertas;
    private $modelo;

    public function __construct($modelo, $color = 'Blanco', $puertas = 4)
    {
        $this->modelo = $modelo;

        parent::__construct($color, 4);
        
        $this->puertas = $puertas;
    }

    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    // public function getAntiguedad()
    // {
    //     $currentYear = date('Y');

    //     $value = $currentYear - $this->modelo;

    //     return $value;
    // }

    public function getAntiguedad()
    {
        return $this->getDiffInYears($this->modelo);
    }

    private function getDiffInYears($year)
    {
        $currentYear = date('Y');

        return abs($currentYear - $year);
    }
}
