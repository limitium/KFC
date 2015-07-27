<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResAptTech
 *
 */
class SpkResAptTech
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
     * @var integer
     *
     */
    private $storeysCount;

    /**
     * @var string
     *
     */
    private $storeyNumber;

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
     * @var integer
     *
     */
    private $roomsCount;

    /**
     * @var integer
     *
     */
    private $bedroomsCount;

    /**
     * @var float
     *
     */
    private $bathroomsCount;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var string
     *
     */
    private $specialCondition;

    /**
     * @var string
     *
     */
    private $views;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var integer
     *
     */
    private $carPlace;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var string
     *
     */
    private $windowsType;

    /**
     * @var string
     *
     */
    private $decoration;

    /**
     * @var string
     *
     */
    private $repairType;

    /**
     * @var string
     *
     */
    private $repairOld;

    /**
     * @var string
     *
     */
    private $design;

    /**
     * @var string
     *
     */
    private $walls;

    /**
     * @var string
     *
     */
    private $apartmentType;

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
    private $planning;

    /**
     * @var float
     *
     */
    private $ceilingHeight;

    /**
     * @var float
     *
     */
    private $appColor;

    /**
     * @var string
     *
     */
    private $includeParking;

    /**
     * @var integer
     *
     */
    private $ord;

    /**
     * @var string
     *
     */
    private $category;

    /**
     * @var string
     *
     */
    private $categoryLandlord;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * Set storeysCount
     *
     * @param integer $storeysCount
     * @return SpkResAptTech
     */
    public function setStoreysCount($storeysCount)
    {
        $this->storeysCount = $storeysCount;

        return $this;
    }

    /**
     * Get storeysCount
     *
     * @return integer 
     */
    public function getStoreysCount()
    {
        return $this->storeysCount;
    }

    /**
     * Set storeyNumber
     *
     * @param string $storeyNumber
     * @return SpkResAptTech
     */
    public function setStoreyNumber($storeyNumber)
    {
        $this->storeyNumber = $storeyNumber;

        return $this;
    }

    /**
     * Get storeyNumber
     *
     * @return string 
     */
    public function getStoreyNumber()
    {
        return $this->storeyNumber;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * Set ceilingHeightMin
     *
     * @param float $ceilingHeightMin
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * Set roomsCount
     *
     * @param integer $roomsCount
     * @return SpkResAptTech
     */
    public function setRoomsCount($roomsCount)
    {
        $this->roomsCount = $roomsCount;

        return $this;
    }

    /**
     * Get roomsCount
     *
     * @return integer 
     */
    public function getRoomsCount()
    {
        return $this->roomsCount;
    }

    /**
     * Set bedroomsCount
     *
     * @param integer $bedroomsCount
     * @return SpkResAptTech
     */
    public function setBedroomsCount($bedroomsCount)
    {
        $this->bedroomsCount = $bedroomsCount;

        return $this;
    }

    /**
     * Get bedroomsCount
     *
     * @return integer 
     */
    public function getBedroomsCount()
    {
        return $this->bedroomsCount;
    }

    /**
     * Set bathroomsCount
     *
     * @param float $bathroomsCount
     * @return SpkResAptTech
     */
    public function setBathroomsCount($bathroomsCount)
    {
        $this->bathroomsCount = $bathroomsCount;

        return $this;
    }

    /**
     * Get bathroomsCount
     *
     * @return float 
     */
    public function getBathroomsCount()
    {
        return $this->bathroomsCount;
    }

    /**
     * Set furniture
     *
     * @param string $furniture
     * @return SpkResAptTech
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
     * Set specialCondition
     *
     * @param string $specialCondition
     * @return SpkResAptTech
     */
    public function setSpecialCondition($specialCondition)
    {
        $this->specialCondition = $specialCondition;

        return $this;
    }

    /**
     * Get specialCondition
     *
     * @return string 
     */
    public function getSpecialCondition()
    {
        return $this->specialCondition;
    }

    /**
     * Set views
     *
     * @param string $views
     * @return SpkResAptTech
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return string 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkResAptTech
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
     * Set parking
     *
     * @param string $parking
     * @return SpkResAptTech
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
     * Set carPlace
     *
     * @param integer $carPlace
     * @return SpkResAptTech
     */
    public function setCarPlace($carPlace)
    {
        $this->carPlace = $carPlace;

        return $this;
    }

    /**
     * Get carPlace
     *
     * @return integer 
     */
    public function getCarPlace()
    {
        return $this->carPlace;
    }

    /**
     * Set floorType
     *
     * @param string $floorType
     * @return SpkResAptTech
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
     * Set windowsType
     *
     * @param string $windowsType
     * @return SpkResAptTech
     */
    public function setWindowsType($windowsType)
    {
        $this->windowsType = $windowsType;

        return $this;
    }

    /**
     * Get windowsType
     *
     * @return string 
     */
    public function getWindowsType()
    {
        return $this->windowsType;
    }

    /**
     * Set decoration
     *
     * @param string $decoration
     * @return SpkResAptTech
     */
    public function setDecoration($decoration)
    {
        $this->decoration = $decoration;

        return $this;
    }

    /**
     * Get decoration
     *
     * @return string 
     */
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * Set repairType
     *
     * @param string $repairType
     * @return SpkResAptTech
     */
    public function setRepairType($repairType)
    {
        $this->repairType = $repairType;

        return $this;
    }

    /**
     * Get repairType
     *
     * @return string 
     */
    public function getRepairType()
    {
        return $this->repairType;
    }

    /**
     * Set repairOld
     *
     * @param string $repairOld
     * @return SpkResAptTech
     */
    public function setRepairOld($repairOld)
    {
        $this->repairOld = $repairOld;

        return $this;
    }

    /**
     * Get repairOld
     *
     * @return string 
     */
    public function getRepairOld()
    {
        return $this->repairOld;
    }

    /**
     * Set design
     *
     * @param string $design
     * @return SpkResAptTech
     */
    public function setDesign($design)
    {
        $this->design = $design;

        return $this;
    }

    /**
     * Get design
     *
     * @return string 
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set walls
     *
     * @param string $walls
     * @return SpkResAptTech
     */
    public function setWalls($walls)
    {
        $this->walls = $walls;

        return $this;
    }

    /**
     * Get walls
     *
     * @return string 
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * Set apartmentType
     *
     * @param string $apartmentType
     * @return SpkResAptTech
     */
    public function setApartmentType($apartmentType)
    {
        $this->apartmentType = $apartmentType;

        return $this;
    }

    /**
     * Get apartmentType
     *
     * @return string 
     */
    public function getApartmentType()
    {
        return $this->apartmentType;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkResAptTech
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
     * @return SpkResAptTech
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
     * Set planning
     *
     * @param string $planning
     * @return SpkResAptTech
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
     * Set ceilingHeight
     *
     * @param float $ceilingHeight
     * @return SpkResAptTech
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return float 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set appColor
     *
     * @param float $appColor
     * @return SpkResAptTech
     */
    public function setAppColor($appColor)
    {
        $this->appColor = $appColor;

        return $this;
    }

    /**
     * Get appColor
     *
     * @return float 
     */
    public function getAppColor()
    {
        return $this->appColor;
    }

    /**
     * Set includeParking
     *
     * @param string $includeParking
     * @return SpkResAptTech
     */
    public function setIncludeParking($includeParking)
    {
        $this->includeParking = $includeParking;

        return $this;
    }

    /**
     * Get includeParking
     *
     * @return string 
     */
    public function getIncludeParking()
    {
        return $this->includeParking;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return SpkResAptTech
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
     * Set category
     *
     * @param string $category
     * @return SpkResAptTech
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set categoryLandlord
     *
     * @param string $categoryLandlord
     * @return SpkResAptTech
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
