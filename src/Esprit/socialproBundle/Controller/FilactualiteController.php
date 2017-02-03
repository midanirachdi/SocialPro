<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilactualiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:filactualite:indexfil.html.twig');
    }
}
