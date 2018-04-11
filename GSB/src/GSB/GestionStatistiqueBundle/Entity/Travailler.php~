<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * Travailler
 *
 * @ORM\Table(name="travailler")
 * @ORM\Entity(repositoryClass="GSB\GestionStatistiqueBundle\Repository\TravaillerRepository")
 */
class Travailler
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
	 * @ORM\ManyToOne(targetEntity="GSB\GestionStatistiqueBundle\Entity\Region")
	 * @ORM\JoinColumn(nullable=false, name="code_reg", referencedColumnName="code_region")
     */
    private $codeReg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jjmmaa", type="datetime")
     */
    private $jjmmaa;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="GSB\GestionStatistiqueBundle\Entity\Visiteur")
     * @ORM\JoinColumn(nullable=false, name="matricule_vis", referencedColumnName="matricule_visiteur")
     */
    private $matriculeVis;

    /**
     * @var string
     *
     * @ORM\Column(name="role_trav", type="string", length=255)
     */
    private $roleTrav;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeReg.
     *
     * @param int $codeReg
     *
     * @return Travailler
     */
    public function setCodeReg($codeReg)
    {
        $this->codeReg = $codeReg;

        return $this;
    }

    /**
     * Get codeReg.
     *
     * @return int
     */
    public function getCodeReg()
    {
        return $this->codeReg;
    }

    /**
     * Set jjmmaa.
     *
     * @param \DateTime $jjmmaa
     *
     * @return Travailler
     */
    public function setJjmmaa($jjmmaa)
    {
        $this->jjmmaa = $jjmmaa;

        return $this;
    }

    /**
     * Get jjmmaa.
     *
     * @return \DateTime
     */
    public function getJjmmaa()
    {
        return $this->jjmmaa;
    }

    /**
     * Set matriculeVis.
     *
     * @param int $matriculeVis
     *
     * @return Travailler
     */
    public function setMatriculeVis($matriculeVis)
    {
        $this->matriculeVis = $matriculeVis;

        return $this;
    }

    /**
     * Get matriculeVis.
     *
     * @return int
     */
    public function getMatriculeVis()
    {
        return $this->matriculeVis;
    }

    /**
     * Set roleTrav.
     *
     * @param string $roleTrav
     *
     * @return Travailler
     */
    public function setRoleTrav($roleTrav)
    {
        $this->roleTrav = $roleTrav;

        return $this;
    }

    /**
     * Get roleTrav.
     *
     * @return string
     */
    public function getRoleTrav()
    {
        return $this->roleTrav;
    }


}
