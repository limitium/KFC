<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResBuildTech
 *
 */
class SpkResBuildTech
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
    private $buildingType;

    /**
     * @var string
     *
     */
    private $buildingClass;

    /**
     * @var string
     *
     */
    private $progress;

    /**
     * @var string
     *
     */
    private $buildingStartQuarter;

    /**
     * @var integer
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingEndQuarter;

    /**
     * @var integer
     *
     */
    private $buildingEndYear;

    /**
     * @var string
     *
     */
    private $architectureStyle;

    /**
     * @var string
     *
     */
    private $construction;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $livingArea;

    /**
     * @var integer
     *
     */
    private $apartmentsCount;

    /**
     * @var float
     *
     */
    private $apartmentAreaMin;

    /**
     * @var float
     *
     */
    private $apartmentAreaMax;

    /**
     * @var string
     *
     */
    private $ossature;

    /**
     * @var string
     *
     */
    private $overlap;

    /**
     * @var string
     *
     */
    private $outdoorWall;

    /**
     * @var integer
     *
     */
    private $storeysCountMin;

    /**
     * @var integer
     *
     */
    private $storeysCountMax;

    /**
     * @var float
     *
     */
    private $ceilingHeightMin;

    /**
     * @var float
     *
     */
    private $ceilingHeightMax;

    /**
     * @var string
     *
     */
    private $penthouse;

    /**
     * @var float
     *
     */
    private $penthouseAreaMin;

    /**
     * @var float
     *
     */
    private $penthouseAreaMax;

    /**
     * @var string
     *
     */
    private $townhouse;

    /**
     * @var float
     *
     */
    private $townhouseAreaMin;

    /**
     * @var float
     *
     */
    private $townhouseAreaMax;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var string
     *
     */
    private $lifts;

    /**
     * @var string
     *
     */
    private $planning;

    /**
     * @var string
     *
     */
    private $windows;

    /**
     * @var string
     *
     */
    private $territory;

    /**
     * @var float
     *
     */
    private $territoryArea;

    /**
     * @var string
     *
     */
    private $permission;

    /**
     * @var string
     *
     */
    private $leaseContract;

    /**
     * @var string
     *
     */
    private $outBuyContract;

    /**
     * @var string
     *
     */
    private $investmentContract;

    /**
     * @var integer
     *
     */
    private $forLease;

    /**
     * @var integer
     *
     */
    private $forSale;

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
    private $undergroundParking;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $numberOfFloors;

    /**
     * @var string
     *
     */
    private $currencyHouse;

    /**
     * @var string
     *
     */
    private $onlystreet;

    /**
     * @var integer
     *
     */
    private $ord;

    /**
     * @var string
     *
     */
    private $investmentProject;

    /**
     * @var float
     *
     */
    private $kfFee;

    /**
     * @var string
     *
     */
    private $categoryLandlord;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResBuildTech
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
     * @return SpkResBuildTech
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
     * @return SpkResBuildTech
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
     * @return SpkResBuildTech
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
     * @return SpkResBuildTech
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
     * Set buildingType
     *
     * @param string $buildingType
     * @return SpkResBuildTech
     */
    public function setBuildingType($buildingType)
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    /**
     * Get buildingType
     *
     * @return string 
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * Set buildingClass
     *
     * @param string $buildingClass
     * @return SpkResBuildTech
     */
    public function setBuildingClass($buildingClass)
    {
        $this->buildingClass = $buildingClass;

        return $this;
    }

    /**
     * Get buildingClass
     *
     * @return string 
     */
    public function getBuildingClass()
    {
        return $this->buildingClass;
    }

    /**
     * Set progress
     *
     * @param string $progress
     * @return SpkResBuildTech
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string 
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set buildingStartQuarter
     *
     * @param string $buildingStartQuarter
     * @return SpkResBuildTech
     */
    public function setBuildingStartQuarter($buildingStartQuarter)
    {
        $this->buildingStartQuarter = $buildingStartQuarter;

        return $this;
    }

    /**
     * Get buildingStartQuarter
     *
     * @return string 
     */
    public function getBuildingStartQuarter()
    {
        return $this->buildingStartQuarter;
    }

    /**
     * Set buildingStartYear
     *
     * @param integer $buildingStartYear
     * @return SpkResBuildTech
     */
    public function setBuildingStartYear($buildingStartYear)
    {
        $this->buildingStartYear = $buildingStartYear;

        return $this;
    }

    /**
     * Get buildingStartYear
     *
     * @return integer 
     */
    public function getBuildingStartYear()
    {
        return $this->buildingStartYear;
    }

    /**
     * Set buildingEndQuarter
     *
     * @param string $buildingEndQuarter
     * @return SpkResBuildTech
     */
    public function setBuildingEndQuarter($buildingEndQuarter)
    {
        $this->buildingEndQuarter = $buildingEndQuarter;

        return $this;
    }

    /**
     * Get buildingEndQuarter
     *
     * @return string 
     */
    public function getBuildingEndQuarter()
    {
        return $this->buildingEndQuarter;
    }

    /**
     * Set buildingEndYear
     *
     * @param integer $buildingEndYear
     * @return SpkResBuildTech
     */
    public function setBuildingEndYear($buildingEndYear)
    {
        $this->buildingEndYear = $buildingEndYear;

        return $this;
    }

    /**
     * Get buildingEndYear
     *
     * @return integer 
     */
    public function getBuildingEndYear()
    {
        return $this->buildingEndYear;
    }

    /**
     * Set architectureStyle
     *
     * @param string $architectureStyle
     * @return SpkResBuildTech
     */
    public function setArchitectureStyle($architectureStyle)
    {
        $this->architectureStyle = $architectureStyle;

        return $this;
    }

    /**
     * Get architectureStyle
     *
     * @return string 
     */
    public function getArchitectureStyle()
    {
        return $this->architectureStyle;
    }

    /**
     * Set construction
     *
     * @param string $construction
     * @return SpkResBuildTech
     */
    public function setConstruction($construction)
    {
        $this->construction = $construction;

        return $this;
    }

    /**
     * Get construction
     *
     * @return string 
     */
    public function getConstruction()
    {
        return $this->construction;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkResBuildTech
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set livingArea
     *
     * @param float $livingArea
     * @return SpkResBuildTech
     */
    public function setLivingArea($livingArea)
    {
        $this->livingArea = $livingArea;

        return $this;
    }

    /**
     * Get livingArea
     *
     * @return float 
     */
    public function getLivingArea()
    {
        return $this->livingArea;
    }

    /**
     * Set apartmentsCount
     *
     * @param integer $apartmentsCount
     * @return SpkResBuildTech
     */
    public function setApartmentsCount($apartmentsCount)
    {
        $this->apartmentsCount = $apartmentsCount;

        return $this;
    }

    /**
     * Get apartmentsCount
     *
     * @return integer 
     */
    public function getApartmentsCount()
    {
        return $this->apartmentsCount;
    }

    /**
     * Set apartmentAreaMin
     *
     * @param float $apartmentAreaMin
     * @return SpkResBuildTech
     */
    public function setApartmentAreaMin($apartmentAreaMin)
    {
        $this->apartmentAreaMin = $apartmentAreaMin;

        return $this;
    }

    /**
     * Get apartmentAreaMin
     *
     * @return float 
     */
    public function getApartmentAreaMin()
    {
        return $this->apartmentAreaMin;
    }

    /**
     * Set apartmentAreaMax
     *
     * @param float $apartmentAreaMax
     * @return SpkResBuildTech
     */
    public function setApartmentAreaMax($apartmentAreaMax)
    {
        $this->apartmentAreaMax = $apartmentAreaMax;

        return $this;
    }

    /**
     * Get apartmentAreaMax
     *
     * @return float 
     */
    public function getApartmentAreaMax()
    {
        return $this->apartmentAreaMax;
    }

    /**
     * Set ossature
     *
     * @param string $ossature
     * @return SpkResBuildTech
     */
    public function setOssature($ossature)
    {
        $this->ossature = $ossature;

        return $this;
    }

    /**
     * Get ossature
     *
     * @return string 
     */
    public function getOssature()
    {
        return $this->ossature;
    }

    /**
     * Set overlap
     *
     * @param string $overlap
     * @return SpkResBuildTech
     */
    public function setOverlap($overlap)
    {
        $this->overlap = $overlap;

        return $this;
    }

    /**
     * Get overlap
     *
     * @return string 
     */
    public function getOverlap()
    {
        return $this->overlap;
    }

    /**
     * Set outdoorWall
     *
     * @param string $outdoorWall
     * @return SpkResBuildTech
     */
    public function setOutdoorWall($outdoorWall)
    {
        $this->outdoorWall = $outdoorWall;

        return $this;
    }

    /**
     * Get outdoorWall
     *
     * @return string 
     */
    public function getOutdoorWall()
    {
        return $this->outdoorWall;
    }

    /**
     * Set storeysCountMin
     *
     * @param integer $storeysCountMin
     * @return SpkResBuildTech
     */
    public function setStoreysCountMin($storeysCountMin)
    {
        $this->storeysCountMin = $storeysCountMin;

        return $this;
    }

    /**
     * Get storeysCountMin
     *
     * @return integer 
     */
    public function getStoreysCountMin()
    {
        return $this->storeysCountMin;
    }

    /**
     * Set storeysCountMax
     *
     * @param integer $storeysCountMax
     * @return SpkResBuildTech
     */
    public function setStoreysCountMax($storeysCountMax)
    {
        $this->storeysCountMax = $storeysCountMax;

        return $this;
    }

    /**
     * Get storeysCountMax
     *
     * @return integer 
     */
    public function getStoreysCountMax()
    {
        return $this->storeysCountMax;
    }

    /**
     * Set ceilingHeightMin
     *
     * @param float $ceilingHeightMin
     * @return SpkResBuildTech
     */
    public function setCeilingHeightMin($ceilingHeightMin)
    {
        $this->ceilingHeightMin = $ceilingHeightMin;

        return $this;
    }

    /**
     * Get ceilingHeightMin
     *
     * @return float 
     */
    public function getCeilingHeightMin()
    {
        return $this->ceilingHeightMin;
    }

    /**
     * Set ceilingHeightMax
     *
     * @param float $ceilingHeightMax
     * @return SpkResBuildTech
     */
    public function setCeilingHeightMax($ceilingHeightMax)
    {
        $this->ceilingHeightMax = $ceilingHeightMax;

        return $this;
    }

    /**
     * Get ceilingHeightMax
     *
     * @return float 
     */
    public function getCeilingHeightMax()
    {
        return $this->ceilingHeightMax;
    }

    /**
     * Set penthouse
     *
     * @param string $penthouse
     * @return SpkResBuildTech
     */
    public function setPenthouse($penthouse)
    {
        $this->penthouse = $penthouse;

        return $this;
    }

    /**
     * Get penthouse
     *
     * @return string 
     */
    public function getPenthouse()
    {
        return $this->penthouse;
    }

    /**
     * Set penthouseAreaMin
     *
     * @param float $penthouseAreaMin
     * @return SpkResBuildTech
     */
    public function setPenthouseAreaMin($penthouseAreaMin)
    {
        $this->penthouseAreaMin = $penthouseAreaMin;

        return $this;
    }

    /**
     * Get penthouseAreaMin
     *
     * @return float 
     */
    public function getPenthouseAreaMin()
    {
        return $this->penthouseAreaMin;
    }

    /**
     * Set penthouseAreaMax
     *
     * @param float $penthouseAreaMax
     * @return SpkResBuildTech
     */
    public function setPenthouseAreaMax($penthouseAreaMax)
    {
        $this->penthouseAreaMax = $penthouseAreaMax;

        return $this;
    }

    /**
     * Get penthouseAreaMax
     *
     * @return float 
     */
    public function getPenthouseAreaMax()
    {
        return $this->penthouseAreaMax;
    }

    /**
     * Set townhouse
     *
     * @param string $townhouse
     * @return SpkResBuildTech
     */
    public function setTownhouse($townhouse)
    {
        $this->townhouse = $townhouse;

        return $this;
    }

    /**
     * Get townhouse
     *
     * @return string 
     */
    public function getTownhouse()
    {
        return $this->townhouse;
    }

    /**
     * Set townhouseAreaMin
     *
     * @param float $townhouseAreaMin
     * @return SpkResBuildTech
     */
    public function setTownhouseAreaMin($townhouseAreaMin)
    {
        $this->townhouseAreaMin = $townhouseAreaMin;

        return $this;
    }

    /**
     * Get townhouseAreaMin
     *
     * @return float 
     */
    public function getTownhouseAreaMin()
    {
        return $this->townhouseAreaMin;
    }

    /**
     * Set townhouseAreaMax
     *
     * @param float $townhouseAreaMax
     * @return SpkResBuildTech
     */
    public function setTownhouseAreaMax($townhouseAreaMax)
    {
        $this->townhouseAreaMax = $townhouseAreaMax;

        return $this;
    }

    /**
     * Get townhouseAreaMax
     *
     * @return float 
     */
    public function getTownhouseAreaMax()
    {
        return $this->townhouseAreaMax;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkResBuildTech
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
     * Set lifts
     *
     * @param string $lifts
     * @return SpkResBuildTech
     */
    public function setLifts($lifts)
    {
        $this->lifts = $lifts;

        return $this;
    }

    /**
     * Get lifts
     *
     * @return string 
     */
    public function getLifts()
    {
        return $this->lifts;
    }

    /**
     * Set planning
     *
     * @param string $planning
     * @return SpkResBuildTech
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return string 
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set windows
     *
     * @param string $windows
     * @return SpkResBuildTech
     */
    public function setWindows($windows)
    {
        $this->windows = $windows;

        return $this;
    }

    /**
     * Get windows
     *
     * @return string 
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * Set territory
     *
     * @param string $territory
     * @return SpkResBuildTech
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return string 
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set territoryArea
     *
     * @param float $territoryArea
     * @return SpkResBuildTech
     */
    public function setTerritoryArea($territoryArea)
    {
        $this->territoryArea = $territoryArea;

        return $this;
    }

    /**
     * Get territoryArea
     *
     * @return float 
     */
    public function getTerritoryArea()
    {
        return $this->territoryArea;
    }

    /**
     * Set permission
     *
     * @param string $permission
     * @return SpkResBuildTech
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set leaseContract
     *
     * @param string $leaseContract
     * @return SpkResBuildTech
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
     * Set outBuyContract
     *
     * @param string $outBuyContract
     * @return SpkResBuildTech
     */
    public function setOutBuyContract($outBuyContract)
    {
        $this->outBuyContract = $outBuyContract;

        return $this;
    }

    /**
     * Get outBuyContract
     *
     * @return string 
     */
    public function getOutBuyContract()
    {
        return $this->outBuyContract;
    }

    /**
     * Set investmentContract
     *
     * @param string $investmentContract
     * @return SpkResBuildTech
     */
    public function setInvestmentContract($investmentContract)
    {
        $this->investmentContract = $investmentContract;

        return $this;
    }

    /**
     * Get investmentContract
     *
     * @return string 
     */
    public function getInvestmentContract()
    {
        return $this->investmentContract;
    }

    /**
     * Set forLease
     *
     * @param integer $forLease
     * @return SpkResBuildTech
     */
    public function setForLease($forLease)
    {
        $this->forLease = $forLease;

        return $this;
    }

    /**
     * Get forLease
     *
     * @return integer 
     */
    public function getForLease()
    {
        return $this->forLease;
    }

    /**
     * Set forSale
     *
     * @param integer $forSale
     * @return SpkResBuildTech
     */
    public function setForSale($forSale)
    {
        $this->forSale = $forSale;

        return $this;
    }

    /**
     * Get forSale
     *
     * @return integer 
     */
    public function getForSale()
    {
        return $this->forSale;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkResBuildTech
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
     * @return SpkResBuildTech
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
     * Set undergroundParking
     *
     * @param float $undergroundParking
     * @return SpkResBuildTech
     */
    public function setUndergroundParking($undergroundParking)
    {
        $this->undergroundParking = $undergroundParking;

        return $this;
    }

    /**
     * Get undergroundParking
     *
     * @return float 
     */
    public function getUndergroundParking()
    {
        return $this->undergroundParking;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkResBuildTech
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
     * Set numberOfFloors
     *
     * @param string $numberOfFloors
     * @return SpkResBuildTech
     */
    public function setNumberOfFloors($numberOfFloors)
    {
        $this->numberOfFloors = $numberOfFloors;

        return $this;
    }

    /**
     * Get numberOfFloors
     *
     * @return string 
     */
    public function getNumberOfFloors()
    {
        return $this->numberOfFloors;
    }

    /**
     * Set currencyHouse
     *
     * @param string $currencyHouse
     * @return SpkResBuildTech
     */
    public function setCurrencyHouse($currencyHouse)
    {
        $this->currencyHouse = $currencyHouse;

        return $this;
    }

    /**
     * Get currencyHouse
     *
     * @return string 
     */
    public function getCurrencyHouse()
    {
        return $this->currencyHouse;
    }

    /**
     * Set onlystreet
     *
     * @param string $onlystreet
     * @return SpkResBuildTech
     */
    public function setOnlystreet($onlystreet)
    {
        $this->onlystreet = $onlystreet;

        return $this;
    }

    /**
     * Get onlystreet
     *
     * @return string 
     */
    public function getOnlystreet()
    {
        return $this->onlystreet;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return SpkResBuildTech
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set investmentProject
     *
     * @param string $investmentProject
     * @return SpkResBuildTech
     */
    public function setInvestmentProject($investmentProject)
    {
        $this->investmentProject = $investmentProject;

        return $this;
    }

    /**
     * Get investmentProject
     *
     * @return string 
     */
    public function getInvestmentProject()
    {
        return $this->investmentProject;
    }

    /**
     * Set kfFee
     *
     * @param float $kfFee
     * @return SpkResBuildTech
     */
    public function setKfFee($kfFee)
    {
        $this->kfFee = $kfFee;

        return $this;
    }

    /**
     * Get kfFee
     *
     * @return float 
     */
    public function getKfFee()
    {
        return $this->kfFee;
    }

    /**
     * Set categoryLandlord
     *
     * @param string $categoryLandlord
     * @return SpkResBuildTech
     */
    public function setCategoryLandlord($categoryLandlord)
    {
        $this->categoryLandlord = $categoryLandlord;

        return $this;
    }

    /**
     * Get categoryLandlord
     *
     * @return string 
     */
    public function getCategoryLandlord()
    {
        return $this->categoryLandlord;
    }
}
