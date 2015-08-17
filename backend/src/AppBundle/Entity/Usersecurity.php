<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersecurity
 */
class Usersecurity
{
    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $usercode;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $accesslevel;

    /**
     * @var string
     */
    private $clientlogptr;

    /**
     * @var string
     */
    private $hostlogptr;

    /**
     * @var integer
     */
    private $logthreshold;

    /**
     * @var string
     */
    private $managerid;

    /**
     * @var string
     */
    private $defaultseccodeid;

    /**
     * @var integer
     */
    private $addmembers;

    /**
     * @var integer
     */
    private $delmembers;

    /**
     * @var integer
     */
    private $createteams;

    /**
     * @var integer
     */
    private $ismanager;

    /**
     * @var string
     */
    private $functions;

    /**
     * @var integer
     */
    private $enabled;

    /**
     * @var string
     */
    private $privateaccountid;

    /**
     * @var string
     */
    private $primarysite;

    /**
     * @var integer
     */
    private $lastrnfile;

    /**
     * @var \DateTime
     */
    private $lastsenddate;

    /**
     * @var string
     */
    private $security;

    /**
     * @var string
     */
    private $userpw;

    /**
     * @var integer
     */
    private $supportuser;

    /**
     * @var string
     */
    private $adminrole;

    /**
     * @var string
     */
    private $usertemplate;

    /**
     * @var string
     */
    private $iswebadmin;

    /**
     * @var string
     */
    private $customerserviceuser;

    /**
     * @var \DateTime
     */
    private $pwchangedate;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $createuser;


    /**
     * Set userid
     *
     * @param string $userid
     * @return Usersecurity
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
     * Set usercode
     *
     * @param string $usercode
     * @return Usersecurity
     */
    public function setUsercode($usercode)
    {
        $this->usercode = $usercode;

        return $this;
    }

    /**
     * Get usercode
     *
     * @return string 
     */
    public function getUsercode()
    {
        return $this->usercode;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Usersecurity
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set accesslevel
     *
     * @param string $accesslevel
     * @return Usersecurity
     */
    public function setAccesslevel($accesslevel)
    {
        $this->accesslevel = $accesslevel;

        return $this;
    }

    /**
     * Get accesslevel
     *
     * @return string 
     */
    public function getAccesslevel()
    {
        return $this->accesslevel;
    }

    /**
     * Set clientlogptr
     *
     * @param string $clientlogptr
     * @return Usersecurity
     */
    public function setClientlogptr($clientlogptr)
    {
        $this->clientlogptr = $clientlogptr;

        return $this;
    }

    /**
     * Get clientlogptr
     *
     * @return string 
     */
    public function getClientlogptr()
    {
        return $this->clientlogptr;
    }

    /**
     * Set hostlogptr
     *
     * @param string $hostlogptr
     * @return Usersecurity
     */
    public function setHostlogptr($hostlogptr)
    {
        $this->hostlogptr = $hostlogptr;

        return $this;
    }

    /**
     * Get hostlogptr
     *
     * @return string 
     */
    public function getHostlogptr()
    {
        return $this->hostlogptr;
    }

    /**
     * Set logthreshold
     *
     * @param integer $logthreshold
     * @return Usersecurity
     */
    public function setLogthreshold($logthreshold)
    {
        $this->logthreshold = $logthreshold;

        return $this;
    }

    /**
     * Get logthreshold
     *
     * @return integer 
     */
    public function getLogthreshold()
    {
        return $this->logthreshold;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return Usersecurity
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
     * Set defaultseccodeid
     *
     * @param string $defaultseccodeid
     * @return Usersecurity
     */
    public function setDefaultseccodeid($defaultseccodeid)
    {
        $this->defaultseccodeid = $defaultseccodeid;

        return $this;
    }

    /**
     * Get defaultseccodeid
     *
     * @return string 
     */
    public function getDefaultseccodeid()
    {
        return $this->defaultseccodeid;
    }

    /**
     * Set addmembers
     *
     * @param integer $addmembers
     * @return Usersecurity
     */
    public function setAddmembers($addmembers)
    {
        $this->addmembers = $addmembers;

        return $this;
    }

    /**
     * Get addmembers
     *
     * @return integer 
     */
    public function getAddmembers()
    {
        return $this->addmembers;
    }

    /**
     * Set delmembers
     *
     * @param integer $delmembers
     * @return Usersecurity
     */
    public function setDelmembers($delmembers)
    {
        $this->delmembers = $delmembers;

        return $this;
    }

    /**
     * Get delmembers
     *
     * @return integer 
     */
    public function getDelmembers()
    {
        return $this->delmembers;
    }

    /**
     * Set createteams
     *
     * @param integer $createteams
     * @return Usersecurity
     */
    public function setCreateteams($createteams)
    {
        $this->createteams = $createteams;

        return $this;
    }

    /**
     * Get createteams
     *
     * @return integer 
     */
    public function getCreateteams()
    {
        return $this->createteams;
    }

    /**
     * Set ismanager
     *
     * @param integer $ismanager
     * @return Usersecurity
     */
    public function setIsmanager($ismanager)
    {
        $this->ismanager = $ismanager;

        return $this;
    }

    /**
     * Get ismanager
     *
     * @return integer 
     */
    public function getIsmanager()
    {
        return $this->ismanager;
    }

    /**
     * Set functions
     *
     * @param string $functions
     * @return Usersecurity
     */
    public function setFunctions($functions)
    {
        $this->functions = $functions;

        return $this;
    }

    /**
     * Get functions
     *
     * @return string 
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Usersecurity
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set privateaccountid
     *
     * @param string $privateaccountid
     * @return Usersecurity
     */
    public function setPrivateaccountid($privateaccountid)
    {
        $this->privateaccountid = $privateaccountid;

        return $this;
    }

    /**
     * Get privateaccountid
     *
     * @return string 
     */
    public function getPrivateaccountid()
    {
        return $this->privateaccountid;
    }

    /**
     * Set primarysite
     *
     * @param string $primarysite
     * @return Usersecurity
     */
    public function setPrimarysite($primarysite)
    {
        $this->primarysite = $primarysite;

        return $this;
    }

    /**
     * Get primarysite
     *
     * @return string 
     */
    public function getPrimarysite()
    {
        return $this->primarysite;
    }

    /**
     * Set lastrnfile
     *
     * @param integer $lastrnfile
     * @return Usersecurity
     */
    public function setLastrnfile($lastrnfile)
    {
        $this->lastrnfile = $lastrnfile;

        return $this;
    }

    /**
     * Get lastrnfile
     *
     * @return integer 
     */
    public function getLastrnfile()
    {
        return $this->lastrnfile;
    }

    /**
     * Set lastsenddate
     *
     * @param \DateTime $lastsenddate
     * @return Usersecurity
     */
    public function setLastsenddate($lastsenddate)
    {
        $this->lastsenddate = $lastsenddate;

        return $this;
    }

    /**
     * Get lastsenddate
     *
     * @return \DateTime 
     */
    public function getLastsenddate()
    {
        return $this->lastsenddate;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return Usersecurity
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set userpw
     *
     * @param string $userpw
     * @return Usersecurity
     */
    public function setUserpw($userpw)
    {
        $this->userpw = $userpw;

        return $this;
    }

    /**
     * Get userpw
     *
     * @return string 
     */
    public function getUserpw()
    {
        return $this->userpw;
    }

    /**
     * Set supportuser
     *
     * @param integer $supportuser
     * @return Usersecurity
     */
    public function setSupportuser($supportuser)
    {
        $this->supportuser = $supportuser;

        return $this;
    }

    /**
     * Get supportuser
     *
     * @return integer 
     */
    public function getSupportuser()
    {
        return $this->supportuser;
    }

    /**
     * Set adminrole
     *
     * @param string $adminrole
     * @return Usersecurity
     */
    public function setAdminrole($adminrole)
    {
        $this->adminrole = $adminrole;

        return $this;
    }

    /**
     * Get adminrole
     *
     * @return string 
     */
    public function getAdminrole()
    {
        return $this->adminrole;
    }

    /**
     * Set usertemplate
     *
     * @param string $usertemplate
     * @return Usersecurity
     */
    public function setUsertemplate($usertemplate)
    {
        $this->usertemplate = $usertemplate;

        return $this;
    }

    /**
     * Get usertemplate
     *
     * @return string 
     */
    public function getUsertemplate()
    {
        return $this->usertemplate;
    }

    /**
     * Set iswebadmin
     *
     * @param string $iswebadmin
     * @return Usersecurity
     */
    public function setIswebadmin($iswebadmin)
    {
        $this->iswebadmin = $iswebadmin;

        return $this;
    }

    /**
     * Get iswebadmin
     *
     * @return string 
     */
    public function getIswebadmin()
    {
        return $this->iswebadmin;
    }

    /**
     * Set customerserviceuser
     *
     * @param string $customerserviceuser
     * @return Usersecurity
     */
    public function setCustomerserviceuser($customerserviceuser)
    {
        $this->customerserviceuser = $customerserviceuser;

        return $this;
    }

    /**
     * Get customerserviceuser
     *
     * @return string 
     */
    public function getCustomerserviceuser()
    {
        return $this->customerserviceuser;
    }

    /**
     * Set pwchangedate
     *
     * @param \DateTime $pwchangedate
     * @return Usersecurity
     */
    public function setPwchangedate($pwchangedate)
    {
        $this->pwchangedate = $pwchangedate;

        return $this;
    }

    /**
     * Get pwchangedate
     *
     * @return \DateTime 
     */
    public function getPwchangedate()
    {
        return $this->pwchangedate;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Usersecurity
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Usersecurity
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Usersecurity
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
     * Set createuser
     *
     * @param string $createuser
     * @return Usersecurity
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
}
