<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     *
     * @ORM\Column(name="code_reg", type="integer")
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
     * @ORM\Column(name="matricule_vis", type="integer")
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

    public static function getVisiteursRegion($idRegion)
    {
        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine
        $query = $em->createQuery( //creation de la requête
            'SELECT COUNT(t.matricule_visiteur)
            FROM GSBGestionStatistiqueBundle:Travailler t
            WHERE t.code_region = :laRegion'
        )->setParameter('laRegion', $idRegion);
        $nbVisiteur = $query->getResult(); //variable qui récupère la requête
        return $nbVisiteur;
    }
}
