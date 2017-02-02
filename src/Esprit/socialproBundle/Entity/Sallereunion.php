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
    private $reunions;
    public function __construct() {
        $this->users = new ArrayCollection();
        $this->reunions = new ArrayCollection();
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
    public function getReunions()
    {
        return $this->reunions;
    }

    /**
     * @param mixed $reunions
     */
    public function setReunions($reunions)
    {
        $this->reunions = $reunions;
    }




}