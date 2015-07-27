<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntStTech
 *
 */
class SpkCntStTech
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
    private $houseTypes;

    /**
     * @var string
     *
     */
    private $houseMaterials;

    /**
     * @var integer
     *
     */
    private $standartDesignCount;

    /**
     * @var integer
     *
     */
    private $houseCount;

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
    private $landAreaMin;

    /**
     * @var float
     *
     */
    private $landAreaMax;

    /**
     * @var float
     *
     */
    private $totalArea;

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
     * @var integer
     *
     */
    private $cottageCount;

    /**
     * @var integer
     *
     */
    private $townhouseCount;

    /**
     * @var string
     *
     */
    private $sewerage;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $water;

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
     * @var integer
     *
     */
    private $estimatedHouseCount;

    /**
     * @var float
     *
     */
    private $houseAreaMin;

    /**
     * @var float
     *
     */
    private $houseAreaMax;

    /**
     * @var float
     *
     */
    private $veryLandArea;

    /**
     * @var float
     *
     */
    private $landAreaCottageMin;

    /**
     * @var float
     *
     */
    private $landAreaCottageMax;

    /**
     * @var float
     *
     */
    private $landAreaTownhouseMin;

    /**
     * @var float
     *
     */
    private $landAreaTownhouseMax;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var string
     *
     */
    private $thisProject;

    /**
     * @var string
     *
     */
    private $market;

    /**
     * @var string
     *
     */
    private $categoryLandlord;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * Set houseTypes
     *
     * @param string $houseTypes
     * @return SpkCntStTech
     */
    public function setHouseTypes($houseTypes)
    {
        $this->houseTypes = $houseTypes;

        return $this;
    }

    /**
     * Get houseTypes
     *
     * @return string 
     */
    public function getHouseTypes()
    {
        return $this->houseTypes;
    }

    /**
     * Set houseMaterials
     *
     * @param string $houseMaterials
     * @return SpkCntStTech
     */
    public function setHouseMaterials($houseMaterials)
    {
        $this->houseMaterials = $houseMaterials;

        return $this;
    }

    /**
     * Get houseMaterials
     *
     * @return string 
     */
    public function getHouseMaterials()
    {
        return $this->houseMaterials;
    }

    /**
     * Set standartDesignCount
     *
     * @param integer $standartDesignCount
     * @return SpkCntStTech
     */
    public function setStandartDesignCount($standartDesignCount)
    {
        $this->standartDesignCount = $standartDesignCount;

        return $this;
    }

    /**
     * Get standartDesignCount
     *
     * @return integer 
     */
    public function getStandartDesignCount()
    {
        return $this->standartDesignCount;
    }

    /**
     * Set houseCount
     *
     * @param integer $houseCount
     * @return SpkCntStTech
     */
    public function setHouseCount($houseCount)
    {
        $this->houseCount = $houseCount;

        return $this;
    }

    /**
     * Get houseCount
     *
     * @return integer 
     */
    public function getHouseCount()
    {
        return $this->houseCount;
    }

    /**
     * Set storeysCountMin
     *
     * @param integer $storeysCountMin
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * Set landAreaMin
     *
     * @param float $landAreaMin
     * @return SpkCntStTech
     */
    public function setLandAreaMin($landAreaMin)
    {
        $this->landAreaMin = $landAreaMin;

        return $this;
    }

    /**
     * Get landAreaMin
     *
     * @return float 
     */
    public function getLandAreaMin()
    {
        return $this->landAreaMin;
    }

    /**
     * Set landAreaMax
     *
     * @param float $landAreaMax
     * @return SpkCntStTech
     */
    public function setLandAreaMax($landAreaMax)
    {
        $this->landAreaMax = $landAreaMax;

        return $this;
    }

    /**
     * Get landAreaMax
     *
     * @return float 
     */
    public function getLandAreaMax()
    {
        return $this->landAreaMax;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkCntStTech
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
     * Set buildingStartQuarter
     *
     * @param string $buildingStartQuarter
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * Set cottageCount
     *
     * @param integer $cottageCount
     * @return SpkCntStTech
     */
    public function setCottageCount($cottageCount)
    {
        $this->cottageCount = $cottageCount;

        return $this;
    }

    /**
     * Get cottageCount
     *
     * @return integer 
     */
    public function getCottageCount()
    {
        return $this->cottageCount;
    }

    /**
     * Set townhouseCount
     *
     * @param integer $townhouseCount
     * @return SpkCntStTech
     */
    public function setTownhouseCount($townhouseCount)
    {
        $this->townhouseCount = $townhouseCount;

        return $this;
    }

    /**
     * Get townhouseCount
     *
     * @return integer 
     */
    public function getTownhouseCount()
    {
        return $this->townhouseCount;
    }

    /**
     * Set sewerage
     *
     * @param string $sewerage
     * @return SpkCntStTech
     */
    public function setSewerage($sewerage)
    {
        $this->sewerage = $sewerage;

        return $this;
    }

    /**
     * Get sewerage
     *
     * @return string 
     */
    public function getSewerage()
    {
        return $this->sewerage;
    }

    /**
     * Set electricity
     *
     * @param float $electricity
     * @return SpkCntStTech
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
     * Set water
     *
     * @param string $water
     * @return SpkCntStTech
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return string 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkCntStTech
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
     * @return SpkCntStTech
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
     * Set estimatedHouseCount
     *
     * @param integer $estimatedHouseCount
     * @return SpkCntStTech
     */
    public function setEstimatedHouseCount($estimatedHouseCount)
    {
        $this->estimatedHouseCount = $estimatedHouseCount;

        return $this;
    }

    /**
     * Get estimatedHouseCount
     *
     * @return integer 
     */
    public function getEstimatedHouseCount()
    {
        return $this->estimatedHouseCount;
    }

    /**
     * Set houseAreaMin
     *
     * @param float $houseAreaMin
     * @return SpkCntStTech
     */
    public function setHouseAreaMin($houseAreaMin)
    {
        $this->houseAreaMin = $houseAreaMin;

        return $this;
    }

    /**
     * Get houseAreaMin
     *
     * @return float 
     */
    public function getHouseAreaMin()
    {
        return $this->houseAreaMin;
    }

    /**
     * Set houseAreaMax
     *
     * @param float $houseAreaMax
     * @return SpkCntStTech
     */
    public function setHouseAreaMax($houseAreaMax)
    {
        $this->houseAreaMax = $houseAreaMax;

        return $this;
    }

    /**
     * Get houseAreaMax
     *
     * @return float 
     */
    public function getHouseAreaMax()
    {
        return $this->houseAreaMax;
    }

    /**
     * Set veryLandArea
     *
     * @param float $veryLandArea
     * @return SpkCntStTech
     */
    public function setVeryLandArea($veryLandArea)
    {
        $this->veryLandArea = $veryLandArea;

        return $this;
    }

    /**
     * Get veryLandArea
     *
     * @return float 
     */
    public function getVeryLandArea()
    {
        return $this->veryLandArea;
    }

    /**
     * Set landAreaCottageMin
     *
     * @param float $landAreaCottageMin
     * @return SpkCntStTech
     */
    public function setLandAreaCottageMin($landAreaCottageMin)
    {
        $this->landAreaCottageMin = $landAreaCottageMin;

        return $this;
    }

    /**
     * Get landAreaCottageMin
     *
     * @return float 
     */
    public function getLandAreaCottageMin()
    {
        return $this->landAreaCottageMin;
    }

    /**
     * Set landAreaCottageMax
     *
     * @param float $landAreaCottageMax
     * @return SpkCntStTech
     */
    public function setLandAreaCottageMax($landAreaCottageMax)
    {
        $this->landAreaCottageMax = $landAreaCottageMax;

        return $this;
    }

    /**
     * Get landAreaCottageMax
     *
     * @return float 
     */
    public function getLandAreaCottageMax()
    {
        return $this->landAreaCottageMax;
    }

    /**
     * Set landAreaTownhouseMin
     *
     * @param float $landAreaTownhouseMin
     * @return SpkCntStTech
     */
    public function setLandAreaTownhouseMin($landAreaTownhouseMin)
    {
        $this->landAreaTownhouseMin = $landAreaTownhouseMin;

        return $this;
    }

    /**
     * Get landAreaTownhouseMin
     *
     * @return float 
     */
    public function getLandAreaTownhouseMin()
    {
        return $this->landAreaTownhouseMin;
    }

    /**
     * Set landAreaTownhouseMax
     *
     * @param float $landAreaTownhouseMax
     * @return SpkCntStTech
     */
    public function setLandAreaTownhouseMax($landAreaTownhouseMax)
    {
        $this->landAreaTownhouseMax = $landAreaTownhouseMax;

        return $this;
    }

    /**
     * Get landAreaTownhouseMax
     *
     * @return float 
     */
    public function getLandAreaTownhouseMax()
    {
        return $this->landAreaTownhouseMax;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkCntStTech
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
     * Set kfClass
     *
     * @param string $kfClass
     * @return SpkCntStTech
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
     * Set thisProject
     *
     * @param string $thisProject
     * @return SpkCntStTech
     */
    public function setThisProject($thisProject)
    {
        $this->thisProject = $thisProject;

        return $this;
    }

    /**
     * Get thisProject
     *
     * @return string 
     */
    public function getThisProject()
    {
        return $this->thisProject;
    }

    /**
     * Set market
     *
     * @param string $market
     * @return SpkCntStTech
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
     * Set categoryLandlord
     *
     * @param string $categoryLandlord
     * @return SpkCntStTech
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
