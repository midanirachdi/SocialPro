<?php
// src/AppBundle/Entity/StringToArrayTransformer.php

namespace Esprit\socialproBundle\Entity;

//Competence
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Competence")
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
     * @ORM\ManyToMany(targetEntity="User", inversedBy="competences")
     * @ORM\JoinTable(
     *      joinColumns={
     *     @ORM\JoinColumn(name="idcompetence", referencedColumnName="idcompetence")
     * })
     */
    private $users;
    public function __construct() {
        $this->users = new ArrayCollection();
        $this->certifications = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $descriptionCompetence;
    /**
     * @ORM\OneToMany(targetEntity="Certification", mappedBy="competence")
     */
    private $certifications;

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
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }


    /**
     * @return mixed
     */
    public function getDescriptionCompetence()
    {
        return $this->descriptionCompetence;
    }

    /**
     * @param mixed $descriptionCompetence
     */
    public function setDescriptionCompetence($descriptionCompetence)
    {
        $this->descriptionCompetence = $descriptionCompetence;
    }

    /**
     * @return mixed
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * @param mixed $certifications
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;
    }




}