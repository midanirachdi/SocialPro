<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;
//Departement
//Nadia Zayene

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Departement")
 */
class Departement

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iddepartement;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="departement")
     */
    private $users;
    public function __construct() {
        $this->users = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomDepartement;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Description;
    /**
     * @ORM\OneToOne(targetEntity="Esprit\socialproBundle\Entity\User", cascade={"persist"})
     */

    private $chef;

    /**
     * @return mixed
     */
    public function getChef()
    {
        return $this->chef;
    }

    /**
     * @param mixed $chef
     */
    public function setChef($chef)
    {
        $this->chef = $chef;
    }

    /**
     * @return mixed
     */
    public function getIddepartement()
    {
        return $this->iddepartement;
    }

    /**
     * @param mixed $iddepartement
     */
    public function setIddepartement($iddepartement)
    {
        $this->iddepartement = $iddepartement;
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
    public function getNomDepartement()
    {
        return $this->nomDepartement;
    }

    /**
     * @param mixed $nomDepartement
     */
    public function setNomDepartement($nomDepartement)
    {
        $this->nomDepartement = $nomDepartement;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }



}