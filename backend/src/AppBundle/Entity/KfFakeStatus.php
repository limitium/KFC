<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfFakeStatus
 *
 * @ORM\Table(name="KF_FAKE_STATUS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_FAKE_STATUS_PRIMARY", columns={"KF_FAKE_STATUSID"})})
 * @ORM\Entity
 */
class KfFakeStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_FAKE_STATUSID", type="string", length=12, nullable=false)
     */
    private $kfFakeStatusid;

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
     * @ORM\Column(name="STATUS", type="string", length=128, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_TYPE", type="string", length=128, nullable=true)
     */
    private $statusType;



    /**
     * Set kfFakeStatusid
     *
     * @param string $kfFakeStatusid
     * @return KfFakeStatus
     */
    public function setKfFakeStatusid($kfFakeStatusid)
    {
        $this->kfFakeStatusid = $kfFakeStatusid;

        return $this;
    }

    /**
     * Get kfFakeStatusid
     *
     * @return string 
     */
    public function getKfFakeStatusid()
    {
        return $this->kfFakeStatusid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfFakeStatus
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
     * @return KfFakeStatus
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
     * @return KfFakeStatus
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
     * @return KfFakeStatus
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
     * Set status
     *
     * @param string $status
     * @return KfFakeStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusType
     *
     * @param string $statusType
     * @return KfFakeStatus
     */
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Get statusType
     *
     * @return string 
     */
    public function getStatusType()
    {
        return $this->statusType;
    }
}
