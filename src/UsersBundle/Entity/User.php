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

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->delimiteurs = new ArrayCollection();
        $this->patients = new ArrayCollection();
        $this->rdvTypes = new ArrayCollection();
        $this->delimiteurTypes = new ArrayCollection();
        parent::__construct();
    }

}