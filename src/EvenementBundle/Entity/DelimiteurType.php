<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * DelimiteurType
 *
 * @ORM\Table(name="delimiteur_type")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\DelimiteurTypeRepository")
 */
class DelimiteurType
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
     * @ORM\OneToMany(targetEntity="Delimiteur", mappedBy="delimiteurType")
     */
    protected $delimiteurs;
    public function __construct()
    {
        $this->delimiteurs = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="UsersBundle\Entity\User", inversedBy="delimiteurTypes")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeMinutes", type="integer")
     */
    private $dureeMinutes;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeJours", type="integer")
     */
    private $dureeJours;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


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
     * Set dureeMinutes
     *
     * @param integer $dureeMinutes
     *
     * @return DelimiteurType
     */
    public function setDureeMinutes($dureeMinutes)
    {
        $this->dureeMinutes = $dureeMinutes;

        return $this;
    }

    /**
     * Get dureeMinutes
     *
     * @return int
     */
    public function getDureeMinutes()
    {
        return $this->dureeMinutes;
    }

    /**
     * Set dureeJours
     *
     * @param integer $dureeJours
     *
     * @return DelimiteurType
     */
    public function setDureeJours($dureeJours)
    {
        $this->dureeJours = $dureeJours;

        return $this;
    }

    /**
     * Get dureeJours
     *
     * @return int
     */
    public function getDureeJours()
    {
        return $this->dureeJours;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return DelimiteurType
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return DelimiteurType
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}

