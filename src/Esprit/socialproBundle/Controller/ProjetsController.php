<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetsController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Projets:indexprojets.html.twig');
    }
}
