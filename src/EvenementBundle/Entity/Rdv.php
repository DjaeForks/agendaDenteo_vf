<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\RdvRepository")
 */
class Rdv extends Evenement
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
     * @ORM\ManyToOne(targetEntity="RdvType", inversedBy="Rdvs")
     * @ORM\JoinColumn(name="rdvType_id", referencedColumnName="id")
     */
    protected $rdvType;

    /**
     * @ORM\ManyToOne(targetEntity="\PatientBundle\Entity\Patient", inversedBy="rdvs")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    protected $patient;
    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Rdv
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rdv
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set rdvType
     *
     * @param \EvenementBundle\Entity\RdvType $rdvType
     *
     * @return Rdv
     */
    public function setRdvType(\EvenementBundle\Entity\RdvType $rdvType = null)
    {
        $this->rdvType = $rdvType;

        return $this;
    }

    /**
     * Get rdvType
     *
     * @return \EvenementBundle\Entity\RdvType
     */
    public function getRdvType()
    {
        return $this->rdvType;
    }

    /**
     * Set patient
     *
     * @param \PatientBundle\Entity\Patient $patient
     *
     * @return Rdv
     */
    public function setPatient(\PatientBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \PatientBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }
}
