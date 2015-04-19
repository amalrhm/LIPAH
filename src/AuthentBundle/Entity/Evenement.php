<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idEvent;
   /**
    *
    * @ORM\Column(type="date")
    */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $intitule;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $programme;
    /**
     * @ORM\ManyToOne(targetEntity="Administrateur", inversedBy="events")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $administrateur;

    /**
     * Set idEvent
     *
     * @param integer $idEvent
     * @return Evenement
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    
        return $this;
    }

    /**
     * Get idEvent
     *
     * @return integer 
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Evenement
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
     * Set intitule
     *
     * @param string $intitule
     * @return Evenement
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
     * Set description
     *
     * @param string $description
     * @return Evenement
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
     * Set programme
     *
     * @param string $programme
     * @return Evenement
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;
    
        return $this;
    }

    /**
     * Get programme
     *
     * @return string 
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set administrateur
     *
     * @param \AuthentBundle\Entity\Administrateur $administrateur
     * @return Evenement
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
