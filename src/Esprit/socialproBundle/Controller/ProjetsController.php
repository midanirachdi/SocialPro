<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    }

    public function ajoutAction(Request $request)
    {
        if ($request->isMethod("post")){
            $projet=new Projet();
            $projet->setNomprojet($request->get("nom"));
            $projet->setDescription($request->get("description"));
            $date=\DateTime::createFromFormat('Y-m-d',$request->get('datedebut'));
            $projet->setDateDebut($date);
            $date1=\DateTime::createFromFormat('Y-m-d',$request->get('datedebut'));
            $projet->setDateFin($date1);
            $equipe=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Equipe")->find($request->get('equipe'));
            $projet->setEquipe($equipe);
            $this->getDoctrine()->getManager()->persist($projet);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('espritsocialpro_gestionprojets');
        }
        return $this->render('@Espritsocialpro/Projets/ajoutProjet.html.twig');
    }

    public function afficheAction(Request $request){
        if ($request->isMethod("post")){
            $projet=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Projet")->findBy(array("idprojet"=>$request->get("cherche")));
            return $this->render("EspritsocialproBundle:Projets:gestionprojets.html.twig",array("projet"=>$projet));
        }
        $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository('EspritsocialproBundle:Projet')->findAll();
        return $this->render('@Espritsocialpro/Projets/gestionprojets.html.twig',array('projets'=>$projet));
    }
    public function supprimeAction($idprojet)
    {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository("EspritsocialproBundle:Projet")->find($idprojet);
        $em->remove($projet);
        $em->flush();
        return ($this->redirectToRoute("espritsocialpro_gestionprojets"));
    }

    public function updateAction(Request $request, $idprojet)
    {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('EspritsocialproBundle:Projet')->find($idprojet);
        if ($request->isMethod("post"))
        {
            $projet->setNomprojet($request->get("nom"));
            $date=\DateTime::createFromFormat('Y-m-d',$request->get('datedebut'));
            $projet->setDateDebut($date);
            $date1=\DateTime::createFromFormat('Y-m-d',$request->get('datedebut'));
            $projet->setDateFin($date1);
            $equipe=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Equipe")->find($request->get('equipe'));
            $projet->setEquipe($equipe);
            $em->persist($projet);
            $em->flush();
            return $this->redirectToRoute('espritsocialpro_gestionprojets');
        }
        return $this->render('@Espritsocialpro/Projets/update.html.twig', array('projets'=>$projet));


    }
}
