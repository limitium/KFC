<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcCommerc
 *
 */
class SpkOffOcCommerc
{
    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
    private $leaseCostMin;

    /**
     * @var string
     *
     */
    private $leaseCostMax;

    /**
     * @var string
     *
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;

    /**
     * @var float
     *
     */
    private $kfCommision;

    /**
     * @var float
     *
     */
    private $totalAreaKoef;

    /**
     * @var float
     *
     */
    private $operationalCost;

    /**
     * @var float
     *
     */
    private $additionalCost;

    /**
     * @var float
     *
     */
    private $deposit;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $operatingExpType;

    /**
     * @var integer
     *
     */
    private $leaseLength;

    /**
     * @var string
     *
     */
    private $termOfLeaseMin;

    /**
     * @var string
     *
     */
    private $termOfLeaseMax;

    /**
     * @var float
     *
     */
    private $fitoutCompensation;

    /**
     * @var float
     *
     */
    private $utilityCost;

    /**
     * @var string
     *
     */
    private $vatType;

    /**
     * @var string
     *
     */
    private $commercialTerms;

    /**
     * @var string
     *
     */
    private $utilityType;

    /**
     * @var string
     *
     */
    private $rentalHolidays;

    /**
     * @var float
     *
     */
    private $yield;

    /**
     * @var string
     *
     */
    private $oppStructure;

    /**
     * @var string
     *
     */
    private $ownershipCert;

    /**
     * @var string
     *
     */
    private $ownershipType;

    /**
     * @var string
     *
     */
    private $rentalStatusEng;

    /**
     * @var string
     *
     */
    private $rentalStatusRus;

    /**
     * @var float
     *
     */
    private $rentalRateAvg;

    /**
     * @var string
     *
     */
    private $rraCur;

    /**
     * @var float
     *
     */
    private $priceTaSqm;

    /**
     * @var float
     *
     */
    private $priceLaSqm;

    /**
     * @var string
     *
     */
    private $commercialTermsSale;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffOcCommerc
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOffOcCommerc
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
     * @return SpkOffOcCommerc
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
     * @return SpkOffOcCommerc
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
     * @return SpkOffOcCommerc
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
     * Set leaseCostMin
     *
     * @param string $leaseCostMin
     * @return SpkOffOcCommerc
     */
    public function setLeaseCostMin($leaseCostMin)
    {
        $this->leaseCostMin = $leaseCostMin;

        return $this;
    }

    /**
     * Get leaseCostMin
     *
     * @return string 
     */
    public function getLeaseCostMin()
    {
        return $this->leaseCostMin;
    }

    /**
     * Set leaseCostMax
     *
     * @param string $leaseCostMax
     * @return SpkOffOcCommerc
     */
    public function setLeaseCostMax($leaseCostMax)
    {
        $this->leaseCostMax = $leaseCostMax;

        return $this;
    }

    /**
     * Get leaseCostMax
     *
     * @return string 
     */
    public function getLeaseCostMax()
    {
        return $this->leaseCostMax;
    }

    /**
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return SpkOffOcCommerc
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return string 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param string $costPerSqmMax
     * @return SpkOffOcCommerc
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return string 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return SpkOffOcCommerc
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return SpkOffOcCommerc
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkOffOcCommerc
     */
    public function setCommentsRus($commentsRus)
    {
        $this->commentsRus = $commentsRus;

        return $this;
    }

    /**
     * Get commentsRus
     *
     * @return string 
     */
    public function getCommentsRus()
    {
        return $this->commentsRus;
    }

    /**
     * Set commentsEng
     *
     * @param string $commentsEng
     * @return SpkOffOcCommerc
     */
    public function setCommentsEng($commentsEng)
    {
        $this->commentsEng = $commentsEng;

        return $this;
    }

    /**
     * Get commentsEng
     *
     * @return string 
     */
    public function getCommentsEng()
    {
        return $this->commentsEng;
    }

    /**
     * Set kfCommision
     *
     * @param float $kfCommision
     * @return SpkOffOcCommerc
     */
    public function setKfCommision($kfCommision)
    {
        $this->kfCommision = $kfCommision;

        return $this;
    }

    /**
     * Get kfCommision
     *
     * @return float 
     */
    public function getKfCommision()
    {
        return $this->kfCommision;
    }

    /**
     * Set totalAreaKoef
     *
     * @param float $totalAreaKoef
     * @return SpkOffOcCommerc
     */
    public function setTotalAreaKoef($totalAreaKoef)
    {
        $this->totalAreaKoef = $totalAreaKoef;

        return $this;
    }

    /**
     * Get totalAreaKoef
     *
     * @return float 
     */
    public function getTotalAreaKoef()
    {
        return $this->totalAreaKoef;
    }

    /**
     * Set operationalCost
     *
     * @param float $operationalCost
     * @return SpkOffOcCommerc
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return float 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set additionalCost
     *
     * @param float $additionalCost
     * @return SpkOffOcCommerc
     */
    public function setAdditionalCost($additionalCost)
    {
        $this->additionalCost = $additionalCost;

        return $this;
    }

    /**
     * Get additionalCost
     *
     * @return float 
     */
    public function getAdditionalCost()
    {
        return $this->additionalCost;
    }

    /**
     * Set deposit
     *
     * @param float $deposit
     * @return SpkOffOcCommerc
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return float 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set indexationConditions
     *
     * @param string $indexationConditions
     * @return SpkOffOcCommerc
     */
    public function setIndexationConditions($indexationConditions)
    {
        $this->indexationConditions = $indexationConditions;

        return $this;
    }

    /**
     * Get indexationConditions
     *
     * @return string 
     */
    public function getIndexationConditions()
    {
        return $this->indexationConditions;
    }

    /**
     * Set operatingExpType
     *
     * @param string $operatingExpType
     * @return SpkOffOcCommerc
     */
    public function setOperatingExpType($operatingExpType)
    {
        $this->operatingExpType = $operatingExpType;

        return $this;
    }

    /**
     * Get operatingExpType
     *
     * @return string 
     */
    public function getOperatingExpType()
    {
        return $this->operatingExpType;
    }

    /**
     * Set leaseLength
     *
     * @param integer $leaseLength
     * @return SpkOffOcCommerc
     */
    public function setLeaseLength($leaseLength)
    {
        $this->leaseLength = $leaseLength;

        return $this;
    }

    /**
     * Get leaseLength
     *
     * @return integer 
     */
    public function getLeaseLength()
    {
        return $this->leaseLength;
    }

    /**
     * Set termOfLeaseMin
     *
     * @param string $termOfLeaseMin
     * @return SpkOffOcCommerc
     */
    public function setTermOfLeaseMin($termOfLeaseMin)
    {
        $this->termOfLeaseMin = $termOfLeaseMin;

        return $this;
    }

    /**
     * Get termOfLeaseMin
     *
     * @return string 
     */
    public function getTermOfLeaseMin()
    {
        return $this->termOfLeaseMin;
    }

    /**
     * Set termOfLeaseMax
     *
     * @param string $termOfLeaseMax
     * @return SpkOffOcCommerc
     */
    public function setTermOfLeaseMax($termOfLeaseMax)
    {
        $this->termOfLeaseMax = $termOfLeaseMax;

        return $this;
    }

    /**
     * Get termOfLeaseMax
     *
     * @return string 
     */
    public function getTermOfLeaseMax()
    {
        return $this->termOfLeaseMax;
    }

    /**
     * Set fitoutCompensation
     *
     * @param float $fitoutCompensation
     * @return SpkOffOcCommerc
     */
    public function setFitoutCompensation($fitoutCompensation)
    {
        $this->fitoutCompensation = $fitoutCompensation;

        return $this;
    }

    /**
     * Get fitoutCompensation
     *
     * @return float 
     */
    public function getFitoutCompensation()
    {
        return $this->fitoutCompensation;
    }

    /**
     * Set utilityCost
     *
     * @param float $utilityCost
     * @return SpkOffOcCommerc
     */
    public function setUtilityCost($utilityCost)
    {
        $this->utilityCost = $utilityCost;

        return $this;
    }

    /**
     * Get utilityCost
     *
     * @return float 
     */
    public function getUtilityCost()
    {
        return $this->utilityCost;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return SpkOffOcCommerc
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
     * Set commercialTerms
     *
     * @param string $commercialTerms
     * @return SpkOffOcCommerc
     */
    public function setCommercialTerms($commercialTerms)
    {
        $this->commercialTerms = $commercialTerms;

        return $this;
    }

    /**
     * Get commercialTerms
     *
     * @return string 
     */
    public function getCommercialTerms()
    {
        return $this->commercialTerms;
    }

    /**
     * Set utilityType
     *
     * @param string $utilityType
     * @return SpkOffOcCommerc
     */
    public function setUtilityType($utilityType)
    {
        $this->utilityType = $utilityType;

        return $this;
    }

    /**
     * Get utilityType
     *
     * @return string 
     */
    public function getUtilityType()
    {
        return $this->utilityType;
    }

    /**
     * Set rentalHolidays
     *
     * @param string $rentalHolidays
     * @return SpkOffOcCommerc
     */
    public function setRentalHolidays($rentalHolidays)
    {
        $this->rentalHolidays = $rentalHolidays;

        return $this;
    }

    /**
     * Get rentalHolidays
     *
     * @return string 
     */
    public function getRentalHolidays()
    {
        return $this->rentalHolidays;
    }

    /**
     * Set yield
     *
     * @param float $yield
     * @return SpkOffOcCommerc
     */
    public function setYield($yield)
    {
        $this->yield = $yield;

        return $this;
    }

    /**
     * Get yield
     *
     * @return float 
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * Set oppStructure
     *
     * @param string $oppStructure
     * @return SpkOffOcCommerc
     */
    public function setOppStructure($oppStructure)
    {
        $this->oppStructure = $oppStructure;

        return $this;
    }

    /**
     * Get oppStructure
     *
     * @return string 
     */
    public function getOppStructure()
    {
        return $this->oppStructure;
    }

    /**
     * Set ownershipCert
     *
     * @param string $ownershipCert
     * @return SpkOffOcCommerc
     */
    public function setOwnershipCert($ownershipCert)
    {
        $this->ownershipCert = $ownershipCert;

        return $this;
    }

    /**
     * Get ownershipCert
     *
     * @return string 
     */
    public function getOwnershipCert()
    {
        return $this->ownershipCert;
    }

    /**
     * Set ownershipType
     *
     * @param string $ownershipType
     * @return SpkOffOcCommerc
     */
    public function setOwnershipType($ownershipType)
    {
        $this->ownershipType = $ownershipType;

        return $this;
    }

    /**
     * Get ownershipType
     *
     * @return string 
     */
    public function getOwnershipType()
    {
        return $this->ownershipType;
    }

    /**
     * Set rentalStatusEng
     *
     * @param string $rentalStatusEng
     * @return SpkOffOcCommerc
     */
    public function setRentalStatusEng($rentalStatusEng)
    {
        $this->rentalStatusEng = $rentalStatusEng;

        return $this;
    }

    /**
     * Get rentalStatusEng
     *
     * @return string 
     */
    public function getRentalStatusEng()
    {
        return $this->rentalStatusEng;
    }

    /**
     * Set rentalStatusRus
     *
     * @param string $rentalStatusRus
     * @return SpkOffOcCommerc
     */
    public function setRentalStatusRus($rentalStatusRus)
    {
        $this->rentalStatusRus = $rentalStatusRus;

        return $this;
    }

    /**
     * Get rentalStatusRus
     *
     * @return string 
     */
    public function getRentalStatusRus()
    {
        return $this->rentalStatusRus;
    }

    /**
     * Set rentalRateAvg
     *
     * @param float $rentalRateAvg
     * @return SpkOffOcCommerc
     */
    public function setRentalRateAvg($rentalRateAvg)
    {
        $this->rentalRateAvg = $rentalRateAvg;

        return $this;
    }

    /**
     * Get rentalRateAvg
     *
     * @return float 
     */
    public function getRentalRateAvg()
    {
        return $this->rentalRateAvg;
    }

    /**
     * Set rraCur
     *
     * @param string $rraCur
     * @return SpkOffOcCommerc
     */
    public function setRraCur($rraCur)
    {
        $this->rraCur = $rraCur;

        return $this;
    }

    /**
     * Get rraCur
     *
     * @return string 
     */
    public function getRraCur()
    {
        return $this->rraCur;
    }

    /**
     * Set priceTaSqm
     *
     * @param float $priceTaSqm
     * @return SpkOffOcCommerc
     */
    public function setPriceTaSqm($priceTaSqm)
    {
        $this->priceTaSqm = $priceTaSqm;

        return $this;
    }

    /**
     * Get priceTaSqm
     *
     * @return float 
     */
    public function getPriceTaSqm()
    {
        return $this->priceTaSqm;
    }

    /**
     * Set priceLaSqm
     *
     * @param float $priceLaSqm
     * @return SpkOffOcCommerc
     */
    public function setPriceLaSqm($priceLaSqm)
    {
        $this->priceLaSqm = $priceLaSqm;

        return $this;
    }

    /**
     * Get priceLaSqm
     *
     * @return float 
     */
    public function getPriceLaSqm()
    {
        return $this->priceLaSqm;
    }

    /**
     * Set commercialTermsSale
     *
     * @param string $commercialTermsSale
     * @return SpkOffOcCommerc
     */
    public function setCommercialTermsSale($commercialTermsSale)
    {
        $this->commercialTermsSale = $commercialTermsSale;

        return $this;
    }

    /**
     * Get commercialTermsSale
     *
     * @return string 
     */
    public function getCommercialTermsSale()
    {
        return $this->commercialTermsSale;
    }
}
