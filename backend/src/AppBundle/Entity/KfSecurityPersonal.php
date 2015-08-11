<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSecurityPersonal
 *
 * @ORM\Table(name="KF_SECURITY_PERSONAL", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SECURITY_PERSONAL_PRIMARY", columns={"KF_SECURITY_PERSONALID"})})
 * @ORM\Entity
 */
class KfSecurityPersonal
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SECURITY_PERSONALID", type="string", length=12, nullable=false)
     */
    private $kfSecurityPersonalid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=32, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION_PALO", type="string", length=128, nullable=true)
     */
    private $divisionPalo;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION_CRM", type="string", length=128, nullable=true)
     */
    private $divisionCrm;



    /**
     * Set kfSecurityPersonalid
     *
     * @param string $kfSecurityPersonalid
     * @return KfSecurityPersonal
     */
    public function setKfSecurityPersonalid($kfSecurityPersonalid)
    {
        $this->kfSecurityPersonalid = $kfSecurityPersonalid;

        return $this;
    }

    /**
     * Get kfSecurityPersonalid
     *
     * @return string 
     */
    public function getKfSecurityPersonalid()
    {
        return $this->kfSecurityPersonalid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfSecurityPersonal
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfSecurityPersonal
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfSecurityPersonal
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfSecurityPersonal
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfSecurityPersonal
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return KfSecurityPersonal
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set divisionPalo
     *
     * @param string $divisionPalo
     * @return KfSecurityPersonal
     */
    public function setDivisionPalo($divisionPalo)
    {
        $this->divisionPalo = $divisionPalo;

        return $this;
    }

    /**
     * Get divisionPalo
     *
     * @return string 
     */
    public function getDivisionPalo()
    {
        return $this->divisionPalo;
    }

    /**
     * Set divisionCrm
     *
     * @param string $divisionCrm
     * @return KfSecurityPersonal
     */
    public function setDivisionCrm($divisionCrm)
    {
        $this->divisionCrm = $divisionCrm;

        return $this;
    }

    /**
     * Get divisionCrm
     *
     * @return string 
     */
    public function getDivisionCrm()
    {
        return $this->divisionCrm;
    }
}
