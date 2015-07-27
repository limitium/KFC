<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetailBuffer
 *
 */
class SpkRetailBuffer
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var integer
     *
     */
    private $idc;

    /**
     * @var string
     *
     */
    private $profile;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofile;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $account;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var string
     *
     */
    private $phone;

    /**
     * @var string
     *
     */
    private $mobile;

    /**
     * @var string
     *
     */
    private $contact;

    /**
     * @var string
     *
     */
    private $title;

    /**
     * @var string
     *
     */
    private $email;

    /**
     * @var string
     *
     */
    private $fullaccount;

    /**
     * @var string
     *
     */
    private $address;

    /**
     * @var string
     *
     */
    private $fax;

    /**
     * @var string
     *
     */
    private $web;

    /**
     * @var string
     *
     */
    private $production;

    /**
     * @var string
     *
     */
    private $costLevel;

    /**
     * @var string
     *
     */
    private $currentSections;

    /**
     * @var string
     *
     */
    private $workTime;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var float
     *
     */
    private $sMin;

    /**
     * @var float
     *
     */
    private $sMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var string
     *
     */
    private $requestNote;

    /**
     * @var string
     *
     */
    private $additionalNote;

    /**
     * @var string
     *
     */
    private $sourceCategory;

    /**
     * @var string
     *
     */
    private $importSource;

    /**
     * @var string
     *
     */
    private $importid;

    /**
     * @var \DateTime
     *
     */
    private $requestDate;



    /**
     * Set id
     *
     * @param integer $id
     * @return SpkRetailBuffer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idc
     *
     * @param integer $idc
     * @return SpkRetailBuffer
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;

        return $this;
    }

    /**
     * Get idc
     *
     * @return integer 
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return SpkRetailBuffer
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkRetailBuffer
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set subprofile
     *
     * @param string $subprofile
     * @return SpkRetailBuffer
     */
    public function setSubprofile($subprofile)
    {
        $this->subprofile = $subprofile;

        return $this;
    }

    /**
     * Get subprofile
     *
     * @return string 
     */
    public function getSubprofile()
    {
        return $this->subprofile;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return SpkRetailBuffer
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return SpkRetailBuffer
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return SpkRetailBuffer
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
     * Set phone
     *
     * @param string $phone
     * @return SpkRetailBuffer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return SpkRetailBuffer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return SpkRetailBuffer
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return SpkRetailBuffer
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return SpkRetailBuffer
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
     * Set fullaccount
     *
     * @param string $fullaccount
     * @return SpkRetailBuffer
     */
    public function setFullaccount($fullaccount)
    {
        $this->fullaccount = $fullaccount;

        return $this;
    }

    /**
     * Get fullaccount
     *
     * @return string 
     */
    public function getFullaccount()
    {
        return $this->fullaccount;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return SpkRetailBuffer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return SpkRetailBuffer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return SpkRetailBuffer
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set production
     *
     * @param string $production
     * @return SpkRetailBuffer
     */
    public function setProduction($production)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return string 
     */
    public function getProduction()
    {
        return $this->production;
    }

    /**
     * Set costLevel
     *
     * @param string $costLevel
     * @return SpkRetailBuffer
     */
    public function setCostLevel($costLevel)
    {
        $this->costLevel = $costLevel;

        return $this;
    }

    /**
     * Get costLevel
     *
     * @return string 
     */
    public function getCostLevel()
    {
        return $this->costLevel;
    }

    /**
     * Set currentSections
     *
     * @param string $currentSections
     * @return SpkRetailBuffer
     */
    public function setCurrentSections($currentSections)
    {
        $this->currentSections = $currentSections;

        return $this;
    }

    /**
     * Get currentSections
     *
     * @return string 
     */
    public function getCurrentSections()
    {
        return $this->currentSections;
    }

    /**
     * Set workTime
     *
     * @param string $workTime
     * @return SpkRetailBuffer
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;

        return $this;
    }

    /**
     * Get workTime
     *
     * @return string 
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return SpkRetailBuffer
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set sMin
     *
     * @param float $sMin
     * @return SpkRetailBuffer
     */
    public function setSMin($sMin)
    {
        $this->sMin = $sMin;

        return $this;
    }

    /**
     * Get sMin
     *
     * @return float 
     */
    public function getSMin()
    {
        return $this->sMin;
    }

    /**
     * Set sMax
     *
     * @param float $sMax
     * @return SpkRetailBuffer
     */
    public function setSMax($sMax)
    {
        $this->sMax = $sMax;

        return $this;
    }

    /**
     * Get sMax
     *
     * @return float 
     */
    public function getSMax()
    {
        return $this->sMax;
    }

    /**
     * Set budgetMin
     *
     * @param float $budgetMin
     * @return SpkRetailBuffer
     */
    public function setBudgetMin($budgetMin)
    {
        $this->budgetMin = $budgetMin;

        return $this;
    }

    /**
     * Get budgetMin
     *
     * @return float 
     */
    public function getBudgetMin()
    {
        return $this->budgetMin;
    }

    /**
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return SpkRetailBuffer
     */
    public function setBudgetMax($budgetMax)
    {
        $this->budgetMax = $budgetMax;

        return $this;
    }

    /**
     * Get budgetMax
     *
     * @return float 
     */
    public function getBudgetMax()
    {
        return $this->budgetMax;
    }

    /**
     * Set requestNote
     *
     * @param string $requestNote
     * @return SpkRetailBuffer
     */
    public function setRequestNote($requestNote)
    {
        $this->requestNote = $requestNote;

        return $this;
    }

    /**
     * Get requestNote
     *
     * @return string 
     */
    public function getRequestNote()
    {
        return $this->requestNote;
    }

    /**
     * Set additionalNote
     *
     * @param string $additionalNote
     * @return SpkRetailBuffer
     */
    public function setAdditionalNote($additionalNote)
    {
        $this->additionalNote = $additionalNote;

        return $this;
    }

    /**
     * Get additionalNote
     *
     * @return string 
     */
    public function getAdditionalNote()
    {
        return $this->additionalNote;
    }

    /**
     * Set sourceCategory
     *
     * @param string $sourceCategory
     * @return SpkRetailBuffer
     */
    public function setSourceCategory($sourceCategory)
    {
        $this->sourceCategory = $sourceCategory;

        return $this;
    }

    /**
     * Get sourceCategory
     *
     * @return string 
     */
    public function getSourceCategory()
    {
        return $this->sourceCategory;
    }

    /**
     * Set importSource
     *
     * @param string $importSource
     * @return SpkRetailBuffer
     */
    public function setImportSource($importSource)
    {
        $this->importSource = $importSource;

        return $this;
    }

    /**
     * Get importSource
     *
     * @return string 
     */
    public function getImportSource()
    {
        return $this->importSource;
    }

    /**
     * Set importid
     *
     * @param string $importid
     * @return SpkRetailBuffer
     */
    public function setImportid($importid)
    {
        $this->importid = $importid;

        return $this;
    }

    /**
     * Get importid
     *
     * @return string 
     */
    public function getImportid()
    {
        return $this->importid;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     * @return SpkRetailBuffer
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime 
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }
}
