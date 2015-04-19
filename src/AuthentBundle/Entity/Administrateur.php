<?php


namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Administrateur
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
    protected $tel;
    
    
   

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Administrateur
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
     * @return Administrateur
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
     * @return Administrateur
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
     * @return Administrateur
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
     * @return Administrateur
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
     * @return Administrateur
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
     * Set tel
     *
     * @param string $tel
     * @return Administrateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }
     /**
     *  @ORM\OneToMany(targetEntity="Actualite", mappedBy="administrateur", cascade={"remove", "persist"})
    */
    protected $actualites;
    
    /**
     *  @ORM\OneToMany(targetEntity="Evenement", mappedBy="administrateur", cascade={"remove", "persist"})
    */
    protected $events;
    
     /**
     *  @ORM\OneToMany(targetEntity="OffreStage", mappedBy="administrateur", cascade={"remove", "persist"})
    */
    protected $offres;
     /**
     *  @ORM\OneToMany(targetEntity="Projet", mappedBy="administrateur", cascade={"remove", "persist"})
    */
    protected $projets;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actualites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add actualites
     *
     * @param \AuthentBundle\Entity\Actualite $actualites
     * @return Administrateur
     */
    public function addActualites(\AuthentBundle\Entity\Actualite $actualites)
    {
        $this->actualites[] = $actualites;
    
        return $this;
    }

    /**
     * Remove actualites
     *
     * @param \AuthentBundle\Entity\Actualite $actualites
     */
    public function removeActualite(\AuthentBundle\Entity\Actualite $actualites)
    {
        $this->actualites->removeElement($actualites);
    }

    /**
     * Get actualites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActualites()
    {
        return $this->actualites;
    }

    /**
     * Add actualites
     *
     * @param \AuthentBundle\Entity\Actualite $actualites
     * @return Administrateur
     */
    public function addActualite(\AuthentBundle\Entity\Actualite $actualites)
    {
        $this->actualites[] = $actualites;
    
        return $this;
    }

    /**
     * Add events
     *
     * @param \AuthentBundle\Entity\Evenement $events
     * @return Administrateur
     */
    public function addEvent(\AuthentBundle\Entity\Evenement $events)
    {
        $this->events[] = $events;
    
        return $this;
    }

    /**
     * Remove events
     *
     * @param \AuthentBundle\Entity\Evenement $events
     */
    public function removeEvent(\AuthentBundle\Entity\Evenement $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add offres
     *
     * @param \AuthentBundle\Entity\OffreStage $offres
     * @return Administrateur
     */
    public function addOffre(\AuthentBundle\Entity\OffreStage $offres)
    {
        $this->offres[] = $offres;
    
        return $this;
    }

    /**
     * Remove offres
     *
     * @param \AuthentBundle\Entity\OffreStage $offres
     */
    public function removeOffre(\AuthentBundle\Entity\OffreStage $offres)
    {
        $this->offres->removeElement($offres);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Add projets
     *
     * @param \AuthentBundle\Entity\Projet $projets
     * @return Administrateur
     */
    public function addProjet(\AuthentBundle\Entity\Projet $projets)
    {
        $this->projets[] = $projets;
    
        return $this;
    }

    /**
     * Remove projets
     *
     * @param \AuthentBundle\Entity\Projet $projets
     */
    public function removeProjet(\AuthentBundle\Entity\Projet $projets)
    {
        $this->projets->removeElement($projets);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
