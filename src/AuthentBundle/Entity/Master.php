<?php
namespace AuthentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Master {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idMaster;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $titre;
      /**
     * @ORM\Column(type="string", length=20)
     */
    protected $mention;
    
     /**
     * @ORM\Column(type="date", length=20)
     */
    protected $date_stnc;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $etat;
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $masterPDF;
      /**
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="masters")
     *  @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    protected $membre;

    /**
     * Get idMaster
     *
     * @return integer 
     */
    public function getIdMaster()
    {
        return $this->idMaster;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Master
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
     * Set mention
     *
     * @param string $mention
     * @return Master
     */
    public function setMention($mention)
    {
        $this->mention = $mention;
    
        return $this;
    }

    /**
     * Get mention
     *
     * @return string 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set date_stnc
     *
     * @param \DateTime $dateStnc
     * @return Master
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
     * @return Master
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
     * Set masterPDF
     *
     * @param string $masterPDF
     * @return Master
     */
    public function setMasterPDF($masterPDF)
    {
        $this->masterPDF = $masterPDF;
    
        return $this;
    }

    /**
     * Get masterPDF
     *
     * @return string 
     */
    public function getMasterPDF()
    {
        return $this->masterPDF;
    }

    /**
     * Set membre
     *
     * @param \AuthentBundle\Entity\Membre $membre
     * @return Master
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
}
