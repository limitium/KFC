<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingActs
 *
 * @ORM\Table(name="KF_MARKETING_ACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_ACTS_PRIMARY", columns={"KF_MARKETING_ACTSID"})}, indexes={@ORM\Index(name="KF_MARKETING_ACTS_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingActs
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_ACTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingActsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="ACT_TYPE", type="string", length=32, nullable=true)
     */
    private $actType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTOR", type="string", length=12, nullable=true)
     */
    private $contractor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_SIGN_DATE", type="datetime", nullable=true)
     */
    private $estimatedSignDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SIGN_DATE", type="datetime", nullable=true)
     */
    private $signDate;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICES", type="string", length=512, nullable=true)
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommission;

    /**
     * @var float
     *
     * @ORM\Column(name="ACT_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="ACT_VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actVat;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_VAT", type="string", length=32, nullable=true)
     */
    private $typeVat;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENTUSER", type="string", length=12, nullable=true)
     */
    private $currentuser;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;



    /**
     * Set kfMarketingActsid
     *
     * @param string $kfMarketingActsid
     * @return KfMarketingActs
     */
    public function setKfMarketingActsid($kfMarketingActsid)
    {
        $this->kfMarketingActsid = $kfMarketingActsid;

        return $this;
    }

    /**
     * Get kfMarketingActsid
     *
     * @return string 
     */
    public function getKfMarketingActsid()
    {
        return $this->kfMarketingActsid;
    }

    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return KfMarketingActs
     */
    public function setKfMarketingProjectsid($kfMarketingProjectsid)
    {
        $this->kfMarketingProjectsid = $kfMarketingProjectsid;

        return $this;
    }

    /**
     * Get kfMarketingProjectsid
     *
     * @return string 
     */
    public function getKfMarketingProjectsid()
    {
        return $this->kfMarketingProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketingActs
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
     * @return KfMarketingActs
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
     * @return KfMarketingActs
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
     * @return KfMarketingActs
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
     * Set actType
     *
     * @param string $actType
     * @return KfMarketingActs
     */
    public function setActType($actType)
    {
        $this->actType = $actType;

        return $this;
    }

    /**
     * Get actType
     *
     * @return string 
     */
    public function getActType()
    {
        return $this->actType;
    }

    /**
     * Set actNumber
     *
     * @param string $actNumber
     * @return KfMarketingActs
     */
    public function setActNumber($actNumber)
    {
        $this->actNumber = $actNumber;

        return $this;
    }

    /**
     * Get actNumber
     *
     * @return string 
     */
    public function getActNumber()
    {
        return $this->actNumber;
    }

    /**
     * Set contractor
     *
     * @param string $contractor
     * @return KfMarketingActs
     */
    public function setContractor($contractor)
    {
        $this->contractor = $contractor;

        return $this;
    }

    /**
     * Get contractor
     *
     * @return string 
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * Set estimatedSignDate
     *
     * @param \DateTime $estimatedSignDate
     * @return KfMarketingActs
     */
    public function setEstimatedSignDate($estimatedSignDate)
    {
        $this->estimatedSignDate = $estimatedSignDate;

        return $this;
    }

    /**
     * Get estimatedSignDate
     *
     * @return \DateTime 
     */
    public function getEstimatedSignDate()
    {
        return $this->estimatedSignDate;
    }

    /**
     * Set signDate
     *
     * @param \DateTime $signDate
     * @return KfMarketingActs
     */
    public function setSignDate($signDate)
    {
        $this->signDate = $signDate;

        return $this;
    }

    /**
     * Get signDate
     *
     * @return \DateTime 
     */
    public function getSignDate()
    {
        return $this->signDate;
    }

    /**
     * Set services
     *
     * @param string $services
     * @return KfMarketingActs
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get services
     *
     * @return string 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfMarketingActs
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
     * Set kfCommission
     *
     * @param float $kfCommission
     * @return KfMarketingActs
     */
    public function setKfCommission($kfCommission)
    {
        $this->kfCommission = $kfCommission;

        return $this;
    }

    /**
     * Get kfCommission
     *
     * @return float 
     */
    public function getKfCommission()
    {
        return $this->kfCommission;
    }

    /**
     * Set actAmount
     *
     * @param float $actAmount
     * @return KfMarketingActs
     */
    public function setActAmount($actAmount)
    {
        $this->actAmount = $actAmount;

        return $this;
    }

    /**
     * Get actAmount
     *
     * @return float 
     */
    public function getActAmount()
    {
        return $this->actAmount;
    }

    /**
     * Set actVat
     *
     * @param float $actVat
     * @return KfMarketingActs
     */
    public function setActVat($actVat)
    {
        $this->actVat = $actVat;

        return $this;
    }

    /**
     * Get actVat
     *
     * @return float 
     */
    public function getActVat()
    {
        return $this->actVat;
    }

    /**
     * Set typeVat
     *
     * @param string $typeVat
     * @return KfMarketingActs
     */
    public function setTypeVat($typeVat)
    {
        $this->typeVat = $typeVat;

        return $this;
    }

    /**
     * Get typeVat
     *
     * @return string 
     */
    public function getTypeVat()
    {
        return $this->typeVat;
    }

    /**
     * Set currentuser
     *
     * @param string $currentuser
     * @return KfMarketingActs
     */
    public function setCurrentuser($currentuser)
    {
        $this->currentuser = $currentuser;

        return $this;
    }

    /**
     * Get currentuser
     *
     * @return string 
     */
    public function getCurrentuser()
    {
        return $this->currentuser;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfMarketingActs
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
}
