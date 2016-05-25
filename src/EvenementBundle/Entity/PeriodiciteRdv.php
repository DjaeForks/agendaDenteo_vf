<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Periodicite
 *
 * @ORM\Table(name="periodiciteRdv")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\PeriodiciteRepository")
 */
class PeriodiciteRdv
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
     * @ORM\Column(name="OCCURENCE", type="integer", nullable=true)
     */
    private $occurence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END", type="datetime", nullable=true)
     */
    private $end;//date fin

    /**
     * @var array
     *
     * @ORM\Column(name="JOURSELECTIONNE", type="array", nullable=true)
     */
    private $jourselectionne;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLEALLOCCURENCE", type="string", length=255, nullable=true)
     */
    private $libellealloccurence;

    /**
     * @ORM\OneToMany(targetEntity="EvenementBundle\Entity\Rdv", mappedBy="priodicite")
     * @ORM\JoinColumn(nullable=true)
     */
    private $rdvs;


    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
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
}
