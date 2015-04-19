<?php


namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idActu;
   /**
    *
    * @ORM\Column(type="date")
    */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $titre;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
   
    /**
     * @ORM\ManyToOne(targetEntity="Administrateur", inversedBy="actualites")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $administrateur;

    /**
     * Set idActu
     *
     * @param integer $idActu
     * @return Actualite
     */
    public function setIdActu($idActu)
    {
        $this->idActu = $idActu;
    
        return $this;
    }

    /**
     * Get idActu
     *
     * @return integer 
     */
    public function getIdActu()
    {
        return $this->idActu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Actualite
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Actualite
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Actualite
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set administrateur
     *
     * @param \AuthentBundle\Entity\Administrateur $administrateur
     * @return Actualite
     */
    public function setAdministrateur(\AuthentBundle\Entity\Administrateur $administrateur = null)
    {
        $this->administrateur = $administrateur;
    
        return $this;
    }

    /**
     * Get administrateur
     *
     * @return \AuthentBundle\Entity\Administrateur 
     */
    public function getAdministrateur()
    {
        return $this->administrateur;
    }
}
