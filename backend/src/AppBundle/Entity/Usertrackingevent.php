<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertrackingevent
 */
class Usertrackingevent
{
    /**
     * @var string
     */
    private $usertrackingeventid;

    /**
     * @var string
     */
    private $createuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var \DateTime
     */
    private $eventdatetime;

    /**
     * @var string
     */
    private $userdatatype;

    /**
     * @var string
     */
    private $userdata;

    /**
     * @var string
     */
    private $processinstancestatusid;


    /**
     * Set usertrackingeventid
     *
     * @param string $usertrackingeventid
     * @return Usertrackingevent
     */
    public function setUsertrackingeventid($usertrackingeventid)
    {
        $this->usertrackingeventid = $usertrackingeventid;

        return $this;
    }

    /**
     * Get usertrackingeventid
     *
     * @return string 
     */
    public function getUsertrackingeventid()
    {
        return $this->usertrackingeventid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Usertrackingevent
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
     * @return Usertrackingevent
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
     * @return Usertrackingevent
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
     * @return Usertrackingevent
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
     * Set eventdatetime
     *
     * @param \DateTime $eventdatetime
     * @return Usertrackingevent
     */
    public function setEventdatetime($eventdatetime)
    {
        $this->eventdatetime = $eventdatetime;

        return $this;
    }

    /**
     * Get eventdatetime
     *
     * @return \DateTime 
     */
    public function getEventdatetime()
    {
        return $this->eventdatetime;
    }

    /**
     * Set userdatatype
     *
     * @param string $userdatatype
     * @return Usertrackingevent
     */
    public function setUserdatatype($userdatatype)
    {
        $this->userdatatype = $userdatatype;

        return $this;
    }

    /**
     * Get userdatatype
     *
     * @return string 
     */
    public function getUserdatatype()
    {
        return $this->userdatatype;
    }

    /**
     * Set userdata
     *
     * @param string $userdata
     * @return Usertrackingevent
     */
    public function setUserdata($userdata)
    {
        $this->userdata = $userdata;

        return $this;
    }

    /**
     * Get userdata
     *
     * @return string 
     */
    public function getUserdata()
    {
        return $this->userdata;
    }

    /**
     * Set processinstancestatusid
     *
     * @param string $processinstancestatusid
     * @return Usertrackingevent
     */
    public function setProcessinstancestatusid($processinstancestatusid)
    {
        $this->processinstancestatusid = $processinstancestatusid;

        return $this;
    }

    /**
     * Get processinstancestatusid
     *
     * @return string 
     */
    public function getProcessinstancestatusid()
    {
        return $this->processinstancestatusid;
    }
}
