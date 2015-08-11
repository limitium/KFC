<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppSubcontracts
 *
 * @ORM\Table(name="KF_OPP_SUBCONTRACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_SUBCONTRACTS_PRIMARY", columns={"KF_OPP_SUBCONTRACTSID"})}, indexes={@ORM\Index(name="KF_OPP_SUBCONTRACTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppSubcontracts
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_SUBCONTRACTSID", type="string", length=12, nullable=false)
     */
    private $kfOppSubcontractsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="SC_TYPE", type="string", length=32, nullable=true)
     */
    private $scType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_SEGMENT", type="string", length=128, nullable=true)
     */
    private $marketSegment;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="POTENTIAL_SUM", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $potentialSum;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUAL_SUM", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $actualSum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FORECAST_DATE", type="datetime", nullable=true)
     */
    private $forecastDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTUAL_DATE", type="datetime", nullable=true)
     */
    private $actualDate;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;



    /**
     * Set kfOppSubcontractsid
     *
     * @param string $kfOppSubcontractsid
     * @return KfOppSubcontracts
     */
    public function setKfOppSubcontractsid($kfOppSubcontractsid)
    {
        $this->kfOppSubcontractsid = $kfOppSubcontractsid;

        return $this;
    }

    /**
     * Get kfOppSubcontractsid
     *
     * @return string 
     */
    public function getKfOppSubcontractsid()
    {
        return $this->kfOppSubcontractsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppSubcontracts
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfOppSubcontracts
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
     * @return KfOppSubcontracts
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
     * @return KfOppSubcontracts
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
     * @return KfOppSubcontracts
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
     * Set scType
     *
     * @param string $scType
     * @return KfOppSubcontracts
     */
    public function setScType($scType)
    {
        $this->scType = $scType;

        return $this;
    }

    /**
     * Get scType
     *
     * @return string 
     */
    public function getScType()
    {
        return $this->scType;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfOppSubcontracts
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfOppSubcontracts
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
     * Set marketSegment
     *
     * @param string $marketSegment
     * @return KfOppSubcontracts
     */
    public function setMarketSegment($marketSegment)
    {
        $this->marketSegment = $marketSegment;

        return $this;
    }

    /**
     * Get marketSegment
     *
     * @return string 
     */
    public function getMarketSegment()
    {
        return $this->marketSegment;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfOppSubcontracts
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set potentialSum
     *
     * @param string $potentialSum
     * @return KfOppSubcontracts
     */
    public function setPotentialSum($potentialSum)
    {
        $this->potentialSum = $potentialSum;

        return $this;
    }

    /**
     * Get potentialSum
     *
     * @return string 
     */
    public function getPotentialSum()
    {
        return $this->potentialSum;
    }

    /**
     * Set actualSum
     *
     * @param string $actualSum
     * @return KfOppSubcontracts
     */
    public function setActualSum($actualSum)
    {
        $this->actualSum = $actualSum;

        return $this;
    }

    /**
     * Get actualSum
     *
     * @return string 
     */
    public function getActualSum()
    {
        return $this->actualSum;
    }

    /**
     * Set forecastDate
     *
     * @param \DateTime $forecastDate
     * @return KfOppSubcontracts
     */
    public function setForecastDate($forecastDate)
    {
        $this->forecastDate = $forecastDate;

        return $this;
    }

    /**
     * Get forecastDate
     *
     * @return \DateTime 
     */
    public function getForecastDate()
    {
        return $this->forecastDate;
    }

    /**
     * Set actualDate
     *
     * @param \DateTime $actualDate
     * @return KfOppSubcontracts
     */
    public function setActualDate($actualDate)
    {
        $this->actualDate = $actualDate;

        return $this;
    }

    /**
     * Get actualDate
     *
     * @return \DateTime 
     */
    public function getActualDate()
    {
        return $this->actualDate;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfOppSubcontracts
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
