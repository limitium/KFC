<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppPayments
 *
 */
class SpkOppPayments
{
    /**
     * @var string
     *
     */
    private $spkOppPaymentsid;

    /**
     * @var string
     *
     */
    private $opportunityid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var \DateTime
     *
     */
    private $paymentDate;

    /**
     * @var integer
     *
     */
    private $paymentNumber;

    /**
     * @var float
     *
     */
    private $amount;

    /**
     * @var string
     *
     */
    private $managerid;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $moneyNal;

    /**
     * @var string
     *
     */
    private $moneyPerevod;

    /**
     * @var string
     *
     */
    private $moneyOffshore;

    /**
     * @var string
     *
     */
    private $isSubcontract;

    /**
     * @var string
     *
     */
    private $isPrepayment;

    /**
     * @var string
     *
     */
    private $currency;

    /**
     * @var string
     *
     */
    private $paymentDateCmp;



    /**
     * Set spkOppPaymentsid
     *
     * @param string $spkOppPaymentsid
     * @return SpkOppPayments
     */
    public function setSpkOppPaymentsid($spkOppPaymentsid)
    {
        $this->spkOppPaymentsid = $spkOppPaymentsid;

        return $this;
    }

    /**
     * Get spkOppPaymentsid
     *
     * @return string 
     */
    public function getSpkOppPaymentsid()
    {
        return $this->spkOppPaymentsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppPayments
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppPayments
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
     * @return SpkOppPayments
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
     * @return SpkOppPayments
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
     * @return SpkOppPayments
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
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return SpkOppPayments
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set paymentNumber
     *
     * @param integer $paymentNumber
     * @return SpkOppPayments
     */
    public function setPaymentNumber($paymentNumber)
    {
        $this->paymentNumber = $paymentNumber;

        return $this;
    }

    /**
     * Get paymentNumber
     *
     * @return integer 
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return SpkOppPayments
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
     * Set managerid
     *
     * @param string $managerid
     * @return SpkOppPayments
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
     * Set notes
     *
     * @param string $notes
     * @return SpkOppPayments
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkOppPayments
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
     * Set contactid
     *
     * @param string $contactid
     * @return SpkOppPayments
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
     * Set vat
     *
     * @param string $vat
     * @return SpkOppPayments
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set moneyNal
     *
     * @param string $moneyNal
     * @return SpkOppPayments
     */
    public function setMoneyNal($moneyNal)
    {
        $this->moneyNal = $moneyNal;

        return $this;
    }

    /**
     * Get moneyNal
     *
     * @return string 
     */
    public function getMoneyNal()
    {
        return $this->moneyNal;
    }

    /**
     * Set moneyPerevod
     *
     * @param string $moneyPerevod
     * @return SpkOppPayments
     */
    public function setMoneyPerevod($moneyPerevod)
    {
        $this->moneyPerevod = $moneyPerevod;

        return $this;
    }

    /**
     * Get moneyPerevod
     *
     * @return string 
     */
    public function getMoneyPerevod()
    {
        return $this->moneyPerevod;
    }

    /**
     * Set moneyOffshore
     *
     * @param string $moneyOffshore
     * @return SpkOppPayments
     */
    public function setMoneyOffshore($moneyOffshore)
    {
        $this->moneyOffshore = $moneyOffshore;

        return $this;
    }

    /**
     * Get moneyOffshore
     *
     * @return string 
     */
    public function getMoneyOffshore()
    {
        return $this->moneyOffshore;
    }

    /**
     * Set isSubcontract
     *
     * @param string $isSubcontract
     * @return SpkOppPayments
     */
    public function setIsSubcontract($isSubcontract)
    {
        $this->isSubcontract = $isSubcontract;

        return $this;
    }

    /**
     * Get isSubcontract
     *
     * @return string 
     */
    public function getIsSubcontract()
    {
        return $this->isSubcontract;
    }

    /**
     * Set isPrepayment
     *
     * @param string $isPrepayment
     * @return SpkOppPayments
     */
    public function setIsPrepayment($isPrepayment)
    {
        $this->isPrepayment = $isPrepayment;

        return $this;
    }

    /**
     * Get isPrepayment
     *
     * @return string 
     */
    public function getIsPrepayment()
    {
        return $this->isPrepayment;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return SpkOppPayments
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set paymentDateCmp
     *
     * @param string $paymentDateCmp
     * @return SpkOppPayments
     */
    public function setPaymentDateCmp($paymentDateCmp)
    {
        $this->paymentDateCmp = $paymentDateCmp;

        return $this;
    }

    /**
     * Get paymentDateCmp
     *
     * @return string 
     */
    public function getPaymentDateCmp()
    {
        return $this->paymentDateCmp;
    }
}
