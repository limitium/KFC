<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfManagmenttoaccount
 *
 * @ORM\Table(name="KF_MANAGMENTTOACCOUNT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MANAGMENTTOACCOUNT_PRIMARY", columns={"KF_MANAGMENTTOACCOUNTID"})}, indexes={@ORM\Index(name="KF_MANAGMENTTOACCOUNT_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfManagmenttoaccount
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MANAGMENTTOACCOUNTID", type="string", length=12, nullable=false)
     */
    private $kfManagmenttoaccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="BROKERID", type="string", length=12, nullable=true)
     */
    private $brokerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTNAME", type="string", length=128, nullable=true)
     */
    private $accountname;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKERNAME", type="string", length=128, nullable=true)
     */
    private $brokername;



    /**
     * Set kfManagmenttoaccountid
     *
     * @param string $kfManagmenttoaccountid
     * @return KfManagmenttoaccount
     */
    public function setKfManagmenttoaccountid($kfManagmenttoaccountid)
    {
        $this->kfManagmenttoaccountid = $kfManagmenttoaccountid;

        return $this;
    }

    /**
     * Get kfManagmenttoaccountid
     *
     * @return string 
     */
    public function getKfManagmenttoaccountid()
    {
        return $this->kfManagmenttoaccountid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfManagmenttoaccount
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfManagmenttoaccount
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
     * @return KfManagmenttoaccount
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
     * @return KfManagmenttoaccount
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
     * @return KfManagmenttoaccount
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
     * Set brokerid
     *
     * @param string $brokerid
     * @return KfManagmenttoaccount
     */
    public function setBrokerid($brokerid)
    {
        $this->brokerid = $brokerid;

        return $this;
    }

    /**
     * Get brokerid
     *
     * @return string 
     */
    public function getBrokerid()
    {
        return $this->brokerid;
    }

    /**
     * Set accountname
     *
     * @param string $accountname
     * @return KfManagmenttoaccount
     */
    public function setAccountname($accountname)
    {
        $this->accountname = $accountname;

        return $this;
    }

    /**
     * Get accountname
     *
     * @return string 
     */
    public function getAccountname()
    {
        return $this->accountname;
    }

    /**
     * Set brokername
     *
     * @param string $brokername
     * @return KfManagmenttoaccount
     */
    public function setBrokername($brokername)
    {
        $this->brokername = $brokername;

        return $this;
    }

    /**
     * Get brokername
     *
     * @return string 
     */
    public function getBrokername()
    {
        return $this->brokername;
    }
}
