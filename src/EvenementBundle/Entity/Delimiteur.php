<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Delimiteur
 *
 * @ORM\Table(name="delimiteur")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\DelimiteurRepository")
 */
class Delimiteur
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
     * @ORM\ManyToOne(targetEntity="UsersBundle\Entity\User", inversedBy="delimiteurs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="DelimiteurType", inversedBy="delimiteurs")
     * @ORM\JoinColumn(name="delimiteurType_id", referencedColumnName="id")
     */
    protected $delimiteurType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /**
     * @var int
     *
     * @ORM\Column(name="blockage", type="integer")
     */
    private $blockage;

    /**
     * @var string
     *
     * @ORM\Column(name="className", type="string", length=255)
     */
    protected $className;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    protected $titre;
    /**
     * Delimiteur constructor.
     * @param string $className
     */
    public function __construct()
    {
        $this->className = 'Delimiteur';
    }


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
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Delimiteur
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Delimiteur
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set blockage
     *
     * @param integer $blockage
     *
     * @return Delimiteur
     */
    public function setBlockage($blockage)
    {
        $this->blockage = $blockage;

        return $this;
    }

    /**
     * Get blockage
     *
     * @return int
     */
    public function getBlockage()
    {
        return $this->blockage;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    /**
     * Set user
     *
     * @param \UsersBundle\Entity\User $user
     *
     * @return Delimiteur
     */
    public function setUser(\UsersBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UsersBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set delimiteurType
     *
     * @param \EvenementBundle\Entity\DelimiteurType $delimiteurType
     *
     * @return Delimiteur
     */
    public function setDelimiteurType(\EvenementBundle\Entity\DelimiteurType $delimiteurType = null)
    {
        $this->delimiteurType = $delimiteurType;

        return $this;
    }

    /**
     * Get delimiteurType
     *
     * @return \EvenementBundle\Entity\DelimiteurType
     */
    public function getDelimiteurType()
    {
        return $this->delimiteurType;
    }
}
