<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\RdvRepository")
 */
class Rdv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="RdvType", inversedBy="Rdvs")
     * @ORM\JoinColumn(name="rdvType_id", referencedColumnName="id")
     */
    protected $rdvType;

    /**
     * @ORM\ManyToOne(targetEntity="UsersBundle\Entity\User", inversedBy="Rdvs")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="\PatientBundle\Entity\Patient", inversedBy="rdvs")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    protected $patient;

    /**
     *@ORM\ManyToOne(targetEntity="PeriodiciteRdv", inversedBy="rdvs",cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERIODICITE_ID", referencedColumnName="id",nullable = true)
     * })
     */
    private $periodicite;
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    protected $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    protected $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    protected $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="className", type="string", length=255)
     */
    protected $className;


    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    protected $couleur;



    /**
     * Rdv constructor.
     * @param string $className
     */
    public function __construct()
    {
        $this->className = 'Rdv';
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
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
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

    public function toArray(){
        $rdv = array();
        $rdv['id']=$this->id;
        $rdv['name']=$this->titre;
        $rdv['dateDebut']=$this->dateDebut->format('Y-m-d H:i:s');
        $rdv['dateFin']=$this->dateFin->format('Y-m-d H:i:s');
        $rdv['etat']=$this->etat;
        $rdv['patient']=$this->patient;
        $rdv['rdvType']=$this->rdvType;


        return $rdv;
    }

    /**
     * Set user
     *
     * @param \UsersBundle\Entity\User $user
     *
     * @return Rdv
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
     * Set periodicite
     *
     * @param \EvenementBundle\Entity\PeriodiciteRdv $periodicite
     *
     * @return Rdv
     */
    public function setPeriodicite(\EvenementBundle\Entity\PeriodiciteRdv $periodicite = null)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return \EvenementBundle\Entity\PeriodiciteRdv
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Rdv
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
}
