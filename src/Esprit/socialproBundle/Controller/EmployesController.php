<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployesController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Employes:indexemployes.html.twig');
    }
}
