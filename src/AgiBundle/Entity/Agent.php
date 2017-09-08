<?php

namespace AgiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity(repositoryClass="AgiBundle\Repository\AgentRepository")
 */
class Agent
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
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="type_contrat", type="string", length=5)
     */
    private $typeContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_embauche", type="date")
     */
    private $dateEmbauche;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10)
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="ContratAgent", mappedBy="agent")
     */
    private $contrats;

    /**
     * @ORM\OneToMany(targetEntity="Vacation", mappedBy="agent")
     */
    private $vacations;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="agent")
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Agent
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Agent
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Agent
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set typeContrat
     *
     * @param string $typeContrat
     *
     * @return Agent
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return string
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Agent
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
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
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->vacations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Agent
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
     * Add contrat
     *
     * @param \AgiBundle\Entity\ContratAgent $contrat
     *
     * @return Agent
     */
    public function addContrat(\AgiBundle\Entity\ContratAgent $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \AgiBundle\Entity\ContratAgent $contrat
     */
    public function removeContrat(\AgiBundle\Entity\ContratAgent $contrat)
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
     * @return Agent
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
     * @return Agent
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
