<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="GSB\GestionStatistiqueBundle\Repository\RegionRepository")
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="code_region", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\GestionStatistiqueBundle\Entity\Secteur")
     * @ORM\JoinColumn(nullable=false, name="code_sec_id", referencedColumnName="code_secteur")
     */
    private $codeSec;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_reg", type="string", length=255)
     */
    private $nomReg;

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
     * @return Region
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
     * Set codeSec.
     *
     * @param int $codeSec
     *
     * @return Region
     */
    public function setCodeSec($codeSec)
    {
        $this->codeSec = $codeSec;

        return $this;
    }

    /**
     * Get codeSec.
     *
     * @return int
     */
    public function getCodeSec()
    {
        return $this->codeSec;
    }

    /**
     * Set nomReg.
     *
     * @param string $nomReg
     *
     * @return Region
     */
    public function setNomReg($nomReg)
    {
        $this->nomReg = $nomReg;

        return $this;
    }

    /**
     * Get nomReg.
     *
     * @return string
     */
    public function getNomReg()
    {
        return $this->nomReg;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visiteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add visiteur
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Visiteur $visiteur
     *
     * @return Region
     */
    public function addVisiteur(\GSB\GestionStatistiqueBundle\Entity\Visiteur $visiteur)
    {
        $this->visiteurs[] = $visiteur;

        return $this;
    }

    /**
     * Remove visiteur
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Visiteur $visiteur
     */
    public function removeVisiteur(\GSB\GestionStatistiqueBundle\Entity\Visiteur $visiteur)
    {
        $this->visiteurs->removeElement($visiteur);
    }

    /**
     * Get visiteurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisiteurs()
    {
        return $this->visiteurs;
    }

    /**
     * Add travail
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Travailler $travail
     *
     * @return Region
     */
    public function addTravail(\GSB\GestionStatistiqueBundle\Entity\Travailler $travail)
    {
        $this->travail[] = $travail;

        return $this;
    }

    /**
     * Remove travail
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Travailler $travail
     */
    public function removeTravail(\GSB\GestionStatistiqueBundle\Entity\Travailler $travail)
    {
        $this->travail->removeElement($travail);
    }

    /**
     * Get travail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTravail()
    {
        return $this->travail;
    }

    /**
     * Add codeSec
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Secteur $codeSec
     *
     * @return Region
     */
    public function addCodeSec(\GSB\GestionStatistiqueBundle\Entity\Secteur $codeSec)
    {
        $this->codeSec[] = $codeSec;

        return $this;
    }

    /**
     * Remove codeSec
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Secteur $codeSec
     */
    public function removeCodeSec(\GSB\GestionStatistiqueBundle\Entity\Secteur $codeSec)
    {
        $this->codeSec->removeElement($codeSec);
    }
}
