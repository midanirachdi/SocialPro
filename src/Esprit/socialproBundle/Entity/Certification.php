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
     * @ORM\ManyToOne(targetEntity="Competence" , inversedBy="certifications")
     * @ORM\JoinColumn(name="idcompetence", referencedColumnName="idcompetence")
     */
    private $competence;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $descriptionCertification;

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



}