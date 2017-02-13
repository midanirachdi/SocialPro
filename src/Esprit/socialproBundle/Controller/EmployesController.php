<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class EmployesController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->isMethod("post")){
            $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findBy(array("matricule"=>$request->get("matricule")));
            return $this->render('EspritsocialproBundle:Employes:indexemployes.html.twig',array("users"=>$users));
        }
        $users=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->findAll();
        return $this->render('EspritsocialproBundle:Employes:indexemployes.html.twig',array("users"=>$users));
    }

    public function supprimerAction($id)
    {
        $user=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->find($id);
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("espritsocialpro_employes");
    }
    public function modifierAction(Request $request,$id){
        $utilisateur=$this->getDoctrine()->getManager()->getRepository("EspritsocialproBundle:User")->find($id);
        if($request->isMethod("post"))
        {
            $username=substr($request->get("email"), 0, strpos($request->get("email"),'@'));
            $utilisateur->setUsername($username);
            $utilisateur->setFonction("blob");
            $utilisateur->setNbprojets(0);
            $utilisateur->setEvaluation(0);
            $utilisateur->setMatricule($request->get("matricule"));
            $utilisateur->setEmail($request->get("email"));
            $utilisateur->setNom($request->get("nom"));
            $utilisateur->setPrenom($request->get("prenom"));
            $utilisateur->setNumtel($request->get("numtell"));
            $utilisateur->setDatenaiss(new \DateTime($request->get("datenaiss")));
            $utilisateur->setSex($request->get("sex"));
            $utilisateur->setAdresse($request->get("adresse"));
            $utilisateur->addRole($request->get("role"));
            $utilisateur->setPassword("0000");
            $this->getDoctrine()->getManager()->persist($utilisateur);
            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute("espritsocialpro_employes");
        }
        return $this->render("@Espritsocialpro/Employes/modifieremploye.html.twig",array("utilisateur"=>$utilisateur));
    }
    public function demandeinscrptionAction()
    {
        return $this->render('EspritsocialproBundle:Employes:demandeinscription.html.twig');
    }

    public function ajoutemployesAction(Request $request)

    {
        if ($request->isMethod("post")){
            $utilisateur=new User();
            $username=substr($request->get("email"), 0, strpos($request->get("email"),'@'));
            $utilisateur->setUsername($username);
            $utilisateur->setFonction("blob");
            $utilisateur->setNbprojets(0);
            $utilisateur->setEvaluation(0);
            $utilisateur->setMatricule($request->get("matricule"));
            $utilisateur->setEmail($request->get("email"));
            $utilisateur->setNom($request->get("nom"));
            $utilisateur->setPrenom($request->get("prenom"));
            $utilisateur->setNumtel($request->get("numtell"));
            $utilisateur->setDatenaiss(new \DateTime($request->get("datenaiss")));
            $utilisateur->setSex($request->get("sex"));
            $utilisateur->setAdresse($request->get("adresse"));
            $utilisateur->addRole($request->get("role"));
            $utilisateur->setPassword("0000");
            $this->getDoctrine()->getManager()->persist($utilisateur);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("espritsocialpro_employes");
        }
        return $this->render('EspritsocialproBundle:Employes:ajoutemployes.html.twig');
    }}