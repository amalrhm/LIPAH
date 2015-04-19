<?php


namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Membre
{
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
     * @ORM\Column(type="string", length=5)
     */
    protected $sexe;
    /**
     * @ORM\Column(type="integer", length=20)
     */
    protected $tel;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Statut", mappedBy="listeDesMembres")
     * 
     */
    protected $listeDesStatuts;
    
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Grade", mappedBy="listeDesMembres")
     * 
     */
    protected $listeDesGrades;
     /**
      *  Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="DomaineDeRecherche", mappedBy="listeDesMembres")
     * 
     */
    protected $listeDesDomaines;
    
     /**
      *  Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="PapiersScientifiques", mappedBy="listeDesMembres")
     * 
     */
    protected $listeDesPapiers;
    /**
      *  Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="These", mappedBy="listeDesMembres")
     * 
     */
    protected $listeDesTheses;
    
    /**
     * Set cin
     *
     * @param integer $cin
     * @return Membre
     */
    
    /**
     *  @ORM\OneToMany(targetEntity="Cours", mappedBy="membre", cascade={"remove", "persist"})
    */
    protected $cours;
     /**
     *  @ORM\OneToMany(targetEntity="Master", mappedBy="membre", cascade={"remove", "persist"})
    */
    protected $masters;
     /**
     *  @ORM\OneToMany(targetEntity="Diplome", mappedBy="membre", cascade={"remove", "persist"})
    */
    protected $diplomes;
     /**
     * @ORM\ManyToOne(targetEntity="Etablissement", inversedBy="membres")
     *  @ORM\JoinColumn(name="idEtab", referencedColumnName="idEtab")
     */
    protected $etab;
    
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
     * @param string $dateNaiss
     * @return Membre
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->date_naiss = $dateNaiss;

        return $this;
    }

    /**
     * Get date_naiss
     *
     * @return string 
     */
    public function getDateNaiss()
    {
        return $this->date_naiss;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Membre
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
     * @return Membre
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
     * Set nom
     *
     * @param string $nom
     * @return Membre
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
     * @return Membre
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
     * @return Membre
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
     * @return Membre
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
     * @return Membre
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
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesStatuts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeDesStatuts
     *
     * @param \AuthentBundle\Entity\Statut $listeDesStatuts
     * @return Membre
     */
    public function addListeDesStatut(\AuthentBundle\Entity\Statut $listeDesStatuts)
    {
        $this->listeDesStatuts[] = $listeDesStatuts;

        return $this;
    }

    /**
     * Remove listeDesStatuts
     *
     * @param \AuthentBundle\Entity\Statut $listeDesStatuts
     */
    public function removeListeDesStatut(\AuthentBundle\Entity\Statut $listeDesStatuts)
    {
        $this->listeDesStatuts->removeElement($listeDesStatuts);
    }

    /**
     * Get listeDesStatuts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesStatuts()
    {
        return $this->listeDesStatuts;
    }

    /**
     * Add listeDesGrades
     *
     * @param \AuthentBundle\Entity\Grade $listeDesGrades
     * @return Membre
     */
    public function addListeDesGrade(\AuthentBundle\Entity\Grade $listeDesGrades)
    {
        $this->listeDesGrades[] = $listeDesGrades;

        return $this;
    }

    /**
     * Remove listeDesGrades
     *
     * @param \AuthentBundle\Entity\Grade $listeDesGrades
     */
    public function removeListeDesGrade(\AuthentBundle\Entity\Grade $listeDesGrades)
    {
        $this->listeDesGrades->removeElement($listeDesGrades);
    }

    /**
     * Get listeDesGrades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesGrades()
    {
        return $this->listeDesGrades;
    }

    /**
     * Add listeDesDomaines
     *
     * @param \AuthentBundle\Entity\DomaineDeRecherche $listeDesDomaines
     * @return Membre
     */
    public function addListeDesDomaine(\AuthentBundle\Entity\DomaineDeRecherche $listeDesDomaines)
    {
        $this->listeDesDomaines[] = $listeDesDomaines;

        return $this;
    }

    /**
     * Remove listeDesDomaines
     *
     * @param \AuthentBundle\Entity\DomaineDeRecherche $listeDesDomaines
     */
    public function removeListeDesDomaine(\AuthentBundle\Entity\DomaineDeRecherche $listeDesDomaines)
    {
        $this->listeDesDomaines->removeElement($listeDesDomaines);
    }

    /**
     * Get listeDesDomaines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesDomaines()
    {
        return $this->listeDesDomaines;
    }

    /**
     * Add listeDesPapiers
     *
     * @param \AuthentBundle\Entity\PapiersScientifiques $listeDesPapiers
     * @return Membre
     */
    public function addListeDesPapier(\AuthentBundle\Entity\PapiersScientifiques $listeDesPapiers)
    {
        $this->listeDesPapiers[] = $listeDesPapiers;

        return $this;
    }

    /**
     * Remove listeDesPapiers
     *
     * @param \AuthentBundle\Entity\PapiersScientifiques $listeDesPapiers
     */
    public function removeListeDesPapier(\AuthentBundle\Entity\PapiersScientifiques $listeDesPapiers)
    {
        $this->listeDesPapiers->removeElement($listeDesPapiers);
    }

    /**
     * Get listeDesPapiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesPapiers()
    {
        return $this->listeDesPapiers;
    }

    /**
     * Add listeDesTheses
     *
     * @param \AuthentBundle\Entity\These $listeDesTheses
     * @return Membre
     */
    public function addListeDesTheses(\AuthentBundle\Entity\These $listeDesTheses)
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
     * Add listeDesTheses
     *
     * @param \AuthentBundle\Entity\These $listeDesTheses
     * @return Membre
     */
    public function addListeDesThesis(\AuthentBundle\Entity\These $listeDesTheses)
    {
        $this->listeDesTheses[] = $listeDesTheses;
    
        return $this;
    }

    /**
     * Add cours
     *
     * @param \AuthentBundle\Entity\Cours $cours
     * @return Membre
     */
    public function addCour(\AuthentBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;
    
        return $this;
    }

    /**
     * Remove cours
     *
     * @param \AuthentBundle\Entity\Cours $cours
     */
    public function removeCour(\AuthentBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Add masters
     *
     * @param \AuthentBundle\Entity\Master $masters
     * @return Membre
     */
    public function addMaster(\AuthentBundle\Entity\Master $masters)
    {
        $this->masters[] = $masters;
    
        return $this;
    }

    /**
     * Remove masters
     *
     * @param \AuthentBundle\Entity\Master $masters
     */
    public function removeMaster(\AuthentBundle\Entity\Master $masters)
    {
        $this->masters->removeElement($masters);
    }

    /**
     * Get masters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMasters()
    {
        return $this->masters;
    }

    /**
     * Add diplomes
     *
     * @param \AuthentBundle\Entity\Diplome $diplomes
     * @return Membre
     */
    public function addDiplome(\AuthentBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes[] = $diplomes;
    
        return $this;
    }

    /**
     * Remove diplomes
     *
     * @param \AuthentBundle\Entity\Diplome $diplomes
     */
    public function removeDiplome(\AuthentBundle\Entity\Diplome $diplomes)
    {
        $this->diplomes->removeElement($diplomes);
    }

    /**
     * Get diplomes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Set etab
     *
     * @param \AuthentBundle\Entity\Etablissement $etab
     * @return Membre
     */
    public function setEtab(\AuthentBundle\Entity\Etablissement $etab = null)
    {
        $this->etab = $etab;
    
        return $this;
    }

    /**
     * Get etab
     *
     * @return \AuthentBundle\Entity\Etablissement 
     */
    public function getEtab()
    {
        return $this->etab;
    }
}
