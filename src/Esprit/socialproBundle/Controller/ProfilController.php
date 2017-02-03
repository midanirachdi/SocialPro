<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function indexAction()
    {

        return $this->render('EspritsocialproBundle:Profil:profil.html.twig');
    }

    public function photosAction()
    {
        return $this->render('EspritsocialproBundle:Profil:profilphotos.html.twig');
    }
}
