<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;



class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Espritsocialpro/Profil/profil.html.twig');
    }


    public function modifiercontactAction(Request $req)
    {



        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        if($req->get("numtel")=="")
        {
            $user->setNumtel(NULL) ;
        }
        else
        {
            $user->setNumtel($req->get("numtel")) ;
        }
        $user->setFacebook($req->get("facebook"));
        $user->setTwitter($req->get("twitter"));
        $user->setLinkedIn($req->get("linkedIn"));
        $user->setSkype($req->get("skype"));
        $em->persist($user);
        $em->flush();
        return  $this->redirectToRoute('espritsocialpro_profil');
    }

    public function modifierdescAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $user->setDescription($req->get("description"));
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('espritsocialpro_profil');

    }
    public function modifierinfosAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $date = new \DateTime($req->get("datenaissance"));
        $user->setDatenaissance($date);
        $user->setAdresse($req->get("adresse"));
        $em->persist($user);
        $em->flush();
        return  $this->redirectToRoute('espritsocialpro_profil');
    }

    public function rechercherconnecterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('EspritsocialproBundle:User')->findConnected();
        return $this->render('@Espritsocialpro/Profil/connectedprofil.html.twig',array('users'=>$users));
    }

    public function deconnecteretatAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $user->setConnected(0);
        $em->persist($user);
        $em->flush();
        return $this->RedirectToRoute('fos_user_security_logout');
    }
    public function connecteretatAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $user->setConnected(1);
        $em->persist($user);
        $em->flush();
        return $this->render('@Espritsocialpro/Profil/profil.html.twig');
    }
    public function modifierindisponnibleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $user->setConnected(2);
        $em->persist($user);
        $em->flush();
        return $this->render('@Espritsocialpro/Profil/profil.html.twig');
    }


    public function ProfilAmiAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('EspritsocialproBundle:User')->findBy(array('id'=>$id));
        return $this->render('@Espritsocialpro/Profil/profilAmi.html.twig',array('users'=>$users));
    }
}
