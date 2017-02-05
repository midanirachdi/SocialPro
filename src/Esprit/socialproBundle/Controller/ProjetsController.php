<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetsController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Projets:indexprojets.html.twig');
    }

    public function tachesAction()
    {
        return $this->render('EspritsocialproBundle:Projets:gestiontaches.html.twig');
    }

    public function equipesAction()
    {
        return $this->render('EspritsocialproBundle:Projets:gestionequipes.html.twig');
    }

    public function gestionprojetsAction()
    {
        return $this->render('EspritsocialproBundle:Projets:gestionprojets.html.twig');
    }}
