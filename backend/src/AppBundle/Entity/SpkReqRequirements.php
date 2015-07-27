<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqRequirements
 *
 */
class SpkReqRequirements
{
    /**
     * @var string
     *
     */
    private $spkReqRequirementsid;

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
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var string
     *
     */
    private $industry;

    /**
     * @var string
     *
     */
    private $shopename;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var float
     *
     */
    private $avgbill;

    /**
     * @var float
     *
     */
    private $standing;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $sourceid;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $decorating;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var string
     *
     */
    private $direction;

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
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var string
     *
     */
    private $objectType;

    /**
     * @var float
     *
     */
    private $distanceToMkad;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $isTimberland;

    /**
     * @var string
     *
     */
    private $isFurniture;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $numberPerson;

    /**
     * @var string
     *
     */
    private $regionNotes;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var string
     *
     */
    private $isParking;

    /**
     * @var float
     *
     */
    private $roomsCountMin;

    /**
     * @var float
     *
     */
    private $roomsCountMax;

    /**
     * @var string
     *
     */
    private $regionid;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var string
     *
     */
    private $warehouseType;

    /**
     * @var string
     *
     */
    private $shosse;

    /**
     * @var float
     *
     */
    private $roomHeight;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isElectricity;

    /**
     * @var string
     *
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     */
    private $reqDepartment;

    /**
     * @var string
     *
     */
    private $decorationStyle;

    /**
     * @var string
     *
     */
    private $market;

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
    private $reqSubtype;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var string
     *
     */
    private $countryHighway;

    /**
     * @var string
     *
     */
    private $countryStatus;

    /**
     * @var string
     *
     */
    private $industrialHighway;

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
     * @var float
     *
     */
    private $distanceToCity;

    /**
     * @var string
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $cityid;

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
     * @var integer
     *
     */
    private $offStepToMetro;

    /**
     * @var string
     *
     */
    private $offPlaning;

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
     * @var integer
     *
     */
    private $offDelivQuarter;

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
    private $kfClass;

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
     * Set spkReqRequirementsid
     *
     * @param string $spkReqRequirementsid
     * @return SpkReqRequirements
     */
    public function setSpkReqRequirementsid($spkReqRequirementsid)
    {
        $this->spkReqRequirementsid = $spkReqRequirementsid;

        return $this;
    }

    /**
     * Get spkReqRequirementsid
     *
     * @return string 
     */
    public function getSpkReqRequirementsid()
    {
        return $this->spkReqRequirementsid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set squareMin
     *
     * @param float $squareMin
     * @return SpkReqRequirements
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
     * Set squareMax
     *
     * @param float $squareMax
     * @return SpkReqRequirements
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
     * Set budgetMin
     *
     * @param float $budgetMin
     * @return SpkReqRequirements
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
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return SpkReqRequirements
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
     * Set industry
     *
     * @param string $industry
     * @return SpkReqRequirements
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
     * Set shopename
     *
     * @param string $shopename
     * @return SpkReqRequirements
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
     * Set brand
     *
     * @param string $brand
     * @return SpkReqRequirements
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
     * Set avgbill
     *
     * @param float $avgbill
     * @return SpkReqRequirements
     */
    public function setAvgbill($avgbill)
    {
        $this->avgbill = $avgbill;

        return $this;
    }

    /**
     * Get avgbill
     *
     * @return float 
     */
    public function getAvgbill()
    {
        return $this->avgbill;
    }

    /**
     * Set standing
     *
     * @param float $standing
     * @return SpkReqRequirements
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
     * Set profileid
     *
     * @param string $profileid
     * @return SpkReqRequirements
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
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return SpkReqRequirements
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
     * Set sourceid
     *
     * @param string $sourceid
     * @return SpkReqRequirements
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
     * Set parking
     *
     * @param string $parking
     * @return SpkReqRequirements
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
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return SpkReqRequirements
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
     * Set decorating
     *
     * @param string $decorating
     * @return SpkReqRequirements
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
     * Set preparedness
     *
     * @param string $preparedness
     * @return SpkReqRequirements
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
     * Set rings
     *
     * @param string $rings
     * @return SpkReqRequirements
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
     * Set direction
     *
     * @param string $direction
     * @return SpkReqRequirements
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
     * Set areaKf
     *
     * @param string $areaKf
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set landSquareMin
     *
     * @param float $landSquareMin
     * @return SpkReqRequirements
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
     * Set landSquareMax
     *
     * @param float $landSquareMax
     * @return SpkReqRequirements
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
     * Set objectType
     *
     * @param string $objectType
     * @return SpkReqRequirements
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
     * Set distanceToMkad
     *
     * @param float $distanceToMkad
     * @return SpkReqRequirements
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
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return SpkReqRequirements
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
     * Set isTimberland
     *
     * @param string $isTimberland
     * @return SpkReqRequirements
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
     * Set isFurniture
     *
     * @param string $isFurniture
     * @return SpkReqRequirements
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
     * Set security
     *
     * @param string $security
     * @return SpkReqRequirements
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
     * Set numberPerson
     *
     * @param string $numberPerson
     * @return SpkReqRequirements
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
     * Set regionNotes
     *
     * @param string $regionNotes
     * @return SpkReqRequirements
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
     * Set period
     *
     * @param string $period
     * @return SpkReqRequirements
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
     * Set commission
     *
     * @param string $commission
     * @return SpkReqRequirements
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
     * Set paymentType
     *
     * @param string $paymentType
     * @return SpkReqRequirements
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
     * Set isParking
     *
     * @param string $isParking
     * @return SpkReqRequirements
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
     * Set roomsCountMin
     *
     * @param float $roomsCountMin
     * @return SpkReqRequirements
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
     * Set roomsCountMax
     *
     * @param float $roomsCountMax
     * @return SpkReqRequirements
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
     * Set regionid
     *
     * @param string $regionid
     * @return SpkReqRequirements
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
     * Set officeSquareMin
     *
     * @param float $officeSquareMin
     * @return SpkReqRequirements
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
     * Set officeSquareMax
     *
     * @param float $officeSquareMax
     * @return SpkReqRequirements
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
     * Set warehouseType
     *
     * @param string $warehouseType
     * @return SpkReqRequirements
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
     * Set shosse
     *
     * @param string $shosse
     * @return SpkReqRequirements
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
     * Set roomHeight
     *
     * @param float $roomHeight
     * @return SpkReqRequirements
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
     * Set isHeating
     *
     * @param string $isHeating
     * @return SpkReqRequirements
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
     * Set isRailway
     *
     * @param string $isRailway
     * @return SpkReqRequirements
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
     * Set isElectricity
     *
     * @param string $isElectricity
     * @return SpkReqRequirements
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
     * Set isLocalrailway
     *
     * @param string $isLocalrailway
     * @return SpkReqRequirements
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
     * Set reqDepartment
     *
     * @param string $reqDepartment
     * @return SpkReqRequirements
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
     * Set decorationStyle
     *
     * @param string $decorationStyle
     * @return SpkReqRequirements
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
     * Set market
     *
     * @param string $market
     * @return SpkReqRequirements
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
     * Set isCarPlace
     *
     * @param string $isCarPlace
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set reqSubtype
     *
     * @param string $reqSubtype
     * @return SpkReqRequirements
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
     * Set furniture
     *
     * @param string $furniture
     * @return SpkReqRequirements
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
     * Set countryHighway
     *
     * @param string $countryHighway
     * @return SpkReqRequirements
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
     * Set countryStatus
     *
     * @param string $countryStatus
     * @return SpkReqRequirements
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
     * Set industrialHighway
     *
     * @param string $industrialHighway
     * @return SpkReqRequirements
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
     * Set palletMin
     *
     * @param float $palletMin
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set storageType
     *
     * @param string $storageType
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set distanceToCity
     *
     * @param float $distanceToCity
     * @return SpkReqRequirements
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
     * Set temperature
     *
     * @param string $temperature
     * @return SpkReqRequirements
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
     * Set cityid
     *
     * @param string $cityid
     * @return SpkReqRequirements
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
     * Set id
     *
     * @param integer $id
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set offStepToMetro
     *
     * @param integer $offStepToMetro
     * @return SpkReqRequirements
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
     * Set offPlaning
     *
     * @param string $offPlaning
     * @return SpkReqRequirements
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
     * Set offParkingMin
     *
     * @param integer $offParkingMin
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set offDelivQuarter
     *
     * @param integer $offDelivQuarter
     * @return SpkReqRequirements
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
     * Set offBuildStage
     *
     * @param string $offBuildStage
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set offMaxBlockArea
     *
     * @param float $offMaxBlockArea
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * Set kfClass
     *
     * @param string $kfClass
     * @return SpkReqRequirements
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
     * Set offIsListing
     *
     * @param string $offIsListing
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
     * @return SpkReqRequirements
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
}
