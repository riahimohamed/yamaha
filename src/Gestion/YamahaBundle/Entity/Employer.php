<?php

namespace Gestion\YamahaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\YamahaBundle\Repository\EmployerRepository")
 */
class Employer
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=20)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="embauche", type="date")
     */
    private $embauche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finContrat", type="date")
     */
    private $finContrat;

    /**
     * @var float
     *
     * @ORM\Column(name="salair", type="float")
     */
    private $salair;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=20)
     */
    private $grade;


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
     * Set nom
     *
     * @param string $nom
     * @return Employer
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Employer
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Employer
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set embauche
     *
     * @param \DateTime $embauche
     * @return Employer
     */
    public function setEmbauche($embauche)
    {
        $this->embauche = $embauche;
    
        return $this;
    }

    /**
     * Get embauche
     *
     * @return \DateTime 
     */
    public function getEmbauche()
    {
        return $this->embauche;
    }

    /**
     * Set finContrat
     *
     * @param \DateTime $finContrat
     * @return Employer
     */
    public function setFinContrat($finContrat)
    {
        $this->finContrat = $finContrat;
    
        return $this;
    }

    /**
     * Get finContrat
     *
     * @return \DateTime 
     */
    public function getFinContrat()
    {
        return $this->finContrat;
    }

    /**
     * Set salair
     *
     * @param float $salair
     * @return Employer
     */
    public function setSalair($salair)
    {
        $this->salair = $salair;
    
        return $this;
    }

    /**
     * Get salair
     *
     * @return float 
     */
    public function getSalair()
    {
        return $this->salair;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Employer
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }
}