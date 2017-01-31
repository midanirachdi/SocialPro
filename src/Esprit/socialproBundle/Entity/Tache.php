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
     * @ORM\OneToMany(targetEntity="Historique", mappedBy="tache")
     */
    private $historique;
    public function __construct() {
    }
    /**
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="taches")
     * @ORM\JoinColumn(name="idprojet", referencedColumnName="idprojet")
     */
    private $projet;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $descriptionTache;
    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @return mixed
     */
    public function getIdtache()
    {
        return $this->idtache;
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
    public function getHistoriques()
    {
        return $this->historiques;
    }

    /**
     * @param mixed $historiques
     */
    public function setHistoriques($historiques)
    {
        $this->historiques = $historiques;
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
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * @param mixed $historique
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;
    }

    
}