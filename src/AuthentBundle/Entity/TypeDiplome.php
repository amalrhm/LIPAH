<?php


namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TypeDiplome{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idType;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelle;
     /**
     * @ORM\ManyToOne(targetEntity="Diplome", inversedBy="types")
     *  @ORM\JoinColumn(name="idDiplome", referencedColumnName="idDiplome")
     */
    protected $diplome;

    /**
     * Get idType
     *
     * @return integer 
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return TypeDiplome
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
     * Set diplome
     *
     * @param \AuthentBundle\Entity\Diplome $diplome
     * @return TypeDiplome
     */
    public function setDiplome(\AuthentBundle\Entity\Diplome $diplome = null)
    {
        $this->diplome = $diplome;
    
        return $this;
    }

    /**
     * Get diplome
     *
     * @return \AuthentBundle\Entity\Diplome 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }
}
