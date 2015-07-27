<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcTech
 *
 */
class SpkOffOcTech
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
     * @var integer
     *
     */
    private $storeysCountMin;

    /**
     * @var string
     *
     */
    private $storeysCountMax;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var float
     *
     */
    private $usefulArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $retailArea;

    /**
     * @var float
     *
     */
    private $livingArea;

    /**
     * @var float
     *
     */
    private $leaseAreaMin;

    /**
     * @var integer
     *
     */
    private $liftCount;

    /**
     * @var string
     *
     */
    private $liftDescription;

    /**
     * @var integer
     *
     */
    private $liftWeight;

    /**
     * @var float
     *
     */
    private $overlapWeight;

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
    private $ventilation;

    /**
     * @var string
     *
     */
    private $energyCategory;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $provider;

    /**
     * @var integer
     *
     */
    private $phoneLineCount;

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
    private $floorType;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var string
     *
     */
    private $kfDistrict;

    /**
     * @var string
     *
     */
    private $planning;

    /**
     * @var float
     *
     */
    private $storeyDeepness;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var integer
     *
     */
    private $stepAccessibility;

    /**
     * @var string
     *
     */
    private $columnStep;

    /**
     * @var string
     *
     */
    private $actuality;

    /**
     * @var integer
     *
     */
    private $complYear;

    /**
     * @var integer
     *
     */
    private $complQuarter;

    /**
     * @var float
     *
     */
    private $minFloorPlate;

    /**
     * @var float
     *
     */
    private $maxFloorPlate;

    /**
     * @var float
     *
     */
    private $vacancyRate;

    /**
     * @var float
     *
     */
    private $hotelArea;

    /**
     * @var string
     *
     */
    private $notInList;

    /**
     * @var string
     *
     */
    private $listing;

    /**
     * @var float
     *
     */
    private $freeSaleArea;

    /**
     * @var string
     *
     */
    private $mrefClass;

    /**
     * @var string
     *
     */
    private $exportSale;

    /**
     * @var string
     *
     */
    private $costNotPublish;

    /**
     * @var float
     *
     */
    private $ordListing;

    /**
     * @var string
     *
     */
    private $transportAccessibility;

    /**
     * @var string
     *
     */
    private $shuttleBus;

    /**
     * @var float
     *
     */
    private $lastFreeAreaSale;

    /**
     * @var float
     *
     */
    private $lastFreeAreaLease;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * Set storeysCountMin
     *
     * @param integer $storeysCountMin
     * @return SpkOffOcTech
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
     * @param string $storeysCountMax
     * @return SpkOffOcTech
     */
    public function setStoreysCountMax($storeysCountMax)
    {
        $this->storeysCountMax = $storeysCountMax;

        return $this;
    }

    /**
     * Get storeysCountMax
     *
     * @return string 
     */
    public function getStoreysCountMax()
    {
        return $this->storeysCountMax;
    }

    /**
     * Set kfClass
     *
     * @param string $kfClass
     * @return SpkOffOcTech
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkOffOcTech
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
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return SpkOffOcTech
     */
    public function setLeaseArea($leaseArea)
    {
        $this->leaseArea = $leaseArea;

        return $this;
    }

    /**
     * Get leaseArea
     *
     * @return float 
     */
    public function getLeaseArea()
    {
        return $this->leaseArea;
    }

    /**
     * Set freeArea
     *
     * @param float $freeArea
     * @return SpkOffOcTech
     */
    public function setFreeArea($freeArea)
    {
        $this->freeArea = $freeArea;

        return $this;
    }

    /**
     * Get freeArea
     *
     * @return float 
     */
    public function getFreeArea()
    {
        return $this->freeArea;
    }

    /**
     * Set usefulArea
     *
     * @param float $usefulArea
     * @return SpkOffOcTech
     */
    public function setUsefulArea($usefulArea)
    {
        $this->usefulArea = $usefulArea;

        return $this;
    }

    /**
     * Get usefulArea
     *
     * @return float 
     */
    public function getUsefulArea()
    {
        return $this->usefulArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return SpkOffOcTech
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    /**
     * Get officeArea
     *
     * @return float 
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return SpkOffOcTech
     */
    public function setIndustrialArea($industrialArea)
    {
        $this->industrialArea = $industrialArea;

        return $this;
    }

    /**
     * Get industrialArea
     *
     * @return float 
     */
    public function getIndustrialArea()
    {
        return $this->industrialArea;
    }

    /**
     * Set retailArea
     *
     * @param float $retailArea
     * @return SpkOffOcTech
     */
    public function setRetailArea($retailArea)
    {
        $this->retailArea = $retailArea;

        return $this;
    }

    /**
     * Get retailArea
     *
     * @return float 
     */
    public function getRetailArea()
    {
        return $this->retailArea;
    }

    /**
     * Set livingArea
     *
     * @param float $livingArea
     * @return SpkOffOcTech
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
     * Set leaseAreaMin
     *
     * @param float $leaseAreaMin
     * @return SpkOffOcTech
     */
    public function setLeaseAreaMin($leaseAreaMin)
    {
        $this->leaseAreaMin = $leaseAreaMin;

        return $this;
    }

    /**
     * Get leaseAreaMin
     *
     * @return float 
     */
    public function getLeaseAreaMin()
    {
        return $this->leaseAreaMin;
    }

    /**
     * Set liftCount
     *
     * @param integer $liftCount
     * @return SpkOffOcTech
     */
    public function setLiftCount($liftCount)
    {
        $this->liftCount = $liftCount;

        return $this;
    }

    /**
     * Get liftCount
     *
     * @return integer 
     */
    public function getLiftCount()
    {
        return $this->liftCount;
    }

    /**
     * Set liftDescription
     *
     * @param string $liftDescription
     * @return SpkOffOcTech
     */
    public function setLiftDescription($liftDescription)
    {
        $this->liftDescription = $liftDescription;

        return $this;
    }

    /**
     * Get liftDescription
     *
     * @return string 
     */
    public function getLiftDescription()
    {
        return $this->liftDescription;
    }

    /**
     * Set liftWeight
     *
     * @param integer $liftWeight
     * @return SpkOffOcTech
     */
    public function setLiftWeight($liftWeight)
    {
        $this->liftWeight = $liftWeight;

        return $this;
    }

    /**
     * Get liftWeight
     *
     * @return integer 
     */
    public function getLiftWeight()
    {
        return $this->liftWeight;
    }

    /**
     * Set overlapWeight
     *
     * @param float $overlapWeight
     * @return SpkOffOcTech
     */
    public function setOverlapWeight($overlapWeight)
    {
        $this->overlapWeight = $overlapWeight;

        return $this;
    }

    /**
     * Get overlapWeight
     *
     * @return float 
     */
    public function getOverlapWeight()
    {
        return $this->overlapWeight;
    }

    /**
     * Set ceilingHeightMin
     *
     * @param float $ceilingHeightMin
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * Set ventilation
     *
     * @param string $ventilation
     * @return SpkOffOcTech
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;

        return $this;
    }

    /**
     * Get ventilation
     *
     * @return string 
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * Set energyCategory
     *
     * @param string $energyCategory
     * @return SpkOffOcTech
     */
    public function setEnergyCategory($energyCategory)
    {
        $this->energyCategory = $energyCategory;

        return $this;
    }

    /**
     * Get energyCategory
     *
     * @return string 
     */
    public function getEnergyCategory()
    {
        return $this->energyCategory;
    }

    /**
     * Set electricity
     *
     * @param float $electricity
     * @return SpkOffOcTech
     */
    public function setElectricity($electricity)
    {
        $this->electricity = $electricity;

        return $this;
    }

    /**
     * Get electricity
     *
     * @return float 
     */
    public function getElectricity()
    {
        return $this->electricity;
    }

    /**
     * Set provider
     *
     * @param string $provider
     * @return SpkOffOcTech
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set phoneLineCount
     *
     * @param integer $phoneLineCount
     * @return SpkOffOcTech
     */
    public function setPhoneLineCount($phoneLineCount)
    {
        $this->phoneLineCount = $phoneLineCount;

        return $this;
    }

    /**
     * Get phoneLineCount
     *
     * @return integer 
     */
    public function getPhoneLineCount()
    {
        return $this->phoneLineCount;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkOffOcTech
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
     * @return SpkOffOcTech
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
     * Set floorType
     *
     * @param string $floorType
     * @return SpkOffOcTech
     */
    public function setFloorType($floorType)
    {
        $this->floorType = $floorType;

        return $this;
    }

    /**
     * Get floorType
     *
     * @return string 
     */
    public function getFloorType()
    {
        return $this->floorType;
    }

    /**
     * Set rings
     *
     * @param string $rings
     * @return SpkOffOcTech
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
     * Set kfDistrict
     *
     * @param string $kfDistrict
     * @return SpkOffOcTech
     */
    public function setKfDistrict($kfDistrict)
    {
        $this->kfDistrict = $kfDistrict;

        return $this;
    }

    /**
     * Get kfDistrict
     *
     * @return string 
     */
    public function getKfDistrict()
    {
        return $this->kfDistrict;
    }

    /**
     * Set planning
     *
     * @param string $planning
     * @return SpkOffOcTech
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
     * Set storeyDeepness
     *
     * @param float $storeyDeepness
     * @return SpkOffOcTech
     */
    public function setStoreyDeepness($storeyDeepness)
    {
        $this->storeyDeepness = $storeyDeepness;

        return $this;
    }

    /**
     * Get storeyDeepness
     *
     * @return float 
     */
    public function getStoreyDeepness()
    {
        return $this->storeyDeepness;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return SpkOffOcTech
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;

        return $this;
    }

    /**
     * Get landArea
     *
     * @return float 
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * Set stepAccessibility
     *
     * @param integer $stepAccessibility
     * @return SpkOffOcTech
     */
    public function setStepAccessibility($stepAccessibility)
    {
        $this->stepAccessibility = $stepAccessibility;

        return $this;
    }

    /**
     * Get stepAccessibility
     *
     * @return integer 
     */
    public function getStepAccessibility()
    {
        return $this->stepAccessibility;
    }

    /**
     * Set columnStep
     *
     * @param string $columnStep
     * @return SpkOffOcTech
     */
    public function setColumnStep($columnStep)
    {
        $this->columnStep = $columnStep;

        return $this;
    }

    /**
     * Get columnStep
     *
     * @return string 
     */
    public function getColumnStep()
    {
        return $this->columnStep;
    }

    /**
     * Set actuality
     *
     * @param string $actuality
     * @return SpkOffOcTech
     */
    public function setActuality($actuality)
    {
        $this->actuality = $actuality;

        return $this;
    }

    /**
     * Get actuality
     *
     * @return string 
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Set complYear
     *
     * @param integer $complYear
     * @return SpkOffOcTech
     */
    public function setComplYear($complYear)
    {
        $this->complYear = $complYear;

        return $this;
    }

    /**
     * Get complYear
     *
     * @return integer 
     */
    public function getComplYear()
    {
        return $this->complYear;
    }

    /**
     * Set complQuarter
     *
     * @param integer $complQuarter
     * @return SpkOffOcTech
     */
    public function setComplQuarter($complQuarter)
    {
        $this->complQuarter = $complQuarter;

        return $this;
    }

    /**
     * Get complQuarter
     *
     * @return integer 
     */
    public function getComplQuarter()
    {
        return $this->complQuarter;
    }

    /**
     * Set minFloorPlate
     *
     * @param float $minFloorPlate
     * @return SpkOffOcTech
     */
    public function setMinFloorPlate($minFloorPlate)
    {
        $this->minFloorPlate = $minFloorPlate;

        return $this;
    }

    /**
     * Get minFloorPlate
     *
     * @return float 
     */
    public function getMinFloorPlate()
    {
        return $this->minFloorPlate;
    }

    /**
     * Set maxFloorPlate
     *
     * @param float $maxFloorPlate
     * @return SpkOffOcTech
     */
    public function setMaxFloorPlate($maxFloorPlate)
    {
        $this->maxFloorPlate = $maxFloorPlate;

        return $this;
    }

    /**
     * Get maxFloorPlate
     *
     * @return float 
     */
    public function getMaxFloorPlate()
    {
        return $this->maxFloorPlate;
    }

    /**
     * Set vacancyRate
     *
     * @param float $vacancyRate
     * @return SpkOffOcTech
     */
    public function setVacancyRate($vacancyRate)
    {
        $this->vacancyRate = $vacancyRate;

        return $this;
    }

    /**
     * Get vacancyRate
     *
     * @return float 
     */
    public function getVacancyRate()
    {
        return $this->vacancyRate;
    }

    /**
     * Set hotelArea
     *
     * @param float $hotelArea
     * @return SpkOffOcTech
     */
    public function setHotelArea($hotelArea)
    {
        $this->hotelArea = $hotelArea;

        return $this;
    }

    /**
     * Get hotelArea
     *
     * @return float 
     */
    public function getHotelArea()
    {
        return $this->hotelArea;
    }

    /**
     * Set notInList
     *
     * @param string $notInList
     * @return SpkOffOcTech
     */
    public function setNotInList($notInList)
    {
        $this->notInList = $notInList;

        return $this;
    }

    /**
     * Get notInList
     *
     * @return string 
     */
    public function getNotInList()
    {
        return $this->notInList;
    }

    /**
     * Set listing
     *
     * @param string $listing
     * @return SpkOffOcTech
     */
    public function setListing($listing)
    {
        $this->listing = $listing;

        return $this;
    }

    /**
     * Get listing
     *
     * @return string 
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * Set freeSaleArea
     *
     * @param float $freeSaleArea
     * @return SpkOffOcTech
     */
    public function setFreeSaleArea($freeSaleArea)
    {
        $this->freeSaleArea = $freeSaleArea;

        return $this;
    }

    /**
     * Get freeSaleArea
     *
     * @return float 
     */
    public function getFreeSaleArea()
    {
        return $this->freeSaleArea;
    }

    /**
     * Set mrefClass
     *
     * @param string $mrefClass
     * @return SpkOffOcTech
     */
    public function setMrefClass($mrefClass)
    {
        $this->mrefClass = $mrefClass;

        return $this;
    }

    /**
     * Get mrefClass
     *
     * @return string 
     */
    public function getMrefClass()
    {
        return $this->mrefClass;
    }

    /**
     * Set exportSale
     *
     * @param string $exportSale
     * @return SpkOffOcTech
     */
    public function setExportSale($exportSale)
    {
        $this->exportSale = $exportSale;

        return $this;
    }

    /**
     * Get exportSale
     *
     * @return string 
     */
    public function getExportSale()
    {
        return $this->exportSale;
    }

    /**
     * Set costNotPublish
     *
     * @param string $costNotPublish
     * @return SpkOffOcTech
     */
    public function setCostNotPublish($costNotPublish)
    {
        $this->costNotPublish = $costNotPublish;

        return $this;
    }

    /**
     * Get costNotPublish
     *
     * @return string 
     */
    public function getCostNotPublish()
    {
        return $this->costNotPublish;
    }

    /**
     * Set ordListing
     *
     * @param float $ordListing
     * @return SpkOffOcTech
     */
    public function setOrdListing($ordListing)
    {
        $this->ordListing = $ordListing;

        return $this;
    }

    /**
     * Get ordListing
     *
     * @return float 
     */
    public function getOrdListing()
    {
        return $this->ordListing;
    }

    /**
     * Set transportAccessibility
     *
     * @param string $transportAccessibility
     * @return SpkOffOcTech
     */
    public function setTransportAccessibility($transportAccessibility)
    {
        $this->transportAccessibility = $transportAccessibility;

        return $this;
    }

    /**
     * Get transportAccessibility
     *
     * @return string 
     */
    public function getTransportAccessibility()
    {
        return $this->transportAccessibility;
    }

    /**
     * Set shuttleBus
     *
     * @param string $shuttleBus
     * @return SpkOffOcTech
     */
    public function setShuttleBus($shuttleBus)
    {
        $this->shuttleBus = $shuttleBus;

        return $this;
    }

    /**
     * Get shuttleBus
     *
     * @return string 
     */
    public function getShuttleBus()
    {
        return $this->shuttleBus;
    }

    /**
     * Set lastFreeAreaSale
     *
     * @param float $lastFreeAreaSale
     * @return SpkOffOcTech
     */
    public function setLastFreeAreaSale($lastFreeAreaSale)
    {
        $this->lastFreeAreaSale = $lastFreeAreaSale;

        return $this;
    }

    /**
     * Get lastFreeAreaSale
     *
     * @return float 
     */
    public function getLastFreeAreaSale()
    {
        return $this->lastFreeAreaSale;
    }

    /**
     * Set lastFreeAreaLease
     *
     * @param float $lastFreeAreaLease
     * @return SpkOffOcTech
     */
    public function setLastFreeAreaLease($lastFreeAreaLease)
    {
        $this->lastFreeAreaLease = $lastFreeAreaLease;

        return $this;
    }

    /**
     * Get lastFreeAreaLease
     *
     * @return float 
     */
    public function getLastFreeAreaLease()
    {
        return $this->lastFreeAreaLease;
    }
}
