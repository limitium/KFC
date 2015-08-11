<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserSalesplan
 *
 * @ORM\Table(name="KF_USER_SALESPLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_SALESPLAN_PRIMARY", columns={"KF_USER_SALESPLANID"})})
 * @ORM\Entity
 */
class KfUserSalesplan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_SALESPLANID", type="string", length=12, nullable=false)
     */
    private $kfUserSalesplanid;

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
     * @var float
     *
     * @ORM\Column(name="AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;



    /**
     * Set kfUserSalesplanid
     *
     * @param string $kfUserSalesplanid
     * @return KfUserSalesplan
     */
    public function setKfUserSalesplanid($kfUserSalesplanid)
    {
        $this->kfUserSalesplanid = $kfUserSalesplanid;

        return $this;
    }

    /**
     * Get kfUserSalesplanid
     *
     * @return string 
     */
    public function getKfUserSalesplanid()
    {
        return $this->kfUserSalesplanid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfUserSalesplan
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
     * @return KfUserSalesplan
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
     * @return KfUserSalesplan
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
     * @return KfUserSalesplan
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
     * Set amount
     *
     * @param float $amount
     * @return KfUserSalesplan
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set yer
     *
     * @param integer $yer
     * @return KfUserSalesplan
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
     * Set probability
     *
     * @param float $probability
     * @return KfUserSalesplan
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float 
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfUserSalesplan
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
}
