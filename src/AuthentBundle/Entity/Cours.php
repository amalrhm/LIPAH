<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Cours{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idCours;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $desc;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $design;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $section;
    /**
     * @ORM\ManyToOne(targetEntity="Membre" , inversedBy="cours")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $membre;
     /**
     *  @ORM\OneToMany(targetEntity="Chapitre", mappedBy="cours", cascade={"remove", "persist"})
    */
    protected $chaps;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chaps = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idCours
     *
     * @return integer 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Cours
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set design
     *
     * @param string $design
     * @return Cours
     */
    public function setDesign($design)
    {
        $this->design = $design;
    
        return $this;
    }

    /**
     * Get design
     *
     * @return string 
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return Cours
     */
    public function setSection($section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set membre
     *
     * @param \AuthentBundle\Entity\Membre $membre
     * @return Cours
     */
    public function setMembre(\AuthentBundle\Entity\Membre $membre = null)
    {
        $this->membre = $membre;
    
        return $this;
    }

    /**
     * Get membre
     *
     * @return \AuthentBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Add chaps
     *
     * @param \AuthentBundle\Entity\Chapitre $chaps
     * @return Cours
     */
    public function addChap(\AuthentBundle\Entity\Chapitre $chaps)
    {
        $this->chaps[] = $chaps;
    
        return $this;
    }

    /**
     * Remove chaps
     *
     * @param \AuthentBundle\Entity\Chapitre $chaps
     */
    public function removeChap(\AuthentBundle\Entity\Chapitre $chaps)
    {
        $this->chaps->removeElement($chaps);
    }

    /**
     * Get chaps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChaps()
    {
        return $this->chaps;
    }
}
