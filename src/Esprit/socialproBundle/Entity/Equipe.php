<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Equipe")
 */
class Equipe
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idequipe;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="equipe")
     */
    private $users;
    public function __construct() {
        $this->users = new ArrayCollection();

    }
    /**
     * @ORM\OneToOne(targetEntity="Projet", mappedBy="equipe")
     */
    private $projet;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomequipe;

    /**
     * @return mixed
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }

    /**
     * @param mixed $idequipe
     */
    public function setIdequipe($idequipe)
    {
        $this->idequipe = $idequipe;
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
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * @param mixed $projet
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    }

    /**
     * @return mixed
     */
    public function getNomequipe()
    {
        return $this->nomequipe;
    }

    /**
     * @param mixed $nomequipe
     */
    public function setNomequipe($nomequipe)
    {
        $this->nomequipe = $nomequipe;
    }

    
}