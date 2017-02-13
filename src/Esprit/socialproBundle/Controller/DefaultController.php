<?php

namespace Esprit\socialproBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\socialproBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();

        $user->setConnected(1);

        $em->persist($user);
        $em->flush();
        return $this->render('EspritsocialproBundle:Default:index.html.twig');
    }
}
