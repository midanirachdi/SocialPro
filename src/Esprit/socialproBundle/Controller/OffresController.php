<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Offre;
use Esprit\socialproBundle\Form\OffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OffresController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository('EspritsocialproBundle:Offre')->findAll();
        return $this->render('@Espritsocialpro/Offres/indexoffres.html.twig', array(
            'offres' => $offres
        ));

    }
    public function ajoutAction(Request $request)
    {
        $offre = new Offre();
        $Form = $this->createForm(OffreType::class, $offre);
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute('espritsocialpro_offres');
        }

        return $this->render('@Espritsocialpro/Offres/ajoutoffres.html.twig', array(
            'form' => $Form->createView()
        ));
    }
    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository('EspritsocialproBundle:Offre')->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute("espritsocialpro_offres");
    }

}
