<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilactualiteController extends Controller
{
    public function indexAction()
    {
        $utilisateurCo=$this->getUser();
        $certifs=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Certification")->findBy(array("utilisateur"=>$utilisateurCo->getId()));
        $competencesUser=array();
        foreach ($certifs as $certif) {
            $competence = $certif->getCompetence()->getDescription();
            array_push($competencesUser,$competence);
        }

        $actualités=$actualités=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findAll();

        foreach ($competencesUser as $competenceUser) {
            $actus=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findBy(array("tag"=>$competenceUser));
            array_merge($actualités,$actus);
        }
        return $this->render('EspritsocialproBundle:Filactualite:indexfil.html.twig',array('actus'=>$actualités));
    }
    public function afficheAction(){
        $utilisateurCo=$this->getUser();
        $certifs=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Certification")->findBy(array("utilisateur"=>$utilisateurCo->getId()));
        $competencesUser=array();
        foreach ($certifs as $certif) {
            $competence = $certif->getCompetence()->getDescription();
            array_push($competencesUser,$competence);
        }

        $actualités=$actualités=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findAll();

        foreach ($competencesUser as $competenceUser) {
            $actus=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Filactualite")->findBy(array("tag"=>$competenceUser));
            array_merge($actualités,$actus);
        }
        return $this->render('EspritsocialproBundle:Filactualite:fils.html.twig',array('actus'=>$actualités));
    }
}
