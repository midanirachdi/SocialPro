<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\socialproBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Default:index.html.twig');
    }
}
