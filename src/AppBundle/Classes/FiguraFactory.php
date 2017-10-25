<?php

namespace AppBundle\Classes;

use AppBundle\Classes\Circulo;
use AppBundle\Classes\Cuadrado;
use AppBundle\Classes\Triangulo;

/**
* 
*/
class FiguraFactory
{
  
  public static function create($tipo){
    switch ($tipo) {
      case 'circulo':
        return new Circulo();
        break;
      case 'cuadrado':
        return new Cuadrado();
        break;
      case 'triangulo':
        return new Triangulo();
        break;
      default:
        return null;
        break;
    }
  }
}