<?php

namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PapiersScientifiques{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idPapiers;
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $auteurs;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $date;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $editeur;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $langue;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $matiere;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $titre;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $volume;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="listeDesPapiers")
     * @ORM\JoinTable(name="_assoc_membre_papiers",
     *   joinColumns={@ORM\JoinColumn(name="idPapiers", referencedColumnName="idPapiers")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="membre_id", referencedColumnName="cin")}
     * )
     */
    protected $listeDesMembres;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesMembres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idPapiers
     *
     * @return integer 
     */
    public function getIdPapiers()
    {
        return $this->idPapiers;
    }

    /**
     * Set auteurs
     *
     * @param string $auteurs
     * @return PapiersScientifiques
     */
    public function setAuteurs($auteurs)
    {
        $this->auteurs = $auteurs;

        return $this;
    }

    /**
     * Get auteurs
     *
     * @return string 
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return PapiersScientifiques
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set editeur
     *
     * @param string $editeur
     * @return PapiersScientifiques
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return string 
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return PapiersScientifiques
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set matiere
     *
     * @param string $matiere
     * @return PapiersScientifiques
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return PapiersScientifiques
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
     * Set volume
     *
     * @param string $volume
     * @return PapiersScientifiques
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Add listeDesMembres
     *
     * @param \AuthentBundle\Entity\Membre $listeDesMembres
     * @return PapiersScientifiques
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
