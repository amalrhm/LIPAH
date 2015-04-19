<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class MembreExterne{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $cin;
     /**
     * @ORM\Column(type="date", length=20)
     */
    protected $date_naiss;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $email;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $lieu_naiss;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $nationalite;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $nom;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $prenom;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $profil;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $sexe;
     /**
     * @ORM\Column(type="integer", length=20)
     */
    protected $tel;
     /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="These", inversedBy="listeDesMembresExternes")
     * @ORM\JoinTable(name="_assoc_these_membreExt",
     *   joinColumns={@ORM\JoinColumn(name="cin", referencedColumnName="cin")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="these_id", referencedColumnName="idThese")}
     * )
     */
    protected $listeDesTheses;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesTheses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return EncadrantExterne
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set date_naiss
     *
     * @param \DateTime $dateNaiss
     * @return EncadrantExterne
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->date_naiss = $dateNaiss;

        return $this;
    }

    /**
     * Get date_naiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->date_naiss;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return EncadrantExterne
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lieu_naiss
     *
     * @param string $lieuNaiss
     * @return EncadrantExterne
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->lieu_naiss = $lieuNaiss;

        return $this;
    }

    /**
     * Get lieu_naiss
     *
     * @return string 
     */
    public function getLieuNaiss()
    {
        return $this->lieu_naiss;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return EncadrantExterne
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return EncadrantExterne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return EncadrantExterne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set profil
     *
     * @param string $profil
     * @return EncadrantExterne
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string 
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return EncadrantExterne
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return EncadrantExterne
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add listeDesTheses
     *
     * @param \AuthentBundle\Entity\These $listeDesTheses
     * @return EncadrantExterne
     */
    public function addListeDesThesis(\AuthentBundle\Entity\These $listeDesTheses)
    {
        $this->listeDesTheses[] = $listeDesTheses;

        return $this;
    }

    /**
     * Remove listeDesTheses
     *
     * @param \AuthentBundle\Entity\These $listeDesTheses
     */
    public function removeListeDesThesis(\AuthentBundle\Entity\These $listeDesTheses)
    {
        $this->listeDesTheses->removeElement($listeDesTheses);
    }

    /**
     * Get listeDesTheses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesTheses()
    {
        return $this->listeDesTheses;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Labo", inversedBy="membres")
     *  @ORM\JoinColumn(name="idLabo", referencedColumnName="idLabo")
     */
    protected $labo;
}
