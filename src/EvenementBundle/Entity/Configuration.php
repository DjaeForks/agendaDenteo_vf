<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="dateDeb", type="time")
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="time")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="creneau", type="integer")
     */
    private $creneau;

    /**
     * @var int
     *
     * @ORM\Column(name="firstDay", type="integer")
     */
    private $firstDay;

    /**
     * @var bool
     *
     * @ORM\Column(name="weeksNumber", type="boolean")
     */
    private $weeksNumber;

    /**
     * @var array
     *
     * @ORM\Column(name="daysSelected", type="array", nullable=true)
     */

    private $daysSelected;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string")
     */
    private $lang ;


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
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     *
     * @return Configuration
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Configuration
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
     * Set creneau
     *
     * @param integer $creneau
     *
     * @return Configuration
     */
    public function setCreneau($creneau)
    {
        $this->creneau = $creneau;

        return $this;
    }

    /**
     * Get creneau
     *
     * @return int
     */
    public function getCreneau()
    {
        return $this->creneau;
    }

    /**
     * Set firstDay
     *
     * @param integer $firstDay
     *
     * @return Configuration
     */
    public function setFirstDay($firstDay)
    {
        $this->firstDay = $firstDay;

        return $this;
    }

    /**
     * Get firstDay
     *
     * @return int
     */
    public function getFirstDay()
    {
        return $this->firstDay;
    }

    /**
     * Set weeksNumber
     *
     * @param boolean $weeksNumber
     *
     * @return Configuration
     */
    public function setWeeksNumber($weeksNumber)
    {
        $this->weeksNumber = $weeksNumber;

        return $this;
    }

    /**
     * Get weeksNumber
     *
     * @return bool
     */
    public function getWeeksNumber()
    {
        return $this->weeksNumber;
    }

    /**
     * Set daysSelected
     *
     * @param array $daysSelected
     *
     * @return Configuration
     */
    public function setDaysSelected($daysSelected)
    {
        $this->daysSelected = $daysSelected;

        return $this;
    }

    /**
     * Get daysSelected
     *
     * @return array
     */
    public function getDaysSelected()
    {
        return $this->daysSelected;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return ''.$this->getId();
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Configuration
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }
}
