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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="code_reg", type="integer")
     */
    private $codeReg;

    /**
     * @var int
     *
     * @ORM\Column(name="code_sec", type="integer")
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
}
