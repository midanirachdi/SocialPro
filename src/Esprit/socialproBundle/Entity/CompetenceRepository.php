<?php

namespace Esprit\socialproBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class CompetenceRepository extends EntityRepository
{
    public function findcompetences()
    {
        $query=$this->getEntityManager()->createQuery("SELECT DISTINCT u FROM EspritsocialproBundle:competence u  ");
        return $query->getResult();
    }
}
