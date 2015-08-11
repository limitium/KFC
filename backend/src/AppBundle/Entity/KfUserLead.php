<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserLead
 *
 * @ORM\Table(name="KF_USER_LEAD", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_LEAD_PRIMARY", columns={"KF_USER_LEADID"})})
 * @ORM\Entity
 */
class KfUserLead
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_LEADID", type="string", length=12, nullable=false)
     */
    private $kfUserLeadid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;



    /**
     * Set kfUserLeadid
     *
     * @param string $kfUserLeadid
     * @return KfUserLead
     */
    public function setKfUserLeadid($kfUserLeadid)
    {
        $this->kfUserLeadid = $kfUserLeadid;

        return $this;
    }

    /**
     * Get kfUserLeadid
     *
     * @return string 
     */
    public function getKfUserLeadid()
    {
        return $this->kfUserLeadid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfUserLead
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
     * @return KfUserLead
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
     * @return KfUserLead
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
     * @return KfUserLead
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
     * @return KfUserLead
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
     * Set leadsourceid
     *
     * @param string $leadsourceid
     * @return KfUserLead
     */
    public function setLeadsourceid($leadsourceid)
    {
        $this->leadsourceid = $leadsourceid;

        return $this;
    }

    /**
     * Get leadsourceid
     *
     * @return string 
     */
    public function getLeadsourceid()
    {
        return $this->leadsourceid;
    }
}
