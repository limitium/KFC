<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempResidContact
 *
 * @ORM\Table(name="KF_TEMP_RESID_CONTACT")
 * @ORM\Entity
 */
class KfTempResidContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="near_activity", type="datetime", nullable=true)
     */
    private $nearActivity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_history", type="datetime", nullable=true)
     */
    private $lastHistory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cont_createdate", type="datetime", nullable=true)
     */
    private $contCreatedate;

    /**
     * @var string
     *
     * @ORM\Column(name="resi_status", type="string", length=32, nullable=false)
     */
    private $resiStatus;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfTempResidContact
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

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfTempResidContact
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
     * Set nearActivity
     *
     * @param \DateTime $nearActivity
     * @return KfTempResidContact
     */
    public function setNearActivity($nearActivity)
    {
        $this->nearActivity = $nearActivity;

        return $this;
    }

    /**
     * Get nearActivity
     *
     * @return \DateTime 
     */
    public function getNearActivity()
    {
        return $this->nearActivity;
    }

    /**
     * Set lastHistory
     *
     * @param \DateTime $lastHistory
     * @return KfTempResidContact
     */
    public function setLastHistory($lastHistory)
    {
        $this->lastHistory = $lastHistory;

        return $this;
    }

    /**
     * Get lastHistory
     *
     * @return \DateTime 
     */
    public function getLastHistory()
    {
        return $this->lastHistory;
    }

    /**
     * Set contCreatedate
     *
     * @param \DateTime $contCreatedate
     * @return KfTempResidContact
     */
    public function setContCreatedate($contCreatedate)
    {
        $this->contCreatedate = $contCreatedate;

        return $this;
    }

    /**
     * Get contCreatedate
     *
     * @return \DateTime 
     */
    public function getContCreatedate()
    {
        return $this->contCreatedate;
    }

    /**
     * Set resiStatus
     *
     * @param string $resiStatus
     * @return KfTempResidContact
     */
    public function setResiStatus($resiStatus)
    {
        $this->resiStatus = $resiStatus;

        return $this;
    }

    /**
     * Get resiStatus
     *
     * @return string 
     */
    public function getResiStatus()
    {
        return $this->resiStatus;
    }
}
