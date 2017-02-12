<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Departement;
use Esprit\socialproBundle\Form\DepartementType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DepartementController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritsocialproBundle:Departement:indexdepartement.html.twig');
    }

    public function affectationAction()
    {
        return $this->render('EspritsocialproBundle:Departement:gestionaffectations.html.twig');

    }

    public function ajoutAction(Request $Request)
    {
        $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findAll();
        $usersCh=array();
        foreach($users as $user){
            if ($user->hasRole("ROLE_CHEF_DEP"))
                array_push($usersCh,$user);
        }
        return $this->render("@Espritsocialpro/Departement/ajoutdepartement.html.twig",array("users"=>$usersCh));
    }
    public function afficheAction(Request $Request){

        $departements=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Departement")->findAll();
        return $this->render("@Espritsocialpro/Departement/affiche.html.twig",array('departements'=>$departements));
    }


}
