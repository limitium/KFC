<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertrackingevtext
 */
class Usertrackingevtext
{
    /**
     * @var string
     */
    private $usertrackingevtextid;

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
     * @var string
     */
    private $activityname;

    /**
     * @var string
     */
    private $membername;

    /**
     * @var string
     */
    private $datavalue;


    /**
     * Set usertrackingevtextid
     *
     * @param string $usertrackingevtextid
     * @return Usertrackingevtext
     */
    public function setUsertrackingevtextid($usertrackingevtextid)
    {
        $this->usertrackingevtextid = $usertrackingevtextid;

        return $this;
    }

    /**
     * Get usertrackingevtextid
     *
     * @return string 
     */
    public function getUsertrackingevtextid()
    {
        return $this->usertrackingevtextid;
    }

    /**
     * Set usertrackingeventid
     *
     * @param string $usertrackingeventid
     * @return Usertrackingevtext
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
     * @return Usertrackingevtext
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
     * @return Usertrackingevtext
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
     * @return Usertrackingevtext
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
     * @return Usertrackingevtext
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
     * Set activityname
     *
     * @param string $activityname
     * @return Usertrackingevtext
     */
    public function setActivityname($activityname)
    {
        $this->activityname = $activityname;

        return $this;
    }

    /**
     * Get activityname
     *
     * @return string 
     */
    public function getActivityname()
    {
        return $this->activityname;
    }

    /**
     * Set membername
     *
     * @param string $membername
     * @return Usertrackingevtext
     */
    public function setMembername($membername)
    {
        $this->membername = $membername;

        return $this;
    }

    /**
     * Get membername
     *
     * @return string 
     */
    public function getMembername()
    {
        return $this->membername;
    }

    /**
     * Set datavalue
     *
     * @param string $datavalue
     * @return Usertrackingevtext
     */
    public function setDatavalue($datavalue)
    {
        $this->datavalue = $datavalue;

        return $this;
    }

    /**
     * Get datavalue
     *
     * @return string 
     */
    public function getDatavalue()
    {
        return $this->datavalue;
    }
}
