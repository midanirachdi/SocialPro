<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CertificationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function AfficherCertificationAction($id){
        $em = $this->getDoctrine()->getManager();
        $competences = $em->getRepository('EspritsocialproBundle:Competence')->findcompetences();
        $certifications = $em->getRepository('EspritsocialproBundle:Certification')->findBy(array("utilisateur"=>$id));
        return $this->render('@Espritsocialpro/Profil/tablecertification.html.twig',array("competences"=>$competences,"certifications"=>$certifications));

    }
    public function AjouterCertificationAction($id){
        $em = $this->getDoctrine()->getManager();
        $certifications = $em->getRepository('EspritsocialproBundle:Certification')->findBy(array("utilisateur"=>$id));
        return $this->render('@Espritsocialpro/Profil/tablecertification.html.twig',array('certifications'=>$certifications));

    }

    public function ajouterimageAction($id)
    {

    }
}
