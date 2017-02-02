<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Projet")
 */
class Projet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idprojet;

    /**
     * @ORM\OneToOne(targetEntity="Equipe", inversedBy="projet")
     * @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     */
    private $equipe;
    /**
     * @ORM\OneToMany(targetEntity="Tache", mappedBy="projet")
     */

    private $taches;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="projets")
     * @ORM\JoinColumn(name="iduser",referencedColumnName="id")
     */
    private $user;
    public function __construct() {
        $this->taches = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @return mixed
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }

    /**
     * @param mixed $idprojet
     */
    public function setIdprojet($idprojet)
    {
        $this->idprojet = $idprojet;
    }

    /**
     * @return mixed
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * @param mixed $equipe
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    }

    /**
     * @return mixed
     */
    public function getTache()
    {
        return $this->taches;
    }

    /**
     * @param mixed $taches
     */
    public function setTache($taches)
    {
        $this->taches = $taches;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return mixed
     */
    public function getTaches()
    {
        return $this->taches;
    }

    /**
     * @param mixed $taches
     */
    public function setTaches($taches)
    {
        $this->taches = $taches;
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


}