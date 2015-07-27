<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOpportunityDetail
 *
 */
class SpkOpportunityDetail
{
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
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $resellerContactid;

    /**
     * @var float
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $isDogovor;

    /**
     * @var string
     *
     */
    private $isOfferta;

    /**
     * @var float
     *
     */
    private $commitionKf;

    /**
     * @var string
     *
     */
    private $isPercent;

    /**
     * @var \DateTime
     *
     */
    private $dogovorDate;

    /**
     * @var \DateTime
     *
     */
    private $offertaDate;

    /**
     * @var string
     *
     */
    private $dogovorNumber;

    /**
     * @var string
     *
     */
    private $isAct;

    /**
     * @var string
     *
     */
    private $actNumber;

    /**
     * @var string
     *
     */
    private $isBill;

    /**
     * @var string
     *
     */
    private $billNumber;

    /**
     * @var string
     *
     */
    private $isInvoice;

    /**
     * @var string
     *
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     *
     */
    private $actDate;

    /**
     * @var \DateTime
     *
     */
    private $billDate;

    /**
     * @var \DateTime
     *
     */
    private $invoiceDate;

    /**
     * @var string
     *
     */
    private $isCompetitor;

    /**
     * @var string
     *
     */
    private $competitorid;

    /**
     * @var float
     *
     */
    private $oppAmount;

    /**
     * @var float
     *
     */
    private $potentialCost;

    /**
     * @var float
     *
     */
    private $potentialCommisionKf;

    /**
     * @var float
     *
     */
    private $potentialSquare;

    /**
     * @var string
     *
     */
    private $potentialCommisionType;

    /**
     * @var float
     *
     */
    private $potentialRent;

    /**
     * @var string
     *
     */
    private $commisionType;

    /**
     * @var float
     *
     */
    private $commisionKf;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $contractType;

    /**
     * @var \DateTime
     *
     */
    private $serviceActDate;

    /**
     * @var string
     *
     */
    private $serviceActNumber;

    /**
     * @var string
     *
     */
    private $isServiceAct;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

    /**
     * @var \DateTime
     *
     */
    private $tenantpayDate;

    /**
     * @var string
     *
     */
    private $isWip;

    /**
     * @var string
     *
     */
    private $kfCurrency;

    /**
     * @var string
     *
     */
    private $objectNotIndb;

    /**
     * @var string
     *
     */
    private $targetAcquisition;

    /**
     * @var string
     *
     */
    private $referraldesc;

    /**
     * @var string
     *
     */
    private $isPrepaymant;

    /**
     * @var string
     *
     */
    private $includeVat;

    /**
     * @var string
     *
     */
    private $whopays;

    /**
     * @var string
     *
     */
    private $isInactive;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOpportunityDetail
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
     * @return SpkOpportunityDetail
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
     * @return SpkOpportunityDetail
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
     * @return SpkOpportunityDetail
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
     * @return SpkOpportunityDetail
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
     * Set contactid
     *
     * @param string $contactid
     * @return SpkOpportunityDetail
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
     * Set resellerContactid
     *
     * @param string $resellerContactid
     * @return SpkOpportunityDetail
     */
    public function setResellerContactid($resellerContactid)
    {
        $this->resellerContactid = $resellerContactid;

        return $this;
    }

    /**
     * Get resellerContactid
     *
     * @return string 
     */
    public function getResellerContactid()
    {
        return $this->resellerContactid;
    }

    /**
     * Set commission
     *
     * @param float $commission
     * @return SpkOpportunityDetail
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return float 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set isDogovor
     *
     * @param string $isDogovor
     * @return SpkOpportunityDetail
     */
    public function setIsDogovor($isDogovor)
    {
        $this->isDogovor = $isDogovor;

        return $this;
    }

    /**
     * Get isDogovor
     *
     * @return string 
     */
    public function getIsDogovor()
    {
        return $this->isDogovor;
    }

    /**
     * Set isOfferta
     *
     * @param string $isOfferta
     * @return SpkOpportunityDetail
     */
    public function setIsOfferta($isOfferta)
    {
        $this->isOfferta = $isOfferta;

        return $this;
    }

    /**
     * Get isOfferta
     *
     * @return string 
     */
    public function getIsOfferta()
    {
        return $this->isOfferta;
    }

    /**
     * Set commitionKf
     *
     * @param float $commitionKf
     * @return SpkOpportunityDetail
     */
    public function setCommitionKf($commitionKf)
    {
        $this->commitionKf = $commitionKf;

        return $this;
    }

    /**
     * Get commitionKf
     *
     * @return float 
     */
    public function getCommitionKf()
    {
        return $this->commitionKf;
    }

    /**
     * Set isPercent
     *
     * @param string $isPercent
     * @return SpkOpportunityDetail
     */
    public function setIsPercent($isPercent)
    {
        $this->isPercent = $isPercent;

        return $this;
    }

    /**
     * Get isPercent
     *
     * @return string 
     */
    public function getIsPercent()
    {
        return $this->isPercent;
    }

    /**
     * Set dogovorDate
     *
     * @param \DateTime $dogovorDate
     * @return SpkOpportunityDetail
     */
    public function setDogovorDate($dogovorDate)
    {
        $this->dogovorDate = $dogovorDate;

        return $this;
    }

    /**
     * Get dogovorDate
     *
     * @return \DateTime 
     */
    public function getDogovorDate()
    {
        return $this->dogovorDate;
    }

    /**
     * Set offertaDate
     *
     * @param \DateTime $offertaDate
     * @return SpkOpportunityDetail
     */
    public function setOffertaDate($offertaDate)
    {
        $this->offertaDate = $offertaDate;

        return $this;
    }

    /**
     * Get offertaDate
     *
     * @return \DateTime 
     */
    public function getOffertaDate()
    {
        return $this->offertaDate;
    }

    /**
     * Set dogovorNumber
     *
     * @param string $dogovorNumber
     * @return SpkOpportunityDetail
     */
    public function setDogovorNumber($dogovorNumber)
    {
        $this->dogovorNumber = $dogovorNumber;

        return $this;
    }

    /**
     * Get dogovorNumber
     *
     * @return string 
     */
    public function getDogovorNumber()
    {
        return $this->dogovorNumber;
    }

    /**
     * Set isAct
     *
     * @param string $isAct
     * @return SpkOpportunityDetail
     */
    public function setIsAct($isAct)
    {
        $this->isAct = $isAct;

        return $this;
    }

    /**
     * Get isAct
     *
     * @return string 
     */
    public function getIsAct()
    {
        return $this->isAct;
    }

    /**
     * Set actNumber
     *
     * @param string $actNumber
     * @return SpkOpportunityDetail
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
     * Set isBill
     *
     * @param string $isBill
     * @return SpkOpportunityDetail
     */
    public function setIsBill($isBill)
    {
        $this->isBill = $isBill;

        return $this;
    }

    /**
     * Get isBill
     *
     * @return string 
     */
    public function getIsBill()
    {
        return $this->isBill;
    }

    /**
     * Set billNumber
     *
     * @param string $billNumber
     * @return SpkOpportunityDetail
     */
    public function setBillNumber($billNumber)
    {
        $this->billNumber = $billNumber;

        return $this;
    }

    /**
     * Get billNumber
     *
     * @return string 
     */
    public function getBillNumber()
    {
        return $this->billNumber;
    }

    /**
     * Set isInvoice
     *
     * @param string $isInvoice
     * @return SpkOpportunityDetail
     */
    public function setIsInvoice($isInvoice)
    {
        $this->isInvoice = $isInvoice;

        return $this;
    }

    /**
     * Get isInvoice
     *
     * @return string 
     */
    public function getIsInvoice()
    {
        return $this->isInvoice;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     * @return SpkOpportunityDetail
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string 
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set actDate
     *
     * @param \DateTime $actDate
     * @return SpkOpportunityDetail
     */
    public function setActDate($actDate)
    {
        $this->actDate = $actDate;

        return $this;
    }

    /**
     * Get actDate
     *
     * @return \DateTime 
     */
    public function getActDate()
    {
        return $this->actDate;
    }

    /**
     * Set billDate
     *
     * @param \DateTime $billDate
     * @return SpkOpportunityDetail
     */
    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;

        return $this;
    }

    /**
     * Get billDate
     *
     * @return \DateTime 
     */
    public function getBillDate()
    {
        return $this->billDate;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     * @return SpkOpportunityDetail
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime 
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set isCompetitor
     *
     * @param string $isCompetitor
     * @return SpkOpportunityDetail
     */
    public function setIsCompetitor($isCompetitor)
    {
        $this->isCompetitor = $isCompetitor;

        return $this;
    }

    /**
     * Get isCompetitor
     *
     * @return string 
     */
    public function getIsCompetitor()
    {
        return $this->isCompetitor;
    }

    /**
     * Set competitorid
     *
     * @param string $competitorid
     * @return SpkOpportunityDetail
     */
    public function setCompetitorid($competitorid)
    {
        $this->competitorid = $competitorid;

        return $this;
    }

    /**
     * Get competitorid
     *
     * @return string 
     */
    public function getCompetitorid()
    {
        return $this->competitorid;
    }

    /**
     * Set oppAmount
     *
     * @param float $oppAmount
     * @return SpkOpportunityDetail
     */
    public function setOppAmount($oppAmount)
    {
        $this->oppAmount = $oppAmount;

        return $this;
    }

    /**
     * Get oppAmount
     *
     * @return float 
     */
    public function getOppAmount()
    {
        return $this->oppAmount;
    }

    /**
     * Set potentialCost
     *
     * @param float $potentialCost
     * @return SpkOpportunityDetail
     */
    public function setPotentialCost($potentialCost)
    {
        $this->potentialCost = $potentialCost;

        return $this;
    }

    /**
     * Get potentialCost
     *
     * @return float 
     */
    public function getPotentialCost()
    {
        return $this->potentialCost;
    }

    /**
     * Set potentialCommisionKf
     *
     * @param float $potentialCommisionKf
     * @return SpkOpportunityDetail
     */
    public function setPotentialCommisionKf($potentialCommisionKf)
    {
        $this->potentialCommisionKf = $potentialCommisionKf;

        return $this;
    }

    /**
     * Get potentialCommisionKf
     *
     * @return float 
     */
    public function getPotentialCommisionKf()
    {
        return $this->potentialCommisionKf;
    }

    /**
     * Set potentialSquare
     *
     * @param float $potentialSquare
     * @return SpkOpportunityDetail
     */
    public function setPotentialSquare($potentialSquare)
    {
        $this->potentialSquare = $potentialSquare;

        return $this;
    }

    /**
     * Get potentialSquare
     *
     * @return float 
     */
    public function getPotentialSquare()
    {
        return $this->potentialSquare;
    }

    /**
     * Set potentialCommisionType
     *
     * @param string $potentialCommisionType
     * @return SpkOpportunityDetail
     */
    public function setPotentialCommisionType($potentialCommisionType)
    {
        $this->potentialCommisionType = $potentialCommisionType;

        return $this;
    }

    /**
     * Get potentialCommisionType
     *
     * @return string 
     */
    public function getPotentialCommisionType()
    {
        return $this->potentialCommisionType;
    }

    /**
     * Set potentialRent
     *
     * @param float $potentialRent
     * @return SpkOpportunityDetail
     */
    public function setPotentialRent($potentialRent)
    {
        $this->potentialRent = $potentialRent;

        return $this;
    }

    /**
     * Get potentialRent
     *
     * @return float 
     */
    public function getPotentialRent()
    {
        return $this->potentialRent;
    }

    /**
     * Set commisionType
     *
     * @param string $commisionType
     * @return SpkOpportunityDetail
     */
    public function setCommisionType($commisionType)
    {
        $this->commisionType = $commisionType;

        return $this;
    }

    /**
     * Get commisionType
     *
     * @return string 
     */
    public function getCommisionType()
    {
        return $this->commisionType;
    }

    /**
     * Set commisionKf
     *
     * @param float $commisionKf
     * @return SpkOpportunityDetail
     */
    public function setCommisionKf($commisionKf)
    {
        $this->commisionKf = $commisionKf;

        return $this;
    }

    /**
     * Get commisionKf
     *
     * @return float 
     */
    public function getCommisionKf()
    {
        return $this->commisionKf;
    }

    /**
     * Set parentid
     *
     * @param string $parentid
     * @return SpkOpportunityDetail
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return string 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set contractType
     *
     * @param string $contractType
     * @return SpkOpportunityDetail
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string 
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set serviceActDate
     *
     * @param \DateTime $serviceActDate
     * @return SpkOpportunityDetail
     */
    public function setServiceActDate($serviceActDate)
    {
        $this->serviceActDate = $serviceActDate;

        return $this;
    }

    /**
     * Get serviceActDate
     *
     * @return \DateTime 
     */
    public function getServiceActDate()
    {
        return $this->serviceActDate;
    }

    /**
     * Set serviceActNumber
     *
     * @param string $serviceActNumber
     * @return SpkOpportunityDetail
     */
    public function setServiceActNumber($serviceActNumber)
    {
        $this->serviceActNumber = $serviceActNumber;

        return $this;
    }

    /**
     * Get serviceActNumber
     *
     * @return string 
     */
    public function getServiceActNumber()
    {
        return $this->serviceActNumber;
    }

    /**
     * Set isServiceAct
     *
     * @param string $isServiceAct
     * @return SpkOpportunityDetail
     */
    public function setIsServiceAct($isServiceAct)
    {
        $this->isServiceAct = $isServiceAct;

        return $this;
    }

    /**
     * Get isServiceAct
     *
     * @return string 
     */
    public function getIsServiceAct()
    {
        return $this->isServiceAct;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkOpportunityDetail
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set tenantpayDate
     *
     * @param \DateTime $tenantpayDate
     * @return SpkOpportunityDetail
     */
    public function setTenantpayDate($tenantpayDate)
    {
        $this->tenantpayDate = $tenantpayDate;

        return $this;
    }

    /**
     * Get tenantpayDate
     *
     * @return \DateTime 
     */
    public function getTenantpayDate()
    {
        return $this->tenantpayDate;
    }

    /**
     * Set isWip
     *
     * @param string $isWip
     * @return SpkOpportunityDetail
     */
    public function setIsWip($isWip)
    {
        $this->isWip = $isWip;

        return $this;
    }

    /**
     * Get isWip
     *
     * @return string 
     */
    public function getIsWip()
    {
        return $this->isWip;
    }

    /**
     * Set kfCurrency
     *
     * @param string $kfCurrency
     * @return SpkOpportunityDetail
     */
    public function setKfCurrency($kfCurrency)
    {
        $this->kfCurrency = $kfCurrency;

        return $this;
    }

    /**
     * Get kfCurrency
     *
     * @return string 
     */
    public function getKfCurrency()
    {
        return $this->kfCurrency;
    }

    /**
     * Set objectNotIndb
     *
     * @param string $objectNotIndb
     * @return SpkOpportunityDetail
     */
    public function setObjectNotIndb($objectNotIndb)
    {
        $this->objectNotIndb = $objectNotIndb;

        return $this;
    }

    /**
     * Get objectNotIndb
     *
     * @return string 
     */
    public function getObjectNotIndb()
    {
        return $this->objectNotIndb;
    }

    /**
     * Set targetAcquisition
     *
     * @param string $targetAcquisition
     * @return SpkOpportunityDetail
     */
    public function setTargetAcquisition($targetAcquisition)
    {
        $this->targetAcquisition = $targetAcquisition;

        return $this;
    }

    /**
     * Get targetAcquisition
     *
     * @return string 
     */
    public function getTargetAcquisition()
    {
        return $this->targetAcquisition;
    }

    /**
     * Set referraldesc
     *
     * @param string $referraldesc
     * @return SpkOpportunityDetail
     */
    public function setReferraldesc($referraldesc)
    {
        $this->referraldesc = $referraldesc;

        return $this;
    }

    /**
     * Get referraldesc
     *
     * @return string 
     */
    public function getReferraldesc()
    {
        return $this->referraldesc;
    }

    /**
     * Set isPrepaymant
     *
     * @param string $isPrepaymant
     * @return SpkOpportunityDetail
     */
    public function setIsPrepaymant($isPrepaymant)
    {
        $this->isPrepaymant = $isPrepaymant;

        return $this;
    }

    /**
     * Get isPrepaymant
     *
     * @return string 
     */
    public function getIsPrepaymant()
    {
        return $this->isPrepaymant;
    }

    /**
     * Set includeVat
     *
     * @param string $includeVat
     * @return SpkOpportunityDetail
     */
    public function setIncludeVat($includeVat)
    {
        $this->includeVat = $includeVat;

        return $this;
    }

    /**
     * Get includeVat
     *
     * @return string 
     */
    public function getIncludeVat()
    {
        return $this->includeVat;
    }

    /**
     * Set whopays
     *
     * @param string $whopays
     * @return SpkOpportunityDetail
     */
    public function setWhopays($whopays)
    {
        $this->whopays = $whopays;

        return $this;
    }

    /**
     * Get whopays
     *
     * @return string 
     */
    public function getWhopays()
    {
        return $this->whopays;
    }

    /**
     * Set isInactive
     *
     * @param string $isInactive
     * @return SpkOpportunityDetail
     */
    public function setIsInactive($isInactive)
    {
        $this->isInactive = $isInactive;

        return $this;
    }

    /**
     * Get isInactive
     *
     * @return string 
     */
    public function getIsInactive()
    {
        return $this->isInactive;
    }
}
