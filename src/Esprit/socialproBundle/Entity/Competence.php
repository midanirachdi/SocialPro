<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;

//Competence
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Esprit\socialproBundle\Entity\CompetenceRepository")
 */
class Competence
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcompetence;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @return mixed
     */
    public function getIdcompetence()
    {
        return $this->idcompetence;
    }

    /**
     * @param mixed $idcompetence
     */
    public function setIdcompetence($idcompetence)
    {
        $this->idcompetence = $idcompetence;
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



}