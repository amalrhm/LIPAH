<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idInscri;
   /**
    *
    * @ORM\Column(type="date")
    */
    protected $dateInscri;
    /**
     * @ORM\Column(type="string")
     */
    protected $copieInscri;
    /**
     *  @ORM\OneToMany(targetEntity="These", mappedBy="inscri", cascade={"remove", "persist"})
    */
    protected $theses;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->theses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idInscri
     *
     * @param integer $idInscri
     * @return Inscription
     */
    public function setIdInscri($idInscri)
    {
        $this->idInscri = $idInscri;
    
        return $this;
    }

    /**
     * Get idInscri
     *
     * @return integer 
     */
    public function getIdInscri()
    {
        return $this->idInscri;
    }

    /**
     * Set dateInscri
     *
     * @param \DateTime $dateInscri
     * @return Inscription
     */
    public function setDateInscri($dateInscri)
    {
        $this->dateInscri = $dateInscri;
    
        return $this;
    }

    /**
     * Get dateInscri
     *
     * @return \DateTime 
     */
    public function getDateInscri()
    {
        return $this->dateInscri;
    }

    /**
     * Set copieInscri
     *
     * @param string $copieInscri
     * @return Inscription
     */
    public function setCopieInscri($copieInscri)
    {
        $this->copieInscri = $copieInscri;
    
        return $this;
    }

    /**
     * Get copieInscri
     *
     * @return string 
     */
    public function getCopieInscri()
    {
        return $this->copieInscri;
    }

    /**
     * Add theses
     *
     * @param \AuthentBundle\Entity\These $theses
     * @return Inscription
     */
    public function addThesis(\AuthentBundle\Entity\These $theses)
    {
        $this->theses[] = $theses;
    
        return $this;
    }

    /**
     * Remove theses
     *
     * @param \AuthentBundle\Entity\These $theses
     */
    public function removeThesis(\AuthentBundle\Entity\These $theses)
    {
        $this->theses->removeElement($theses);
    }

    /**
     * Get theses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTheses()
    {
        return $this->theses;
    }
}
