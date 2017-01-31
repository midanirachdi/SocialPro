<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $matricule;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $prenom;


    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $numtel;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $fonction;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $nbprojets;
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $evaluation;
    /**
     * @ORM\ManyToMany(targetEntity="Competence", mappedBy="users")
     */
    private $competences;
    public function __construct()
    {
        parent::__construct();
        $this->competences = new ArrayCollection();
        $this->reunions = new ArrayCollection();
        $this->historiques = new ArrayCollection();
    }
    /**
     * @ORM\OneToOne(targetEntity="Historique", inversedBy="user")
     * @ORM\JoinColumn(name="idhistorique", referencedColumnName="idhistorique")
     */
    private $historique;
    /**
     * @ORM\OneToMany(targetEntity="Reunion", mappedBy="user")
     */
    private $reunions;
    /**
     * @ORM\ManyToOne(targetEntity="Equipe", inversedBy="users")
     * @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     */
    private $equipe;
    /**
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="users")
     * @ORM\JoinColumn(name="iddepartement", referencedColumnName="iddepartement")
     */
    private $departement;
    /**
     * @ORM\OneToMany(targetEntity="Projet", mappedBy="projet")
     */
    private $projets;

    /**
     * @return mixed
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * @param mixed $competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
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
    public function getReunion()
    {
        return $this->reunions;
    }

    /**
     * @param mixed $reunions
     */
    public function setReunion($reunions)
    {
        $this->reunions = $reunions;
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
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * @param mixed $numtel
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getNbprojets()
    {
        return $this->nbprojets;
    }

    /**
     * @param mixed $nbprojets
     */
    public function setNbprojets($nbprojets)
    {
        $this->nbprojets = $nbprojets;
    }

    /**
     * @return mixed
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param mixed $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }



}