<?php


namespace Esprit\socialproBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OffreRepository extends EntityRepository
{

    public function findOffres($description)
    {
        return $this
            ->getEntityManager()
            ->createQuery("
                SELECT o FROM EspritsocialproBundle:Offre o
                WHERE o.description LIKE :description
                ")
            ->setParameters(array(
                'description' => "%".$description."%"
            ))
            ->getResult();
    }


}