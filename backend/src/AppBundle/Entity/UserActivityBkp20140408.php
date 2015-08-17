<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserActivityBkp20140408
 */
class UserActivityBkp20140408
{
    /**
     * @var string
     */
    private $activityid;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var integer
     */
    private $confirmed;

    /**
     * @var \DateTime
     */
    private $alarmtime;

    /**
     * @var string
     */
    private $alarm;

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
     * Set activityid
     *
     * @param string $activityid
     * @return UserActivityBkp20140408
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
     * Set userid
     *
     * @param string $userid
     * @return UserActivityBkp20140408
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
     * Set confirmed
     *
     * @param integer $confirmed
     * @return UserActivityBkp20140408
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return integer 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set alarmtime
     *
     * @param \DateTime $alarmtime
     * @return UserActivityBkp20140408
     */
    public function setAlarmtime($alarmtime)
    {
        $this->alarmtime = $alarmtime;

        return $this;
    }

    /**
     * Get alarmtime
     *
     * @return \DateTime 
     */
    public function getAlarmtime()
    {
        return $this->alarmtime;
    }

    /**
     * Set alarm
     *
     * @param string $alarm
     * @return UserActivityBkp20140408
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;

        return $this;
    }

    /**
     * Get alarm
     *
     * @return string 
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return UserActivityBkp20140408
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
     * @return UserActivityBkp20140408
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
     * @return UserActivityBkp20140408
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
     * @return UserActivityBkp20140408
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
