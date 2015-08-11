<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingPayments
 *
 * @ORM\Table(name="KF_MARKETING_PAYMENTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PAYMENTS_PRIMARY", columns={"KF_MARKETING_PAYMENTSID"})}, indexes={@ORM\Index(name="KF_MARKETING_PAYMENTS_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingPayments
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PAYMENTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingPaymentsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTOR", type="string", length=12, nullable=true)
     */
    private $contractor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PAID_DATE", type="datetime", nullable=true)
     */
    private $paidDate;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_INCL_VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountInclVat;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=32, nullable=true)
     */
    private $vatType;

    /**
     * @var float
     *
     * @ORM\Column(name="VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="TO_ACCOUNTING", type="string", length=1, nullable=true)
     */
    private $toAccounting;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_DATE", type="datetime", nullable=true)
     */
    private $estimatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;



    /**
     * Set kfMarketingPaymentsid
     *
     * @param string $kfMarketingPaymentsid
     * @return KfMarketingPayments
     */
    public function setKfMarketingPaymentsid($kfMarketingPaymentsid)
    {
        $this->kfMarketingPaymentsid = $kfMarketingPaymentsid;

        return $this;
    }

    /**
     * Get kfMarketingPaymentsid
     *
     * @return string 
     */
    public function getKfMarketingPaymentsid()
    {
        return $this->kfMarketingPaymentsid;
    }

    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return KfMarketingPayments
     */
    public function setKfMarketingProjectsid($kfMarketingProjectsid)
    {
        $this->kfMarketingProjectsid = $kfMarketingProjectsid;

        return $this;
    }

    /**
     * Get kfMarketingProjectsid
     *
     * @return string 
     */
    public function getKfMarketingProjectsid()
    {
        return $this->kfMarketingProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketingPayments
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
     * @return KfMarketingPayments
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
     * @return KfMarketingPayments
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
     * @return KfMarketingPayments
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
     * Set paymentType
     *
     * @param string $paymentType
     * @return KfMarketingPayments
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set actNumber
     *
     * @param string $actNumber
     * @return KfMarketingPayments
     */
    public function setActNumber($actNumber)
    {
        $this->actNumber = $actNumber;

        return $this;
    }

    /**
     * Get actNumber
     *
     * @return string 
     */
    public function getActNumber()
    {
        return $this->actNumber;
    }

    /**
     * Set contractor
     *
     * @param string $contractor
     * @return KfMarketingPayments
     */
    public function setContractor($contractor)
    {
        $this->contractor = $contractor;

        return $this;
    }

    /**
     * Get contractor
     *
     * @return string 
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * Set paidDate
     *
     * @param \DateTime $paidDate
     * @return KfMarketingPayments
     */
    public function setPaidDate($paidDate)
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Get paidDate
     *
     * @return \DateTime 
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Set amountInclVat
     *
     * @param float $amountInclVat
     * @return KfMarketingPayments
     */
    public function setAmountInclVat($amountInclVat)
    {
        $this->amountInclVat = $amountInclVat;

        return $this;
    }

    /**
     * Get amountInclVat
     *
     * @return float 
     */
    public function getAmountInclVat()
    {
        return $this->amountInclVat;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return KfMarketingPayments
     */
    public function setVatType($vatType)
    {
        $this->vatType = $vatType;

        return $this;
    }

    /**
     * Get vatType
     *
     * @return string 
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Set vat
     *
     * @param float $vat
     * @return KfMarketingPayments
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return float 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set toAccounting
     *
     * @param string $toAccounting
     * @return KfMarketingPayments
     */
    public function setToAccounting($toAccounting)
    {
        $this->toAccounting = $toAccounting;

        return $this;
    }

    /**
     * Get toAccounting
     *
     * @return string 
     */
    public function getToAccounting()
    {
        return $this->toAccounting;
    }

    /**
     * Set estimatedDate
     *
     * @param \DateTime $estimatedDate
     * @return KfMarketingPayments
     */
    public function setEstimatedDate($estimatedDate)
    {
        $this->estimatedDate = $estimatedDate;

        return $this;
    }

    /**
     * Get estimatedDate
     *
     * @return \DateTime 
     */
    public function getEstimatedDate()
    {
        return $this->estimatedDate;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfMarketingPayments
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
}
