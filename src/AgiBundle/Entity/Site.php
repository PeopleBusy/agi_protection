<?php

namespace AgiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity(repositoryClass="AgiBundle\Repository\SiteRepository")
 */
class Site
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
     * @ORM\Column(name="nom_site", type="string", length=30)
     */
    private $nomSite;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_ouv_jour", type="time", nullable=true)
     */
    private $heureOuvJour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_ferm_jour", type="time", nullable=true)
     */
    private $heureFermJour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_ouv_nuit", type="time", nullable=true)
     */
    private $heureOuvNuit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_ferm_nuit", type="time", nullable=true)
     */
    private $heureFermNuit;

    /**
     * @ORM\OneToMany(targetEntity="ContratSite", mappedBy="site")
     */
    private $contrats;

    /**
     * @ORM\OneToMany(targetEntity="Vacation", mappedBy="site")
     */
    private $vacations;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="site")
     */
    private $operations;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSite
     *
     * @param string $nomSite
     *
     * @return Site
     */
    public function setNomSite($nomSite)
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    /**
     * Get nomSite
     *
     * @return string
     */
    public function getNomSite()
    {
        return $this->nomSite;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Site
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
     * Set heureOuvJour
     *
     * @param \DateTime $heureOuvJour
     *
     * @return Site
     */
    public function setHeureOuvJour($heureOuvJour)
    {
        $this->heureOuvJour = $heureOuvJour;

        return $this;
    }

    /**
     * Get heureOuvJour
     *
     * @return \DateTime
     */
    public function getHeureOuvJour()
    {
        return $this->heureOuvJour;
    }

    /**
     * Set heureFermJour
     *
     * @param \DateTime $heureFermJour
     *
     * @return Site
     */
    public function setHeureFermJour($heureFermJour)
    {
        $this->heureFermJour = $heureFermJour;

        return $this;
    }

    /**
     * Get heureFermJour
     *
     * @return \DateTime
     */
    public function getHeureFermJour()
    {
        return $this->heureFermJour;
    }

    /**
     * Set heureOuvNuit
     *
     * @param \DateTime $heureOuvNuit
     *
     * @return Site
     */
    public function setHeureOuvNuit($heureOuvNuit)
    {
        $this->heureOuvNuit = $heureOuvNuit;

        return $this;
    }

    /**
     * Get heureOuvNuit
     *
     * @return \DateTime
     */
    public function getHeureOuvNuit()
    {
        return $this->heureOuvNuit;
    }

    /**
     * Set heureFermNuit
     *
     * @param \DateTime $heureFermNuit
     *
     * @return Site
     */
    public function setHeureFermNuit($heureFermNuit)
    {
        $this->heureFermNuit = $heureFermNuit;

        return $this;
    }

    /**
     * Get heureFermNuit
     *
     * @return \DateTime
     */
    public function getHeureFermNuit()
    {
        return $this->heureFermNuit;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->vacations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrat
     *
     * @param \AgiBundle\Entity\ContratSite $contrat
     *
     * @return Site
     */
    public function addContrat(\AgiBundle\Entity\ContratSite $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \AgiBundle\Entity\ContratSite $contrat
     */
    public function removeContrat(\AgiBundle\Entity\ContratSite $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }

    /**
     * Add vacation
     *
     * @param \AgiBundle\Entity\Vacation $vacation
     *
     * @return Site
     */
    public function addVacation(\AgiBundle\Entity\Vacation $vacation)
    {
        $this->vacations[] = $vacation;

        return $this;
    }

    /**
     * Remove vacation
     *
     * @param \AgiBundle\Entity\Vacation $vacation
     */
    public function removeVacation(\AgiBundle\Entity\Vacation $vacation)
    {
        $this->vacations->removeElement($vacation);
    }

    /**
     * Get vacations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVacations()
    {
        return $this->vacations;
    }

    /**
     * Add operation
     *
     * @param \AgiBundle\Entity\Operation $operation
     *
     * @return Site
     */
    public function addOperation(\AgiBundle\Entity\Operation $operation)
    {
        $this->operations[] = $operation;

        return $this;
    }

    /**
     * Remove operation
     *
     * @param \AgiBundle\Entity\Operation $operation
     */
    public function removeOperation(\AgiBundle\Entity\Operation $operation)
    {
        $this->operations->removeElement($operation);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
