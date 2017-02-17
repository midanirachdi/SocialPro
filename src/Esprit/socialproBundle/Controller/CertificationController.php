<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Certification;
use Esprit\socialproBundle\Entity\Competence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;


class CertificationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function AfficherCertificationAction($id){
        $em = $this->getDoctrine()->getManager();
        $certifications = $em->getRepository('EspritsocialproBundle:Certification')->findBy(array("utilisateur"=>$id));
        return $this->render('@Espritsocialpro/Profil/tablecertification.html.twig',array("certifications"=>$certifications));

    }
    public function AjouterCertificationAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $date = new \DateTime();
        $datefinale=$req->get("duree");
        $dateexpiration=$date->add(new \DateInterval('P'.$datefinale.'Y'));
        $certif=new Certification();
        $certif->setUtilisateur($user);
        $certif->setDescriptionCertification($req->get("description"));
        $certif->setDateexpiration($dateexpiration);

        if($req->get("nomcomp")=="")
        {
            $competence = $em->getRepository('EspritsocialproBundle:Competence')->find($req->get("compconnue"));
            $certif->setCompetence($competence);
        }
        else
            {
                $comp=new Competence();
                $a = $em->getRepository('EspritsocialproBundle:Competence')->findOneBy(array('description' => ($req->get("nomcomp"))));
                if (is_null($a)==true)
                {
                    $comp->setDescription($req->get("nomcomp"));
                    $em->persist($comp);
                    $em->flush();
                    $competence = $em->getRepository('EspritsocialproBundle:Competence')->findOneBy(array('description' => ($req->get("nomcomp"))));
                    $certif->setCompetence($competence);
                }
                else{
                    $competence = $em->getRepository('EspritsocialproBundle:Competence')->findOneBy(array('description' => ($req->get("nomcomp"))));
                $certif->setCompetence($competence);
            }}
        $em->persist($certif);
        $em->flush();
        return $this->redirectToRoute('espritsocialpro_profil');

    }

    public function AjoutercompetenceAction()
    {
        $em = $this->getDoctrine()->getManager();
        $c=new Competence();
        $c->setDescription($_POST["ompetence"]);
        $em->persist($c);
        $em->flush();
        $this->render('@Espritsocialpro/Profil/competences.html.twig');
    }

    public function ajouterimageAction($id)
    {



    }

    public function effacercertificationAction($id)
    {   $em = $this->getDoctrine()->getManager();
        $certification = $em->getRepository('EspritsocialproBundle:Certification')->find($id);
        $em->remove($certification);
        $em->flush();
        return $this->redirectToRoute('espritsocialpro_profil');
    }

    public function AfficherCompetenceAction(){
        $em = $this->getDoctrine()->getManager();
        $competences = $em->getRepository('EspritsocialproBundle:Competence')->findcompetences();
        return $this->render('@Espritsocialpro/Profil/competences.html.twig',array("competences"=>$competences));

    }
}
