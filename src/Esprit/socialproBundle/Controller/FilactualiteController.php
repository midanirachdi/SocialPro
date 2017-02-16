<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Filactualite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        usort($actualités,function (Filactualite $a, Filactualite $b)
        {
            $t1 = strtotime($a->getDatePublication()->format('Y-m-d H:i:s'));
            $t2 = strtotime($b->getDatePublication()->format('Y-m-d H:i:s'));
            return $t2 - $t1;
        });
        $comps=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Certification")->findAll();
        return $this->render('EspritsocialproBundle:Filactualite:indexfil.html.twig',array('actus'=>$actualités,'tags'=>$comps));
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
        usort($actualités,function (Filactualite $a, Filactualite $b)
        {
            $t1 = strtotime($a->getDatePublication()->format('Y-m-d H:i:s'));
            $t2 = strtotime($b->getDatePublication()->format('Y-m-d H:i:s'));
            return $t2 - $t1;
        });
        return $this->render('EspritsocialproBundle:Filactualite:fils.html.twig',array('actus'=>$actualités));
    }
    function ajoutAction(Request $request)
    {
        $utilisateur = $this->getUser();
        $date = new \DateTime();
        $fil = new Filactualite();
        $fil->setUtilisateur($utilisateur);
        $fil->setDatePublication($date);
        $fil->setContenu($request->get("contenu"));
        $fil->setTag($request->get("tag"));
        $this->getDoctrine()->getManager()->persist($fil);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("espritsocialpro_filactualite");
    }
}
