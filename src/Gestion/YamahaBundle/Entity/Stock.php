<?php

namespace Gestion\YamahaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\YamahaBundle\Repository\StockRepository")
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=50)
     */
    private $modele;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_modele", type="integer")
     */
    private $nbrModele;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Stock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Stock
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    
        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set nbrModele
     *
     * @param integer $nbrModele
     * @return Stock
     */
    public function setNbrModele($nbrModele)
    {
        $this->nbrModele = $nbrModele;
    
        return $this;
    }

    /**
     * Get nbrModele
     *
     * @return integer 
     */
    public function getNbrModele()
    {
        return $this->nbrModele;
    }
}