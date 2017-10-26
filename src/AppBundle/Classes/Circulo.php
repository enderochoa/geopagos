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
        return $this->superficie;
    }

    public function getDiametro()
    {
        return $this->diametro;
    }

    public function getBase()
    {
        return null;
    }

    public function getAltura()
    {
        return null;
    }
}