<?php

namespace AppBundle\Controller;

use AppBundle\Classes\FiguraFactory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FiguraController extends Controller
{
    /**
     * @Route("/figura", name="figura_index")
     */
    public function indexAction(Request $request)
    {
      $figura =FiguraFactory::create('cuadrado');
      $figura->setBase(2);
      $figura->setAltura(3);

      dump($figura->getSuperficie());
      dump($figura->getDiametro());

      // replace this example code with whatever you need
      return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
      ]);
    }
}
