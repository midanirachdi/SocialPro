<?php
/**
 * Created by PhpStorm.
 * User: kalil
 * Date: 14/02/2017
 * Time: 18:52
 */

namespace Esprit\socialproBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Filactualite
 * @package Esprit\socialproBundle\Entity
 * @ORM\Entity
 */

class Filactualite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text")
     */
    private $contenu;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $tag;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }


}