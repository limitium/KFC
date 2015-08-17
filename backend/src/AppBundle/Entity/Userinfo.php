<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userinfo
 */
class Userinfo
{
    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $division;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $direct;

    /**
     * @var string
     */
    private $home;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $pinnumber;

    /**
     * @var string
     */
    private $pagerterm;

    /**
     * @var string
     */
    private $addressid;

    /**
     * @var string
     */
    private $homeaddressid;

    /**
     * @var string
     */
    private $altaddressid;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $middlename;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @var string
     */
    private $accountinguserid;

    /**
     * @var string
     */
    private $available;

    /**
     * @var string
     */
    private $defaultaddknowledge;

    /**
     * @var string
     */
    private $defectnotify;

    /**
     * @var string
     */
    private $ticketnotify;

    /**
     * @var float
     */
    private $pagermessagelength;

    /**
     * @var string
     */
    private $usercompany;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var string
     */
    private $windowssid;

    /**
     * @var string
     */
    private $usewindowsauth;

    /**
     * @var string
     */
    private $speedsearchapproval;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var integer
     */
    private $intranetid;

    /**
     * @var \AppBundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $updatedBy;


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
     * Set title
     *
     * @param string $title
     * @return Userinfo
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
     * Set username
     *
     * @param string $username
     * @return Userinfo
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Userinfo
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

    /**
     * Set division
     *
     * @param string $division
     * @return Userinfo
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
     * @return Userinfo
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
     * Set email
     *
     * @param string $email
     * @return Userinfo
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
     * Set phone
     *
     * @param string $phone
     * @return Userinfo
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
     * Set direct
     *
     * @param string $direct
     * @return Userinfo
     */
    public function setDirect($direct)
    {
        $this->direct = $direct;

        return $this;
    }

    /**
     * Get direct
     *
     * @return string 
     */
    public function getDirect()
    {
        return $this->direct;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return Userinfo
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Userinfo
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
     * Set mobile
     *
     * @param string $mobile
     * @return Userinfo
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
     * Set pinnumber
     *
     * @param string $pinnumber
     * @return Userinfo
     */
    public function setPinnumber($pinnumber)
    {
        $this->pinnumber = $pinnumber;

        return $this;
    }

    /**
     * Get pinnumber
     *
     * @return string 
     */
    public function getPinnumber()
    {
        return $this->pinnumber;
    }

    /**
     * Set pagerterm
     *
     * @param string $pagerterm
     * @return Userinfo
     */
    public function setPagerterm($pagerterm)
    {
        $this->pagerterm = $pagerterm;

        return $this;
    }

    /**
     * Get pagerterm
     *
     * @return string 
     */
    public function getPagerterm()
    {
        return $this->pagerterm;
    }

    /**
     * Set addressid
     *
     * @param string $addressid
     * @return Userinfo
     */
    public function setAddressid($addressid)
    {
        $this->addressid = $addressid;

        return $this;
    }

    /**
     * Get addressid
     *
     * @return string 
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * Set homeaddressid
     *
     * @param string $homeaddressid
     * @return Userinfo
     */
    public function setHomeaddressid($homeaddressid)
    {
        $this->homeaddressid = $homeaddressid;

        return $this;
    }

    /**
     * Get homeaddressid
     *
     * @return string 
     */
    public function getHomeaddressid()
    {
        return $this->homeaddressid;
    }

    /**
     * Set altaddressid
     *
     * @param string $altaddressid
     * @return Userinfo
     */
    public function setAltaddressid($altaddressid)
    {
        $this->altaddressid = $altaddressid;

        return $this;
    }

    /**
     * Get altaddressid
     *
     * @return string 
     */
    public function getAltaddressid()
    {
        return $this->altaddressid;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Userinfo
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Userinfo
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return Userinfo
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return Userinfo
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string 
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Userinfo
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set accountinguserid
     *
     * @param string $accountinguserid
     * @return Userinfo
     */
    public function setAccountinguserid($accountinguserid)
    {
        $this->accountinguserid = $accountinguserid;

        return $this;
    }

    /**
     * Get accountinguserid
     *
     * @return string 
     */
    public function getAccountinguserid()
    {
        return $this->accountinguserid;
    }

    /**
     * Set available
     *
     * @param string $available
     * @return Userinfo
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return string 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set defaultaddknowledge
     *
     * @param string $defaultaddknowledge
     * @return Userinfo
     */
    public function setDefaultaddknowledge($defaultaddknowledge)
    {
        $this->defaultaddknowledge = $defaultaddknowledge;

        return $this;
    }

    /**
     * Get defaultaddknowledge
     *
     * @return string 
     */
    public function getDefaultaddknowledge()
    {
        return $this->defaultaddknowledge;
    }

    /**
     * Set defectnotify
     *
     * @param string $defectnotify
     * @return Userinfo
     */
    public function setDefectnotify($defectnotify)
    {
        $this->defectnotify = $defectnotify;

        return $this;
    }

    /**
     * Get defectnotify
     *
     * @return string 
     */
    public function getDefectnotify()
    {
        return $this->defectnotify;
    }

    /**
     * Set ticketnotify
     *
     * @param string $ticketnotify
     * @return Userinfo
     */
    public function setTicketnotify($ticketnotify)
    {
        $this->ticketnotify = $ticketnotify;

        return $this;
    }

    /**
     * Get ticketnotify
     *
     * @return string 
     */
    public function getTicketnotify()
    {
        return $this->ticketnotify;
    }

    /**
     * Set pagermessagelength
     *
     * @param float $pagermessagelength
     * @return Userinfo
     */
    public function setPagermessagelength($pagermessagelength)
    {
        $this->pagermessagelength = $pagermessagelength;

        return $this;
    }

    /**
     * Get pagermessagelength
     *
     * @return float 
     */
    public function getPagermessagelength()
    {
        return $this->pagermessagelength;
    }

    /**
     * Set usercompany
     *
     * @param string $usercompany
     * @return Userinfo
     */
    public function setUsercompany($usercompany)
    {
        $this->usercompany = $usercompany;

        return $this;
    }

    /**
     * Get usercompany
     *
     * @return string 
     */
    public function getUsercompany()
    {
        return $this->usercompany;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return Userinfo
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set windowssid
     *
     * @param string $windowssid
     * @return Userinfo
     */
    public function setWindowssid($windowssid)
    {
        $this->windowssid = $windowssid;

        return $this;
    }

    /**
     * Get windowssid
     *
     * @return string 
     */
    public function getWindowssid()
    {
        return $this->windowssid;
    }

    /**
     * Set usewindowsauth
     *
     * @param string $usewindowsauth
     * @return Userinfo
     */
    public function setUsewindowsauth($usewindowsauth)
    {
        $this->usewindowsauth = $usewindowsauth;

        return $this;
    }

    /**
     * Get usewindowsauth
     *
     * @return string 
     */
    public function getUsewindowsauth()
    {
        return $this->usewindowsauth;
    }

    /**
     * Set speedsearchapproval
     *
     * @param string $speedsearchapproval
     * @return Userinfo
     */
    public function setSpeedsearchapproval($speedsearchapproval)
    {
        $this->speedsearchapproval = $speedsearchapproval;

        return $this;
    }

    /**
     * Get speedsearchapproval
     *
     * @return string 
     */
    public function getSpeedsearchapproval()
    {
        return $this->speedsearchapproval;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Userinfo
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Userinfo
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
     * Set intranetid
     *
     * @param integer $intranetid
     * @return Userinfo
     */
    public function setIntranetid($intranetid)
    {
        $this->intranetid = $intranetid;

        return $this;
    }

    /**
     * Get intranetid
     *
     * @return integer 
     */
    public function getIntranetid()
    {
        return $this->intranetid;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     * @return Userinfo
     */
    public function setCreatedBy(\AppBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\User $updatedBy
     * @return Userinfo
     */
    public function setUpdatedBy(\AppBundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
