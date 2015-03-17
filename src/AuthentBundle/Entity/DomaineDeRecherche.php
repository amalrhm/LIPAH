<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class DomaineDeRecherche{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idDomaine;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelleDomaine;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $presentation;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="listeDesDomaines")
     * @ORM\JoinTable(name="_assoc_membre_domaine",
     *   joinColumns={@ORM\JoinColumn(name="idDomaine", referencedColumnName="idDomaine")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="membre_id", referencedColumnName="cin")}
     * )
     */
    protected $listeDesMembres;

    /**
     * Get idDomaine
     *
     * @return integer 
     */
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }

    /**
     * Set libelleDomaine
     *
     * @param string $libelleDomaine
     * @return DomaineDeRecherche
     */
    public function setLibelleDomaine($libelleDomaine)
    {
        $this->libelleDomaine = $libelleDomaine;

        return $this;
    }

    /**
     * Get libelleDomaine
     *
     * @return string 
     */
    public function getLibelleDomaine()
    {
        return $this->libelleDomaine;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return DomaineDeRecherche
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesMembres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeDesMembres
     *
     * @param \AuthentBundle\Entity\Membre $listeDesMembres
     * @return DomaineDeRecherche
     */
    public function addListeDesMembre(\AuthentBundle\Entity\Membre $listeDesMembres)
    {
        $this->listeDesMembres[] = $listeDesMembres;

        return $this;
    }

    /**
     * Remove listeDesMembres
     *
     * @param \AuthentBundle\Entity\Membre $listeDesMembres
     */
    public function removeListeDesMembre(\AuthentBundle\Entity\Membre $listeDesMembres)
    {
        $this->listeDesMembres->removeElement($listeDesMembres);
    }

    /**
     * Get listeDesMembres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesMembres()
    {
        return $this->listeDesMembres;
    }
}
