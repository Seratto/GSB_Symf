<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity(repositoryClass="GSB\GestionStatistiqueBundle\Repository\SecteurRepository")
 */
class Secteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="code_secteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_sec", type="string", length=255)
     */
    private $libelleSec;


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
     * Set codeSec.
     *
     * @param int $codeSec
     *
     * @return Secteur
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
     * Set libelleSec.
     *
     * @param string $libelleSec
     *
     * @return Secteur
     */
    public function setLibelleSec($libelleSec)
    {
        $this->libelleSec = $libelleSec;

        return $this;
    }

    /**
     * Get libelleSec.
     *
     * @return string
     */
    public function getLibelleSec()
    {
        return $this->libelleSec;
    }
}
