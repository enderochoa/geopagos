<?php

namespace AppBundle\Controller;

use AppBundle\Classes\FiguraFactory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FiguraController extends Controller
{
    /**
     * @Route("/", name="figura_index")
     */
    public function indexAction(Request $request)
    {
        echo "Actividad 1 creacion de Figuras<br />";

        $figuras = ['cuadrado','triangulo','circulo'];
        foreach ($figuras as $nombre) {
            $figura = FiguraFactory::create($nombre);
            $figura->setBase(2);
            $figura->setAltura(3);
            $figura->setDiametro(4);
            $figura->setSuperficie(5);

            echo "Figura de tipo ".$figura->getTipo()."<br />";
            echo($figura->getDiametro()?"..diametro:".$figura->getDiametro()."<br />":" ");
            echo($figura->getSuperficie()?"..superficie:".$figura->getSuperficie()."<br />":" ");
            echo($figura->getBase()?"..base:".$figura->getBase()."<br />":" ");
            echo($figura->getAltura()?"..altura:".$figura->getAltura()."<br />":" ");
            echo "<br />";
        }

        return new Response("<a href='".$this->generateUrl('admin')."'>Actividad 2, Gestion de Usuarios y Pagos ");
    }
}
