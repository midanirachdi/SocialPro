<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Forum:indexforum.html.twig');
    }
}
