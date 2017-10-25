<?php

namespace AppBundle\Classes;

use AppBundle\Classes\Figura;
use AppBundle\Classes\FiguraInterface;

/**
*
*/
class Circulo extends Figura implements FiguraInterface
{
    public function __construct()
    {
        $this->tipo='circulo';
    }

    public function getSuperficie()
    {
        return pi() * $this->radio ;
    }

    public function getDiametro()
    {
        return 2* $this->radio;
    }
}