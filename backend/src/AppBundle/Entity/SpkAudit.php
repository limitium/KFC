<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAudit
 *
 */
class SpkAudit
{
    /**
     * @var string
     *
     */
    private $spkAuditid;

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
    private $userid;

    /**
     * @var \DateTime
     *
     */
    private $logondate;

    /**
     * @var \DateTime
     *
     */
    private $logoffdate;



    /**
     * Set spkAuditid
     *
     * @param string $spkAuditid
     * @return SpkAudit
     */
    public function setSpkAuditid($spkAuditid)
    {
        $this->spkAuditid = $spkAuditid;

        return $this;
    }

    /**
     * Get spkAuditid
     *
     * @return string 
     */
    public function getSpkAuditid()
    {
        return $this->spkAuditid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkAudit
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
     * @return SpkAudit
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
     * @return SpkAudit
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
     * @return SpkAudit
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
     * Set userid
     *
     * @param string $userid
     * @return SpkAudit
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
     * Set logondate
     *
     * @param \DateTime $logondate
     * @return SpkAudit
     */
    public function setLogondate($logondate)
    {
        $this->logondate = $logondate;

        return $this;
    }

    /**
     * Get logondate
     *
     * @return \DateTime 
     */
    public function getLogondate()
    {
        return $this->logondate;
    }

    /**
     * Set logoffdate
     *
     * @param \DateTime $logoffdate
     * @return SpkAudit
     */
    public function setLogoffdate($logoffdate)
    {
        $this->logoffdate = $logoffdate;

        return $this;
    }

    /**
     * Get logoffdate
     *
     * @return \DateTime 
     */
    public function getLogoffdate()
    {
        return $this->logoffdate;
    }
}
