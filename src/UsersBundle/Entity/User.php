<?php
namespace UsersBundle\Entity;



use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="EvenementBundle\Entity\Delimiteur", mappedBy="user")
     */
    protected $delimiteurs;


    /**
     * @ORM\OneToMany(targetEntity="EvenementBundle\Entity\Rdv", mappedBy="user")
     */
    protected $rdvs;


    /**
     * @ORM\OneToMany(targetEntity="PatientBundle\Entity\Patient", mappedBy="user")
     */
    protected $patients;

    /**
     * @ORM\OneToMany(targetEntity="EvenementBundle\Entity\RdvType", mappedBy="user")
     */
    protected $rdvTypes;

    /**
     * @ORM\OneToMany(targetEntity="EvenementBundle\Entity\DelimiteurType", mappedBy="user")
     */
    protected $delimiteurTypes;


    /**
     * @ORM\OneToOne(targetEntity="EvenementBundle\Entity\Configuration", cascade={"persist"})
     */
    protected $configuration ;



    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->delimiteurs = new ArrayCollection();
        $this->patients = new ArrayCollection();
        $this->rdvTypes = new ArrayCollection();
        $this->delimiteurTypes = new ArrayCollection();
        parent::__construct();
    }


    /**
     * Add delimiteur
     *
     * @param \EvenementBundle\Entity\Delimiteur $delimiteur
     *
     * @return User
     */
    public function addDelimiteur(\EvenementBundle\Entity\Delimiteur $delimiteur)
    {
        $this->delimiteurs[] = $delimiteur;

        return $this;
    }

    /**
     * Remove delimiteur
     *
     * @param \EvenementBundle\Entity\Delimiteur $delimiteur
     */
    public function removeDelimiteur(\EvenementBundle\Entity\Delimiteur $delimiteur)
    {
        $this->delimiteurs->removeElement($delimiteur);
    }

    /**
     * Get delimiteurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelimiteurs()
    {
        return $this->delimiteurs;
    }

    /**
     * Add rdv
     *
     * @param \EvenementBundle\Entity\Rdv $rdv
     *
     * @return User
     */
    public function addRdv(\EvenementBundle\Entity\Rdv $rdv)
    {
        $this->rdvs[] = $rdv;

        return $this;
    }

    /**
     * Remove rdv
     *
     * @param \EvenementBundle\Entity\Rdv $rdv
     */
    public function removeRdv(\EvenementBundle\Entity\Rdv $rdv)
    {
        $this->rdvs->removeElement($rdv);
    }

    /**
     * Get rdvs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRdvs()
    {
        return $this->rdvs;
    }

    /**
     * Add patient
     *
     * @param \PatientBundle\Entity\Patient $patient
     *
     * @return User
     */
    public function addPatient(\PatientBundle\Entity\Patient $patient)
    {
        $this->patients[] = $patient;

        return $this;
    }

    /**
     * Remove patient
     *
     * @param \PatientBundle\Entity\Patient $patient
     */
    public function removePatient(\PatientBundle\Entity\Patient $patient)
    {
        $this->patients->removeElement($patient);
    }

    /**
     * Get patients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPatients()
    {
        return $this->patients;
    }

    /**
     * Add rdvType
     *
     * @param \EvenementBundle\Entity\RdvType $rdvType
     *
     * @return User
     */
    public function addRdvType(\EvenementBundle\Entity\RdvType $rdvType)
    {
        $this->rdvTypes[] = $rdvType;

        return $this;
    }

    /**
     * Remove rdvType
     *
     * @param \EvenementBundle\Entity\RdvType $rdvType
     */
    public function removeRdvType(\EvenementBundle\Entity\RdvType $rdvType)
    {
        $this->rdvTypes->removeElement($rdvType);
    }

    /**
     * Get rdvTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRdvTypes()
    {
        return $this->rdvTypes;
    }

    /**
     * Add delimiteurType
     *
     * @param \EvenementBundle\Entity\DelimiteurType $delimiteurType
     *
     * @return User
     */
    public function addDelimiteurType(\EvenementBundle\Entity\DelimiteurType $delimiteurType)
    {
        $this->delimiteurTypes[] = $delimiteurType;

        return $this;
    }

    /**
     * Remove delimiteurType
     *
     * @param \EvenementBundle\Entity\DelimiteurType $delimiteurType
     */
    public function removeDelimiteurType(\EvenementBundle\Entity\DelimiteurType $delimiteurType)
    {
        $this->delimiteurTypes->removeElement($delimiteurType);
    }

    /**
     * Get delimiteurTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelimiteurTypes()
    {
        return $this->delimiteurTypes;
    }

    /**
     * Set configuration
     *
     * @param \EvenementBundle\Entity\Configuration $configuration
     *
     * @return User
     */
    public function setConfiguration(\EvenementBundle\Entity\Configuration $configuration = null)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return \EvenementBundle\Entity\Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
