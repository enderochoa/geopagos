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

    public function getSuperficie()
    {
        return 0.5 * $this->base * $this->altura;
    }

    public function getDiametro(){
        return null;
    }
}
