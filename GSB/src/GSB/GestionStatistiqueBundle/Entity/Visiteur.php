<?php

namespace GSB\GestionStatistiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity(repositoryClass="GSB\GestionStatistiqueBundle\Repository\VisiteurRepository")
 */
class Visiteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="matricule_visiteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\GestionStatistiqueBundle\Entity\Secteur")
     * @ORM\JoinColumn(nullable=false, name="code_sec", referencedColumnName="code_secteur")
     */
    private $codeSecteur;

    /**
	 * @ORM\ManyToOne(targetEntity="GSB\GestionStatistiqueBundle\Entity\Departement")
     * @ORM\JoinColumn(nullable=false, name="code_dep", referencedColumnName="code_dep")
     */
    private $codeDep;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_vis", type="string", length=255)
     */
    private $nomVis;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_vis", type="string", length=255)
     */
    private $adresseVis;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_vis", type="string", length=255)
     */
    private $cpVis;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_vis", type="string", length=255)
     */
    private $villeVis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_embauche", type="datetime")
     */
    private $dateEmbauche;


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
     * Set matriculeVis.
     *
     * @param int $matriculeVis
     *
     * @return Visiteur
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
     * Set codeSec.
     *
     * @param int $codeSec
     *
     * @return Visiteur
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
     * Set codeDep.
     *
     * @param int $codeDep
     *
     * @return Visiteur
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

    /**
     * Set nomVis.
     *
     * @param string $nomVis
     *
     * @return Visiteur
     */
    public function setNomVis($nomVis)
    {
        $this->nomVis = $nomVis;

        return $this;
    }

    /**
     * Get nomVis.
     *
     * @return string
     */
    public function getNomVis()
    {
        return $this->nomVis;
    }

    /**
     * Set adresseVis.
     *
     * @param string $adresseVis
     *
     * @return Visiteur
     */
    public function setAdresseVis($adresseVis)
    {
        $this->adresseVis = $adresseVis;

        return $this;
    }

    /**
     * Get adresseVis.
     *
     * @return string
     */
    public function getAdresseVis()
    {
        return $this->adresseVis;
    }

    /**
     * Set cpVis.
     *
     * @param string $cpVis
     *
     * @return Visiteur
     */
    public function setCpVis($cpVis)
    {
        $this->cpVis = $cpVis;

        return $this;
    }

    /**
     * Get cpVis.
     *
     * @return string
     */
    public function getCpVis()
    {
        return $this->cpVis;
    }

    /**
     * Set villeVis.
     *
     * @param string $villeVis
     *
     * @return Visiteur
     */
    public function setVilleVis($villeVis)
    {
        $this->villeVis = $villeVis;

        return $this;
    }

    /**
     * Get villeVis.
     *
     * @return string
     */
    public function getVilleVis()
    {
        return $this->villeVis;
    }

    /**
     * Set dateEmbauche.
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Visiteur
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche.
     *
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set responsableDuSecteur
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Secteur $responsableDuSecteur
     *
     * @return Visiteur
     */
    public function setResponsableDuSecteur(\GSB\GestionStatistiqueBundle\Entity\Secteur $responsableDuSecteur = null)
    {
        $this->responsableDuSecteur = $responsableDuSecteur;

        return $this;
    }

    /**
     * Get responsableDuSecteur
     *
     * @return \GSB\GestionStatistiqueBundle\Entity\Secteur
     */
    public function getResponsableDuSecteur()
    {
        return $this->responsableDuSecteur;
    }

    /**
     * Set dependDuDepartement
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Departement $dependDuDepartement
     *
     * @return Visiteur
     */
    public function setDependDuDepartement(\GSB\GestionStatistiqueBundle\Entity\Departement $dependDuDepartement)
    {
        $this->dependDuDepartement = $dependDuDepartement;

        return $this;
    }

    /**
     * Get dependDuDepartement
     *
     * @return \GSB\GestionStatistiqueBundle\Entity\Departement
     */
    public function getDependDuDepartement()
    {
        return $this->dependDuDepartement;
    }

    /**
     * Add region
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Region $region
     *
     * @return Visiteur
     */
    public function addRegion(\GSB\GestionStatistiqueBundle\Entity\Region $region)
    {
        $this->regions[] = $region;

        return $this;
    }

    /**
     * Remove region
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Region $region
     */
    public function removeRegion(\GSB\GestionStatistiqueBundle\Entity\Region $region)
    {
        $this->regions->removeElement($region);
    }

    /**
     * Get regions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Add travail
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Travailler $travail
     *
     * @return Visiteur
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
     * Set codeSecteur.
     *
     * @param int $codeSecteur
     *
     * @return Visiteur
     */
    public function setCodeSecteur($codeSecteur)
    {
        $this->codeSecteur = $codeSecteur;

        return $this;
    }

    /**
     * Get codeSecteur.
     *
     * @return int
     */
    public function getCodeSecteur()
    {
        return $this->codeSecteur;
    }

    /**
     * Add codeSecteur
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Secteur $codeSecteur
     *
     * @return Visiteur
     */
    public function addCodeSecteur(\GSB\GestionStatistiqueBundle\Entity\Secteur $codeSecteur)
    {
        $this->codeSecteur[] = $codeSecteur;

        return $this;
    }

    /**
     * Remove codeSecteur
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Secteur $codeSecteur
     */
    public function removeCodeSecteur(\GSB\GestionStatistiqueBundle\Entity\Secteur $codeSecteur)
    {
        $this->codeSecteur->removeElement($codeSecteur);
    }

    /**
     * Add codeDep
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Departement $codeDep
     *
     * @return Visiteur
     */
    public function addCodeDep(\GSB\GestionStatistiqueBundle\Entity\Departement $codeDep)
    {
        $this->codeDep[] = $codeDep;

        return $this;
    }

    /**
     * Remove codeDep
     *
     * @param \GSB\GestionStatistiqueBundle\Entity\Departement $codeDep
     */
    public function removeCodeDep(\GSB\GestionStatistiqueBundle\Entity\Departement $codeDep)
    {
        $this->codeDep->removeElement($codeDep);
    }
}
