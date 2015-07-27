<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequests
 *
 */
class SpkRequests
{
    /**
     * @var string
     *
     */
    private $spkRequestsid;

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
    private $managerid;

    /**
     * @var string
     *
     */
    private $department;

    /**
     * @var string
     *
     */
    private $reqType;

    /**
     * @var string
     *
     */
    private $subtype;

    /**
     * @var string
     *
     */
    private $status;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $requirements;

    /**
     * @var string
     *
     */
    private $regiondevelopment;

    /**
     * @var string
     *
     */
    private $terminals;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $areaKf;

    /**
     * @var string
     *
     */
    private $areaMoscow;

    /**
     * @var string
     *
     */
    private $avgbill;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var string
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $decorating;

    /**
     * @var float
     *
     */
    private $distanceToMkad;

    /**
     * @var string
     *
     */
    private $decorationStyle;

    /**
     * @var string
     *
     */
    private $direction;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $industry;

    /**
     * @var string
     *
     */
    private $isCarPlace;

    /**
     * @var string
     *
     */
    private $isDecoration;

    /**
     * @var string
     *
     */
    private $isElectricity;

    /**
     * @var string
     *
     */
    private $isFurniture;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     */
    private $isParking;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isTimberland;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var string
     *
     */
    private $market;

    /**
     * @var string
     *
     */
    private $numberPerson;

    /**
     * @var string
     *
     */
    private $objectType;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $regionNotes;

    /**
     * @var string
     *
     */
    private $regionid;

    /**
     * @var string
     *
     */
    private $reqDepartment;

    /**
     * @var string
     *
     */
    private $reqSubtype;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var float
     *
     */
    private $roomHeight;

    /**
     * @var float
     *
     */
    private $roomsCountMax;

    /**
     * @var float
     *
     */
    private $roomsCountMin;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $shopename;

    /**
     * @var string
     *
     */
    private $shosse;

    /**
     * @var string
     *
     */
    private $sourceid;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $standing;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $warehouseType;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var \DateTime
     *
     */
    private $convertedDate;

    /**
     * @var string
     *
     */
    private $importSource;

    /**
     * @var string
     *
     */
    private $duplicate;

    /**
     * @var string
     *
     */
    private $countryStatus;

    /**
     * @var string
     *
     */
    private $countryHighway;

    /**
     * @var string
     *
     */
    private $subdivision;

    /**
     * @var string
     *
     */
    private $notAvailable;

    /**
     * @var string
     *
     */
    private $isLand;

    /**
     * @var string
     *
     */
    private $isWarehouse;

    /**
     * @var string
     *
     */
    private $industrialHighway;

    /**
     * @var string
     *
     */
    private $isFirst;

    /**
     * @var string
     *
     */
    private $isRespStorage;

    /**
     * @var string
     *
     */
    private $marketSegment;

    /**
     * @var \DateTime
     *
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     */
    private $toDate;

    /**
     * @var string
     *
     */
    private $reportForm;

    /**
     * @var string
     *
     */
    private $reportLanguage;

    /**
     * @var string
     *
     */
    private $cityid;

    /**
     * @var string
     *
     */
    private $curCommission;

    /**
     * @var string
     *
     */
    private $valServices;

    /**
     * @var string
     *
     */
    private $valTarget;

    /**
     * @var string
     *
     */
    private $valSubtarget;

    /**
     * @var string
     *
     */
    private $invSubtype;

    /**
     * @var string
     *
     */
    private $invStage;

    /**
     * @var string
     *
     */
    private $invSubstage;

    /**
     * @var string
     *
     */
    private $invOwnership;

    /**
     * @var string
     *
     */
    private $invCapitalisation;

    /**
     * @var string
     *
     */
    private $invVatrep;

    /**
     * @var string
     *
     */
    private $invOperatingincome;

    /**
     * @var string
     *
     */
    private $invBook;

    /**
     * @var string
     *
     */
    private $bedroomsMax;

    /**
     * @var string
     *
     */
    private $bedroomsMin;

    /**
     * @var string
     *
     */
    private $country;

    /**
     * @var string
     *
     */
    private $seaview;

    /**
     * @var string
     *
     */
    private $waterfront;

    /**
     * @var string
     *
     */
    private $invCity;

    /**
     * @var string
     *
     */
    private $invCityType;

    /**
     * @var string
     *
     */
    private $responseid;

    /**
     * @var string
     *
     */
    private $websiteid;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var string
     *
     */
    private $districtid;

    /**
     * @var string
     *
     */
    private $retailType;

    /**
     * @var string
     *
     */
    private $retailAgencyContract;

    /**
     * @var float
     *
     */
    private $palletMin;

    /**
     * @var float
     *
     */
    private $palletMax;

    /**
     * @var float
     *
     */
    private $cbmMin;

    /**
     * @var float
     *
     */
    private $cbmMax;

    /**
     * @var float
     *
     */
    private $massMin;

    /**
     * @var float
     *
     */
    private $massMax;

    /**
     * @var float
     *
     */
    private $distanceToCity;

    /**
     * @var string
     *
     */
    private $storageType;

    /**
     * @var string
     *
     */
    private $storageMethod;

    /**
     * @var string
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $refferalid;

    /**
     * @var \DateTime
     *
     */
    private $deadline;

    /**
     * @var string
     *
     */
    private $prStatus;

    /**
     * @var string
     *
     */
    private $prCategory;

    /**
     * @var string
     *
     */
    private $isRenegotiation;

    /**
     * @var float
     *
     */
    private $budgetRurMin;

    /**
     * @var float
     *
     */
    private $budgetRurMax;

    /**
     * @var float
     *
     */
    private $budgetEuroMin;

    /**
     * @var float
     *
     */
    private $budgetEuroMax;

    /**
     * @var float
     *
     */
    private $budgetUsdMin;

    /**
     * @var float
     *
     */
    private $budgetUsdMax;

    /**
     * @var string
     *
     */
    private $currency;

    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $offNameRus;

    /**
     * @var string
     *
     */
    private $offNameEng;

    /**
     * @var string
     *
     */
    private $offStatus;

    /**
     * @var string
     *
     */
    private $offStatusKf;

    /**
     * @var string
     *
     */
    private $offObjType;

    /**
     * @var string
     *
     */
    private $offDelivery;

    /**
     * @var integer
     *
     */
    private $offStoreyMin;

    /**
     * @var integer
     *
     */
    private $offStoreyMax;

    /**
     * @var float
     *
     */
    private $offTotalArea;

    /**
     * @var float
     *
     */
    private $offRentMin;

    /**
     * @var float
     *
     */
    private $offRentMax;

    /**
     * @var float
     *
     */
    private $offCostMin;

    /**
     * @var float
     *
     */
    private $offCostMax;

    /**
     * @var string
     *
     */
    private $offProvider;

    /**
     * @var string
     *
     */
    private $offPlaning;

    /**
     * @var integer
     *
     */
    private $offStepToMetro;

    /**
     * @var integer
     *
     */
    private $offParkingMin;

    /**
     * @var integer
     *
     */
    private $offParkingMax;

    /**
     * @var string
     *
     */
    private $offBuildStage;

    /**
     * @var integer
     *
     */
    private $offDelivYear;

    /**
     * @var integer
     *
     */
    private $offDelivQuarter;

    /**
     * @var float
     *
     */
    private $offMaxBlockArea;

    /**
     * @var \DateTime
     *
     */
    private $offUpdated;

    /**
     * @var string
     *
     */
    private $offIsListing;

    /**
     * @var string
     *
     */
    private $offDistrict;

    /**
     * @var string
     *
     */
    private $offDistrictMow;

    /**
     * @var string
     *
     */
    private $offStreetType;

    /**
     * @var string
     *
     */
    private $offMetro;

    /**
     * @var string
     *
     */
    private $offStreetid;

    /**
     * @var string
     *
     */
    private $targetAsq;

    /**
     * @var string
     *
     */
    private $ipoteka;

    /**
     * @var float
     *
     */
    private $distanceToMkadMax;

    /**
     * @var string
     *
     */
    private $offCostCurrency;



    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkRequests
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkRequests
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
     * @return SpkRequests
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
     * @return SpkRequests
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
     * @return SpkRequests
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
     * @return SpkRequests
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
     * Set department
     *
     * @param string $department
     * @return SpkRequests
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
     * Set reqType
     *
     * @param string $reqType
     * @return SpkRequests
     */
    public function setReqType($reqType)
    {
        $this->reqType = $reqType;

        return $this;
    }

    /**
     * Get reqType
     *
     * @return string 
     */
    public function getReqType()
    {
        return $this->reqType;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     * @return SpkRequests
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string 
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return SpkRequests
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return SpkRequests
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
     * Set notes
     *
     * @param string $notes
     * @return SpkRequests
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return SpkRequests
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set requirements
     *
     * @param string $requirements
     * @return SpkRequests
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * Get requirements
     *
     * @return string 
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Set regiondevelopment
     *
     * @param string $regiondevelopment
     * @return SpkRequests
     */
    public function setRegiondevelopment($regiondevelopment)
    {
        $this->regiondevelopment = $regiondevelopment;

        return $this;
    }

    /**
     * Get regiondevelopment
     *
     * @return string 
     */
    public function getRegiondevelopment()
    {
        return $this->regiondevelopment;
    }

    /**
     * Set terminals
     *
     * @param string $terminals
     * @return SpkRequests
     */
    public function setTerminals($terminals)
    {
        $this->terminals = $terminals;

        return $this;
    }

    /**
     * Get terminals
     *
     * @return string 
     */
    public function getTerminals()
    {
        return $this->terminals;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkRequests
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRequests
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
     * Set areaKf
     *
     * @param string $areaKf
     * @return SpkRequests
     */
    public function setAreaKf($areaKf)
    {
        $this->areaKf = $areaKf;

        return $this;
    }

    /**
     * Get areaKf
     *
     * @return string 
     */
    public function getAreaKf()
    {
        return $this->areaKf;
    }

    /**
     * Set areaMoscow
     *
     * @param string $areaMoscow
     * @return SpkRequests
     */
    public function setAreaMoscow($areaMoscow)
    {
        $this->areaMoscow = $areaMoscow;

        return $this;
    }

    /**
     * Get areaMoscow
     *
     * @return string 
     */
    public function getAreaMoscow()
    {
        return $this->areaMoscow;
    }

    /**
     * Set avgbill
     *
     * @param string $avgbill
     * @return SpkRequests
     */
    public function setAvgbill($avgbill)
    {
        $this->avgbill = $avgbill;

        return $this;
    }

    /**
     * Get avgbill
     *
     * @return string 
     */
    public function getAvgbill()
    {
        return $this->avgbill;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return SpkRequests
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    /**
     * Get bedrooms
     *
     * @return integer 
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return SpkRequests
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return SpkRequests
     */
    public function setBudgetMax($budgetMax)
    {
        $this->budgetMax = $budgetMax;

        return $this;
    }

    /**
     * Get budgetMax
     *
     * @return float 
     */
    public function getBudgetMax()
    {
        return $this->budgetMax;
    }

    /**
     * Set budgetMin
     *
     * @param float $budgetMin
     * @return SpkRequests
     */
    public function setBudgetMin($budgetMin)
    {
        $this->budgetMin = $budgetMin;

        return $this;
    }

    /**
     * Get budgetMin
     *
     * @return float 
     */
    public function getBudgetMin()
    {
        return $this->budgetMin;
    }

    /**
     * Set commission
     *
     * @param string $commission
     * @return SpkRequests
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set decorating
     *
     * @param string $decorating
     * @return SpkRequests
     */
    public function setDecorating($decorating)
    {
        $this->decorating = $decorating;

        return $this;
    }

    /**
     * Get decorating
     *
     * @return string 
     */
    public function getDecorating()
    {
        return $this->decorating;
    }

    /**
     * Set distanceToMkad
     *
     * @param float $distanceToMkad
     * @return SpkRequests
     */
    public function setDistanceToMkad($distanceToMkad)
    {
        $this->distanceToMkad = $distanceToMkad;

        return $this;
    }

    /**
     * Get distanceToMkad
     *
     * @return float 
     */
    public function getDistanceToMkad()
    {
        return $this->distanceToMkad;
    }

    /**
     * Set decorationStyle
     *
     * @param string $decorationStyle
     * @return SpkRequests
     */
    public function setDecorationStyle($decorationStyle)
    {
        $this->decorationStyle = $decorationStyle;

        return $this;
    }

    /**
     * Get decorationStyle
     *
     * @return string 
     */
    public function getDecorationStyle()
    {
        return $this->decorationStyle;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return SpkRequests
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return SpkRequests
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime 
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return SpkRequests
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set isCarPlace
     *
     * @param string $isCarPlace
     * @return SpkRequests
     */
    public function setIsCarPlace($isCarPlace)
    {
        $this->isCarPlace = $isCarPlace;

        return $this;
    }

    /**
     * Get isCarPlace
     *
     * @return string 
     */
    public function getIsCarPlace()
    {
        return $this->isCarPlace;
    }

    /**
     * Set isDecoration
     *
     * @param string $isDecoration
     * @return SpkRequests
     */
    public function setIsDecoration($isDecoration)
    {
        $this->isDecoration = $isDecoration;

        return $this;
    }

    /**
     * Get isDecoration
     *
     * @return string 
     */
    public function getIsDecoration()
    {
        return $this->isDecoration;
    }

    /**
     * Set isElectricity
     *
     * @param string $isElectricity
     * @return SpkRequests
     */
    public function setIsElectricity($isElectricity)
    {
        $this->isElectricity = $isElectricity;

        return $this;
    }

    /**
     * Get isElectricity
     *
     * @return string 
     */
    public function getIsElectricity()
    {
        return $this->isElectricity;
    }

    /**
     * Set isFurniture
     *
     * @param string $isFurniture
     * @return SpkRequests
     */
    public function setIsFurniture($isFurniture)
    {
        $this->isFurniture = $isFurniture;

        return $this;
    }

    /**
     * Get isFurniture
     *
     * @return string 
     */
    public function getIsFurniture()
    {
        return $this->isFurniture;
    }

    /**
     * Set isHeating
     *
     * @param string $isHeating
     * @return SpkRequests
     */
    public function setIsHeating($isHeating)
    {
        $this->isHeating = $isHeating;

        return $this;
    }

    /**
     * Get isHeating
     *
     * @return string 
     */
    public function getIsHeating()
    {
        return $this->isHeating;
    }

    /**
     * Set isLocalrailway
     *
     * @param string $isLocalrailway
     * @return SpkRequests
     */
    public function setIsLocalrailway($isLocalrailway)
    {
        $this->isLocalrailway = $isLocalrailway;

        return $this;
    }

    /**
     * Get isLocalrailway
     *
     * @return string 
     */
    public function getIsLocalrailway()
    {
        return $this->isLocalrailway;
    }

    /**
     * Set isParking
     *
     * @param string $isParking
     * @return SpkRequests
     */
    public function setIsParking($isParking)
    {
        $this->isParking = $isParking;

        return $this;
    }

    /**
     * Get isParking
     *
     * @return string 
     */
    public function getIsParking()
    {
        return $this->isParking;
    }

    /**
     * Set isRailway
     *
     * @param string $isRailway
     * @return SpkRequests
     */
    public function setIsRailway($isRailway)
    {
        $this->isRailway = $isRailway;

        return $this;
    }

    /**
     * Get isRailway
     *
     * @return string 
     */
    public function getIsRailway()
    {
        return $this->isRailway;
    }

    /**
     * Set isTimberland
     *
     * @param string $isTimberland
     * @return SpkRequests
     */
    public function setIsTimberland($isTimberland)
    {
        $this->isTimberland = $isTimberland;

        return $this;
    }

    /**
     * Get isTimberland
     *
     * @return string 
     */
    public function getIsTimberland()
    {
        return $this->isTimberland;
    }

    /**
     * Set landSquareMax
     *
     * @param float $landSquareMax
     * @return SpkRequests
     */
    public function setLandSquareMax($landSquareMax)
    {
        $this->landSquareMax = $landSquareMax;

        return $this;
    }

    /**
     * Get landSquareMax
     *
     * @return float 
     */
    public function getLandSquareMax()
    {
        return $this->landSquareMax;
    }

    /**
     * Set landSquareMin
     *
     * @param float $landSquareMin
     * @return SpkRequests
     */
    public function setLandSquareMin($landSquareMin)
    {
        $this->landSquareMin = $landSquareMin;

        return $this;
    }

    /**
     * Get landSquareMin
     *
     * @return float 
     */
    public function getLandSquareMin()
    {
        return $this->landSquareMin;
    }

    /**
     * Set market
     *
     * @param string $market
     * @return SpkRequests
     */
    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Get market
     *
     * @return string 
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * Set numberPerson
     *
     * @param string $numberPerson
     * @return SpkRequests
     */
    public function setNumberPerson($numberPerson)
    {
        $this->numberPerson = $numberPerson;

        return $this;
    }

    /**
     * Get numberPerson
     *
     * @return string 
     */
    public function getNumberPerson()
    {
        return $this->numberPerson;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return SpkRequests
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set officeSquareMax
     *
     * @param float $officeSquareMax
     * @return SpkRequests
     */
    public function setOfficeSquareMax($officeSquareMax)
    {
        $this->officeSquareMax = $officeSquareMax;

        return $this;
    }

    /**
     * Get officeSquareMax
     *
     * @return float 
     */
    public function getOfficeSquareMax()
    {
        return $this->officeSquareMax;
    }

    /**
     * Set officeSquareMin
     *
     * @param float $officeSquareMin
     * @return SpkRequests
     */
    public function setOfficeSquareMin($officeSquareMin)
    {
        $this->officeSquareMin = $officeSquareMin;

        return $this;
    }

    /**
     * Get officeSquareMin
     *
     * @return float 
     */
    public function getOfficeSquareMin()
    {
        return $this->officeSquareMin;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return SpkRequests
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return string 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return SpkRequests
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
     * Set period
     *
     * @param string $period
     * @return SpkRequests
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set preparedness
     *
     * @param string $preparedness
     * @return SpkRequests
     */
    public function setPreparedness($preparedness)
    {
        $this->preparedness = $preparedness;

        return $this;
    }

    /**
     * Get preparedness
     *
     * @return string 
     */
    public function getPreparedness()
    {
        return $this->preparedness;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkRequests
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set regionNotes
     *
     * @param string $regionNotes
     * @return SpkRequests
     */
    public function setRegionNotes($regionNotes)
    {
        $this->regionNotes = $regionNotes;

        return $this;
    }

    /**
     * Get regionNotes
     *
     * @return string 
     */
    public function getRegionNotes()
    {
        return $this->regionNotes;
    }

    /**
     * Set regionid
     *
     * @param string $regionid
     * @return SpkRequests
     */
    public function setRegionid($regionid)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return string 
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set reqDepartment
     *
     * @param string $reqDepartment
     * @return SpkRequests
     */
    public function setReqDepartment($reqDepartment)
    {
        $this->reqDepartment = $reqDepartment;

        return $this;
    }

    /**
     * Get reqDepartment
     *
     * @return string 
     */
    public function getReqDepartment()
    {
        return $this->reqDepartment;
    }

    /**
     * Set reqSubtype
     *
     * @param string $reqSubtype
     * @return SpkRequests
     */
    public function setReqSubtype($reqSubtype)
    {
        $this->reqSubtype = $reqSubtype;

        return $this;
    }

    /**
     * Get reqSubtype
     *
     * @return string 
     */
    public function getReqSubtype()
    {
        return $this->reqSubtype;
    }

    /**
     * Set rings
     *
     * @param string $rings
     * @return SpkRequests
     */
    public function setRings($rings)
    {
        $this->rings = $rings;

        return $this;
    }

    /**
     * Get rings
     *
     * @return string 
     */
    public function getRings()
    {
        return $this->rings;
    }

    /**
     * Set roomHeight
     *
     * @param float $roomHeight
     * @return SpkRequests
     */
    public function setRoomHeight($roomHeight)
    {
        $this->roomHeight = $roomHeight;

        return $this;
    }

    /**
     * Get roomHeight
     *
     * @return float 
     */
    public function getRoomHeight()
    {
        return $this->roomHeight;
    }

    /**
     * Set roomsCountMax
     *
     * @param float $roomsCountMax
     * @return SpkRequests
     */
    public function setRoomsCountMax($roomsCountMax)
    {
        $this->roomsCountMax = $roomsCountMax;

        return $this;
    }

    /**
     * Get roomsCountMax
     *
     * @return float 
     */
    public function getRoomsCountMax()
    {
        return $this->roomsCountMax;
    }

    /**
     * Set roomsCountMin
     *
     * @param float $roomsCountMin
     * @return SpkRequests
     */
    public function setRoomsCountMin($roomsCountMin)
    {
        $this->roomsCountMin = $roomsCountMin;

        return $this;
    }

    /**
     * Get roomsCountMin
     *
     * @return float 
     */
    public function getRoomsCountMin()
    {
        return $this->roomsCountMin;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkRequests
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set shopename
     *
     * @param string $shopename
     * @return SpkRequests
     */
    public function setShopename($shopename)
    {
        $this->shopename = $shopename;

        return $this;
    }

    /**
     * Get shopename
     *
     * @return string 
     */
    public function getShopename()
    {
        return $this->shopename;
    }

    /**
     * Set shosse
     *
     * @param string $shosse
     * @return SpkRequests
     */
    public function setShosse($shosse)
    {
        $this->shosse = $shosse;

        return $this;
    }

    /**
     * Get shosse
     *
     * @return string 
     */
    public function getShosse()
    {
        return $this->shosse;
    }

    /**
     * Set sourceid
     *
     * @param string $sourceid
     * @return SpkRequests
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return string 
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }

    /**
     * Set squareMax
     *
     * @param float $squareMax
     * @return SpkRequests
     */
    public function setSquareMax($squareMax)
    {
        $this->squareMax = $squareMax;

        return $this;
    }

    /**
     * Get squareMax
     *
     * @return float 
     */
    public function getSquareMax()
    {
        return $this->squareMax;
    }

    /**
     * Set squareMin
     *
     * @param float $squareMin
     * @return SpkRequests
     */
    public function setSquareMin($squareMin)
    {
        $this->squareMin = $squareMin;

        return $this;
    }

    /**
     * Get squareMin
     *
     * @return float 
     */
    public function getSquareMin()
    {
        return $this->squareMin;
    }

    /**
     * Set standing
     *
     * @param float $standing
     * @return SpkRequests
     */
    public function setStanding($standing)
    {
        $this->standing = $standing;

        return $this;
    }

    /**
     * Get standing
     *
     * @return float 
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return SpkRequests
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }

    /**
     * Set warehouseType
     *
     * @param string $warehouseType
     * @return SpkRequests
     */
    public function setWarehouseType($warehouseType)
    {
        $this->warehouseType = $warehouseType;

        return $this;
    }

    /**
     * Get warehouseType
     *
     * @return string 
     */
    public function getWarehouseType()
    {
        return $this->warehouseType;
    }

    /**
     * Set furniture
     *
     * @param string $furniture
     * @return SpkRequests
     */
    public function setFurniture($furniture)
    {
        $this->furniture = $furniture;

        return $this;
    }

    /**
     * Get furniture
     *
     * @return string 
     */
    public function getFurniture()
    {
        return $this->furniture;
    }

    /**
     * Set convertedDate
     *
     * @param \DateTime $convertedDate
     * @return SpkRequests
     */
    public function setConvertedDate($convertedDate)
    {
        $this->convertedDate = $convertedDate;

        return $this;
    }

    /**
     * Get convertedDate
     *
     * @return \DateTime 
     */
    public function getConvertedDate()
    {
        return $this->convertedDate;
    }

    /**
     * Set importSource
     *
     * @param string $importSource
     * @return SpkRequests
     */
    public function setImportSource($importSource)
    {
        $this->importSource = $importSource;

        return $this;
    }

    /**
     * Get importSource
     *
     * @return string 
     */
    public function getImportSource()
    {
        return $this->importSource;
    }

    /**
     * Set duplicate
     *
     * @param string $duplicate
     * @return SpkRequests
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;

        return $this;
    }

    /**
     * Get duplicate
     *
     * @return string 
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Set countryStatus
     *
     * @param string $countryStatus
     * @return SpkRequests
     */
    public function setCountryStatus($countryStatus)
    {
        $this->countryStatus = $countryStatus;

        return $this;
    }

    /**
     * Get countryStatus
     *
     * @return string 
     */
    public function getCountryStatus()
    {
        return $this->countryStatus;
    }

    /**
     * Set countryHighway
     *
     * @param string $countryHighway
     * @return SpkRequests
     */
    public function setCountryHighway($countryHighway)
    {
        $this->countryHighway = $countryHighway;

        return $this;
    }

    /**
     * Get countryHighway
     *
     * @return string 
     */
    public function getCountryHighway()
    {
        return $this->countryHighway;
    }

    /**
     * Set subdivision
     *
     * @param string $subdivision
     * @return SpkRequests
     */
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * Get subdivision
     *
     * @return string 
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * Set notAvailable
     *
     * @param string $notAvailable
     * @return SpkRequests
     */
    public function setNotAvailable($notAvailable)
    {
        $this->notAvailable = $notAvailable;

        return $this;
    }

    /**
     * Get notAvailable
     *
     * @return string 
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * Set isLand
     *
     * @param string $isLand
     * @return SpkRequests
     */
    public function setIsLand($isLand)
    {
        $this->isLand = $isLand;

        return $this;
    }

    /**
     * Get isLand
     *
     * @return string 
     */
    public function getIsLand()
    {
        return $this->isLand;
    }

    /**
     * Set isWarehouse
     *
     * @param string $isWarehouse
     * @return SpkRequests
     */
    public function setIsWarehouse($isWarehouse)
    {
        $this->isWarehouse = $isWarehouse;

        return $this;
    }

    /**
     * Get isWarehouse
     *
     * @return string 
     */
    public function getIsWarehouse()
    {
        return $this->isWarehouse;
    }

    /**
     * Set industrialHighway
     *
     * @param string $industrialHighway
     * @return SpkRequests
     */
    public function setIndustrialHighway($industrialHighway)
    {
        $this->industrialHighway = $industrialHighway;

        return $this;
    }

    /**
     * Get industrialHighway
     *
     * @return string 
     */
    public function getIndustrialHighway()
    {
        return $this->industrialHighway;
    }

    /**
     * Set isFirst
     *
     * @param string $isFirst
     * @return SpkRequests
     */
    public function setIsFirst($isFirst)
    {
        $this->isFirst = $isFirst;

        return $this;
    }

    /**
     * Get isFirst
     *
     * @return string 
     */
    public function getIsFirst()
    {
        return $this->isFirst;
    }

    /**
     * Set isRespStorage
     *
     * @param string $isRespStorage
     * @return SpkRequests
     */
    public function setIsRespStorage($isRespStorage)
    {
        $this->isRespStorage = $isRespStorage;

        return $this;
    }

    /**
     * Get isRespStorage
     *
     * @return string 
     */
    public function getIsRespStorage()
    {
        return $this->isRespStorage;
    }

    /**
     * Set marketSegment
     *
     * @param string $marketSegment
     * @return SpkRequests
     */
    public function setMarketSegment($marketSegment)
    {
        $this->marketSegment = $marketSegment;

        return $this;
    }

    /**
     * Get marketSegment
     *
     * @return string 
     */
    public function getMarketSegment()
    {
        return $this->marketSegment;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return SpkRequests
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     * @return SpkRequests
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set reportForm
     *
     * @param string $reportForm
     * @return SpkRequests
     */
    public function setReportForm($reportForm)
    {
        $this->reportForm = $reportForm;

        return $this;
    }

    /**
     * Get reportForm
     *
     * @return string 
     */
    public function getReportForm()
    {
        return $this->reportForm;
    }

    /**
     * Set reportLanguage
     *
     * @param string $reportLanguage
     * @return SpkRequests
     */
    public function setReportLanguage($reportLanguage)
    {
        $this->reportLanguage = $reportLanguage;

        return $this;
    }

    /**
     * Get reportLanguage
     *
     * @return string 
     */
    public function getReportLanguage()
    {
        return $this->reportLanguage;
    }

    /**
     * Set cityid
     *
     * @param string $cityid
     * @return SpkRequests
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid
     *
     * @return string 
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set curCommission
     *
     * @param string $curCommission
     * @return SpkRequests
     */
    public function setCurCommission($curCommission)
    {
        $this->curCommission = $curCommission;

        return $this;
    }

    /**
     * Get curCommission
     *
     * @return string 
     */
    public function getCurCommission()
    {
        return $this->curCommission;
    }

    /**
     * Set valServices
     *
     * @param string $valServices
     * @return SpkRequests
     */
    public function setValServices($valServices)
    {
        $this->valServices = $valServices;

        return $this;
    }

    /**
     * Get valServices
     *
     * @return string 
     */
    public function getValServices()
    {
        return $this->valServices;
    }

    /**
     * Set valTarget
     *
     * @param string $valTarget
     * @return SpkRequests
     */
    public function setValTarget($valTarget)
    {
        $this->valTarget = $valTarget;

        return $this;
    }

    /**
     * Get valTarget
     *
     * @return string 
     */
    public function getValTarget()
    {
        return $this->valTarget;
    }

    /**
     * Set valSubtarget
     *
     * @param string $valSubtarget
     * @return SpkRequests
     */
    public function setValSubtarget($valSubtarget)
    {
        $this->valSubtarget = $valSubtarget;

        return $this;
    }

    /**
     * Get valSubtarget
     *
     * @return string 
     */
    public function getValSubtarget()
    {
        return $this->valSubtarget;
    }

    /**
     * Set invSubtype
     *
     * @param string $invSubtype
     * @return SpkRequests
     */
    public function setInvSubtype($invSubtype)
    {
        $this->invSubtype = $invSubtype;

        return $this;
    }

    /**
     * Get invSubtype
     *
     * @return string 
     */
    public function getInvSubtype()
    {
        return $this->invSubtype;
    }

    /**
     * Set invStage
     *
     * @param string $invStage
     * @return SpkRequests
     */
    public function setInvStage($invStage)
    {
        $this->invStage = $invStage;

        return $this;
    }

    /**
     * Get invStage
     *
     * @return string 
     */
    public function getInvStage()
    {
        return $this->invStage;
    }

    /**
     * Set invSubstage
     *
     * @param string $invSubstage
     * @return SpkRequests
     */
    public function setInvSubstage($invSubstage)
    {
        $this->invSubstage = $invSubstage;

        return $this;
    }

    /**
     * Get invSubstage
     *
     * @return string 
     */
    public function getInvSubstage()
    {
        return $this->invSubstage;
    }

    /**
     * Set invOwnership
     *
     * @param string $invOwnership
     * @return SpkRequests
     */
    public function setInvOwnership($invOwnership)
    {
        $this->invOwnership = $invOwnership;

        return $this;
    }

    /**
     * Get invOwnership
     *
     * @return string 
     */
    public function getInvOwnership()
    {
        return $this->invOwnership;
    }

    /**
     * Set invCapitalisation
     *
     * @param string $invCapitalisation
     * @return SpkRequests
     */
    public function setInvCapitalisation($invCapitalisation)
    {
        $this->invCapitalisation = $invCapitalisation;

        return $this;
    }

    /**
     * Get invCapitalisation
     *
     * @return string 
     */
    public function getInvCapitalisation()
    {
        return $this->invCapitalisation;
    }

    /**
     * Set invVatrep
     *
     * @param string $invVatrep
     * @return SpkRequests
     */
    public function setInvVatrep($invVatrep)
    {
        $this->invVatrep = $invVatrep;

        return $this;
    }

    /**
     * Get invVatrep
     *
     * @return string 
     */
    public function getInvVatrep()
    {
        return $this->invVatrep;
    }

    /**
     * Set invOperatingincome
     *
     * @param string $invOperatingincome
     * @return SpkRequests
     */
    public function setInvOperatingincome($invOperatingincome)
    {
        $this->invOperatingincome = $invOperatingincome;

        return $this;
    }

    /**
     * Get invOperatingincome
     *
     * @return string 
     */
    public function getInvOperatingincome()
    {
        return $this->invOperatingincome;
    }

    /**
     * Set invBook
     *
     * @param string $invBook
     * @return SpkRequests
     */
    public function setInvBook($invBook)
    {
        $this->invBook = $invBook;

        return $this;
    }

    /**
     * Get invBook
     *
     * @return string 
     */
    public function getInvBook()
    {
        return $this->invBook;
    }

    /**
     * Set bedroomsMax
     *
     * @param string $bedroomsMax
     * @return SpkRequests
     */
    public function setBedroomsMax($bedroomsMax)
    {
        $this->bedroomsMax = $bedroomsMax;

        return $this;
    }

    /**
     * Get bedroomsMax
     *
     * @return string 
     */
    public function getBedroomsMax()
    {
        return $this->bedroomsMax;
    }

    /**
     * Set bedroomsMin
     *
     * @param string $bedroomsMin
     * @return SpkRequests
     */
    public function setBedroomsMin($bedroomsMin)
    {
        $this->bedroomsMin = $bedroomsMin;

        return $this;
    }

    /**
     * Get bedroomsMin
     *
     * @return string 
     */
    public function getBedroomsMin()
    {
        return $this->bedroomsMin;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return SpkRequests
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set seaview
     *
     * @param string $seaview
     * @return SpkRequests
     */
    public function setSeaview($seaview)
    {
        $this->seaview = $seaview;

        return $this;
    }

    /**
     * Get seaview
     *
     * @return string 
     */
    public function getSeaview()
    {
        return $this->seaview;
    }

    /**
     * Set waterfront
     *
     * @param string $waterfront
     * @return SpkRequests
     */
    public function setWaterfront($waterfront)
    {
        $this->waterfront = $waterfront;

        return $this;
    }

    /**
     * Get waterfront
     *
     * @return string 
     */
    public function getWaterfront()
    {
        return $this->waterfront;
    }

    /**
     * Set invCity
     *
     * @param string $invCity
     * @return SpkRequests
     */
    public function setInvCity($invCity)
    {
        $this->invCity = $invCity;

        return $this;
    }

    /**
     * Get invCity
     *
     * @return string 
     */
    public function getInvCity()
    {
        return $this->invCity;
    }

    /**
     * Set invCityType
     *
     * @param string $invCityType
     * @return SpkRequests
     */
    public function setInvCityType($invCityType)
    {
        $this->invCityType = $invCityType;

        return $this;
    }

    /**
     * Get invCityType
     *
     * @return string 
     */
    public function getInvCityType()
    {
        return $this->invCityType;
    }

    /**
     * Set responseid
     *
     * @param string $responseid
     * @return SpkRequests
     */
    public function setResponseid($responseid)
    {
        $this->responseid = $responseid;

        return $this;
    }

    /**
     * Get responseid
     *
     * @return string 
     */
    public function getResponseid()
    {
        return $this->responseid;
    }

    /**
     * Set websiteid
     *
     * @param string $websiteid
     * @return SpkRequests
     */
    public function setWebsiteid($websiteid)
    {
        $this->websiteid = $websiteid;

        return $this;
    }

    /**
     * Get websiteid
     *
     * @return string 
     */
    public function getWebsiteid()
    {
        return $this->websiteid;
    }

    /**
     * Set kfClass
     *
     * @param string $kfClass
     * @return SpkRequests
     */
    public function setKfClass($kfClass)
    {
        $this->kfClass = $kfClass;

        return $this;
    }

    /**
     * Get kfClass
     *
     * @return string 
     */
    public function getKfClass()
    {
        return $this->kfClass;
    }

    /**
     * Set districtid
     *
     * @param string $districtid
     * @return SpkRequests
     */
    public function setDistrictid($districtid)
    {
        $this->districtid = $districtid;

        return $this;
    }

    /**
     * Get districtid
     *
     * @return string 
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }

    /**
     * Set retailType
     *
     * @param string $retailType
     * @return SpkRequests
     */
    public function setRetailType($retailType)
    {
        $this->retailType = $retailType;

        return $this;
    }

    /**
     * Get retailType
     *
     * @return string 
     */
    public function getRetailType()
    {
        return $this->retailType;
    }

    /**
     * Set retailAgencyContract
     *
     * @param string $retailAgencyContract
     * @return SpkRequests
     */
    public function setRetailAgencyContract($retailAgencyContract)
    {
        $this->retailAgencyContract = $retailAgencyContract;

        return $this;
    }

    /**
     * Get retailAgencyContract
     *
     * @return string 
     */
    public function getRetailAgencyContract()
    {
        return $this->retailAgencyContract;
    }

    /**
     * Set palletMin
     *
     * @param float $palletMin
     * @return SpkRequests
     */
    public function setPalletMin($palletMin)
    {
        $this->palletMin = $palletMin;

        return $this;
    }

    /**
     * Get palletMin
     *
     * @return float 
     */
    public function getPalletMin()
    {
        return $this->palletMin;
    }

    /**
     * Set palletMax
     *
     * @param float $palletMax
     * @return SpkRequests
     */
    public function setPalletMax($palletMax)
    {
        $this->palletMax = $palletMax;

        return $this;
    }

    /**
     * Get palletMax
     *
     * @return float 
     */
    public function getPalletMax()
    {
        return $this->palletMax;
    }

    /**
     * Set cbmMin
     *
     * @param float $cbmMin
     * @return SpkRequests
     */
    public function setCbmMin($cbmMin)
    {
        $this->cbmMin = $cbmMin;

        return $this;
    }

    /**
     * Get cbmMin
     *
     * @return float 
     */
    public function getCbmMin()
    {
        return $this->cbmMin;
    }

    /**
     * Set cbmMax
     *
     * @param float $cbmMax
     * @return SpkRequests
     */
    public function setCbmMax($cbmMax)
    {
        $this->cbmMax = $cbmMax;

        return $this;
    }

    /**
     * Get cbmMax
     *
     * @return float 
     */
    public function getCbmMax()
    {
        return $this->cbmMax;
    }

    /**
     * Set massMin
     *
     * @param float $massMin
     * @return SpkRequests
     */
    public function setMassMin($massMin)
    {
        $this->massMin = $massMin;

        return $this;
    }

    /**
     * Get massMin
     *
     * @return float 
     */
    public function getMassMin()
    {
        return $this->massMin;
    }

    /**
     * Set massMax
     *
     * @param float $massMax
     * @return SpkRequests
     */
    public function setMassMax($massMax)
    {
        $this->massMax = $massMax;

        return $this;
    }

    /**
     * Get massMax
     *
     * @return float 
     */
    public function getMassMax()
    {
        return $this->massMax;
    }

    /**
     * Set distanceToCity
     *
     * @param float $distanceToCity
     * @return SpkRequests
     */
    public function setDistanceToCity($distanceToCity)
    {
        $this->distanceToCity = $distanceToCity;

        return $this;
    }

    /**
     * Get distanceToCity
     *
     * @return float 
     */
    public function getDistanceToCity()
    {
        return $this->distanceToCity;
    }

    /**
     * Set storageType
     *
     * @param string $storageType
     * @return SpkRequests
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;

        return $this;
    }

    /**
     * Get storageType
     *
     * @return string 
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * Set storageMethod
     *
     * @param string $storageMethod
     * @return SpkRequests
     */
    public function setStorageMethod($storageMethod)
    {
        $this->storageMethod = $storageMethod;

        return $this;
    }

    /**
     * Get storageMethod
     *
     * @return string 
     */
    public function getStorageMethod()
    {
        return $this->storageMethod;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     * @return SpkRequests
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set refferalid
     *
     * @param string $refferalid
     * @return SpkRequests
     */
    public function setRefferalid($refferalid)
    {
        $this->refferalid = $refferalid;

        return $this;
    }

    /**
     * Get refferalid
     *
     * @return string 
     */
    public function getRefferalid()
    {
        return $this->refferalid;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return SpkRequests
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set prStatus
     *
     * @param string $prStatus
     * @return SpkRequests
     */
    public function setPrStatus($prStatus)
    {
        $this->prStatus = $prStatus;

        return $this;
    }

    /**
     * Get prStatus
     *
     * @return string 
     */
    public function getPrStatus()
    {
        return $this->prStatus;
    }

    /**
     * Set prCategory
     *
     * @param string $prCategory
     * @return SpkRequests
     */
    public function setPrCategory($prCategory)
    {
        $this->prCategory = $prCategory;

        return $this;
    }

    /**
     * Get prCategory
     *
     * @return string 
     */
    public function getPrCategory()
    {
        return $this->prCategory;
    }

    /**
     * Set isRenegotiation
     *
     * @param string $isRenegotiation
     * @return SpkRequests
     */
    public function setIsRenegotiation($isRenegotiation)
    {
        $this->isRenegotiation = $isRenegotiation;

        return $this;
    }

    /**
     * Get isRenegotiation
     *
     * @return string 
     */
    public function getIsRenegotiation()
    {
        return $this->isRenegotiation;
    }

    /**
     * Set budgetRurMin
     *
     * @param float $budgetRurMin
     * @return SpkRequests
     */
    public function setBudgetRurMin($budgetRurMin)
    {
        $this->budgetRurMin = $budgetRurMin;

        return $this;
    }

    /**
     * Get budgetRurMin
     *
     * @return float 
     */
    public function getBudgetRurMin()
    {
        return $this->budgetRurMin;
    }

    /**
     * Set budgetRurMax
     *
     * @param float $budgetRurMax
     * @return SpkRequests
     */
    public function setBudgetRurMax($budgetRurMax)
    {
        $this->budgetRurMax = $budgetRurMax;

        return $this;
    }

    /**
     * Get budgetRurMax
     *
     * @return float 
     */
    public function getBudgetRurMax()
    {
        return $this->budgetRurMax;
    }

    /**
     * Set budgetEuroMin
     *
     * @param float $budgetEuroMin
     * @return SpkRequests
     */
    public function setBudgetEuroMin($budgetEuroMin)
    {
        $this->budgetEuroMin = $budgetEuroMin;

        return $this;
    }

    /**
     * Get budgetEuroMin
     *
     * @return float 
     */
    public function getBudgetEuroMin()
    {
        return $this->budgetEuroMin;
    }

    /**
     * Set budgetEuroMax
     *
     * @param float $budgetEuroMax
     * @return SpkRequests
     */
    public function setBudgetEuroMax($budgetEuroMax)
    {
        $this->budgetEuroMax = $budgetEuroMax;

        return $this;
    }

    /**
     * Get budgetEuroMax
     *
     * @return float 
     */
    public function getBudgetEuroMax()
    {
        return $this->budgetEuroMax;
    }

    /**
     * Set budgetUsdMin
     *
     * @param float $budgetUsdMin
     * @return SpkRequests
     */
    public function setBudgetUsdMin($budgetUsdMin)
    {
        $this->budgetUsdMin = $budgetUsdMin;

        return $this;
    }

    /**
     * Get budgetUsdMin
     *
     * @return float 
     */
    public function getBudgetUsdMin()
    {
        return $this->budgetUsdMin;
    }

    /**
     * Set budgetUsdMax
     *
     * @param float $budgetUsdMax
     * @return SpkRequests
     */
    public function setBudgetUsdMax($budgetUsdMax)
    {
        $this->budgetUsdMax = $budgetUsdMax;

        return $this;
    }

    /**
     * Get budgetUsdMax
     *
     * @return float 
     */
    public function getBudgetUsdMax()
    {
        return $this->budgetUsdMax;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return SpkRequests
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
     * Set id
     *
     * @param integer $id
     * @return SpkRequests
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set offNameRus
     *
     * @param string $offNameRus
     * @return SpkRequests
     */
    public function setOffNameRus($offNameRus)
    {
        $this->offNameRus = $offNameRus;

        return $this;
    }

    /**
     * Get offNameRus
     *
     * @return string 
     */
    public function getOffNameRus()
    {
        return $this->offNameRus;
    }

    /**
     * Set offNameEng
     *
     * @param string $offNameEng
     * @return SpkRequests
     */
    public function setOffNameEng($offNameEng)
    {
        $this->offNameEng = $offNameEng;

        return $this;
    }

    /**
     * Get offNameEng
     *
     * @return string 
     */
    public function getOffNameEng()
    {
        return $this->offNameEng;
    }

    /**
     * Set offStatus
     *
     * @param string $offStatus
     * @return SpkRequests
     */
    public function setOffStatus($offStatus)
    {
        $this->offStatus = $offStatus;

        return $this;
    }

    /**
     * Get offStatus
     *
     * @return string 
     */
    public function getOffStatus()
    {
        return $this->offStatus;
    }

    /**
     * Set offStatusKf
     *
     * @param string $offStatusKf
     * @return SpkRequests
     */
    public function setOffStatusKf($offStatusKf)
    {
        $this->offStatusKf = $offStatusKf;

        return $this;
    }

    /**
     * Get offStatusKf
     *
     * @return string 
     */
    public function getOffStatusKf()
    {
        return $this->offStatusKf;
    }

    /**
     * Set offObjType
     *
     * @param string $offObjType
     * @return SpkRequests
     */
    public function setOffObjType($offObjType)
    {
        $this->offObjType = $offObjType;

        return $this;
    }

    /**
     * Get offObjType
     *
     * @return string 
     */
    public function getOffObjType()
    {
        return $this->offObjType;
    }

    /**
     * Set offDelivery
     *
     * @param string $offDelivery
     * @return SpkRequests
     */
    public function setOffDelivery($offDelivery)
    {
        $this->offDelivery = $offDelivery;

        return $this;
    }

    /**
     * Get offDelivery
     *
     * @return string 
     */
    public function getOffDelivery()
    {
        return $this->offDelivery;
    }

    /**
     * Set offStoreyMin
     *
     * @param integer $offStoreyMin
     * @return SpkRequests
     */
    public function setOffStoreyMin($offStoreyMin)
    {
        $this->offStoreyMin = $offStoreyMin;

        return $this;
    }

    /**
     * Get offStoreyMin
     *
     * @return integer 
     */
    public function getOffStoreyMin()
    {
        return $this->offStoreyMin;
    }

    /**
     * Set offStoreyMax
     *
     * @param integer $offStoreyMax
     * @return SpkRequests
     */
    public function setOffStoreyMax($offStoreyMax)
    {
        $this->offStoreyMax = $offStoreyMax;

        return $this;
    }

    /**
     * Get offStoreyMax
     *
     * @return integer 
     */
    public function getOffStoreyMax()
    {
        return $this->offStoreyMax;
    }

    /**
     * Set offTotalArea
     *
     * @param float $offTotalArea
     * @return SpkRequests
     */
    public function setOffTotalArea($offTotalArea)
    {
        $this->offTotalArea = $offTotalArea;

        return $this;
    }

    /**
     * Get offTotalArea
     *
     * @return float 
     */
    public function getOffTotalArea()
    {
        return $this->offTotalArea;
    }

    /**
     * Set offRentMin
     *
     * @param float $offRentMin
     * @return SpkRequests
     */
    public function setOffRentMin($offRentMin)
    {
        $this->offRentMin = $offRentMin;

        return $this;
    }

    /**
     * Get offRentMin
     *
     * @return float 
     */
    public function getOffRentMin()
    {
        return $this->offRentMin;
    }

    /**
     * Set offRentMax
     *
     * @param float $offRentMax
     * @return SpkRequests
     */
    public function setOffRentMax($offRentMax)
    {
        $this->offRentMax = $offRentMax;

        return $this;
    }

    /**
     * Get offRentMax
     *
     * @return float 
     */
    public function getOffRentMax()
    {
        return $this->offRentMax;
    }

    /**
     * Set offCostMin
     *
     * @param float $offCostMin
     * @return SpkRequests
     */
    public function setOffCostMin($offCostMin)
    {
        $this->offCostMin = $offCostMin;

        return $this;
    }

    /**
     * Get offCostMin
     *
     * @return float 
     */
    public function getOffCostMin()
    {
        return $this->offCostMin;
    }

    /**
     * Set offCostMax
     *
     * @param float $offCostMax
     * @return SpkRequests
     */
    public function setOffCostMax($offCostMax)
    {
        $this->offCostMax = $offCostMax;

        return $this;
    }

    /**
     * Get offCostMax
     *
     * @return float 
     */
    public function getOffCostMax()
    {
        return $this->offCostMax;
    }

    /**
     * Set offProvider
     *
     * @param string $offProvider
     * @return SpkRequests
     */
    public function setOffProvider($offProvider)
    {
        $this->offProvider = $offProvider;

        return $this;
    }

    /**
     * Get offProvider
     *
     * @return string 
     */
    public function getOffProvider()
    {
        return $this->offProvider;
    }

    /**
     * Set offPlaning
     *
     * @param string $offPlaning
     * @return SpkRequests
     */
    public function setOffPlaning($offPlaning)
    {
        $this->offPlaning = $offPlaning;

        return $this;
    }

    /**
     * Get offPlaning
     *
     * @return string 
     */
    public function getOffPlaning()
    {
        return $this->offPlaning;
    }

    /**
     * Set offStepToMetro
     *
     * @param integer $offStepToMetro
     * @return SpkRequests
     */
    public function setOffStepToMetro($offStepToMetro)
    {
        $this->offStepToMetro = $offStepToMetro;

        return $this;
    }

    /**
     * Get offStepToMetro
     *
     * @return integer 
     */
    public function getOffStepToMetro()
    {
        return $this->offStepToMetro;
    }

    /**
     * Set offParkingMin
     *
     * @param integer $offParkingMin
     * @return SpkRequests
     */
    public function setOffParkingMin($offParkingMin)
    {
        $this->offParkingMin = $offParkingMin;

        return $this;
    }

    /**
     * Get offParkingMin
     *
     * @return integer 
     */
    public function getOffParkingMin()
    {
        return $this->offParkingMin;
    }

    /**
     * Set offParkingMax
     *
     * @param integer $offParkingMax
     * @return SpkRequests
     */
    public function setOffParkingMax($offParkingMax)
    {
        $this->offParkingMax = $offParkingMax;

        return $this;
    }

    /**
     * Get offParkingMax
     *
     * @return integer 
     */
    public function getOffParkingMax()
    {
        return $this->offParkingMax;
    }

    /**
     * Set offBuildStage
     *
     * @param string $offBuildStage
     * @return SpkRequests
     */
    public function setOffBuildStage($offBuildStage)
    {
        $this->offBuildStage = $offBuildStage;

        return $this;
    }

    /**
     * Get offBuildStage
     *
     * @return string 
     */
    public function getOffBuildStage()
    {
        return $this->offBuildStage;
    }

    /**
     * Set offDelivYear
     *
     * @param integer $offDelivYear
     * @return SpkRequests
     */
    public function setOffDelivYear($offDelivYear)
    {
        $this->offDelivYear = $offDelivYear;

        return $this;
    }

    /**
     * Get offDelivYear
     *
     * @return integer 
     */
    public function getOffDelivYear()
    {
        return $this->offDelivYear;
    }

    /**
     * Set offDelivQuarter
     *
     * @param integer $offDelivQuarter
     * @return SpkRequests
     */
    public function setOffDelivQuarter($offDelivQuarter)
    {
        $this->offDelivQuarter = $offDelivQuarter;

        return $this;
    }

    /**
     * Get offDelivQuarter
     *
     * @return integer 
     */
    public function getOffDelivQuarter()
    {
        return $this->offDelivQuarter;
    }

    /**
     * Set offMaxBlockArea
     *
     * @param float $offMaxBlockArea
     * @return SpkRequests
     */
    public function setOffMaxBlockArea($offMaxBlockArea)
    {
        $this->offMaxBlockArea = $offMaxBlockArea;

        return $this;
    }

    /**
     * Get offMaxBlockArea
     *
     * @return float 
     */
    public function getOffMaxBlockArea()
    {
        return $this->offMaxBlockArea;
    }

    /**
     * Set offUpdated
     *
     * @param \DateTime $offUpdated
     * @return SpkRequests
     */
    public function setOffUpdated($offUpdated)
    {
        $this->offUpdated = $offUpdated;

        return $this;
    }

    /**
     * Get offUpdated
     *
     * @return \DateTime 
     */
    public function getOffUpdated()
    {
        return $this->offUpdated;
    }

    /**
     * Set offIsListing
     *
     * @param string $offIsListing
     * @return SpkRequests
     */
    public function setOffIsListing($offIsListing)
    {
        $this->offIsListing = $offIsListing;

        return $this;
    }

    /**
     * Get offIsListing
     *
     * @return string 
     */
    public function getOffIsListing()
    {
        return $this->offIsListing;
    }

    /**
     * Set offDistrict
     *
     * @param string $offDistrict
     * @return SpkRequests
     */
    public function setOffDistrict($offDistrict)
    {
        $this->offDistrict = $offDistrict;

        return $this;
    }

    /**
     * Get offDistrict
     *
     * @return string 
     */
    public function getOffDistrict()
    {
        return $this->offDistrict;
    }

    /**
     * Set offDistrictMow
     *
     * @param string $offDistrictMow
     * @return SpkRequests
     */
    public function setOffDistrictMow($offDistrictMow)
    {
        $this->offDistrictMow = $offDistrictMow;

        return $this;
    }

    /**
     * Get offDistrictMow
     *
     * @return string 
     */
    public function getOffDistrictMow()
    {
        return $this->offDistrictMow;
    }

    /**
     * Set offStreetType
     *
     * @param string $offStreetType
     * @return SpkRequests
     */
    public function setOffStreetType($offStreetType)
    {
        $this->offStreetType = $offStreetType;

        return $this;
    }

    /**
     * Get offStreetType
     *
     * @return string 
     */
    public function getOffStreetType()
    {
        return $this->offStreetType;
    }

    /**
     * Set offMetro
     *
     * @param string $offMetro
     * @return SpkRequests
     */
    public function setOffMetro($offMetro)
    {
        $this->offMetro = $offMetro;

        return $this;
    }

    /**
     * Get offMetro
     *
     * @return string 
     */
    public function getOffMetro()
    {
        return $this->offMetro;
    }

    /**
     * Set offStreetid
     *
     * @param string $offStreetid
     * @return SpkRequests
     */
    public function setOffStreetid($offStreetid)
    {
        $this->offStreetid = $offStreetid;

        return $this;
    }

    /**
     * Get offStreetid
     *
     * @return string 
     */
    public function getOffStreetid()
    {
        return $this->offStreetid;
    }

    /**
     * Set targetAsq
     *
     * @param string $targetAsq
     * @return SpkRequests
     */
    public function setTargetAsq($targetAsq)
    {
        $this->targetAsq = $targetAsq;

        return $this;
    }

    /**
     * Get targetAsq
     *
     * @return string 
     */
    public function getTargetAsq()
    {
        return $this->targetAsq;
    }

    /**
     * Set ipoteka
     *
     * @param string $ipoteka
     * @return SpkRequests
     */
    public function setIpoteka($ipoteka)
    {
        $this->ipoteka = $ipoteka;

        return $this;
    }

    /**
     * Get ipoteka
     *
     * @return string 
     */
    public function getIpoteka()
    {
        return $this->ipoteka;
    }

    /**
     * Set distanceToMkadMax
     *
     * @param float $distanceToMkadMax
     * @return SpkRequests
     */
    public function setDistanceToMkadMax($distanceToMkadMax)
    {
        $this->distanceToMkadMax = $distanceToMkadMax;

        return $this;
    }

    /**
     * Get distanceToMkadMax
     *
     * @return float 
     */
    public function getDistanceToMkadMax()
    {
        return $this->distanceToMkadMax;
    }

    /**
     * Set offCostCurrency
     *
     * @param string $offCostCurrency
     * @return SpkRequests
     */
    public function setOffCostCurrency($offCostCurrency)
    {
        $this->offCostCurrency = $offCostCurrency;

        return $this;
    }

    /**
     * Get offCostCurrency
     *
     * @return string 
     */
    public function getOffCostCurrency()
    {
        return $this->offCostCurrency;
    }
}
