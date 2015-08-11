<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDivisionSalesplan
 *
 * @ORM\Table(name="KF_DIVISION_SALESPLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DIVISION_SALESPLAN_PRIMARY", columns={"KF_DIVISION_SALESPLANID"})})
 * @ORM\Entity
 */
class KfDivisionSalesplan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DIVISION_SALESPLANID", type="string", length=12, nullable=false)
     */
    private $kfDivisionSalesplanid;

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
     * @var float
     *
     * @ORM\Column(name="AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=64, nullable=true)
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=32, nullable=true)
     */
    private $location;



    /**
     * Set kfDivisionSalesplanid
     *
     * @param string $kfDivisionSalesplanid
     * @return KfDivisionSalesplan
     */
    public function setKfDivisionSalesplanid($kfDivisionSalesplanid)
    {
        $this->kfDivisionSalesplanid = $kfDivisionSalesplanid;

        return $this;
    }

    /**
     * Get kfDivisionSalesplanid
     *
     * @return string 
     */
    public function getKfDivisionSalesplanid()
    {
        return $this->kfDivisionSalesplanid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfDivisionSalesplan
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
     * @return KfDivisionSalesplan
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
     * @return KfDivisionSalesplan
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
     * @return KfDivisionSalesplan
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
     * Set amount
     *
     * @param float $amount
     * @return KfDivisionSalesplan
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set yer
     *
     * @param integer $yer
     * @return KfDivisionSalesplan
     */
    public function setYer($yer)
    {
        $this->yer = $yer;

        return $this;
    }

    /**
     * Get yer
     *
     * @return integer 
     */
    public function getYer()
    {
        return $this->yer;
    }

    /**
     * Set probability
     *
     * @param float $probability
     * @return KfDivisionSalesplan
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float 
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set division
     *
     * @param string $division
     * @return KfDivisionSalesplan
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfDivisionSalesplan
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return KfDivisionSalesplan
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
}
