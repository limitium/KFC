<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingProjects
 *
 * @ORM\Table(name="KF_MARKETING_PROJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PROJECTS_PRIMARY", columns={"KF_MARKETING_PROJECTSID"})}, indexes={@ORM\Index(name="KF_SR_IX_ACCOUNTID", columns={"ACCOUNTID", "ESTIMATED_CLOSE", "SPK_PROPERTYID", "NOTES", "STAGE"})})
 * @ORM\Entity
 */
class KfMarketingProjects
{
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
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_CLOSE", type="datetime", nullable=true)
     */
    private $estimatedClose;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_TYPE", type="string", length=64, nullable=true)
     */
    private $projectType;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_NAME", type="string", length=128, nullable=true)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OPENED_DATE", type="datetime", nullable=true)
     */
    private $openedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="STAGE", type="string", length=64, nullable=true)
     */
    private $stage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONTRACT_DATE", type="datetime", nullable=true)
     */
    private $contractDate;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $contractNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET", type="float", precision=53, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION_OPEN", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommissionOpen;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION_CLOSE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommissionClose;

    /**
     * @var float
     *
     * @ORM\Column(name="SUBCONTRACTS_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $subcontractsAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="PAYMENTS_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $paymentsAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CLOSEPROBABILITY", type="string", length=3, nullable=true)
     */
    private $closeprobability;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_PERCENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="BUDGET_APPROVED", type="string", length=1, nullable=true)
     */
    private $budgetApproved;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WIP", type="string", length=1, nullable=true)
     */
    private $isWip;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=50, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=50, nullable=true)
     */
    private $division;



    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return KfMarketingProjects
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
     * @return KfMarketingProjects
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
     * @return KfMarketingProjects
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
     * @return KfMarketingProjects
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
     * @return KfMarketingProjects
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
     * Set status
     *
     * @param string $status
     * @return KfMarketingProjects
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
     * Set estimatedClose
     *
     * @param \DateTime $estimatedClose
     * @return KfMarketingProjects
     */
    public function setEstimatedClose($estimatedClose)
    {
        $this->estimatedClose = $estimatedClose;

        return $this;
    }

    /**
     * Get estimatedClose
     *
     * @return \DateTime 
     */
    public function getEstimatedClose()
    {
        return $this->estimatedClose;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfMarketingProjects
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
     * Set accountid
     *
     * @param string $accountid
     * @return KfMarketingProjects
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
     * Set contactid
     *
     * @param string $contactid
     * @return KfMarketingProjects
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
     * Set projectType
     *
     * @param string $projectType
     * @return KfMarketingProjects
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;

        return $this;
    }

    /**
     * Get projectType
     *
     * @return string 
     */
    public function getProjectType()
    {
        return $this->projectType;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfMarketingProjects
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfMarketingProjects
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

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfMarketingProjects
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set projectName
     *
     * @param string $projectName
     * @return KfMarketingProjects
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set leadsourceid
     *
     * @param string $leadsourceid
     * @return KfMarketingProjects
     */
    public function setLeadsourceid($leadsourceid)
    {
        $this->leadsourceid = $leadsourceid;

        return $this;
    }

    /**
     * Get leadsourceid
     *
     * @return string 
     */
    public function getLeadsourceid()
    {
        return $this->leadsourceid;
    }

    /**
     * Set openedDate
     *
     * @param \DateTime $openedDate
     * @return KfMarketingProjects
     */
    public function setOpenedDate($openedDate)
    {
        $this->openedDate = $openedDate;

        return $this;
    }

    /**
     * Get openedDate
     *
     * @return \DateTime 
     */
    public function getOpenedDate()
    {
        return $this->openedDate;
    }

    /**
     * Set stage
     *
     * @param string $stage
     * @return KfMarketingProjects
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set contractDate
     *
     * @param \DateTime $contractDate
     * @return KfMarketingProjects
     */
    public function setContractDate($contractDate)
    {
        $this->contractDate = $contractDate;

        return $this;
    }

    /**
     * Get contractDate
     *
     * @return \DateTime 
     */
    public function getContractDate()
    {
        return $this->contractDate;
    }

    /**
     * Set potentialAmount
     *
     * @param float $potentialAmount
     * @return KfMarketingProjects
     */
    public function setPotentialAmount($potentialAmount)
    {
        $this->potentialAmount = $potentialAmount;

        return $this;
    }

    /**
     * Get potentialAmount
     *
     * @return float 
     */
    public function getPotentialAmount()
    {
        return $this->potentialAmount;
    }

    /**
     * Set contractNumber
     *
     * @param string $contractNumber
     * @return KfMarketingProjects
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get contractNumber
     *
     * @return string 
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Set budget
     *
     * @param float $budget
     * @return KfMarketingProjects
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set kfCommissionOpen
     *
     * @param float $kfCommissionOpen
     * @return KfMarketingProjects
     */
    public function setKfCommissionOpen($kfCommissionOpen)
    {
        $this->kfCommissionOpen = $kfCommissionOpen;

        return $this;
    }

    /**
     * Get kfCommissionOpen
     *
     * @return float 
     */
    public function getKfCommissionOpen()
    {
        return $this->kfCommissionOpen;
    }

    /**
     * Set kfCommissionClose
     *
     * @param float $kfCommissionClose
     * @return KfMarketingProjects
     */
    public function setKfCommissionClose($kfCommissionClose)
    {
        $this->kfCommissionClose = $kfCommissionClose;

        return $this;
    }

    /**
     * Get kfCommissionClose
     *
     * @return float 
     */
    public function getKfCommissionClose()
    {
        return $this->kfCommissionClose;
    }

    /**
     * Set subcontractsAmount
     *
     * @param float $subcontractsAmount
     * @return KfMarketingProjects
     */
    public function setSubcontractsAmount($subcontractsAmount)
    {
        $this->subcontractsAmount = $subcontractsAmount;

        return $this;
    }

    /**
     * Get subcontractsAmount
     *
     * @return float 
     */
    public function getSubcontractsAmount()
    {
        return $this->subcontractsAmount;
    }

    /**
     * Set paymentsAmount
     *
     * @param float $paymentsAmount
     * @return KfMarketingProjects
     */
    public function setPaymentsAmount($paymentsAmount)
    {
        $this->paymentsAmount = $paymentsAmount;

        return $this;
    }

    /**
     * Get paymentsAmount
     *
     * @return float 
     */
    public function getPaymentsAmount()
    {
        return $this->paymentsAmount;
    }

    /**
     * Set closeprobability
     *
     * @param string $closeprobability
     * @return KfMarketingProjects
     */
    public function setCloseprobability($closeprobability)
    {
        $this->closeprobability = $closeprobability;

        return $this;
    }

    /**
     * Get closeprobability
     *
     * @return string 
     */
    public function getCloseprobability()
    {
        return $this->closeprobability;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return KfMarketingProjects
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set commissionPercent
     *
     * @param float $commissionPercent
     * @return KfMarketingProjects
     */
    public function setCommissionPercent($commissionPercent)
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Get commissionPercent
     *
     * @return float 
     */
    public function getCommissionPercent()
    {
        return $this->commissionPercent;
    }

    /**
     * Set budgetApproved
     *
     * @param string $budgetApproved
     * @return KfMarketingProjects
     */
    public function setBudgetApproved($budgetApproved)
    {
        $this->budgetApproved = $budgetApproved;

        return $this;
    }

    /**
     * Get budgetApproved
     *
     * @return string 
     */
    public function getBudgetApproved()
    {
        return $this->budgetApproved;
    }

    /**
     * Set isWip
     *
     * @param string $isWip
     * @return KfMarketingProjects
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
     * Set department
     *
     * @param string $department
     * @return KfMarketingProjects
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
     * Set division
     *
     * @param string $division
     * @return KfMarketingProjects
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
}
