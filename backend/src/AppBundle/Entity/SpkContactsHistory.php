<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkContactsHistory
 *
 */
class SpkContactsHistory
{
    /**
     * @var string
     *
     */
    private $spkContactsHistoryid;

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
     * @var \DateTime
     *
     */
    private $workedFrom;

    /**
     * @var \DateTime
     *
     */
    private $workedTo;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $workPosition;

    /**
     * @var string
     *
     */
    private $contactid;



    /**
     * Set spkContactsHistoryid
     *
     * @param string $spkContactsHistoryid
     * @return SpkContactsHistory
     */
    public function setSpkContactsHistoryid($spkContactsHistoryid)
    {
        $this->spkContactsHistoryid = $spkContactsHistoryid;

        return $this;
    }

    /**
     * Get spkContactsHistoryid
     *
     * @return string 
     */
    public function getSpkContactsHistoryid()
    {
        return $this->spkContactsHistoryid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkContactsHistory
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
     * @return SpkContactsHistory
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
     * @return SpkContactsHistory
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
     * @return SpkContactsHistory
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
     * Set workedFrom
     *
     * @param \DateTime $workedFrom
     * @return SpkContactsHistory
     */
    public function setWorkedFrom($workedFrom)
    {
        $this->workedFrom = $workedFrom;

        return $this;
    }

    /**
     * Get workedFrom
     *
     * @return \DateTime 
     */
    public function getWorkedFrom()
    {
        return $this->workedFrom;
    }

    /**
     * Set workedTo
     *
     * @param \DateTime $workedTo
     * @return SpkContactsHistory
     */
    public function setWorkedTo($workedTo)
    {
        $this->workedTo = $workedTo;

        return $this;
    }

    /**
     * Get workedTo
     *
     * @return \DateTime 
     */
    public function getWorkedTo()
    {
        return $this->workedTo;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkContactsHistory
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
     * Set workPosition
     *
     * @param string $workPosition
     * @return SpkContactsHistory
     */
    public function setWorkPosition($workPosition)
    {
        $this->workPosition = $workPosition;

        return $this;
    }

    /**
     * Get workPosition
     *
     * @return string 
     */
    public function getWorkPosition()
    {
        return $this->workPosition;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return SpkContactsHistory
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
}
