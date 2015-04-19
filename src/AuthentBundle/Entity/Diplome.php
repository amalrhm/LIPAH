<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Diplome {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idDiplome;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelle;
      /**
     * @ORM\Column(type="string", length=20)
     */
    protected $institution;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $jury;
    /**
     * @ORM\Column(type="date", length=20)
     */
    protected $annee;
    /**
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="diplomes")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $membre;
     /**
     *  @ORM\OneToMany(targetEntity="TypeDiplome", mappedBy="diplome", cascade={"remove", "persist"})
    */
    protected $types;

    /**
     * Get idDiplome
     *
     * @return integer 
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Diplome
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
     * Set institution
     *
     * @param string $institution
     * @return Diplome
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    
        return $this;
    }

    /**
     * Get institution
     *
     * @return string 
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set jury
     *
     * @param string $jury
     * @return Diplome
     */
    public function setJury($jury)
    {
        $this->jury = $jury;
    
        return $this;
    }

    /**
     * Get jury
     *
     * @return string 
     */
    public function getJury()
    {
        return $this->jury;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     * @return Diplome
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set membre
     *
     * @param \AuthentBundle\Entity\Membre $membre
     * @return Diplome
     */
    public function setMembre(\AuthentBundle\Entity\Membre $membre = null)
    {
        $this->membre = $membre;
    
        return $this;
    }

    /**
     * Get membre
     *
     * @return \AuthentBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->types = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add types
     *
     * @param \AuthentBundle\Entity\TypeDiplome $types
     * @return Diplome
     */
    public function addType(\AuthentBundle\Entity\TypeDiplome $types)
    {
        $this->types[] = $types;
    
        return $this;
    }

    /**
     * Remove types
     *
     * @param \AuthentBundle\Entity\TypeDiplome $types
     */
    public function removeType(\AuthentBundle\Entity\TypeDiplome $types)
    {
        $this->types->removeElement($types);
    }

    /**
     * Get types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }
}
