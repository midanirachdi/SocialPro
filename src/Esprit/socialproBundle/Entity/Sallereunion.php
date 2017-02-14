<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $pathimgsalle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibiliite;

    //***************Methods (Getters and Setters) ***************

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

    //*********Pathimgsalle*******

    /**
     * @return mixed
     */
    public function getPathimgsalle()
    {
        return $this->pathimgsalle;
    }

    /**
     * @param mixed $pathimgsalle
     */
    public function setPathimgsalle($pathimgsalle)
    {
        $this->pathimgsalle = $pathimgsalle;
    }

    //*********Disponibiliite*******

    /**
     * @return mixed
     */
    public function getDisponibiliite()
    {
        return $this->disponibiliite;
    }

    /**
     * @param mixed $disponibiliite
     */
    public function setDisponibiliite($disponibiliite)
    {
        $this->disponibiliite = $disponibiliite;
    }


}