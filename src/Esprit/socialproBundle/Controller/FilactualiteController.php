<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilactualiteController extends Controller
{
    public function indexAction()
    {
        $actualités=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findAll();
        return $this->render('EspritsocialproBundle:filactualite:indexfil.html.twig',array('actus'=>$actualités));
    }
    public function afficheAction(){
        $actualités=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findAll();
        return $this->render('EspritsocialproBundle:Filactualite:fils.html.twig',array('actus'=>$actualités));
    }
}
