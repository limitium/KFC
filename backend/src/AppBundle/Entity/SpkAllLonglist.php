<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAllLonglist
 *
 */
class SpkAllLonglist
{
    /**
     * @var string
     *
     */
    private $spkAllLonglistid;

    /**
     * @var string
     *
     */
    private $opportunityid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $accountAllLonglist;

    /**
     * @var string
     *
     */
    private $contactAllLonglist;

    /**
     * @var string
     *
     */
    private $sectionAllLonglist;

    /**
     * @var string
     *
     */
    private $statusAllLonglist;

    /**
     * @var \DateTime
     *
     */
    private $datereply;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var float
     *
     */
    private $sqMinAllLonglist;

    /**
     * @var float
     *
     */
    private $sqMaxAllLonglist;

    /**
     * @var float
     *
     */
    private $budMinAllLonglist;

    /**
     * @var float
     *
     */
    private $budMaxAllLonglist;

    /**
     * @var string
     *
     */
    private $industryAllLonglist;

    /**
     * @var string
     *
     */
    private $profileAllLonglist;

    /**
     * @var string
     *
     */
    private $subprofileAllLonglist;

    /**
     * @var string
     *
     */
    private $emailAllLonglist;

    /**
     * @var string
     *
     */
    private $usernameAllLonglist;

    /**
     * @var \DateTime
     *
     */
    private $dataOtkaza;

    /**
     * @var \DateTime
     *
     */
    private $dataSoglasia;

    /**
     * @var string
     *
     */
    private $contactidAllLonglist;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     */
    private $brokerCounter;

    /**
     * @var string
     *
     */
    private $commentar;

    /**
     * @var string
     *
     */
    private $notesComents;

    /**
     * @var string
     *
     */
    private $contactManager;

    /**
     * @var string
     *
     */
    private $industryidAllLonglist;

    /**
     * @var string
     *
     */
    private $profileidAllLonglist;

    /**
     * @var string
     *
     */
    private $subprofileidAllLonglist;



    /**
     * Set spkAllLonglistid
     *
     * @param string $spkAllLonglistid
     * @return SpkAllLonglist
     */
    public function setSpkAllLonglistid($spkAllLonglistid)
    {
        $this->spkAllLonglistid = $spkAllLonglistid;

        return $this;
    }

    /**
     * Get spkAllLonglistid
     *
     * @return string 
     */
    public function getSpkAllLonglistid()
    {
        return $this->spkAllLonglistid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkAllLonglist
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
     * @return SpkAllLonglist
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
     * @return SpkAllLonglist
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
     * @return SpkAllLonglist
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
     * @return SpkAllLonglist
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
     * Set accountAllLonglist
     *
     * @param string $accountAllLonglist
     * @return SpkAllLonglist
     */
    public function setAccountAllLonglist($accountAllLonglist)
    {
        $this->accountAllLonglist = $accountAllLonglist;

        return $this;
    }

    /**
     * Get accountAllLonglist
     *
     * @return string 
     */
    public function getAccountAllLonglist()
    {
        return $this->accountAllLonglist;
    }

    /**
     * Set contactAllLonglist
     *
     * @param string $contactAllLonglist
     * @return SpkAllLonglist
     */
    public function setContactAllLonglist($contactAllLonglist)
    {
        $this->contactAllLonglist = $contactAllLonglist;

        return $this;
    }

    /**
     * Get contactAllLonglist
     *
     * @return string 
     */
    public function getContactAllLonglist()
    {
        return $this->contactAllLonglist;
    }

    /**
     * Set sectionAllLonglist
     *
     * @param string $sectionAllLonglist
     * @return SpkAllLonglist
     */
    public function setSectionAllLonglist($sectionAllLonglist)
    {
        $this->sectionAllLonglist = $sectionAllLonglist;

        return $this;
    }

    /**
     * Get sectionAllLonglist
     *
     * @return string 
     */
    public function getSectionAllLonglist()
    {
        return $this->sectionAllLonglist;
    }

    /**
     * Set statusAllLonglist
     *
     * @param string $statusAllLonglist
     * @return SpkAllLonglist
     */
    public function setStatusAllLonglist($statusAllLonglist)
    {
        $this->statusAllLonglist = $statusAllLonglist;

        return $this;
    }

    /**
     * Get statusAllLonglist
     *
     * @return string 
     */
    public function getStatusAllLonglist()
    {
        return $this->statusAllLonglist;
    }

    /**
     * Set datereply
     *
     * @param \DateTime $datereply
     * @return SpkAllLonglist
     */
    public function setDatereply($datereply)
    {
        $this->datereply = $datereply;

        return $this;
    }

    /**
     * Get datereply
     *
     * @return \DateTime 
     */
    public function getDatereply()
    {
        return $this->datereply;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return SpkAllLonglist
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set sqMinAllLonglist
     *
     * @param float $sqMinAllLonglist
     * @return SpkAllLonglist
     */
    public function setSqMinAllLonglist($sqMinAllLonglist)
    {
        $this->sqMinAllLonglist = $sqMinAllLonglist;

        return $this;
    }

    /**
     * Get sqMinAllLonglist
     *
     * @return float 
     */
    public function getSqMinAllLonglist()
    {
        return $this->sqMinAllLonglist;
    }

    /**
     * Set sqMaxAllLonglist
     *
     * @param float $sqMaxAllLonglist
     * @return SpkAllLonglist
     */
    public function setSqMaxAllLonglist($sqMaxAllLonglist)
    {
        $this->sqMaxAllLonglist = $sqMaxAllLonglist;

        return $this;
    }

    /**
     * Get sqMaxAllLonglist
     *
     * @return float 
     */
    public function getSqMaxAllLonglist()
    {
        return $this->sqMaxAllLonglist;
    }

    /**
     * Set budMinAllLonglist
     *
     * @param float $budMinAllLonglist
     * @return SpkAllLonglist
     */
    public function setBudMinAllLonglist($budMinAllLonglist)
    {
        $this->budMinAllLonglist = $budMinAllLonglist;

        return $this;
    }

    /**
     * Get budMinAllLonglist
     *
     * @return float 
     */
    public function getBudMinAllLonglist()
    {
        return $this->budMinAllLonglist;
    }

    /**
     * Set budMaxAllLonglist
     *
     * @param float $budMaxAllLonglist
     * @return SpkAllLonglist
     */
    public function setBudMaxAllLonglist($budMaxAllLonglist)
    {
        $this->budMaxAllLonglist = $budMaxAllLonglist;

        return $this;
    }

    /**
     * Get budMaxAllLonglist
     *
     * @return float 
     */
    public function getBudMaxAllLonglist()
    {
        return $this->budMaxAllLonglist;
    }

    /**
     * Set industryAllLonglist
     *
     * @param string $industryAllLonglist
     * @return SpkAllLonglist
     */
    public function setIndustryAllLonglist($industryAllLonglist)
    {
        $this->industryAllLonglist = $industryAllLonglist;

        return $this;
    }

    /**
     * Get industryAllLonglist
     *
     * @return string 
     */
    public function getIndustryAllLonglist()
    {
        return $this->industryAllLonglist;
    }

    /**
     * Set profileAllLonglist
     *
     * @param string $profileAllLonglist
     * @return SpkAllLonglist
     */
    public function setProfileAllLonglist($profileAllLonglist)
    {
        $this->profileAllLonglist = $profileAllLonglist;

        return $this;
    }

    /**
     * Get profileAllLonglist
     *
     * @return string 
     */
    public function getProfileAllLonglist()
    {
        return $this->profileAllLonglist;
    }

    /**
     * Set subprofileAllLonglist
     *
     * @param string $subprofileAllLonglist
     * @return SpkAllLonglist
     */
    public function setSubprofileAllLonglist($subprofileAllLonglist)
    {
        $this->subprofileAllLonglist = $subprofileAllLonglist;

        return $this;
    }

    /**
     * Get subprofileAllLonglist
     *
     * @return string 
     */
    public function getSubprofileAllLonglist()
    {
        return $this->subprofileAllLonglist;
    }

    /**
     * Set emailAllLonglist
     *
     * @param string $emailAllLonglist
     * @return SpkAllLonglist
     */
    public function setEmailAllLonglist($emailAllLonglist)
    {
        $this->emailAllLonglist = $emailAllLonglist;

        return $this;
    }

    /**
     * Get emailAllLonglist
     *
     * @return string 
     */
    public function getEmailAllLonglist()
    {
        return $this->emailAllLonglist;
    }

    /**
     * Set usernameAllLonglist
     *
     * @param string $usernameAllLonglist
     * @return SpkAllLonglist
     */
    public function setUsernameAllLonglist($usernameAllLonglist)
    {
        $this->usernameAllLonglist = $usernameAllLonglist;

        return $this;
    }

    /**
     * Get usernameAllLonglist
     *
     * @return string 
     */
    public function getUsernameAllLonglist()
    {
        return $this->usernameAllLonglist;
    }

    /**
     * Set dataOtkaza
     *
     * @param \DateTime $dataOtkaza
     * @return SpkAllLonglist
     */
    public function setDataOtkaza($dataOtkaza)
    {
        $this->dataOtkaza = $dataOtkaza;

        return $this;
    }

    /**
     * Get dataOtkaza
     *
     * @return \DateTime 
     */
    public function getDataOtkaza()
    {
        return $this->dataOtkaza;
    }

    /**
     * Set dataSoglasia
     *
     * @param \DateTime $dataSoglasia
     * @return SpkAllLonglist
     */
    public function setDataSoglasia($dataSoglasia)
    {
        $this->dataSoglasia = $dataSoglasia;

        return $this;
    }

    /**
     * Get dataSoglasia
     *
     * @return \DateTime 
     */
    public function getDataSoglasia()
    {
        return $this->dataSoglasia;
    }

    /**
     * Set contactidAllLonglist
     *
     * @param string $contactidAllLonglist
     * @return SpkAllLonglist
     */
    public function setContactidAllLonglist($contactidAllLonglist)
    {
        $this->contactidAllLonglist = $contactidAllLonglist;

        return $this;
    }

    /**
     * Get contactidAllLonglist
     *
     * @return string 
     */
    public function getContactidAllLonglist()
    {
        return $this->contactidAllLonglist;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkAllLonglist
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
     * Set brokerCounter
     *
     * @param string $brokerCounter
     * @return SpkAllLonglist
     */
    public function setBrokerCounter($brokerCounter)
    {
        $this->brokerCounter = $brokerCounter;

        return $this;
    }

    /**
     * Get brokerCounter
     *
     * @return string 
     */
    public function getBrokerCounter()
    {
        return $this->brokerCounter;
    }

    /**
     * Set commentar
     *
     * @param string $commentar
     * @return SpkAllLonglist
     */
    public function setCommentar($commentar)
    {
        $this->commentar = $commentar;

        return $this;
    }

    /**
     * Get commentar
     *
     * @return string 
     */
    public function getCommentar()
    {
        return $this->commentar;
    }

    /**
     * Set notesComents
     *
     * @param string $notesComents
     * @return SpkAllLonglist
     */
    public function setNotesComents($notesComents)
    {
        $this->notesComents = $notesComents;

        return $this;
    }

    /**
     * Get notesComents
     *
     * @return string 
     */
    public function getNotesComents()
    {
        return $this->notesComents;
    }

    /**
     * Set contactManager
     *
     * @param string $contactManager
     * @return SpkAllLonglist
     */
    public function setContactManager($contactManager)
    {
        $this->contactManager = $contactManager;

        return $this;
    }

    /**
     * Get contactManager
     *
     * @return string 
     */
    public function getContactManager()
    {
        return $this->contactManager;
    }

    /**
     * Set industryidAllLonglist
     *
     * @param string $industryidAllLonglist
     * @return SpkAllLonglist
     */
    public function setIndustryidAllLonglist($industryidAllLonglist)
    {
        $this->industryidAllLonglist = $industryidAllLonglist;

        return $this;
    }

    /**
     * Get industryidAllLonglist
     *
     * @return string 
     */
    public function getIndustryidAllLonglist()
    {
        return $this->industryidAllLonglist;
    }

    /**
     * Set profileidAllLonglist
     *
     * @param string $profileidAllLonglist
     * @return SpkAllLonglist
     */
    public function setProfileidAllLonglist($profileidAllLonglist)
    {
        $this->profileidAllLonglist = $profileidAllLonglist;

        return $this;
    }

    /**
     * Get profileidAllLonglist
     *
     * @return string 
     */
    public function getProfileidAllLonglist()
    {
        return $this->profileidAllLonglist;
    }

    /**
     * Set subprofileidAllLonglist
     *
     * @param string $subprofileidAllLonglist
     * @return SpkAllLonglist
     */
    public function setSubprofileidAllLonglist($subprofileidAllLonglist)
    {
        $this->subprofileidAllLonglist = $subprofileidAllLonglist;

        return $this;
    }

    /**
     * Get subprofileidAllLonglist
     *
     * @return string 
     */
    public function getSubprofileidAllLonglist()
    {
        return $this->subprofileidAllLonglist;
    }
}
