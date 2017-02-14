<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReunionController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Reunions:indexreunions.html.twig');
    }

    public function gestionreunionAction()
    {
        return $this->render('EspritsocialproBundle:Reunions:gestionreunions.html.twig');

    }

    public function gestionsallereunionAction()
    {
        return $this->render('EspritsocialproBundle:Reunions:gestionsallesreunion.html.twig');
    }}
