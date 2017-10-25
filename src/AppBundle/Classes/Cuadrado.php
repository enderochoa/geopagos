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
        return $this->base * $this->base;
    }

    public function getDiametro()
    {
        return null;
    }
}
