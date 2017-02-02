<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Reunion")
 */
class Reunion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idreunion;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reunion")
     * @ORM\JoinColumn(referencedColumnName="id",name="iduser")
     */
    private $user;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $sujet;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;
    /**
     * @ORM\ManyToOne(targetEntity="Sallereunion", inversedBy="reunions")
     * @ORM\JoinColumn(name="idsallereunion", referencedColumnName="idsallereunion")
     */
    private $sallereunion;

    /**
     * @return mixed
     */
    public function getIdreunion()
    {
        return $this->idreunion;
    }

    /**
     * @param mixed $idreunion
     */
    public function setIdreunion($idreunion)
    {
        $this->idreunion = $idreunion;
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
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
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
    public function getSallereunion()
    {
        return $this->sallereunion;
    }

    /**
     * @param mixed $sallereunion
     */
    public function setSallereunion($sallereunion)
    {
        $this->sallereunion = $sallereunion;
    }

}