<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjects
 *
 */
class SpkOppReqObjects
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
     * @var string
     *
     */
    private $regionid;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $isParking;

    /**
     * @var string
     *
     */
    private $isFurniture;

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
    private $market;

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
    private $objectType;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $direction;

    /**
     * @var float
     *
     */
    private $distanceToMkad;

    /**
     * @var float
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
    private $industryid;

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
    private $parking;

    /**
     * @var string
     *
     */
    private $decorating;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var string
     *
     */
    private $kfArea;

    /**
     * @var string
     *
     */
    private $districtid;

    /**
     * @var string
     *
     */
    private $warehouseType;

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
    private $isRailway;

    /**
     * @var string
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     */
    private $streetid;

    /**
     * @var string
     *
     */
    private $fitOut;

    /**
     * @var \DateTime
     *
     */
    private $leaseExpiry;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set roomsCountMin
     *
     * @param float $roomsCountMin
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set squareMin
     *
     * @param float $squareMin
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set regionid
     *
     * @param string $regionid
     * @return SpkOppReqObjects
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
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return SpkOppReqObjects
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
     * Set security
     *
     * @param string $security
     * @return SpkOppReqObjects
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
     * Set isParking
     *
     * @param string $isParking
     * @return SpkOppReqObjects
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
     * Set isFurniture
     *
     * @param string $isFurniture
     * @return SpkOppReqObjects
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
     * Set isCarPlace
     *
     * @param string $isCarPlace
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set market
     *
     * @param string $market
     * @return SpkOppReqObjects
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
     * Set landSquareMax
     *
     * @param float $landSquareMax
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set objectType
     *
     * @param string $objectType
     * @return SpkOppReqObjects
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
     * Set preparedness
     *
     * @param string $preparedness
     * @return SpkOppReqObjects
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
     * Set direction
     *
     * @param string $direction
     * @return SpkOppReqObjects
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
     * Set distanceToMkad
     *
     * @param float $distanceToMkad
     * @return SpkOppReqObjects
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
     * @param float $bedrooms
     * @return SpkOppReqObjects
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    /**
     * Get bedrooms
     *
     * @return float 
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Set isTimberland
     *
     * @param string $isTimberland
     * @return SpkOppReqObjects
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
     * Set industryid
     *
     * @param string $industryid
     * @return SpkOppReqObjects
     */
    public function setIndustryid($industryid)
    {
        $this->industryid = $industryid;

        return $this;
    }

    /**
     * Get industryid
     *
     * @return string 
     */
    public function getIndustryid()
    {
        return $this->industryid;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set parking
     *
     * @param string $parking
     * @return SpkOppReqObjects
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
     * Set decorating
     *
     * @param string $decorating
     * @return SpkOppReqObjects
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
     * Set rings
     *
     * @param string $rings
     * @return SpkOppReqObjects
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
     * Set kfArea
     *
     * @param string $kfArea
     * @return SpkOppReqObjects
     */
    public function setKfArea($kfArea)
    {
        $this->kfArea = $kfArea;

        return $this;
    }

    /**
     * Get kfArea
     *
     * @return string 
     */
    public function getKfArea()
    {
        return $this->kfArea;
    }

    /**
     * Set districtid
     *
     * @param string $districtid
     * @return SpkOppReqObjects
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
     * Set warehouseType
     *
     * @param string $warehouseType
     * @return SpkOppReqObjects
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
     * Set palletMin
     *
     * @param float $palletMin
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * @return SpkOppReqObjects
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
     * Set isRailway
     *
     * @param string $isRailway
     * @return SpkOppReqObjects
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
     * Set temperature
     *
     * @param string $temperature
     * @return SpkOppReqObjects
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
     * Set isLocalrailway
     *
     * @param string $isLocalrailway
     * @return SpkOppReqObjects
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
     * Set streetid
     *
     * @param string $streetid
     * @return SpkOppReqObjects
     */
    public function setStreetid($streetid)
    {
        $this->streetid = $streetid;

        return $this;
    }

    /**
     * Get streetid
     *
     * @return string 
     */
    public function getStreetid()
    {
        return $this->streetid;
    }

    /**
     * Set fitOut
     *
     * @param string $fitOut
     * @return SpkOppReqObjects
     */
    public function setFitOut($fitOut)
    {
        $this->fitOut = $fitOut;

        return $this;
    }

    /**
     * Get fitOut
     *
     * @return string 
     */
    public function getFitOut()
    {
        return $this->fitOut;
    }

    /**
     * Set leaseExpiry
     *
     * @param \DateTime $leaseExpiry
     * @return SpkOppReqObjects
     */
    public function setLeaseExpiry($leaseExpiry)
    {
        $this->leaseExpiry = $leaseExpiry;

        return $this;
    }

    /**
     * Get leaseExpiry
     *
     * @return \DateTime 
     */
    public function getLeaseExpiry()
    {
        return $this->leaseExpiry;
    }
}
