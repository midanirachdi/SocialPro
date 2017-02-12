<?php

namespace Esprit\socialproBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OffreRepository")
 * @ORM\Table(name="Offre")
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idoffre;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $motscles;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $contact;
    /**
     * @ORM\Column(type="string")
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="string")
     */
    private $dateFin;

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
    public function getIdoffre()
    {
        return $this->idoffre;
    }

    /**
     * @param mixed $idoffre
     */
    public function setIdoffre($idoffre)
    {
        $this->idoffre = $idoffre;
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
    public function getMotscles()
    {
        return $this->motscles;
    }

    /**
     * @param mixed $motscles
     */
    public function setMotscles($motscles)
    {
        $this->motscles = $motscles;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }



}