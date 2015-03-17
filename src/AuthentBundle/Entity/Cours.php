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
     * @ORM\ManyToOne(targetEntity="Membre",cascade={"remove"})
     *  @ORM\JoinColumn(name="id_cours", referencedColumnName="idCours")
     */
    protected $membre;
}