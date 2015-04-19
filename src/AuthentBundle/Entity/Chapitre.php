<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Chapitre{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idChap;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelle;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $desc;
     /**
     * @ORM\Column(type="string", length=50)
     */
    protected $url;
    /**
     * @ORM\ManyToOne(targetEntity="Cours" , inversedBy="chaps")
     *  @ORM\JoinColumn(name="idCours", referencedColumnName="idCours")
     */
    protected $cours;

    /**
     * Get idChap
     *
     * @return integer 
     */
    public function getIdChap()
    {
        return $this->idChap;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Chapitre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Chapitre
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
     * Set url
     *
     * @param string $url
     * @return Chapitre
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set cours
     *
     * @param \AuthentBundle\Entity\Cours $cours
     * @return Chapitre
     */
    public function setCours(\AuthentBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;
    
        return $this;
    }

    /**
     * Get cours
     *
     * @return \AuthentBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }
}
