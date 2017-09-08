<?php

namespace AgiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratAgent
 *
 * @ORM\Table(name="contrat_agent")
 * @ORM\Entity(repositoryClass="AgiBundle\Repository\ContratAgentRepository")
 */
class ContratAgent
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
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="contrats")
     * @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     */
    private $agent;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return ContratAgent
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return ContratAgent
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return ContratAgent
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
     * @param Agent $agent
     *
     * @return ContratAgent
     */
    public function setAgent(\AgiBundle\Entity\Agent $agent = null)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
