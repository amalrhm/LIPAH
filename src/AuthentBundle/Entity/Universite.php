<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Universite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     
     */
    protected $idUniv;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $intitule;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $desc;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $adresse;
    /**
     * @ORM\ManyToOne(targetEntity="Labo", inversedBy="universites")
     *  @ORM\JoinColumn(name="idLabo", referencedColumnName="idLabo")
     */
    protected $labo;
    /**
     *  @ORM\OneToMany(targetEntity="Etablissement", mappedBy="univ", cascade={"remove", "persist"})
    */
    protected $etabs;

    /**
     * Set idUniv
     *
     * @param integer $idUniv
     * @return Universite
     */
    public function setIdUniv($idUniv)
    {
        $this->idUniv = $idUniv;
    
        return $this;
    }

    /**
     * Get idUniv
     *
     * @return integer 
     */
    public function getIdUniv()
    {
        return $this->idUniv;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Universite
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Universite
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
     * Set adresse
     *
     * @param string $adresse
     * @return Universite
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set labo
     *
     * @param \AuthentBundle\Entity\Labo $labo
     * @return Universite
     */
    public function setLabo(\AuthentBundle\Entity\Labo $labo = null)
    {
        $this->labo = $labo;
    
        return $this;
    }

    /**
     * Get labo
     *
     * @return \AuthentBundle\Entity\Labo 
     */
    public function getLabo()
    {
        return $this->labo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etabs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etabs
     *
     * @param \AuthentBundle\Entity\Etablissement $etabs
     * @return Universite
     */
    public function addEtab(\AuthentBundle\Entity\Etablissement $etabs)
    {
        $this->etabs[] = $etabs;
    
        return $this;
    }

    /**
     * Remove etabs
     *
     * @param \AuthentBundle\Entity\Etablissement $etabs
     */
    public function removeEtab(\AuthentBundle\Entity\Etablissement $etabs)
    {
        $this->etabs->removeElement($etabs);
    }

    /**
     * Get etabs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtabs()
    {
        return $this->etabs;
    }
}
