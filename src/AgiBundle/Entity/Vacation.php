<?php

namespace AgiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacation
 *
 * @ORM\Table(name="vacation")
 * @ORM\Entity(repositoryClass="AgiBundle\Repository\VacationRepository")
 */
class Vacation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_vacation", type="date")
     */
    private $dateVacation;

    /**
     * @var int
     *
     * @ORM\Column(name="heure_panier", type="smallint")
     */
    private $heurePanier;

    /**
     * @var int
     *
     * @ORM\Column(name="heure_jour", type="string")
     */
    private $heureJour;

    /**
     * @var int
     *
     * @ORM\Column(name="heure_nuit", type="string")
     */
    private $heureNuit;

    /**
     * @var int
     *
     * @ORM\Column(name="heure_dimanche", type="smallint")
     */
    private $heureDimanche;

    /**
     * @var int
     *
     * @ORM\Column(name="heure_ferie", type="smallint")
     */
    private $heureFerie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_deb_vac", type="datetime")
     */
    private $heureDebVac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin_vac", type="datetime", nullable=true)
     */
    private $heureFinVac;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="vacations")
     * @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     */
    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity="Site", inversedBy="vacations")
     * @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     */
    private $site;


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
     * Set dateVacation
     *
     * @param \DateTime $dateVacation
     *
     * @return Vacation
     */
    public function setDateVacation($dateVacation)
    {
        $this->dateVacation = $dateVacation;

        return $this;
    }

    /**
     * Get dateVacation
     *
     * @return \DateTime
     */
    public function getDateVacation()
    {
        return $this->dateVacation;
    }

    /**
     * Set heurePanier
     *
     * @param integer $heurePanier
     *
     * @return Vacation
     */
    public function setHeurePanier($heurePanier)
    {
        $this->heurePanier = $heurePanier;

        return $this;
    }

    /**
     * Get heurePanier
     *
     * @return int
     */
    public function getHeurePanier()
    {
        return $this->heurePanier;
    }

    /**
     * Set heureDebVac
     *
     * @param \DateTime $heureDebVac
     *
     * @return Vacation
     */
    public function setHeureDebVac($heureDebVac)
    {
        $this->heureDebVac = $heureDebVac;

        return $this;
    }

    /**
     * Get heureDebVac
     *
     * @return \DateTime
     */
    public function getHeureDebVac()
    {
        return $this->heureDebVac;
    }

    /**
     * Set heureFinVac
     *
     * @param \DateTime $heureFinVac
     *
     * @return Vacation
     */
    public function setHeureFinVac($heureFinVac)
    {
        $this->heureFinVac = $heureFinVac;

        return $this;
    }

    /**
     * Get heureFinVac
     *
     * @return \DateTime
     */
    public function getHeureFinVac()
    {
        return $this->heureFinVac;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Vacation
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
     * Set agent
     *
     * @param \AgiBundle\Entity\Agent $agent
     *
     * @return Vacation
     */
    public function setAgent(\AgiBundle\Entity\Agent $agent = null)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \AgiBundle\Entity\Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set site
     *
     * @param \AgiBundle\Entity\Site $site
     *
     * @return Vacation
     */
    public function setSite(\AgiBundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \AgiBundle\Entity\Site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set heureJour
     *
     * @param integer $heureJour
     *
     * @return Vacation
     */
    public function setHeureJour($heureJour)
    {
        $this->heureJour = $heureJour;

        return $this;
    }

    /**
     * Get heureJour
     *
     * @return integer
     */
    public function getHeureJour()
    {
        return $this->heureJour;
    }

    /**
     * Set heureNuit
     *
     * @param integer $heureNuit
     *
     * @return Vacation
     */
    public function setHeureNuit($heureNuit)
    {
        $this->heureNuit = $heureNuit;

        return $this;
    }

    /**
     * Get heureNuit
     *
     * @return integer
     */
    public function getHeureNuit()
    {
        return $this->heureNuit;
    }

    /**
     * Set heureDimanche
     *
     * @param integer $heureDimanche
     *
     * @return Vacation
     */
    public function setHeureDimanche($heureDimanche)
    {
        $this->heureDimanche = $heureDimanche;

        return $this;
    }

    /**
     * Get heureDimanche
     *
     * @return integer
     */
    public function getHeureDimanche()
    {
        return $this->heureDimanche;
    }

    /**
     * Set heureFerie
     *
     * @param integer $heureFerie
     *
     * @return Vacation
     */
    public function setHeureFerie($heureFerie)
    {
        $this->heureFerie = $heureFerie;

        return $this;
    }

    /**
     * Get heureFerie
     *
     * @return integer
     */
    public function getHeureFerie()
    {
        return $this->heureFerie;
    }
}
