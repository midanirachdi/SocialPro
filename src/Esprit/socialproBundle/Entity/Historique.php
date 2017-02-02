<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Historique")
 */
class Historique
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idhistorique;

    /**
     * @ORM\OneToOne(targetEntity="User", mappedBy="historique")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="Tache",inversedBy="historique")
     * @ORM\JoinColumn(referencedColumnName="idtache",name="idtache")
     */
    private $tache;


    /**
     * @return mixed
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * @param mixed $tache
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    }





    /**
     * @return mixed
     */
    public function getIdhistorique()
    {
        return $this->idhistorique;
    }

    /**
     * @param mixed $idhistorique
     */
    public function setIdhistorique($idhistorique)
    {
        $this->idhistorique = $idhistorique;
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