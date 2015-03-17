<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class These {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idThese;
      /**
     * @ORM\Column(type="string", length=20)
     */
    protected $cotutelle;
     /**
     * @ORM\Column(type="date", length=20)
     */
    protected $date_inscri;
     /**
     * @ORM\Column(type="date", length=20)
     */
    protected $date_stnc;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $etat;
     /**
     * @ORM\Column(type="string", length=1000)
     */
    protected $these_pdf;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $titre;
      /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="listeDesTheses")
     * @ORM\JoinTable(name="Encadrement",
     *   joinColumns={@ORM\JoinColumn(name="idThese", referencedColumnName="idThese")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="membre_id", referencedColumnName="cin")}
     * )
     */
    protected $listeDesMembres;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="EncadrantExterne", mappedBy="listeDesTheses")
     * 
     */
    protected $listeDesEncadrants;
     /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="MembreExterne", mappedBy="listeDesTheses")
     * 
     */
    protected $listeDesMembresExternes;
    /**
     * Get idThese
     *
     * @return integer 
     */
    public function getIdThese()
    {
        return $this->idThese;
    }

    /**
     * Set cotutelle
     *
     * @param string $cotutelle
     * @return These
     */
    public function setCotutelle($cotutelle)
    {
        $this->cotutelle = $cotutelle;

        return $this;
    }

    /**
     * Get cotutelle
     *
     * @return string 
     */
    public function getCotutelle()
    {
        return $this->cotutelle;
    }

    /**
     * Set date_inscri
     *
     * @param \DateTime $dateInscri
     * @return These
     */
    public function setDateInscri($dateInscri)
    {
        $this->date_inscri = $dateInscri;

        return $this;
    }

    /**
     * Get date_inscri
     *
     * @return \DateTime 
     */
    public function getDateInscri()
    {
        return $this->date_inscri;
    }

    /**
     * Set date_stnc
     *
     * @param \DateTime $dateStnc
     * @return These
     */
    public function setDateStnc($dateStnc)
    {
        $this->date_stnc = $dateStnc;

        return $this;
    }

    /**
     * Get date_stnc
     *
     * @return \DateTime 
     */
    public function getDateStnc()
    {
        return $this->date_stnc;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return These
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set these_pdf
     *
     * @param string $thesePdf
     * @return These
     */
    public function setThesePdf($thesePdf)
    {
        $this->these_pdf = $thesePdf;

        return $this;
    }

    /**
     * Get these_pdf
     *
     * @return string 
     */
    public function getThesePdf()
    {
        return $this->these_pdf;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return These
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
     * @return These
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

    /**
     * Add listeDesEncadrants
     *
     * @param \AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants
     * @return These
     */
    public function addListeDesEncadrant(\AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants)
    {
        $this->listeDesEncadrants[] = $listeDesEncadrants;

        return $this;
    }

    /**
     * Remove listeDesEncadrants
     *
     * @param \AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants
     */
    public function removeListeDesEncadrant(\AuthentBundle\Entity\EncadrantExterne $listeDesEncadrants)
    {
        $this->listeDesEncadrants->removeElement($listeDesEncadrants);
    }

    /**
     * Get listeDesEncadrants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesEncadrants()
    {
        return $this->listeDesEncadrants;
    }

    /**
     * Add listeDesMembresExternes
     *
     * @param \AuthentBundle\Entity\MembreExterne $listeDesMembresExternes
     * @return These
     */
    public function addListeDesMembresExterne(\AuthentBundle\Entity\MembreExterne $listeDesMembresExternes)
    {
        $this->listeDesMembresExternes[] = $listeDesMembresExternes;

        return $this;
    }

    /**
     * Remove listeDesMembresExternes
     *
     * @param \AuthentBundle\Entity\MembreExterne $listeDesMembresExternes
     */
    public function removeListeDesMembresExterne(\AuthentBundle\Entity\MembreExterne $listeDesMembresExternes)
    {
        $this->listeDesMembresExternes->removeElement($listeDesMembresExternes);
    }

    /**
     * Get listeDesMembresExternes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesMembresExternes()
    {
        return $this->listeDesMembresExternes;
    }
}
