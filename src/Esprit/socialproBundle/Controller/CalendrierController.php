<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendrierController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Calendrier:Calendrier.html.twig');
    }
}
