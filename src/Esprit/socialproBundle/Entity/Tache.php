<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Tache")
 */
class Tache
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idtache;

    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(name="idprojet", referencedColumnName="idprojet")
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $descriptionTache;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateFin;

    /**
     * @return mixed
     */
    public function getIdtache()
    {
        return $this->idtache;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @param mixed $idtache
     */
    public function setIdtache($idtache)
    {
        $this->idtache = $idtache;
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
    public function getDescriptionTache()
    {
        return $this->descriptionTache;
    }

    /**
     * @param mixed $descriptionTache
     */
    public function setDescriptionTache($descriptionTache)
    {
        $this->descriptionTache = $descriptionTache;
    }


}