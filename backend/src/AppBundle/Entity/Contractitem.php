<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractitem
 *
 * @ORM\Table(name="CONTRACTITEM", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTRACTITEM", columns={"CONTRACTITEMID"})}, indexes={@ORM\Index(name="XAK1CONTRACTITEM", columns={"CONTRACTID", "ACCOUNTPRODUCTID"})})
 * @ORM\Entity
 */
class Contractitem
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTITEMID", type="string", length=12, nullable=false)
     */
    private $contractitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTID", type="string", length=12, nullable=true)
     */
    private $accountproductid;

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
     * Set contractitemid
     *
     * @param string $contractitemid
     * @return Contractitem
     */
    public function setContractitemid($contractitemid)
    {
        $this->contractitemid = $contractitemid;

        return $this;
    }

    /**
     * Get contractitemid
     *
     * @return string 
     */
    public function getContractitemid()
    {
        return $this->contractitemid;
    }

    /**
     * Set contractid
     *
     * @param string $contractid
     * @return Contractitem
     */
    public function setContractid($contractid)
    {
        $this->contractid = $contractid;

        return $this;
    }

    /**
     * Get contractid
     *
     * @return string 
     */
    public function getContractid()
    {
        return $this->contractid;
    }

    /**
     * Set accountproductid
     *
     * @param string $accountproductid
     * @return Contractitem
     */
    public function setAccountproductid($accountproductid)
    {
        $this->accountproductid = $accountproductid;

        return $this;
    }

    /**
     * Get accountproductid
     *
     * @return string 
     */
    public function getAccountproductid()
    {
        return $this->accountproductid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Contractitem
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
     * @return Contractitem
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
     * @return Contractitem
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
     * @return Contractitem
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
}
