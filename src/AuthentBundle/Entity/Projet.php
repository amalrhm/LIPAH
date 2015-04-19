<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Projet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idProjet;
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
    protected $desc;
     /**
     * @ORM\ManyToOne(targetEntity="Administrateur", inversedBy="projets")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $administrateur;
    
    

    /**
     * Set idProjet
     *
     * @param integer $idProjet
     * @return Projet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    
        return $this;
    }

    /**
     * Get idProjet
     *
     * @return integer 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Projet
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
     * @return Projet
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
     * Set desc
     *
     * @param string $desc
     * @return Projet
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
     * Set administrateur
     *
     * @param \AuthentBundle\Entity\Administrateur $administrateur
     * @return Projet
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
