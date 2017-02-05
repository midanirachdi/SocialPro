<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DepartementController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Departement:indexdepartement.html.twig');
    }

    public function affectationAction()
    {
        return $this->render('EspritsocialproBundle:Departement:gestionaffectations.html.twig');

    }}
