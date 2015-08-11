<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccTelemarketing
 *
 * @ORM\Table(name="KF_ACC_TELEMARKETING", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACC_TELEMARKETING_PRIMARY", columns={"KF_ACC_TELEMARKETINGID"})}, indexes={@ORM\Index(name="KF_ACC_TELEMARKETING_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfAccTelemarketing
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACC_TELEMARKETINGID", type="string", length=12, nullable=false)
     */
    private $kfAccTelemarketingid;

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
     * @ORM\Column(name="PARAMETERS", type="string", length=128, nullable=true)
     */
    private $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL", type="string", length=128, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCE", type="string", length=128, nullable=true)
     */
    private $leadsource;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_PARAMETERSID", type="string", length=12, nullable=true)
     */
    private $kfTeleParametersid;



    /**
     * Set kfAccTelemarketingid
     *
     * @param string $kfAccTelemarketingid
     * @return KfAccTelemarketing
     */
    public function setKfAccTelemarketingid($kfAccTelemarketingid)
    {
        $this->kfAccTelemarketingid = $kfAccTelemarketingid;

        return $this;
    }

    /**
     * Get kfAccTelemarketingid
     *
     * @return string 
     */
    public function getKfAccTelemarketingid()
    {
        return $this->kfAccTelemarketingid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfAccTelemarketing
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
     * @return KfAccTelemarketing
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
     * @return KfAccTelemarketing
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
     * @return KfAccTelemarketing
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
     * @return KfAccTelemarketing
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
     * Set parameters
     *
     * @param string $parameters
     * @return KfAccTelemarketing
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string 
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set val
     *
     * @param string $val
     * @return KfAccTelemarketing
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val
     *
     * @return string 
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set leadsource
     *
     * @param string $leadsource
     * @return KfAccTelemarketing
     */
    public function setLeadsource($leadsource)
    {
        $this->leadsource = $leadsource;

        return $this;
    }

    /**
     * Get leadsource
     *
     * @return string 
     */
    public function getLeadsource()
    {
        return $this->leadsource;
    }

    /**
     * Set kfTeleParametersid
     *
     * @param string $kfTeleParametersid
     * @return KfAccTelemarketing
     */
    public function setKfTeleParametersid($kfTeleParametersid)
    {
        $this->kfTeleParametersid = $kfTeleParametersid;

        return $this;
    }

    /**
     * Get kfTeleParametersid
     *
     * @return string 
     */
    public function getKfTeleParametersid()
    {
        return $this->kfTeleParametersid;
    }
}
