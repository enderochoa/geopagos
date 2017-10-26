<?php

namespace AppBundle\Classes;

use AppBundle\Classes\Figura;
use AppBundle\Classes\FiguraInterface;

/**
*
*/
class Cuadrado extends Figura implements FiguraInterface
{
    public function __construct()
    {
        $this->tipo='cudrado';
    }

    public function getSuperficie()
    {
        return $this->superficie;
    }

    public function getDiametro()
    {
        return null;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getAltura()
    {
        return null;
    }
}
