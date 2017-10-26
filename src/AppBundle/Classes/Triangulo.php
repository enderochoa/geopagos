<?php

namespace AppBundle\Classes;

use AppBundle\Classes\Figura;
use AppBundle\Classes\FiguraInterface;

/**
*
*/
class Triangulo extends Figura implements FiguraInterface
{
    public function __construct()
    {
        $this->tipo='triangulo';
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
        return $this->altura;
    }
}
