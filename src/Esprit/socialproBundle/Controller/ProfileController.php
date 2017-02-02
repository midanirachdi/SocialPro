<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function indexAction()
    {

        return $this->render('EspritsocialproBundle:Profile:profile.html.twig');
    }

    public function photosAction()
    {
        return $this->render('EspritsocialproBundle:Profile:profilephotos.html.twig');
    }
}
