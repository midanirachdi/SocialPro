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
        $departements=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Departement")->findAll();
        return $this->render("@Espritsocialpro/Departement/indexdepartement.html.twig",array('departements'=>$departements));
    }

    public function affectationAction()
    {
        return $this->render('EspritsocialproBundle:Departement:gestionaffectations.html.twig');

    }

    public function ajoutAction(Request $request)
    {
        if ($request->isMethod("post")){
            $departement=new Departement();
            $departement->setNomDepartement($request->get("nom"));
            $id=$request->get("chef");
            $chef=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->find($id);
            $departement->setChef($chef);
            $this->getDoctrine()->getManager()->persist($departement);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("espritsocialpro_departements");

        }
        $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findAll();
        $usersCh=array();
        foreach($users as $user){
            if ($user->hasRole("ROLE_CHEF_DEP"))
                array_push($usersCh,$user);
        }
        return $this->render("@Espritsocialpro/Departement/ajoutdepartement.html.twig",array("users"=>$usersCh));
    }

    public  function supprimerAction($id){
        $dep=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Departement")->find($id);
        $this->getDoctrine()->getManager()->remove($dep);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('espritsocialpro_departements');

    }
    public function modifierAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $dep=$em->getRepository("EspritsocialproBundle:Departement")->find($id);
        $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findAll();
        $usersCh=array();
        foreach($users as $user){
            if ($user->hasRole("ROLE_CHEF_DEP"))
                array_push($usersCh,$user);
        }

        if($request->isMethod("post"))
        {
            $dep->setId($request->get("id"));
            $dep->setNom($request->get("nomDepartement"));
            $dep->setNom($request->get("chef"));
            $em->persist($dep);
            $em->flush();
            return $this->redirectToRoute("espritsocialpro_departements");
        }
        return $this->render("@Espritsocialpro/Departement/modifierpartement.html.twig",array("dep"=>$dep,"users"=>$usersCh));

    }


}
