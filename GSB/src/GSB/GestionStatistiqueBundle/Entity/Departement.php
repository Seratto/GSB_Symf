<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="GSB\GestionStatistiqueBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @var string
     *
     * @ORM\Column(name="nom_dep", type="string", length=255)
     */
    private $nomDep;

    /**
     * @var int
     *
     * @ORM\Column(name="code_dep", type="integer")
     */
    private $codeDep;


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
     * Set nomDep.
     *
     * @param string $nomDep
     *
     * @return Departement
     */
    public function setNomDep($nomDep)
    {
        $this->nomDep = $nomDep;

        return $this;
    }

    /**
     * Get nomDep.
     *
     * @return string
     */
    public function getNomDep()
    {
        return $this->nomDep;
    }

    /**
     * Set codeDep.
     *
     * @param int $codeDep
     *
     * @return Departement
     */
    public function setCodeDep($codeDep)
    {
        $this->codeDep = $codeDep;

        return $this;
    }

    /**
     * Get codeDep.
     *
     * @return int
     */
    public function getCodeDep()
    {
        return $this->codeDep;
    }
}
