<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoriqueController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Historique:indexhistorique.html.twig');
    }
}
