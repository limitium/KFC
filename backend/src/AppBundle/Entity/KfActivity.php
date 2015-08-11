<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActivity
 *
 * @ORM\Table(name="KF_ACTIVITY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACTIVITY_PRIMARY", columns={"ACTIVITYID"})})
 * @ORM\Entity
 */
class KfActivity
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITYID", type="string", length=12, nullable=false)
     */
    private $activityid;

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
     * @ORM\Column(name="OTHERACCOUNTID", type="string", length=12, nullable=true)
     */
    private $otheraccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERCONTACTID", type="string", length=12, nullable=true)
     */
    private $othercontactid;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERACCOUNTNAME", type="string", length=256, nullable=true)
     */
    private $otheraccountname;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERCONTACTNAME", type="string", length=256, nullable=true)
     */
    private $othercontactname;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_FLAG", type="string", length=1, nullable=true)
     */
    private $kfFlag;



    /**
     * Set activityid
     *
     * @param string $activityid
     * @return KfActivity
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfActivity
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
     * @return KfActivity
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
     * @return KfActivity
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
     * @return KfActivity
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
     * Set otheraccountid
     *
     * @param string $otheraccountid
     * @return KfActivity
     */
    public function setOtheraccountid($otheraccountid)
    {
        $this->otheraccountid = $otheraccountid;

        return $this;
    }

    /**
     * Get otheraccountid
     *
     * @return string 
     */
    public function getOtheraccountid()
    {
        return $this->otheraccountid;
    }

    /**
     * Set othercontactid
     *
     * @param string $othercontactid
     * @return KfActivity
     */
    public function setOthercontactid($othercontactid)
    {
        $this->othercontactid = $othercontactid;

        return $this;
    }

    /**
     * Get othercontactid
     *
     * @return string 
     */
    public function getOthercontactid()
    {
        return $this->othercontactid;
    }

    /**
     * Set otheraccountname
     *
     * @param string $otheraccountname
     * @return KfActivity
     */
    public function setOtheraccountname($otheraccountname)
    {
        $this->otheraccountname = $otheraccountname;

        return $this;
    }

    /**
     * Get otheraccountname
     *
     * @return string 
     */
    public function getOtheraccountname()
    {
        return $this->otheraccountname;
    }

    /**
     * Set othercontactname
     *
     * @param string $othercontactname
     * @return KfActivity
     */
    public function setOthercontactname($othercontactname)
    {
        $this->othercontactname = $othercontactname;

        return $this;
    }

    /**
     * Get othercontactname
     *
     * @return string 
     */
    public function getOthercontactname()
    {
        return $this->othercontactname;
    }

    /**
     * Set kfFlag
     *
     * @param string $kfFlag
     * @return KfActivity
     */
    public function setKfFlag($kfFlag)
    {
        $this->kfFlag = $kfFlag;

        return $this;
    }

    /**
     * Get kfFlag
     *
     * @return string 
     */
    public function getKfFlag()
    {
        return $this->kfFlag;
    }
}
