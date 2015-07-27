<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBkTech
 *
 */
class SpkIndBkTech
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
     * @var float
     *
     */
    private $ceillingHeight;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var float
     *
     */
    private $floorHeight;

    /**
     * @var float
     *
     */
    private $floorWeight;

    /**
     * @var string
     *
     */
    private $columnGrid;

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
    private $storey;

    /**
     * @var string
     *
     */
    private $class;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $storageArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $groundArea;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var float
     *
     */
    private $freeStorageArea;

    /**
     * @var float
     *
     */
    private $freeOfficeArea;

    /**
     * @var float
     *
     */
    private $additionalArea;

    /**
     * @var string
     *
     */
    private $bockType;

    /**
     * @var float
     *
     */
    private $mezoninArea;

    /**
     * @var string
     *
     */
    private $goods;

    /**
     * @var float
     *
     */
    private $availablePaletomest;

    /**
     * @var float
     *
     */
    private $totalAreaPaletomest;

    /**
     * @var float
     *
     */
    private $availableArea;

    /**
     * @var float
     *
     */
    private $availableAreaM3;

    /**
     * @var float
     *
     */
    private $totalAreaM3;

    /**
     * @var float
     *
     */
    private $availableAreaMass;

    /**
     * @var float
     *
     */
    private $totalAreaMass;

    /**
     * @var string
     *
     */
    private $palletType;

    /**
     * @var string
     *
     */
    private $temperatureType;

    /**
     * @var string
     *
     */
    private $mezoninStorage;

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
    private $pandus;

    /**
     * @var string
     *
     */
    private $pandusNear;

    /**
     * @var string
     *
     */
    private $tplServices;

    /**
     * @var string
     *
     */
    private $landCategory;

    /**
     * @var string
     *
     */
    private $landUsetype;

    /**
     * @var integer
     *
     */
    private $termOfLease;

    /**
     * @var float
     *
     */
    private $landAreaSqm;

    /**
     * @var string
     *
     */
    private $divided;

    /**
     * @var string
     *
     */
    private $coordinate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * Set ceillingHeight
     *
     * @param float $ceillingHeight
     * @return SpkIndBkTech
     */
    public function setCeillingHeight($ceillingHeight)
    {
        $this->ceillingHeight = $ceillingHeight;

        return $this;
    }

    /**
     * Get ceillingHeight
     *
     * @return float 
     */
    public function getCeillingHeight()
    {
        return $this->ceillingHeight;
    }

    /**
     * Set floorType
     *
     * @param string $floorType
     * @return SpkIndBkTech
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
     * Set floorHeight
     *
     * @param float $floorHeight
     * @return SpkIndBkTech
     */
    public function setFloorHeight($floorHeight)
    {
        $this->floorHeight = $floorHeight;

        return $this;
    }

    /**
     * Get floorHeight
     *
     * @return float 
     */
    public function getFloorHeight()
    {
        return $this->floorHeight;
    }

    /**
     * Set floorWeight
     *
     * @param float $floorWeight
     * @return SpkIndBkTech
     */
    public function setFloorWeight($floorWeight)
    {
        $this->floorWeight = $floorWeight;

        return $this;
    }

    /**
     * Get floorWeight
     *
     * @return float 
     */
    public function getFloorWeight()
    {
        return $this->floorWeight;
    }

    /**
     * Set columnGrid
     *
     * @param string $columnGrid
     * @return SpkIndBkTech
     */
    public function setColumnGrid($columnGrid)
    {
        $this->columnGrid = $columnGrid;

        return $this;
    }

    /**
     * Get columnGrid
     *
     * @return string 
     */
    public function getColumnGrid()
    {
        return $this->columnGrid;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * Set storey
     *
     * @param integer $storey
     * @return SpkIndBkTech
     */
    public function setStorey($storey)
    {
        $this->storey = $storey;

        return $this;
    }

    /**
     * Get storey
     *
     * @return integer 
     */
    public function getStorey()
    {
        return $this->storey;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return SpkIndBkTech
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkIndBkTech
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
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return SpkIndBkTech
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
     * Set storageArea
     *
     * @param float $storageArea
     * @return SpkIndBkTech
     */
    public function setStorageArea($storageArea)
    {
        $this->storageArea = $storageArea;

        return $this;
    }

    /**
     * Get storageArea
     *
     * @return float 
     */
    public function getStorageArea()
    {
        return $this->storageArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return SpkIndBkTech
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
     * Set groundArea
     *
     * @param float $groundArea
     * @return SpkIndBkTech
     */
    public function setGroundArea($groundArea)
    {
        $this->groundArea = $groundArea;

        return $this;
    }

    /**
     * Get groundArea
     *
     * @return float 
     */
    public function getGroundArea()
    {
        return $this->groundArea;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return SpkIndBkTech
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
     * Set freeStorageArea
     *
     * @param float $freeStorageArea
     * @return SpkIndBkTech
     */
    public function setFreeStorageArea($freeStorageArea)
    {
        $this->freeStorageArea = $freeStorageArea;

        return $this;
    }

    /**
     * Get freeStorageArea
     *
     * @return float 
     */
    public function getFreeStorageArea()
    {
        return $this->freeStorageArea;
    }

    /**
     * Set freeOfficeArea
     *
     * @param float $freeOfficeArea
     * @return SpkIndBkTech
     */
    public function setFreeOfficeArea($freeOfficeArea)
    {
        $this->freeOfficeArea = $freeOfficeArea;

        return $this;
    }

    /**
     * Get freeOfficeArea
     *
     * @return float 
     */
    public function getFreeOfficeArea()
    {
        return $this->freeOfficeArea;
    }

    /**
     * Set additionalArea
     *
     * @param float $additionalArea
     * @return SpkIndBkTech
     */
    public function setAdditionalArea($additionalArea)
    {
        $this->additionalArea = $additionalArea;

        return $this;
    }

    /**
     * Get additionalArea
     *
     * @return float 
     */
    public function getAdditionalArea()
    {
        return $this->additionalArea;
    }

    /**
     * Set bockType
     *
     * @param string $bockType
     * @return SpkIndBkTech
     */
    public function setBockType($bockType)
    {
        $this->bockType = $bockType;

        return $this;
    }

    /**
     * Get bockType
     *
     * @return string 
     */
    public function getBockType()
    {
        return $this->bockType;
    }

    /**
     * Set mezoninArea
     *
     * @param float $mezoninArea
     * @return SpkIndBkTech
     */
    public function setMezoninArea($mezoninArea)
    {
        $this->mezoninArea = $mezoninArea;

        return $this;
    }

    /**
     * Get mezoninArea
     *
     * @return float 
     */
    public function getMezoninArea()
    {
        return $this->mezoninArea;
    }

    /**
     * Set goods
     *
     * @param string $goods
     * @return SpkIndBkTech
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods
     *
     * @return string 
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * Set availablePaletomest
     *
     * @param float $availablePaletomest
     * @return SpkIndBkTech
     */
    public function setAvailablePaletomest($availablePaletomest)
    {
        $this->availablePaletomest = $availablePaletomest;

        return $this;
    }

    /**
     * Get availablePaletomest
     *
     * @return float 
     */
    public function getAvailablePaletomest()
    {
        return $this->availablePaletomest;
    }

    /**
     * Set totalAreaPaletomest
     *
     * @param float $totalAreaPaletomest
     * @return SpkIndBkTech
     */
    public function setTotalAreaPaletomest($totalAreaPaletomest)
    {
        $this->totalAreaPaletomest = $totalAreaPaletomest;

        return $this;
    }

    /**
     * Get totalAreaPaletomest
     *
     * @return float 
     */
    public function getTotalAreaPaletomest()
    {
        return $this->totalAreaPaletomest;
    }

    /**
     * Set availableArea
     *
     * @param float $availableArea
     * @return SpkIndBkTech
     */
    public function setAvailableArea($availableArea)
    {
        $this->availableArea = $availableArea;

        return $this;
    }

    /**
     * Get availableArea
     *
     * @return float 
     */
    public function getAvailableArea()
    {
        return $this->availableArea;
    }

    /**
     * Set availableAreaM3
     *
     * @param float $availableAreaM3
     * @return SpkIndBkTech
     */
    public function setAvailableAreaM3($availableAreaM3)
    {
        $this->availableAreaM3 = $availableAreaM3;

        return $this;
    }

    /**
     * Get availableAreaM3
     *
     * @return float 
     */
    public function getAvailableAreaM3()
    {
        return $this->availableAreaM3;
    }

    /**
     * Set totalAreaM3
     *
     * @param float $totalAreaM3
     * @return SpkIndBkTech
     */
    public function setTotalAreaM3($totalAreaM3)
    {
        $this->totalAreaM3 = $totalAreaM3;

        return $this;
    }

    /**
     * Get totalAreaM3
     *
     * @return float 
     */
    public function getTotalAreaM3()
    {
        return $this->totalAreaM3;
    }

    /**
     * Set availableAreaMass
     *
     * @param float $availableAreaMass
     * @return SpkIndBkTech
     */
    public function setAvailableAreaMass($availableAreaMass)
    {
        $this->availableAreaMass = $availableAreaMass;

        return $this;
    }

    /**
     * Get availableAreaMass
     *
     * @return float 
     */
    public function getAvailableAreaMass()
    {
        return $this->availableAreaMass;
    }

    /**
     * Set totalAreaMass
     *
     * @param float $totalAreaMass
     * @return SpkIndBkTech
     */
    public function setTotalAreaMass($totalAreaMass)
    {
        $this->totalAreaMass = $totalAreaMass;

        return $this;
    }

    /**
     * Get totalAreaMass
     *
     * @return float 
     */
    public function getTotalAreaMass()
    {
        return $this->totalAreaMass;
    }

    /**
     * Set palletType
     *
     * @param string $palletType
     * @return SpkIndBkTech
     */
    public function setPalletType($palletType)
    {
        $this->palletType = $palletType;

        return $this;
    }

    /**
     * Get palletType
     *
     * @return string 
     */
    public function getPalletType()
    {
        return $this->palletType;
    }

    /**
     * Set temperatureType
     *
     * @param string $temperatureType
     * @return SpkIndBkTech
     */
    public function setTemperatureType($temperatureType)
    {
        $this->temperatureType = $temperatureType;

        return $this;
    }

    /**
     * Get temperatureType
     *
     * @return string 
     */
    public function getTemperatureType()
    {
        return $this->temperatureType;
    }

    /**
     * Set mezoninStorage
     *
     * @param string $mezoninStorage
     * @return SpkIndBkTech
     */
    public function setMezoninStorage($mezoninStorage)
    {
        $this->mezoninStorage = $mezoninStorage;

        return $this;
    }

    /**
     * Get mezoninStorage
     *
     * @return string 
     */
    public function getMezoninStorage()
    {
        return $this->mezoninStorage;
    }

    /**
     * Set storageType
     *
     * @param string $storageType
     * @return SpkIndBkTech
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
     * @return SpkIndBkTech
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
     * Set pandus
     *
     * @param string $pandus
     * @return SpkIndBkTech
     */
    public function setPandus($pandus)
    {
        $this->pandus = $pandus;

        return $this;
    }

    /**
     * Get pandus
     *
     * @return string 
     */
    public function getPandus()
    {
        return $this->pandus;
    }

    /**
     * Set pandusNear
     *
     * @param string $pandusNear
     * @return SpkIndBkTech
     */
    public function setPandusNear($pandusNear)
    {
        $this->pandusNear = $pandusNear;

        return $this;
    }

    /**
     * Get pandusNear
     *
     * @return string 
     */
    public function getPandusNear()
    {
        return $this->pandusNear;
    }

    /**
     * Set tplServices
     *
     * @param string $tplServices
     * @return SpkIndBkTech
     */
    public function setTplServices($tplServices)
    {
        $this->tplServices = $tplServices;

        return $this;
    }

    /**
     * Get tplServices
     *
     * @return string 
     */
    public function getTplServices()
    {
        return $this->tplServices;
    }

    /**
     * Set landCategory
     *
     * @param string $landCategory
     * @return SpkIndBkTech
     */
    public function setLandCategory($landCategory)
    {
        $this->landCategory = $landCategory;

        return $this;
    }

    /**
     * Get landCategory
     *
     * @return string 
     */
    public function getLandCategory()
    {
        return $this->landCategory;
    }

    /**
     * Set landUsetype
     *
     * @param string $landUsetype
     * @return SpkIndBkTech
     */
    public function setLandUsetype($landUsetype)
    {
        $this->landUsetype = $landUsetype;

        return $this;
    }

    /**
     * Get landUsetype
     *
     * @return string 
     */
    public function getLandUsetype()
    {
        return $this->landUsetype;
    }

    /**
     * Set termOfLease
     *
     * @param integer $termOfLease
     * @return SpkIndBkTech
     */
    public function setTermOfLease($termOfLease)
    {
        $this->termOfLease = $termOfLease;

        return $this;
    }

    /**
     * Get termOfLease
     *
     * @return integer 
     */
    public function getTermOfLease()
    {
        return $this->termOfLease;
    }

    /**
     * Set landAreaSqm
     *
     * @param float $landAreaSqm
     * @return SpkIndBkTech
     */
    public function setLandAreaSqm($landAreaSqm)
    {
        $this->landAreaSqm = $landAreaSqm;

        return $this;
    }

    /**
     * Get landAreaSqm
     *
     * @return float 
     */
    public function getLandAreaSqm()
    {
        return $this->landAreaSqm;
    }

    /**
     * Set divided
     *
     * @param string $divided
     * @return SpkIndBkTech
     */
    public function setDivided($divided)
    {
        $this->divided = $divided;

        return $this;
    }

    /**
     * Get divided
     *
     * @return string 
     */
    public function getDivided()
    {
        return $this->divided;
    }

    /**
     * Set coordinate
     *
     * @param string $coordinate
     * @return SpkIndBkTech
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;

        return $this;
    }

    /**
     * Get coordinate
     *
     * @return string 
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }
}
