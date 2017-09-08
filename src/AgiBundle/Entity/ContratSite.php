<?php

namespace AgiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratSite
 *
 * @ORM\Table(name="contrat_site")
 * @ORM\Entity(repositoryClass="AgiBundle\Repository\ContratSiteRepository")
 */
class ContratSite
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
     * @ORM\ManyToOne(targetEntity="Site", inversedBy="contrats")
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
     * Set site
     *
     * @param \AgiBundle\Entity\Site $site
     *
     * @return ContratSite
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
}
