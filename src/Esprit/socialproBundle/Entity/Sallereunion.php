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
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idsallereunion;

    /**
     * @ORM\OneToMany(targetEntity="Reunion", mappedBy="sallereunion")
     */
    private $reunion;
    public function __construct() {
        $this->users = new ArrayCollection();
    }
    /**
     * @ORM\Column(type="integer")
     */
    private $numsalle;
    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

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

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }


    /**
     * @return mixed
     */
    public function getNumsalle()
    {
        return $this->numsalle;
    }

    /**
     * @param mixed $numsalle
     */
    public function setNumsalle($numsalle)
    {
        $this->numsalle = $numsalle;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getReunion()
    {
        return $this->reunion;
    }

    /**
     * @param mixed $reunion
     */
    public function setReunion($reunion)
    {
        $this->reunion = $reunion;
    }


}