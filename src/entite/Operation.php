<?php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity @orm\Table(name="operation")
 */
class Operation
{
    /**
     * @orm\id @orm\column(type="integer") @orm\GeneratedValue
     */
    private $id;
    /**
     * @orm\column(type="integer")
     */
    private $montant;
    /**
     * @orm\column(type="string", length=15)
     */
    private $dateOperation;
    /**
     * @orm\ManyToOne(targetEntity="Compte", inversedBy="operations")
     */
    protected $compte;
    /**
     * @orm\ManyToOne(targetEntity="Compte", inversedBy="operationVirements")
     */
    protected $compteBeneficiaire;
    /**
     * @orm\ManyToOne(targetEntity="TypeOperation", inversedBy="operations")
     */
    protected $typeOperation;



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
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * Get the value of dateOperation
     */ 
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * Set the value of dateOperation
     */ 
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;
    }

    /**
     * Get the value of compte
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of compte
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

    /**
     * Get the value of compteBeneficiaire
     */ 
    public function getCompteBeneficiaire()
    {
        return $this->compteBeneficiaire;
    }

    /**
     * Set the value of compteBeneficiaire
     */ 
    public function setCompteBeneficiaire($compteBeneficiaire)
    {
        $this->compteBeneficiaire = $compteBeneficiaire;
    }

    /**
     * Get the value of typeOperation
     */ 
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * Set the value of typeOperation
     */ 
    public function setTypeOperation($typeOperation)
    {
        $this->typeOperation = $typeOperation;
    }
}
