<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Departement;
use Esprit\socialproBundle\Entity\TransferEmploye;
use Esprit\socialproBundle\Entity\User;
use Esprit\socialproBundle\Form\DepartementType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DepartementController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->isMethod("post")){
            $nom=$request->get("recherche");
            $departements=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Departement")->
            findBy(array("nomDepartement"=>$nom));
            return $this->render("@Espritsocialpro/Departement/indexdepartement.html.twig",array('departements'=>$departements));
        }
        $departements=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:Departement")->findAll();
        return $this->render("@Espritsocialpro/Departement/indexdepartement.html.twig",array('departements'=>$departements));
    }

    public function affectationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user= $this->getUser();


        $employes=$em->getRepository("EspritsocialproBundle:User")->findBy(array('departement'=> $user->getDepartement()));
        return $this->render('EspritsocialproBundle:Departement:gestionaffectations.html.twig', array('employes'=>$employes));

    }

    public function ajoutAction(Request $request)
    {
        if ($request->isMethod("post")){
            $departement=new Departement();
            $departement->setNomDepartement($request->get("nom"));
            $departement->setDescription($request->get("description"));

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

            $dep->setNomDepartement($request->get("nom"));
            $dep->setDescription($request->get("description"));

            $chef=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->find($request->get("chef"));
            $dep->setChef($chef);
            $em->persist($dep);
            $em->flush();
            return $this->redirectToRoute("espritsocialpro_departements");
        }
        return $this->render("@Espritsocialpro/Departement/modifierpartement.html.twig",array("dep"=>$dep,"users"=>$usersCh));

    }
    public function affectation_employeAction( Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository("EspritsocialproBundle:User")->find($id);

        if($request->isMethod("post")) {
            $user= $this->getUser() ;
            $transfert = new  TransferEmploye() ;
            $iddep=$request->get("NouveauDepartement");
            $idemp= $request->get("id");
            $emp = $em->getRepository("EspritsocialproBundle:User")->find($idemp);
            $dep = $em->getRepository("EspritsocialproBundle:Departement")->find($iddep);

            $transfert->setIdDepartementnouveau($dep) ;
            $transfert->setIdDepartementactuel($user->getDepartement()) ;
            $transfert->setIdEmploye($emp) ;
            $transfert->setRaison($request->get("Raison")) ;
            $transfert->setEtat(0) ;
            $em->persist($transfert);
            $em->flush();
            return $this->redirectToRoute("espritsocialpro_departementsaffectation");

    }
         $departements=$em->getRepository("EspritsocialproBundle:Departement")->findAll();


        return $this->render("@Espritsocialpro/Departement/affectationEmploye.html.twig",array("employe"=>$employe , "departements"=>$departements));


    }

    public function Notif_TransferAction( )
    {

        $em = $this->getDoctrine()->getManager();
        $transferts = $em->getRepository("EspritsocialproBundle:TransferEmploye")->findAll();

        return $this->render("@Espritsocialpro/Departement/notifTransfert.html.twig",array("transferts"=>$transferts ));

    }

    public function transfertAction( Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $transfert = $em->getRepository("EspritsocialproBundle:TransferEmploye")->find($id);

         if($request->isMethod("post")) {
             $user= $this->getUser() ;
             $idemp= $request->get("id");
             $emp = $em->getRepository("EspritsocialproBundle:User")->find($idemp);
             $emp->setDepartement($user->getDepartement()) ;
            $em->persist($emp);
            $em->flush();
             $cm = $this->getDoctrine()->getManager();
             $cm->remove($transfert);
             $cm->flush();


            return $this->redirectToRoute("espritsocialpro_departementsaffectation");

        }

        return $this->render("@Espritsocialpro/Departement/transfertReponse.html.twig",array("transfert"=>$transfert ));


    }

    public function ajoutEmpAction(Request $request){

        if ($request->isMethod("post")){
            $user= $this->getUser() ;
            $departement=$user->getDepartement();
            $employe=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->find($request->get("employe"));
            $employe->setDepartement($departement);
            $this->getDoctrine()->getManager()->persist($employe);
            $this->getDoctrine()->getManager()->flush();


        }
        $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findAll();
        return $this->render("@Espritsocialpro/Departement/ajoutaffectation.html.twig",array("users"=>$users));

    }


}
