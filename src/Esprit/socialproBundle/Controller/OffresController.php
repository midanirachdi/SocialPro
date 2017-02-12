<?php

namespace Esprit\socialproBundle\Controller;

use Esprit\socialproBundle\Entity\Offre;
use Esprit\socialproBundle\Form\OffreType;
use Esprit\socialproBundle\Form\RechercheOffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OffresController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository('EspritsocialproBundle:Offre')->findAll();
        $offre1 = new Offre();
        $Form = $this->createForm(RechercheOffreType::class, $offre1);
        $Form->handleRequest($request);
        if ($Form->isValid()) {

            $description = $offre1->getDescription();
            $offre = $em->getRepository('EspritsocialproBundle:Offre')
                ->findOffres($description);
        }

        return $this->render('@Espritsocialpro/Offres/indexoffres.html.twig', array(
            'form' => $Form->createView(),
            'offres' => $offre
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

    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository('EspritsocialproBundle:Offre')
            ->find($id);
        $Form = $this->createForm(OffreType::class, $offre);
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute('espritsocialpro_offres');
        }

        return $this->render('EspritsocialproBundle:Offres:updateoffres.html.twig', array(
            'form' => $Form->createView()
        ));
    }


}
