<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndObjCommerc
 *
 */
class SpkIndObjCommerc
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
    private $leaseOfficeMin;

    /**
     * @var string
     *
     */
    private $leaseOfficeMax;

    /**
     * @var string
     *
     */
    private $leaseIndustrialMin;

    /**
     * @var string
     *
     */
    private $leaseIndustrialMax;

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
    private $costPallet;

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
    private $saleCostMin;

    /**
     * @var string
     *
     */
    private $saleCostMax;

    /**
     * @var float
     *
     */
    private $termOfLease;

    /**
     * @var string
     *
     */
    private $indexation;

    /**
     * @var float
     *
     */
    private $leaseMesoninMin;

    /**
     * @var float
     *
     */
    private $leaseMesoninMax;

    /**
     * @var float
     *
     */
    private $kfCommission;

    /**
     * @var string
     *
     */
    private $leaseContract;

    /**
     * @var string
     *
     */
    private $leaseIndustrial;

    /**
     * @var string
     *
     */
    private $minleaseterm;

    /**
     * @var string
     *
     */
    private $operationExpType;

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
    private $rentStorageCurrency;

    /**
     * @var string
     *
     */
    private $rentOfficeCurrency;

    /**
     * @var string
     *
     */
    private $rentMezzanineCurrency;

    /**
     * @var string
     *
     */
    private $rentIndustrialCurrency;

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
     * @var string
     *
     */
    private $loadUnloadCurrency;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * Set leaseOfficeMin
     *
     * @param string $leaseOfficeMin
     * @return SpkIndObjCommerc
     */
    public function setLeaseOfficeMin($leaseOfficeMin)
    {
        $this->leaseOfficeMin = $leaseOfficeMin;

        return $this;
    }

    /**
     * Get leaseOfficeMin
     *
     * @return string 
     */
    public function getLeaseOfficeMin()
    {
        return $this->leaseOfficeMin;
    }

    /**
     * Set leaseOfficeMax
     *
     * @param string $leaseOfficeMax
     * @return SpkIndObjCommerc
     */
    public function setLeaseOfficeMax($leaseOfficeMax)
    {
        $this->leaseOfficeMax = $leaseOfficeMax;

        return $this;
    }

    /**
     * Get leaseOfficeMax
     *
     * @return string 
     */
    public function getLeaseOfficeMax()
    {
        return $this->leaseOfficeMax;
    }

    /**
     * Set leaseIndustrialMin
     *
     * @param string $leaseIndustrialMin
     * @return SpkIndObjCommerc
     */
    public function setLeaseIndustrialMin($leaseIndustrialMin)
    {
        $this->leaseIndustrialMin = $leaseIndustrialMin;

        return $this;
    }

    /**
     * Get leaseIndustrialMin
     *
     * @return string 
     */
    public function getLeaseIndustrialMin()
    {
        return $this->leaseIndustrialMin;
    }

    /**
     * Set leaseIndustrialMax
     *
     * @param string $leaseIndustrialMax
     * @return SpkIndObjCommerc
     */
    public function setLeaseIndustrialMax($leaseIndustrialMax)
    {
        $this->leaseIndustrialMax = $leaseIndustrialMax;

        return $this;
    }

    /**
     * Get leaseIndustrialMax
     *
     * @return string 
     */
    public function getLeaseIndustrialMax()
    {
        return $this->leaseIndustrialMax;
    }

    /**
     * Set municipalCost
     *
     * @param string $municipalCost
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * Set costPallet
     *
     * @param string $costPallet
     * @return SpkIndObjCommerc
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
     * Set loadUnloadCost
     *
     * @param string $loadUnloadCost
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * Set saleCostMin
     *
     * @param string $saleCostMin
     * @return SpkIndObjCommerc
     */
    public function setSaleCostMin($saleCostMin)
    {
        $this->saleCostMin = $saleCostMin;

        return $this;
    }

    /**
     * Get saleCostMin
     *
     * @return string 
     */
    public function getSaleCostMin()
    {
        return $this->saleCostMin;
    }

    /**
     * Set saleCostMax
     *
     * @param string $saleCostMax
     * @return SpkIndObjCommerc
     */
    public function setSaleCostMax($saleCostMax)
    {
        $this->saleCostMax = $saleCostMax;

        return $this;
    }

    /**
     * Get saleCostMax
     *
     * @return string 
     */
    public function getSaleCostMax()
    {
        return $this->saleCostMax;
    }

    /**
     * Set termOfLease
     *
     * @param float $termOfLease
     * @return SpkIndObjCommerc
     */
    public function setTermOfLease($termOfLease)
    {
        $this->termOfLease = $termOfLease;

        return $this;
    }

    /**
     * Get termOfLease
     *
     * @return float 
     */
    public function getTermOfLease()
    {
        return $this->termOfLease;
    }

    /**
     * Set indexation
     *
     * @param string $indexation
     * @return SpkIndObjCommerc
     */
    public function setIndexation($indexation)
    {
        $this->indexation = $indexation;

        return $this;
    }

    /**
     * Get indexation
     *
     * @return string 
     */
    public function getIndexation()
    {
        return $this->indexation;
    }

    /**
     * Set leaseMesoninMin
     *
     * @param float $leaseMesoninMin
     * @return SpkIndObjCommerc
     */
    public function setLeaseMesoninMin($leaseMesoninMin)
    {
        $this->leaseMesoninMin = $leaseMesoninMin;

        return $this;
    }

    /**
     * Get leaseMesoninMin
     *
     * @return float 
     */
    public function getLeaseMesoninMin()
    {
        return $this->leaseMesoninMin;
    }

    /**
     * Set leaseMesoninMax
     *
     * @param float $leaseMesoninMax
     * @return SpkIndObjCommerc
     */
    public function setLeaseMesoninMax($leaseMesoninMax)
    {
        $this->leaseMesoninMax = $leaseMesoninMax;

        return $this;
    }

    /**
     * Get leaseMesoninMax
     *
     * @return float 
     */
    public function getLeaseMesoninMax()
    {
        return $this->leaseMesoninMax;
    }

    /**
     * Set kfCommission
     *
     * @param float $kfCommission
     * @return SpkIndObjCommerc
     */
    public function setKfCommission($kfCommission)
    {
        $this->kfCommission = $kfCommission;

        return $this;
    }

    /**
     * Get kfCommission
     *
     * @return float 
     */
    public function getKfCommission()
    {
        return $this->kfCommission;
    }

    /**
     * Set leaseContract
     *
     * @param string $leaseContract
     * @return SpkIndObjCommerc
     */
    public function setLeaseContract($leaseContract)
    {
        $this->leaseContract = $leaseContract;

        return $this;
    }

    /**
     * Get leaseContract
     *
     * @return string 
     */
    public function getLeaseContract()
    {
        return $this->leaseContract;
    }

    /**
     * Set leaseIndustrial
     *
     * @param string $leaseIndustrial
     * @return SpkIndObjCommerc
     */
    public function setLeaseIndustrial($leaseIndustrial)
    {
        $this->leaseIndustrial = $leaseIndustrial;

        return $this;
    }

    /**
     * Get leaseIndustrial
     *
     * @return string 
     */
    public function getLeaseIndustrial()
    {
        return $this->leaseIndustrial;
    }

    /**
     * Set minleaseterm
     *
     * @param string $minleaseterm
     * @return SpkIndObjCommerc
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
     * Set operationExpType
     *
     * @param string $operationExpType
     * @return SpkIndObjCommerc
     */
    public function setOperationExpType($operationExpType)
    {
        $this->operationExpType = $operationExpType;

        return $this;
    }

    /**
     * Get operationExpType
     *
     * @return string 
     */
    public function getOperationExpType()
    {
        return $this->operationExpType;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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
     * Set rentStorageCurrency
     *
     * @param string $rentStorageCurrency
     * @return SpkIndObjCommerc
     */
    public function setRentStorageCurrency($rentStorageCurrency)
    {
        $this->rentStorageCurrency = $rentStorageCurrency;

        return $this;
    }

    /**
     * Get rentStorageCurrency
     *
     * @return string 
     */
    public function getRentStorageCurrency()
    {
        return $this->rentStorageCurrency;
    }

    /**
     * Set rentOfficeCurrency
     *
     * @param string $rentOfficeCurrency
     * @return SpkIndObjCommerc
     */
    public function setRentOfficeCurrency($rentOfficeCurrency)
    {
        $this->rentOfficeCurrency = $rentOfficeCurrency;

        return $this;
    }

    /**
     * Get rentOfficeCurrency
     *
     * @return string 
     */
    public function getRentOfficeCurrency()
    {
        return $this->rentOfficeCurrency;
    }

    /**
     * Set rentMezzanineCurrency
     *
     * @param string $rentMezzanineCurrency
     * @return SpkIndObjCommerc
     */
    public function setRentMezzanineCurrency($rentMezzanineCurrency)
    {
        $this->rentMezzanineCurrency = $rentMezzanineCurrency;

        return $this;
    }

    /**
     * Get rentMezzanineCurrency
     *
     * @return string 
     */
    public function getRentMezzanineCurrency()
    {
        return $this->rentMezzanineCurrency;
    }

    /**
     * Set rentIndustrialCurrency
     *
     * @param string $rentIndustrialCurrency
     * @return SpkIndObjCommerc
     */
    public function setRentIndustrialCurrency($rentIndustrialCurrency)
    {
        $this->rentIndustrialCurrency = $rentIndustrialCurrency;

        return $this;
    }

    /**
     * Get rentIndustrialCurrency
     *
     * @return string 
     */
    public function getRentIndustrialCurrency()
    {
        return $this->rentIndustrialCurrency;
    }

    /**
     * Set utilityCurrency
     *
     * @param string $utilityCurrency
     * @return SpkIndObjCommerc
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
     * @return SpkIndObjCommerc
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

    /**
     * Set loadUnloadCurrency
     *
     * @param string $loadUnloadCurrency
     * @return SpkIndObjCommerc
     */
    public function setLoadUnloadCurrency($loadUnloadCurrency)
    {
        $this->loadUnloadCurrency = $loadUnloadCurrency;

        return $this;
    }

    /**
     * Get loadUnloadCurrency
     *
     * @return string 
     */
    public function getLoadUnloadCurrency()
    {
        return $this->loadUnloadCurrency;
    }
}
