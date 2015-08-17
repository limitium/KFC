<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usernotification
 */
class Usernotification
{
    /**
     * @var string
     */
    private $notifyid;

    /**
     * @var string
     */
    private $activityid;

    /**
     * @var string
     */
    private $touserid;

    /**
     * @var string
     */
    private $fromuserid;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var \DateTime
     */
    private $senddate;

    /**
     * @var string
     */
    private $type;

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
     * Set notifyid
     *
     * @param string $notifyid
     * @return Usernotification
     */
    public function setNotifyid($notifyid)
    {
        $this->notifyid = $notifyid;

        return $this;
    }

    /**
     * Get notifyid
     *
     * @return string 
     */
    public function getNotifyid()
    {
        return $this->notifyid;
    }

    /**
     * Set activityid
     *
     * @param string $activityid
     * @return Usernotification
     */
    public function setActivityid($activityid)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return string 
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set touserid
     *
     * @param string $touserid
     * @return Usernotification
     */
    public function setTouserid($touserid)
    {
        $this->touserid = $touserid;

        return $this;
    }

    /**
     * Get touserid
     *
     * @return string 
     */
    public function getTouserid()
    {
        return $this->touserid;
    }

    /**
     * Set fromuserid
     *
     * @param string $fromuserid
     * @return Usernotification
     */
    public function setFromuserid($fromuserid)
    {
        $this->fromuserid = $fromuserid;

        return $this;
    }

    /**
     * Get fromuserid
     *
     * @return string 
     */
    public function getFromuserid()
    {
        return $this->fromuserid;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Usernotification
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
     * Set senddate
     *
     * @param \DateTime $senddate
     * @return Usernotification
     */
    public function setSenddate($senddate)
    {
        $this->senddate = $senddate;

        return $this;
    }

    /**
     * Get senddate
     *
     * @return \DateTime 
     */
    public function getSenddate()
    {
        return $this->senddate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Usernotification
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Usernotification
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
     * @return Usernotification
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
     * @return Usernotification
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
     * @return Usernotification
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
