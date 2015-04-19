<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class OffreStage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $idOffre;
  
    /**
     * @ORM\Column(type="string")
     */
    protected $domaine;
    /**
     * @ORM\Column(type="string")
     */
    protected $periode;
    /**
     * @ORM\Column(type="string")
     */
    protected $sujet;
    /**
     * @ORM\ManyToOne(targetEntity="Administrateur", inversedBy="offres")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $administrateur;
    

    /**
     * Set idOffre
     *
     * @param integer $idOffre
     * @return OffreStage
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;
    
        return $this;
    }

    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return OffreStage
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    
        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return OffreStage
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    
        return $this;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return OffreStage
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    
        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set administrateur
     *
     * @param \AuthentBundle\Entity\Administrateur $administrateur
     * @return OffreStage
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
