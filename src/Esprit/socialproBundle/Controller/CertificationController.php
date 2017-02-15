<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Certification;
use Esprit\socialproBundle\Entity\Competence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

        $c=new Certification();
        $c->setUtilisateur($user);
        $c->setDescriptionCertification($req->get("description"));
        $expiration = $req->get("duree");
        $date = new \DateTime($req->get("datenaissance"));
        $c->setDateexpiration($date);

        if($req->get("nomcomp")=="")
        {
            $competence = $em->getRepository('EspritsocialproBundle:Competence')->find($req->get("compconnue"));

            $c->setCompetence($competence);

        }
        else
            {
            $comp=new Competence();
            $comp->setDescription($req->get("nomcomp"));
                $em->persist($comp);
                $em->flush();
                $competence = $em->getRepository('EspritsocialproBundle:Competence')->find($req->get("compconnue"));
                $c->setCompetence(3);

            }
        $em->persist($c);
        $em->flush();
        return $this->render('@Espritsocialpro/Profil/profil.html.twig');

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
    public function AfficherCompetenceAction(){
        $em = $this->getDoctrine()->getManager();
        $competences = $em->getRepository('EspritsocialproBundle:Competence')->findcompetences();
        return $this->render('@Espritsocialpro/Profil/competences.html.twig',array("competences"=>$competences));

    }
}
