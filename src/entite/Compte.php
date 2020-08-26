<?php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity @orm\Table(name="compte")
 */
class Compte
{
    /**
     * @orm\id @orm\column(type="integer") @orm\GeneratedValue
     */
    private $id;
    /**
     * @orm\column(type="string", unique=true, length=30)
     */
    private $numero;
    /**
     * @orm\column(type="integer")
     */
    private $solde;
    /**
     * @orm\OneToMany(targetEntity="Operation", mappedBy="compte")
     */
    private $operations;
    /**
     * @orm\OneToMany(targetEntity="Operation", mappedBy="compteBeneficiaire")
     */
    private $operationVirements;
    /**
     * @orm\ManyToOne(targetEntity="Client", inversedBy="comptes")
     */
    private $client;

    public function __construct()
    {
        $this->operations = new ArrayCollection();
        $this->operationVirements = new ArrayCollection();
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
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * Get the value of operations
     */ 
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Set the value of operations
     */ 
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }

    /**
     * Get the value of operationVirements
     */ 
    public function getOperationVirements()
    {
        return $this->operationVirements;
    }

    /**
     * Set the value of operationVirements
     */ 
    public function setOperationVirements($operationVirements)
    {
        $this->operationVirements = $operationVirements;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     */ 
    public function setClient($client)
    {
        $this->client = $client;
    }
}
