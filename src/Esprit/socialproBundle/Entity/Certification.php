<?php
// src/AppBundle/Entity/StringToArrayTransformer.php
// social pro

namespace Esprit\socialproBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Certification")
 */
//
class Certification
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcertification;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idutilisateur",referencedColumnName="id")
     */
    private $utilisateur;
    /**
     * @ORM\Column(type="string",length=255)
     */

    private $descriptionCertification;

    /**
     * @ORM\ManyToOne(targetEntity="Competence")
     * @ORM\JoinColumn(name="idcompetence",referencedColumnName="idcompetence")
     */
    private $competence;
    /**
     * @ORM\Column(type="date")
     */
    private $dateexpiration;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $image;


    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return mixed
     */
    public function getDescriptionCertification()
    {
        return $this->descriptionCertification;
    }

    /**
     * @param mixed $descriptionCertification
     */
    public function setDescriptionCertification($descriptionCertification)
    {
        $this->descriptionCertification = $descriptionCertification;
    }

    /**
     * @return mixed
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @param mixed $competence
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }

    /**
     * @return mixed
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * @param mixed $dateexpiration
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;
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
    public function getIdcertification()
    {
        return $this->idcertification;
    }

    /**
     * @param mixed $idcertification
     */
    public function setIdcertification($idcertification)
    {
        $this->idcertification = $idcertification;
    }

}