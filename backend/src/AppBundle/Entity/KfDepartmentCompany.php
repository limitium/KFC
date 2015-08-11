<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDepartmentCompany
 *
 * @ORM\Table(name="KF_DEPARTMENT_COMPANY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DEPARTMENT_COMPANY_PRIMARY", columns={"KF_DEPARTMENT_COMPANYID"})})
 * @ORM\Entity
 */
class KfDepartmentCompany
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DEPARTMENT_COMPANYID", type="string", length=12, nullable=false)
     */
    private $kfDepartmentCompanyid;

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
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_ACTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountActs;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_PAID", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountPaid;

    /**
     * @var float
     *
     * @ORM\Column(name="NUMBER_ACTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $numberActs;

    /**
     * @var float
     *
     * @ORM\Column(name="NUMBER_PAID", type="float", precision=53, scale=0, nullable=true)
     */
    private $numberPaid;



    /**
     * Set kfDepartmentCompanyid
     *
     * @param string $kfDepartmentCompanyid
     * @return KfDepartmentCompany
     */
    public function setKfDepartmentCompanyid($kfDepartmentCompanyid)
    {
        $this->kfDepartmentCompanyid = $kfDepartmentCompanyid;

        return $this;
    }

    /**
     * Get kfDepartmentCompanyid
     *
     * @return string 
     */
    public function getKfDepartmentCompanyid()
    {
        return $this->kfDepartmentCompanyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfDepartmentCompany
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
     * @return KfDepartmentCompany
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
     * @return KfDepartmentCompany
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
     * @return KfDepartmentCompany
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
     * Set department
     *
     * @param string $department
     * @return KfDepartmentCompany
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set amountActs
     *
     * @param float $amountActs
     * @return KfDepartmentCompany
     */
    public function setAmountActs($amountActs)
    {
        $this->amountActs = $amountActs;

        return $this;
    }

    /**
     * Get amountActs
     *
     * @return float 
     */
    public function getAmountActs()
    {
        return $this->amountActs;
    }

    /**
     * Set amountPaid
     *
     * @param float $amountPaid
     * @return KfDepartmentCompany
     */
    public function setAmountPaid($amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * Get amountPaid
     *
     * @return float 
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * Set numberActs
     *
     * @param float $numberActs
     * @return KfDepartmentCompany
     */
    public function setNumberActs($numberActs)
    {
        $this->numberActs = $numberActs;

        return $this;
    }

    /**
     * Get numberActs
     *
     * @return float 
     */
    public function getNumberActs()
    {
        return $this->numberActs;
    }

    /**
     * Set numberPaid
     *
     * @param float $numberPaid
     * @return KfDepartmentCompany
     */
    public function setNumberPaid($numberPaid)
    {
        $this->numberPaid = $numberPaid;

        return $this;
    }

    /**
     * Get numberPaid
     *
     * @return float 
     */
    public function getNumberPaid()
    {
        return $this->numberPaid;
    }
}
