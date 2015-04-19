<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Etablissement{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idEtab;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $intitule;
     /**
     * @ORM\Column(type="string", length=50)
     */
    protected $desc;
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $details;
    
      /**
     *  @ORM\OneToMany(targetEntity="Membre", mappedBy="etab", cascade={"remove", "persist"})
    */
    protected $membres;
    /**
     * @ORM\ManyToOne(targetEntity="Universite", inversedBy="etabs")
     *  @ORM\JoinColumn(name="idUniv", referencedColumnName="idUniv")
     */
    protected $univ;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idEtab
     *
     * @return integer 
     */
    public function getIdEtab()
    {
        return $this->idEtab;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Etablissement
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
     * @return Etablissement
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
     * Set details
     *
     * @param string $details
     * @return Etablissement
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Add membres
     *
     * @param \AuthentBundle\Entity\Membre $membres
     * @return Etablissement
     */
    public function addMembre(\AuthentBundle\Entity\Membre $membres)
    {
        $this->membres[] = $membres;
    
        return $this;
    }

    /**
     * Remove membres
     *
     * @param \AuthentBundle\Entity\Membre $membres
     */
    public function removeMembre(\AuthentBundle\Entity\Membre $membres)
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
     * Set univ
     *
     * @param \AuthentBundle\Entity\Universite $univ
     * @return Etablissement
     */
    public function setUniv(\AuthentBundle\Entity\Universite $univ = null)
    {
        $this->univ = $univ;
    
        return $this;
    }

    /**
     * Get univ
     *
     * @return \AuthentBundle\Entity\Universite 
     */
    public function getUniv()
    {
        return $this->univ;
    }
}
