<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Grade{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idGrade;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelleGrade;
    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Membre", inversedBy="listeDesGrades")
     * @ORM\JoinTable(name="_assoc_membre_grade",
     *   joinColumns={@ORM\JoinColumn(name="idGrade", referencedColumnName="idGrade")},
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
     * Set idGrade
     *
     * @param integer $idGrade
     * @return Grade
     */
    public function setIdGrade($idGrade)
    {
        $this->idGrade = $idGrade;

        return $this;
    }

    /**
     * Get idGrade
     *
     * @return integer 
     */
    public function getIdGrade()
    {
        return $this->idGrade;
    }

    /**
     * Set libelleGrade
     *
     * @param string $libelleGrade
     * @return Grade
     */
    public function setLibelleGrade($libelleGrade)
    {
        $this->libelleGrade = $libelleGrade;

        return $this;
    }

    /**
     * Get libelleGrade
     *
     * @return string 
     */
    public function getLibelleGrade()
    {
        return $this->libelleGrade;
    }

    /**
     * Add listeDesMembres
     *
     * @param \AuthentBundle\Entity\Membre $listeDesMembres
     * @return Grade
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
