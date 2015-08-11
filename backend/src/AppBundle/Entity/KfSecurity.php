<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSecurity
 *
 * @ORM\Table(name="KF_SECURITY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SECURITY_PRIMARY", columns={"KF_SECURITYID"})})
 * @ORM\Entity
 */
class KfSecurity
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SECURITYID", type="string", length=12, nullable=false)
     */
    private $kfSecurityid;

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
     * @ORM\Column(name="SALESPLAN", type="smallint", nullable=true)
     */
    private $salesplan;



    /**
     * Set kfSecurityid
     *
     * @param string $kfSecurityid
     * @return KfSecurity
     */
    public function setKfSecurityid($kfSecurityid)
    {
        $this->kfSecurityid = $kfSecurityid;

        return $this;
    }

    /**
     * Get kfSecurityid
     *
     * @return string 
     */
    public function getKfSecurityid()
    {
        return $this->kfSecurityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfSecurity
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
     * @return KfSecurity
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
     * @return KfSecurity
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
     * @return KfSecurity
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
     * @return KfSecurity
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
     * Set salesplan
     *
     * @param integer $salesplan
     * @return KfSecurity
     */
    public function setSalesplan($salesplan)
    {
        $this->salesplan = $salesplan;

        return $this;
    }

    /**
     * Get salesplan
     *
     * @return integer 
     */
    public function getSalesplan()
    {
        return $this->salesplan;
    }
}
