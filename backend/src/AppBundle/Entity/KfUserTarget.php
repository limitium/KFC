<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTarget
 *
 * @ORM\Table(name="KF_USER_TARGET", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TARGET_PRIMARY", columns={"KF_USER_TARGETID"})})
 * @ORM\Entity
 */
class KfUserTarget
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TARGETID", type="string", length=12, nullable=false)
     */
    private $kfUserTargetid;

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
     * @var integer
     *
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="ESTIMATED_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $estimatedAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROBABILITY", type="smallint", nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;



    /**
     * Set kfUserTargetid
     *
     * @param string $kfUserTargetid
     * @return KfUserTarget
     */
    public function setKfUserTargetid($kfUserTargetid)
    {
        $this->kfUserTargetid = $kfUserTargetid;

        return $this;
    }

    /**
     * Get kfUserTargetid
     *
     * @return string 
     */
    public function getKfUserTargetid()
    {
        return $this->kfUserTargetid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfUserTarget
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
     * @return KfUserTarget
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
     * @return KfUserTarget
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
     * @return KfUserTarget
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
     * @return KfUserTarget
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
     * Set yer
     *
     * @param integer $yer
     * @return KfUserTarget
     */
    public function setYer($yer)
    {
        $this->yer = $yer;

        return $this;
    }

    /**
     * Get yer
     *
     * @return integer 
     */
    public function getYer()
    {
        return $this->yer;
    }

    /**
     * Set estimatedAmount
     *
     * @param float $estimatedAmount
     * @return KfUserTarget
     */
    public function setEstimatedAmount($estimatedAmount)
    {
        $this->estimatedAmount = $estimatedAmount;

        return $this;
    }

    /**
     * Get estimatedAmount
     *
     * @return float 
     */
    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    /**
     * Set probability
     *
     * @param integer $probability
     * @return KfUserTarget
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return integer 
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfUserTarget
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }
}
