<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppReferrals
 *
 * @ORM\Table(name="KF_OPP_REFERRALS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_REFERRALS_PRIMARY", columns={"KF_OPP_REFERRALSID"})}, indexes={@ORM\Index(name="KF_OPP_REFERRALS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppReferrals
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_REFERRALSID", type="string", length=12, nullable=false)
     */
    private $kfOppReferralsid;

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
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="REF_MANAGERID", type="string", length=12, nullable=true)
     */
    private $refManagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="REF_DATE", type="datetime", nullable=true)
     */
    private $refDate;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=8000, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION", type="string", length=512, nullable=true)
     */
    private $region;



    /**
     * Set kfOppReferralsid
     *
     * @param string $kfOppReferralsid
     * @return KfOppReferrals
     */
    public function setKfOppReferralsid($kfOppReferralsid)
    {
        $this->kfOppReferralsid = $kfOppReferralsid;

        return $this;
    }

    /**
     * Get kfOppReferralsid
     *
     * @return string 
     */
    public function getKfOppReferralsid()
    {
        return $this->kfOppReferralsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppReferrals
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
     * @return KfOppReferrals
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
     * @return KfOppReferrals
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
     * @return KfOppReferrals
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
     * @return KfOppReferrals
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
     * Set accountid
     *
     * @param string $accountid
     * @return KfOppReferrals
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
     * @return KfOppReferrals
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
     * Set managerid
     *
     * @param string $managerid
     * @return KfOppReferrals
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
     * Set refManagerid
     *
     * @param string $refManagerid
     * @return KfOppReferrals
     */
    public function setRefManagerid($refManagerid)
    {
        $this->refManagerid = $refManagerid;

        return $this;
    }

    /**
     * Get refManagerid
     *
     * @return string 
     */
    public function getRefManagerid()
    {
        return $this->refManagerid;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfOppReferrals
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
     * Set refDate
     *
     * @param \DateTime $refDate
     * @return KfOppReferrals
     */
    public function setRefDate($refDate)
    {
        $this->refDate = $refDate;

        return $this;
    }

    /**
     * Get refDate
     *
     * @return \DateTime 
     */
    public function getRefDate()
    {
        return $this->refDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfOppReferrals
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
     * Set notes
     *
     * @param string $notes
     * @return KfOppReferrals
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
     * Set region
     *
     * @param string $region
     * @return KfOppReferrals
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }
}
