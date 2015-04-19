<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Labo {
 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idLabo;
 
    /**
     * @ORM\Column(type="string")
     */
    protected $desc;
    /**
     * @ORM\Column(type="string")
     */
    protected $libelle;
    /**
     * @ORM\Column(type="string")
     */
    protected $pays;
    /**
     *  @ORM\OneToMany(targetEntity="MembreExterne", mappedBy="labo", cascade={"remove", "persist"})
    */
    protected $membres;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idLabo
     *
     * @param integer $idLabo
     * @return Labo
     */
    public function setIdLabo($idLabo)
    {
        $this->idLabo = $idLabo;
    
        return $this;
    }

    /**
     * Get idLabo
     *
     * @return integer 
     */
    public function getIdLabo()
    {
        return $this->idLabo;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Labo
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Labo
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Labo
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add membres
     *
     * @param \AuthentBundle\Entity\MembreExterne $membres
     * @return Labo
     */
    public function addMembre(\AuthentBundle\Entity\MembreExterne $membres)
    {
        $this->membres[] = $membres;
    
        return $this;
    }

    /**
     * Remove membres
     *
     * @param \AuthentBundle\Entity\MembreExterne $membres
     */
    public function removeMembre(\AuthentBundle\Entity\MembreExterne $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }
     /**
     *  @ORM\OneToMany(targetEntity="Universite", mappedBy="labo", cascade={"remove", "persist"})
    */
    protected $universites;

    /**
     * Add universites
     *
     * @param \AuthentBundle\Entity\Universite $universites
     * @return Labo
     */
    public function addUniversite(\AuthentBundle\Entity\Universite $universites)
    {
        $this->universites[] = $universites;
    
        return $this;
    }

    /**
     * Remove universites
     *
     * @param \AuthentBundle\Entity\Universite $universites
     */
    public function removeUniversite(\AuthentBundle\Entity\Universite $universites)
    {
        $this->universites->removeElement($universites);
    }

    /**
     * Get universites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUniversites()
    {
        return $this->universites;
    }
}
