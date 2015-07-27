<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBkCommerc
 *
 */
class SpkIndBkCommerc
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
    private $leaseMin;

    /**
     * @var string
     *
     */
    private $leaseMax;

    /**
     * @var string
     *
     */
    private $saleMin;

    /**
     * @var string
     *
     */
    private $saleMax;

    /**
     * @var string
     *
     */
    private $municipalCost;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var integer
     *
     */
    private $insuranceDeposit;

    /**
     * @var string
     *
     */
    private $loadUnloadCost;

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
     * @var string
     *
     */
    private $leaseMesonin;

    /**
     * @var string
     *
     */
    private $rentOffice;

    /**
     * @var string
     *
     */
    private $rentStorage;

    /**
     * @var string
     *
     */
    private $costPallet;

    /**
     * @var string
     *
     */
    private $rentIndustrial;

    /**
     * @var string
     *
     */
    private $rentOfficeMin;

    /**
     * @var string
     *
     */
    private $rentStorageMin;

    /**
     * @var string
     *
     */
    private $rentIndustrialMin;

    /**
     * @var string
     *
     */
    private $saleAll;

    /**
     * @var string
     *
     */
    private $minleaseterm;

    /**
     * @var float
     *
     */
    private $baseRentDay;

    /**
     * @var string
     *
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     */
    private $municipalCostMax;

    /**
     * @var string
     *
     */
    private $operatingExpType;

    /**
     * @var string
     *
     */
    private $vatType;

    /**
     * @var string
     *
     */
    private $utilityType;

    /**
     * @var string
     *
     */
    private $commercialTerms;

    /**
     * @var string
     *
     */
    private $saleType;

    /**
     * @var string
     *
     */
    private $storageCurrency;

    /**
     * @var string
     *
     */
    private $officeCurrency;

    /**
     * @var string
     *
     */
    private $mezzanineCurrency;

    /**
     * @var string
     *
     */
    private $indCurrency;

    /**
     * @var string
     *
     */
    private $costCurrency;

    /**
     * @var string
     *
     */
    private $costSqmCurrency;

    /**
     * @var string
     *
     */
    private $loadCurrency;

    /**
     * @var string
     *
     */
    private $utilityCurrency;

    /**
     * @var string
     *
     */
    private $opexCurrency;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndBkCommerc
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
     * @return SpkIndBkCommerc
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
     * @return SpkIndBkCommerc
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
     * @return SpkIndBkCommerc
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
     * @return SpkIndBkCommerc
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
     * Set leaseMin
     *
     * @param string $leaseMin
     * @return SpkIndBkCommerc
     */
    public function setLeaseMin($leaseMin)
    {
        $this->leaseMin = $leaseMin;

        return $this;
    }

    /**
     * Get leaseMin
     *
     * @return string 
     */
    public function getLeaseMin()
    {
        return $this->leaseMin;
    }

    /**
     * Set leaseMax
     *
     * @param string $leaseMax
     * @return SpkIndBkCommerc
     */
    public function setLeaseMax($leaseMax)
    {
        $this->leaseMax = $leaseMax;

        return $this;
    }

    /**
     * Get leaseMax
     *
     * @return string 
     */
    public function getLeaseMax()
    {
        return $this->leaseMax;
    }

    /**
     * Set saleMin
     *
     * @param string $saleMin
     * @return SpkIndBkCommerc
     */
    public function setSaleMin($saleMin)
    {
        $this->saleMin = $saleMin;

        return $this;
    }

    /**
     * Get saleMin
     *
     * @return string 
     */
    public function getSaleMin()
    {
        return $this->saleMin;
    }

    /**
     * Set saleMax
     *
     * @param string $saleMax
     * @return SpkIndBkCommerc
     */
    public function setSaleMax($saleMax)
    {
        $this->saleMax = $saleMax;

        return $this;
    }

    /**
     * Get saleMax
     *
     * @return string 
     */
    public function getSaleMax()
    {
        return $this->saleMax;
    }

    /**
     * Set municipalCost
     *
     * @param string $municipalCost
     * @return SpkIndBkCommerc
     */
    public function setMunicipalCost($municipalCost)
    {
        $this->municipalCost = $municipalCost;

        return $this;
    }

    /**
     * Get municipalCost
     *
     * @return string 
     */
    public function getMunicipalCost()
    {
        return $this->municipalCost;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkIndBkCommerc
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set insuranceDeposit
     *
     * @param integer $insuranceDeposit
     * @return SpkIndBkCommerc
     */
    public function setInsuranceDeposit($insuranceDeposit)
    {
        $this->insuranceDeposit = $insuranceDeposit;

        return $this;
    }

    /**
     * Get insuranceDeposit
     *
     * @return integer 
     */
    public function getInsuranceDeposit()
    {
        return $this->insuranceDeposit;
    }

    /**
     * Set loadUnloadCost
     *
     * @param string $loadUnloadCost
     * @return SpkIndBkCommerc
     */
    public function setLoadUnloadCost($loadUnloadCost)
    {
        $this->loadUnloadCost = $loadUnloadCost;

        return $this;
    }

    /**
     * Get loadUnloadCost
     *
     * @return string 
     */
    public function getLoadUnloadCost()
    {
        return $this->loadUnloadCost;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkIndBkCommerc
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
     * @return SpkIndBkCommerc
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
     * Set leaseMesonin
     *
     * @param string $leaseMesonin
     * @return SpkIndBkCommerc
     */
    public function setLeaseMesonin($leaseMesonin)
    {
        $this->leaseMesonin = $leaseMesonin;

        return $this;
    }

    /**
     * Get leaseMesonin
     *
     * @return string 
     */
    public function getLeaseMesonin()
    {
        return $this->leaseMesonin;
    }

    /**
     * Set rentOffice
     *
     * @param string $rentOffice
     * @return SpkIndBkCommerc
     */
    public function setRentOffice($rentOffice)
    {
        $this->rentOffice = $rentOffice;

        return $this;
    }

    /**
     * Get rentOffice
     *
     * @return string 
     */
    public function getRentOffice()
    {
        return $this->rentOffice;
    }

    /**
     * Set rentStorage
     *
     * @param string $rentStorage
     * @return SpkIndBkCommerc
     */
    public function setRentStorage($rentStorage)
    {
        $this->rentStorage = $rentStorage;

        return $this;
    }

    /**
     * Get rentStorage
     *
     * @return string 
     */
    public function getRentStorage()
    {
        return $this->rentStorage;
    }

    /**
     * Set costPallet
     *
     * @param string $costPallet
     * @return SpkIndBkCommerc
     */
    public function setCostPallet($costPallet)
    {
        $this->costPallet = $costPallet;

        return $this;
    }

    /**
     * Get costPallet
     *
     * @return string 
     */
    public function getCostPallet()
    {
        return $this->costPallet;
    }

    /**
     * Set rentIndustrial
     *
     * @param string $rentIndustrial
     * @return SpkIndBkCommerc
     */
    public function setRentIndustrial($rentIndustrial)
    {
        $this->rentIndustrial = $rentIndustrial;

        return $this;
    }

    /**
     * Get rentIndustrial
     *
     * @return string 
     */
    public function getRentIndustrial()
    {
        return $this->rentIndustrial;
    }

    /**
     * Set rentOfficeMin
     *
     * @param string $rentOfficeMin
     * @return SpkIndBkCommerc
     */
    public function setRentOfficeMin($rentOfficeMin)
    {
        $this->rentOfficeMin = $rentOfficeMin;

        return $this;
    }

    /**
     * Get rentOfficeMin
     *
     * @return string 
     */
    public function getRentOfficeMin()
    {
        return $this->rentOfficeMin;
    }

    /**
     * Set rentStorageMin
     *
     * @param string $rentStorageMin
     * @return SpkIndBkCommerc
     */
    public function setRentStorageMin($rentStorageMin)
    {
        $this->rentStorageMin = $rentStorageMin;

        return $this;
    }

    /**
     * Get rentStorageMin
     *
     * @return string 
     */
    public function getRentStorageMin()
    {
        return $this->rentStorageMin;
    }

    /**
     * Set rentIndustrialMin
     *
     * @param string $rentIndustrialMin
     * @return SpkIndBkCommerc
     */
    public function setRentIndustrialMin($rentIndustrialMin)
    {
        $this->rentIndustrialMin = $rentIndustrialMin;

        return $this;
    }

    /**
     * Get rentIndustrialMin
     *
     * @return string 
     */
    public function getRentIndustrialMin()
    {
        return $this->rentIndustrialMin;
    }

    /**
     * Set saleAll
     *
     * @param string $saleAll
     * @return SpkIndBkCommerc
     */
    public function setSaleAll($saleAll)
    {
        $this->saleAll = $saleAll;

        return $this;
    }

    /**
     * Get saleAll
     *
     * @return string 
     */
    public function getSaleAll()
    {
        return $this->saleAll;
    }

    /**
     * Set minleaseterm
     *
     * @param string $minleaseterm
     * @return SpkIndBkCommerc
     */
    public function setMinleaseterm($minleaseterm)
    {
        $this->minleaseterm = $minleaseterm;

        return $this;
    }

    /**
     * Get minleaseterm
     *
     * @return string 
     */
    public function getMinleaseterm()
    {
        return $this->minleaseterm;
    }

    /**
     * Set baseRentDay
     *
     * @param float $baseRentDay
     * @return SpkIndBkCommerc
     */
    public function setBaseRentDay($baseRentDay)
    {
        $this->baseRentDay = $baseRentDay;

        return $this;
    }

    /**
     * Get baseRentDay
     *
     * @return float 
     */
    public function getBaseRentDay()
    {
        return $this->baseRentDay;
    }

    /**
     * Set operationalCostMax
     *
     * @param string $operationalCostMax
     * @return SpkIndBkCommerc
     */
    public function setOperationalCostMax($operationalCostMax)
    {
        $this->operationalCostMax = $operationalCostMax;

        return $this;
    }

    /**
     * Get operationalCostMax
     *
     * @return string 
     */
    public function getOperationalCostMax()
    {
        return $this->operationalCostMax;
    }

    /**
     * Set municipalCostMax
     *
     * @param string $municipalCostMax
     * @return SpkIndBkCommerc
     */
    public function setMunicipalCostMax($municipalCostMax)
    {
        $this->municipalCostMax = $municipalCostMax;

        return $this;
    }

    /**
     * Get municipalCostMax
     *
     * @return string 
     */
    public function getMunicipalCostMax()
    {
        return $this->municipalCostMax;
    }

    /**
     * Set operatingExpType
     *
     * @param string $operatingExpType
     * @return SpkIndBkCommerc
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
     * Set vatType
     *
     * @param string $vatType
     * @return SpkIndBkCommerc
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
     * Set utilityType
     *
     * @param string $utilityType
     * @return SpkIndBkCommerc
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
     * Set commercialTerms
     *
     * @param string $commercialTerms
     * @return SpkIndBkCommerc
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
     * Set saleType
     *
     * @param string $saleType
     * @return SpkIndBkCommerc
     */
    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;

        return $this;
    }

    /**
     * Get saleType
     *
     * @return string 
     */
    public function getSaleType()
    {
        return $this->saleType;
    }

    /**
     * Set storageCurrency
     *
     * @param string $storageCurrency
     * @return SpkIndBkCommerc
     */
    public function setStorageCurrency($storageCurrency)
    {
        $this->storageCurrency = $storageCurrency;

        return $this;
    }

    /**
     * Get storageCurrency
     *
     * @return string 
     */
    public function getStorageCurrency()
    {
        return $this->storageCurrency;
    }

    /**
     * Set officeCurrency
     *
     * @param string $officeCurrency
     * @return SpkIndBkCommerc
     */
    public function setOfficeCurrency($officeCurrency)
    {
        $this->officeCurrency = $officeCurrency;

        return $this;
    }

    /**
     * Get officeCurrency
     *
     * @return string 
     */
    public function getOfficeCurrency()
    {
        return $this->officeCurrency;
    }

    /**
     * Set mezzanineCurrency
     *
     * @param string $mezzanineCurrency
     * @return SpkIndBkCommerc
     */
    public function setMezzanineCurrency($mezzanineCurrency)
    {
        $this->mezzanineCurrency = $mezzanineCurrency;

        return $this;
    }

    /**
     * Get mezzanineCurrency
     *
     * @return string 
     */
    public function getMezzanineCurrency()
    {
        return $this->mezzanineCurrency;
    }

    /**
     * Set indCurrency
     *
     * @param string $indCurrency
     * @return SpkIndBkCommerc
     */
    public function setIndCurrency($indCurrency)
    {
        $this->indCurrency = $indCurrency;

        return $this;
    }

    /**
     * Get indCurrency
     *
     * @return string 
     */
    public function getIndCurrency()
    {
        return $this->indCurrency;
    }

    /**
     * Set costCurrency
     *
     * @param string $costCurrency
     * @return SpkIndBkCommerc
     */
    public function setCostCurrency($costCurrency)
    {
        $this->costCurrency = $costCurrency;

        return $this;
    }

    /**
     * Get costCurrency
     *
     * @return string 
     */
    public function getCostCurrency()
    {
        return $this->costCurrency;
    }

    /**
     * Set costSqmCurrency
     *
     * @param string $costSqmCurrency
     * @return SpkIndBkCommerc
     */
    public function setCostSqmCurrency($costSqmCurrency)
    {
        $this->costSqmCurrency = $costSqmCurrency;

        return $this;
    }

    /**
     * Get costSqmCurrency
     *
     * @return string 
     */
    public function getCostSqmCurrency()
    {
        return $this->costSqmCurrency;
    }

    /**
     * Set loadCurrency
     *
     * @param string $loadCurrency
     * @return SpkIndBkCommerc
     */
    public function setLoadCurrency($loadCurrency)
    {
        $this->loadCurrency = $loadCurrency;

        return $this;
    }

    /**
     * Get loadCurrency
     *
     * @return string 
     */
    public function getLoadCurrency()
    {
        return $this->loadCurrency;
    }

    /**
     * Set utilityCurrency
     *
     * @param string $utilityCurrency
     * @return SpkIndBkCommerc
     */
    public function setUtilityCurrency($utilityCurrency)
    {
        $this->utilityCurrency = $utilityCurrency;

        return $this;
    }

    /**
     * Get utilityCurrency
     *
     * @return string 
     */
    public function getUtilityCurrency()
    {
        return $this->utilityCurrency;
    }

    /**
     * Set opexCurrency
     *
     * @param string $opexCurrency
     * @return SpkIndBkCommerc
     */
    public function setOpexCurrency($opexCurrency)
    {
        $this->opexCurrency = $opexCurrency;

        return $this;
    }

    /**
     * Get opexCurrency
     *
     * @return string 
     */
    public function getOpexCurrency()
    {
        return $this->opexCurrency;
    }
}
