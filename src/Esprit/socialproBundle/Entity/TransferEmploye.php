<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;
//Departement
//Nadia Zayene

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="TransferEmploye")
 */
class TransferEmploye

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTransfer;


    /**
     * @ORM\OneToOne(targetEntity="Esprit\socialproBundle\Entity\User", cascade={"persist"})
     */
    private $idEmploye;
    /**
     * @ORM\ManyToOne(targetEntity="Esprit\socialproBundle\Entity\Departement", cascade={"persist"})
     * @ORM\JoinColumn(name="Departementactuel_id", referencedColumnName="iddepartement")
     */
    private $idDepartementactuel;


    /**
     * @ORM\ManyToOne(targetEntity="Esprit\socialproBundle\Entity\Departement", cascade={"persist"})
     * @ORM\JoinColumn(name="Departementnouveau_id", referencedColumnName="iddepartement")
     *
     */
    private $idDepartementnouveau;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $Raison;

    /**
     * @ORM\Column(type="integer")
     */

    private $etat;
    /**
     * @return mixed
     */
    public function getIdTransfer()
    {
        return $this->idTransfer;
    }

    /**
     * @param mixed $idTransfer
     */
    public function setIdTransfer($idTransfer)
    {
        $this->idTransfer = $idTransfer;
    }

    /**
     * @return mixed
     */
    public function getIdEmploye()
    {
        return $this->idEmploye;
    }

    /**
     * @param mixed $idEmploye
     */
    public function setIdEmploye($idEmploye)
    {
        $this->idEmploye = $idEmploye;
    }

    /**
     * @return mixed
     */
    public function getIdDepartementactuel()
    {
        return $this->idDepartementactuel;
    }

    /**
     * @param mixed $idDepartementactuel
     */
    public function setIdDepartementactuel($idDepartementactuel)
    {
        $this->idDepartementactuel = $idDepartementactuel;
    }

    /**
     * @return mixed
     */
    public function getIdDepartementnouveau()
    {
        return $this->idDepartementnouveau;
    }

    /**
     * @param mixed $idDepartementnouveau
     */
    public function setIdDepartementnouveau($idDepartementnouveau)
    {
        $this->idDepartementnouveau = $idDepartementnouveau;
    }

    /**
     * @return mixed
     */
    public function getRaison()
    {
        return $this->Raison;
    }

    /**
     * @param mixed $Raison
     */
    public function setRaison($Raison)
    {
        $this->Raison = $Raison;
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






}