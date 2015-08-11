<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempHomeSalesProcess
 *
 * @ORM\Table(name="KF_TEMP_HOME_SALES_PROCESS", indexes={@ORM\Index(name="KF_IX_CONTACTID", columns={"CONTACTID"}), @ORM\Index(name="KF_IX_MEGAID", columns={"MEGAID"})})
 * @ORM\Entity
 */
class KfTempHomeSalesProcess
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="MEGAID", type="string", length=12, nullable=false)
     */
    private $megaid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTRUS", type="string", length=256, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="NAMELFRUS", type="string", length=146, nullable=true)
     */
    private $namelfrus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEOPENED", type="datetime", nullable=true)
     */
    private $dateopened;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPTYPE", type="string", length=321, nullable=true)
     */
    private $opptype;

    /**
     * @var string
     *
     * @ORM\Column(name="STEP", type="string", length=37, nullable=true)
     */
    private $step;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONES", type="string", length=8000, nullable=false)
     */
    private $phones;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=64, nullable=true)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="ACTUALAMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actualamount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECLOSED", type="datetime", nullable=true)
     */
    private $dateclosed;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WIP", type="string", length=1, nullable=true)
     */
    private $isWip;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALES_STEP", type="integer", nullable=false)
     */
    private $salesStep;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTMANAGERID", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC", type="string", length=1674, nullable=false)
     */
    private $poiskAbc;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC_RUS", type="string", length=516, nullable=false)
     */
    private $poiskAbcRus;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_123", type="string", length=585, nullable=true)
     */
    private $poisk123;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_EMAIL", type="string", length=388, nullable=true)
     */
    private $poiskEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_IDS", type="string", length=51, nullable=true)
     */
    private $poiskIds;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfTempHomeSalesProcess
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set megaid
     *
     * @param string $megaid
     * @return KfTempHomeSalesProcess
     */
    public function setMegaid($megaid)
    {
        $this->megaid = $megaid;

        return $this;
    }

    /**
     * Get megaid
     *
     * @return string 
     */
    public function getMegaid()
    {
        return $this->megaid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfTempHomeSalesProcess
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
     * Set type
     *
     * @param string $type
     * @return KfTempHomeSalesProcess
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfTempHomeSalesProcess
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set accountrus
     *
     * @param string $accountrus
     * @return KfTempHomeSalesProcess
     */
    public function setAccountrus($accountrus)
    {
        $this->accountrus = $accountrus;

        return $this;
    }

    /**
     * Get accountrus
     *
     * @return string 
     */
    public function getAccountrus()
    {
        return $this->accountrus;
    }

    /**
     * Set namelfrus
     *
     * @param string $namelfrus
     * @return KfTempHomeSalesProcess
     */
    public function setNamelfrus($namelfrus)
    {
        $this->namelfrus = $namelfrus;

        return $this;
    }

    /**
     * Get namelfrus
     *
     * @return string 
     */
    public function getNamelfrus()
    {
        return $this->namelfrus;
    }

    /**
     * Set dateopened
     *
     * @param \DateTime $dateopened
     * @return KfTempHomeSalesProcess
     */
    public function setDateopened($dateopened)
    {
        $this->dateopened = $dateopened;

        return $this;
    }

    /**
     * Get dateopened
     *
     * @return \DateTime 
     */
    public function getDateopened()
    {
        return $this->dateopened;
    }

    /**
     * Set opptype
     *
     * @param string $opptype
     * @return KfTempHomeSalesProcess
     */
    public function setOpptype($opptype)
    {
        $this->opptype = $opptype;

        return $this;
    }

    /**
     * Get opptype
     *
     * @return string 
     */
    public function getOpptype()
    {
        return $this->opptype;
    }

    /**
     * Set step
     *
     * @param string $step
     * @return KfTempHomeSalesProcess
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return string 
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Set phones
     *
     * @param string $phones
     * @return KfTempHomeSalesProcess
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Get phones
     *
     * @return string 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return KfTempHomeSalesProcess
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return KfTempHomeSalesProcess
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set actualamount
     *
     * @param float $actualamount
     * @return KfTempHomeSalesProcess
     */
    public function setActualamount($actualamount)
    {
        $this->actualamount = $actualamount;

        return $this;
    }

    /**
     * Get actualamount
     *
     * @return float 
     */
    public function getActualamount()
    {
        return $this->actualamount;
    }

    /**
     * Set dateclosed
     *
     * @param \DateTime $dateclosed
     * @return KfTempHomeSalesProcess
     */
    public function setDateclosed($dateclosed)
    {
        $this->dateclosed = $dateclosed;

        return $this;
    }

    /**
     * Get dateclosed
     *
     * @return \DateTime 
     */
    public function getDateclosed()
    {
        return $this->dateclosed;
    }

    /**
     * Set isWip
     *
     * @param string $isWip
     * @return KfTempHomeSalesProcess
     */
    public function setIsWip($isWip)
    {
        $this->isWip = $isWip;

        return $this;
    }

    /**
     * Get isWip
     *
     * @return string 
     */
    public function getIsWip()
    {
        return $this->isWip;
    }

    /**
     * Set salesStep
     *
     * @param integer $salesStep
     * @return KfTempHomeSalesProcess
     */
    public function setSalesStep($salesStep)
    {
        $this->salesStep = $salesStep;

        return $this;
    }

    /**
     * Get salesStep
     *
     * @return integer 
     */
    public function getSalesStep()
    {
        return $this->salesStep;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfTempHomeSalesProcess
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
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return KfTempHomeSalesProcess
     */
    public function setAccountmanagerid($accountmanagerid)
    {
        $this->accountmanagerid = $accountmanagerid;

        return $this;
    }

    /**
     * Get accountmanagerid
     *
     * @return string 
     */
    public function getAccountmanagerid()
    {
        return $this->accountmanagerid;
    }

    /**
     * Set poiskAbc
     *
     * @param string $poiskAbc
     * @return KfTempHomeSalesProcess
     */
    public function setPoiskAbc($poiskAbc)
    {
        $this->poiskAbc = $poiskAbc;

        return $this;
    }

    /**
     * Get poiskAbc
     *
     * @return string 
     */
    public function getPoiskAbc()
    {
        return $this->poiskAbc;
    }

    /**
     * Set poiskAbcRus
     *
     * @param string $poiskAbcRus
     * @return KfTempHomeSalesProcess
     */
    public function setPoiskAbcRus($poiskAbcRus)
    {
        $this->poiskAbcRus = $poiskAbcRus;

        return $this;
    }

    /**
     * Get poiskAbcRus
     *
     * @return string 
     */
    public function getPoiskAbcRus()
    {
        return $this->poiskAbcRus;
    }

    /**
     * Set poisk123
     *
     * @param string $poisk123
     * @return KfTempHomeSalesProcess
     */
    public function setPoisk123($poisk123)
    {
        $this->poisk123 = $poisk123;

        return $this;
    }

    /**
     * Get poisk123
     *
     * @return string 
     */
    public function getPoisk123()
    {
        return $this->poisk123;
    }

    /**
     * Set poiskEmail
     *
     * @param string $poiskEmail
     * @return KfTempHomeSalesProcess
     */
    public function setPoiskEmail($poiskEmail)
    {
        $this->poiskEmail = $poiskEmail;

        return $this;
    }

    /**
     * Get poiskEmail
     *
     * @return string 
     */
    public function getPoiskEmail()
    {
        return $this->poiskEmail;
    }

    /**
     * Set poiskIds
     *
     * @param string $poiskIds
     * @return KfTempHomeSalesProcess
     */
    public function setPoiskIds($poiskIds)
    {
        $this->poiskIds = $poiskIds;

        return $this;
    }

    /**
     * Get poiskIds
     *
     * @return string 
     */
    public function getPoiskIds()
    {
        return $this->poiskIds;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return KfTempHomeSalesProcess
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
