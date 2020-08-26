<?php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity @orm\Table(name="typeOperation")
 */
class TypeOperation
{
    /**
     * @orm\id @orm\column(type="integer") @orm\GeneratedValue
     */
    private $id;
    /**
     * @orm\column(type="string", length=30)
     */
    private $libelle;
    /**
     * @orm\OneToMany(targetEntity="Operation", mappedBy="typeOperation")
     */
    protected $operations;

    public function __construct()
    {
        $this->operations = new ArrayCollection();
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
