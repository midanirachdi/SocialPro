<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatistiquesController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Statistiques:indexstatistiques.html.twig');
    }
}
