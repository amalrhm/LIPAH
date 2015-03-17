<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Statut{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idStatut;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelleStatut;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="listeDesStatuts")
     * @ORM\JoinTable(name="_assoc_membre_statut",
     *   joinColumns={@ORM\JoinColumn(name="idStatut", referencedColumnName="idStatut")},
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
     * Set idStatut
     *
     * @param integer $idStatut
     * @return Statut
     */
    public function setIdStatut($idStatut)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * Get idStatut
     *
     * @return integer 
     */
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * Set idLibelle
     *
     * @param string $idLibelle
     * @return Statut
     */
    public function setLibelleStatut($idLibelle)
    {
        $this->libelleStatut = $libelleStatut;

        return $this;
    }

    /**
     * Get idLibelle
     *
     * @return string 
     */
    public function getLibelleStatut()
    {
        return $this->libelleStatut;
    }

    /**
     * Add listeDesMembres
     *
     * @param \AuthentBundle\Entity\Membre $listeDesMembres
     * @return Statut
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
