<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Sallereunion;
use Esprit\socialproBundle\Form\SallereunionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReunionController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Reunions:indexreunions.html.twig');
    }

    public function modifiersalleAction(Request $request,$id)
    {   $em = $this->getDoctrine()->getManager();
        $salle=$em->getRepository("EspritsocialproBundle:Sallereunion")->find($id);
        $Form = $this->createForm(SallereunionType::class, $salle);
        $Form->handleRequest($request);
        if ($Form->isValid()){
            $salle=new Sallereunion();
            $salle->setDisponibilite(true);
            $salle->setNomsalle($request->get("Nomsalle"));
            $salle->setNbplaces($request->get("Nbsalle"));
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute("espritsocialpro_gestionsallesreunions");
        }
        $salles=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Sallereunion")->findAll();
        return $this->render('EspritsocialproBundle:Reunions:gestionsallesreunion.html.twig',array("salles"=>$salles));
    }

    public function supprimerAction($id)
    {
        $salle=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Sallereunion")->find($id);
        $this->getDoctrine()->getManager()->remove($salle);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("espritsocialpro_gestionsallesreunions");
    }

    public function gestionreunionAction()
    {
        return $this->render('EspritsocialproBundle:Reunions:gestionreunions.html.twig');
    }

    public function gestionsallereunionAction()
    {
        $salle=new Sallereunion();
        $salle->setDisponibilite(true);
        $Form = $this->createForm(SallereunionType::class, $salle);
        $salles=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Sallereunion")->findAll();
        $salle=new Sallereunion();
        return $this->render('EspritsocialproBundle:Reunions:gestionsallesreunion.html.twig',array(
            "salles"=>$salles,
            'form' => $Form->createView()
        ));
    }

    public function ajoutsallereunionAction(Request $request)
    {         $em = $this->getDoctrine()->getManager();
        if ($request->isMethod("post")){
            $salle=new Sallereunion();
            $salle->setDisponibilite(true);
            $salle->setNomsalle($request->get("Nomsalle"));
            $salle->setNbplaces($request->get("Nbsalle"));
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute("espritsocialpro_gestionsallesreunions");
        }
        $salles=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Sallereunion")->findAll();
        return $this->render('EspritsocialproBundle:Reunions:gestionsallesreunion.html.twig',array("salles"=>$salles));
       /* $salle=new Sallereunion();
        $salle->setDisponibilite(true);
        $Form = $this->createForm(SallereunionType::class, $salle);

        if ($request->isMethod("post")) {
            var_dump($salle->getNomsalle());exit;
            $em = $this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute('espritsocialpro_ajoutsallesreunions');
        }

        return $this->render('@Espritsocialpro/Reunions/gestionsallesreunion.html.twig', array(
            'form' => $Form->createView()*/
        /**/
    }

   }
