<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Esprit\socialproBundle\Entity\UserRepository")
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
     * @ORM\Column(type="integer",nullable=true)
     */
    private $matricule;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $prenom;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $numtel;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $fonction;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $facebook;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $twitter;
    /**
     * @ORM\Column(type="string",length=2000,nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $linkedIn;
    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $datenaissance;
    /**
     * @ORM\Column(type="integer",length=255,nullable=true)
     */
    private $nbprojets;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $evaluation;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $gendre;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $connected;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $image;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $skype;

    public function __construct()
    {
        parent::__construct();
        $this->competences = new ArrayCollection();
        $this->projets = new ArrayCollection();
    }
    /**
     * @ORM\OneToOne(targetEntity="Historique", inversedBy="user")
     * @ORM\JoinColumn(name="idhistorique", referencedColumnName="idhistorique")
     */
    private $historique;
    /**
     * @ORM\OneToMany(targetEntity="Reunion", mappedBy="user")
     */
    private $reunion;
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
     * @ORM\OneToMany(targetEntity="Projet", mappedBy="user")
     */
    private $projets;

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
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * @param mixed $projets
     */
    public function setProjets($projets)
    {
        $this->projets = $projets;
    }

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param mixed $connected
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    }

    /**
     * @return mixed
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @param mixed $datenaissance
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * @param mixed $linkedIn
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getGendre()
    {
        return $this->gendre;
    }

    /**
     * @param mixed $gendre
     */
    public function setGendre($gendre)
    {
        $this->gendre = $gendre;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param mixed $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

}