<?php
/**
 * Created by PhpStorm.
 * User: Yassin
 * Date: 13/02/2017
 * Time: 18:12
 */

namespace Esprit\socialproBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetenceController extends Controller
{


    public function afficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $competences = $em->getRepository('EspritsocialproBundle:Competences')->findBy(array('idcompetence'=>$user->id));
    }}