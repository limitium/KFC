<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccountManagers
 *
 * @ORM\Table(name="KF_ACCOUNT_MANAGERS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACCOUNT_MANAGERS_PRIMARY", columns={"KF_ACCOUNT_MANAGERSID"})}, indexes={@ORM\Index(name="KF_ACCOUNT_MANAGERS_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfAccountManagers
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACCOUNT_MANAGERSID", type="string", length=12, nullable=false)
     */
    private $kfAccountManagersid;

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
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;



    /**
     * Set kfAccountManagersid
     *
     * @param string $kfAccountManagersid
     * @return KfAccountManagers
     */
    public function setKfAccountManagersid($kfAccountManagersid)
    {
        $this->kfAccountManagersid = $kfAccountManagersid;

        return $this;
    }

    /**
     * Get kfAccountManagersid
     *
     * @return string 
     */
    public function getKfAccountManagersid()
    {
        return $this->kfAccountManagersid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfAccountManagers
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
     * @return KfAccountManagers
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
     * @return KfAccountManagers
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
     * @return KfAccountManagers
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
     * @return KfAccountManagers
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
     * Set managerid
     *
     * @param string $managerid
     * @return KfAccountManagers
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
}
