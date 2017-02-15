<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="Sallereunion")
 */
class Sallereunion
{
    //***************Attributs***************

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsallereunion;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomsalle;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbplaces;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite;

    //***************Methods (Getters and Setters) ***************


    /**
     * @return mixed
     */
    public function getNbplaces()
    {
        return $this->nbplaces;
    }

    /**
     * @param mixed $nbplaces
     */
    public function setNbplaces($nbplaces)
    {
        $this->nbplaces = $nbplaces;
    }
    //*********Idsallereunion*******
    /**
     * @return mixed
     */
    public function getIdsallereunion()
    {
        return $this->idsallereunion;
    }

    /**
     * @param mixed $idsallereunion
     */
    public function setIdsallereunion($idsallereunion)
    {
        $this->idsallereunion = $idsallereunion;
    }

    //*********Nomsalle*******

    /**
     * @return mixed
     */
    public function getNomsalle()
    {
        return $this->nomsalle;
    }

    /**
     * @param mixed $nomsalle
     */
    public function setNomsalle($nomsalle)
    {
        $this->nomsalle = $nomsalle;
    }


    //*********Disponibiliite*******

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }



}