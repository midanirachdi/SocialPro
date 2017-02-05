<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffresController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Offres:indexoffres.html.twig');
    }
    public function ajoutAction()
    {
        return $this->render('EspritsocialproBundle:Offres:ajoutoffres.html.twig');
    }
}
