<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntLhTech
 *
 */
class SpkCntLhTech
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
    private $houseType;

    /**
     * @var string
     *
     */
    private $houseMaterial;

    /**
     * @var integer
     *
     */
    private $buildYear;

    /**
     * @var float
     *
     */
    private $landArea;

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
     * @var integer
     *
     */
    private $garage;

    /**
     * @var string
     *
     */
    private $roofMaterial;

    /**
     * @var string
     *
     */
    private $windowsType;

    /**
     * @var string
     *
     */
    private $wallMaterial;

    /**
     * @var string
     *
     */
    private $decoration;

    /**
     * @var string
     *
     */
    private $relief;

    /**
     * @var string
     *
     */
    private $pool;

    /**
     * @var string
     *
     */
    private $forest;

    /**
     * @var string
     *
     */
    private $landDesign;

    /**
     * @var string
     *
     */
    private $fence;

    /**
     * @var string
     *
     */
    private $additionalBuildings;

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
    private $storeyCountMin;

    /**
     * @var integer
     *
     */
    private $storeyCountMax;

    /**
     * @var string
     *
     */
    private $preparedness;

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
    private $market;

    /**
     * @var float
     *
     */
    private $leaseLandArea;

    /**
     * @var string
     *
     */
    private $ceiling;

    /**
     * @var string
     *
     */
    private $gas;

    /**
     * @var string
     *
     */
    private $purpose;

    /**
     * @var string
     *
     */
    private $foundationMaterial;

    /**
     * @var string
     *
     */
    private $levelCount;

    /**
     * @var string
     *
     */
    private $communication;

    /**
     * @var string
     *
     */
    private $furnitureMainview;

    /**
     * @var string
     *
     */
    private $window;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $landType;

    /**
     * @var string
     *
     */
    private $categoryLandlord;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * Set houseType
     *
     * @param string $houseType
     * @return SpkCntLhTech
     */
    public function setHouseType($houseType)
    {
        $this->houseType = $houseType;

        return $this;
    }

    /**
     * Get houseType
     *
     * @return string 
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * Set houseMaterial
     *
     * @param string $houseMaterial
     * @return SpkCntLhTech
     */
    public function setHouseMaterial($houseMaterial)
    {
        $this->houseMaterial = $houseMaterial;

        return $this;
    }

    /**
     * Get houseMaterial
     *
     * @return string 
     */
    public function getHouseMaterial()
    {
        return $this->houseMaterial;
    }

    /**
     * Set buildYear
     *
     * @param integer $buildYear
     * @return SpkCntLhTech
     */
    public function setBuildYear($buildYear)
    {
        $this->buildYear = $buildYear;

        return $this;
    }

    /**
     * Get buildYear
     *
     * @return integer 
     */
    public function getBuildYear()
    {
        return $this->buildYear;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return SpkCntLhTech
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * Set sewerage
     *
     * @param string $sewerage
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * Set garage
     *
     * @param integer $garage
     * @return SpkCntLhTech
     */
    public function setGarage($garage)
    {
        $this->garage = $garage;

        return $this;
    }

    /**
     * Get garage
     *
     * @return integer 
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * Set roofMaterial
     *
     * @param string $roofMaterial
     * @return SpkCntLhTech
     */
    public function setRoofMaterial($roofMaterial)
    {
        $this->roofMaterial = $roofMaterial;

        return $this;
    }

    /**
     * Get roofMaterial
     *
     * @return string 
     */
    public function getRoofMaterial()
    {
        return $this->roofMaterial;
    }

    /**
     * Set windowsType
     *
     * @param string $windowsType
     * @return SpkCntLhTech
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
     * Set wallMaterial
     *
     * @param string $wallMaterial
     * @return SpkCntLhTech
     */
    public function setWallMaterial($wallMaterial)
    {
        $this->wallMaterial = $wallMaterial;

        return $this;
    }

    /**
     * Get wallMaterial
     *
     * @return string 
     */
    public function getWallMaterial()
    {
        return $this->wallMaterial;
    }

    /**
     * Set decoration
     *
     * @param string $decoration
     * @return SpkCntLhTech
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
     * Set relief
     *
     * @param string $relief
     * @return SpkCntLhTech
     */
    public function setRelief($relief)
    {
        $this->relief = $relief;

        return $this;
    }

    /**
     * Get relief
     *
     * @return string 
     */
    public function getRelief()
    {
        return $this->relief;
    }

    /**
     * Set pool
     *
     * @param string $pool
     * @return SpkCntLhTech
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * Get pool
     *
     * @return string 
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * Set forest
     *
     * @param string $forest
     * @return SpkCntLhTech
     */
    public function setForest($forest)
    {
        $this->forest = $forest;

        return $this;
    }

    /**
     * Get forest
     *
     * @return string 
     */
    public function getForest()
    {
        return $this->forest;
    }

    /**
     * Set landDesign
     *
     * @param string $landDesign
     * @return SpkCntLhTech
     */
    public function setLandDesign($landDesign)
    {
        $this->landDesign = $landDesign;

        return $this;
    }

    /**
     * Get landDesign
     *
     * @return string 
     */
    public function getLandDesign()
    {
        return $this->landDesign;
    }

    /**
     * Set fence
     *
     * @param string $fence
     * @return SpkCntLhTech
     */
    public function setFence($fence)
    {
        $this->fence = $fence;

        return $this;
    }

    /**
     * Get fence
     *
     * @return string 
     */
    public function getFence()
    {
        return $this->fence;
    }

    /**
     * Set additionalBuildings
     *
     * @param string $additionalBuildings
     * @return SpkCntLhTech
     */
    public function setAdditionalBuildings($additionalBuildings)
    {
        $this->additionalBuildings = $additionalBuildings;

        return $this;
    }

    /**
     * Get additionalBuildings
     *
     * @return string 
     */
    public function getAdditionalBuildings()
    {
        return $this->additionalBuildings;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * Set storeyCountMin
     *
     * @param integer $storeyCountMin
     * @return SpkCntLhTech
     */
    public function setStoreyCountMin($storeyCountMin)
    {
        $this->storeyCountMin = $storeyCountMin;

        return $this;
    }

    /**
     * Get storeyCountMin
     *
     * @return integer 
     */
    public function getStoreyCountMin()
    {
        return $this->storeyCountMin;
    }

    /**
     * Set storeyCountMax
     *
     * @param integer $storeyCountMax
     * @return SpkCntLhTech
     */
    public function setStoreyCountMax($storeyCountMax)
    {
        $this->storeyCountMax = $storeyCountMax;

        return $this;
    }

    /**
     * Get storeyCountMax
     *
     * @return integer 
     */
    public function getStoreyCountMax()
    {
        return $this->storeyCountMax;
    }

    /**
     * Set preparedness
     *
     * @param string $preparedness
     * @return SpkCntLhTech
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
     * Set roomsCount
     *
     * @param integer $roomsCount
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * @return SpkCntLhTech
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
     * Set market
     *
     * @param string $market
     * @return SpkCntLhTech
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
     * Set leaseLandArea
     *
     * @param float $leaseLandArea
     * @return SpkCntLhTech
     */
    public function setLeaseLandArea($leaseLandArea)
    {
        $this->leaseLandArea = $leaseLandArea;

        return $this;
    }

    /**
     * Get leaseLandArea
     *
     * @return float 
     */
    public function getLeaseLandArea()
    {
        return $this->leaseLandArea;
    }

    /**
     * Set ceiling
     *
     * @param string $ceiling
     * @return SpkCntLhTech
     */
    public function setCeiling($ceiling)
    {
        $this->ceiling = $ceiling;

        return $this;
    }

    /**
     * Get ceiling
     *
     * @return string 
     */
    public function getCeiling()
    {
        return $this->ceiling;
    }

    /**
     * Set gas
     *
     * @param string $gas
     * @return SpkCntLhTech
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return string 
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set purpose
     *
     * @param string $purpose
     * @return SpkCntLhTech
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get purpose
     *
     * @return string 
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set foundationMaterial
     *
     * @param string $foundationMaterial
     * @return SpkCntLhTech
     */
    public function setFoundationMaterial($foundationMaterial)
    {
        $this->foundationMaterial = $foundationMaterial;

        return $this;
    }

    /**
     * Get foundationMaterial
     *
     * @return string 
     */
    public function getFoundationMaterial()
    {
        return $this->foundationMaterial;
    }

    /**
     * Set levelCount
     *
     * @param string $levelCount
     * @return SpkCntLhTech
     */
    public function setLevelCount($levelCount)
    {
        $this->levelCount = $levelCount;

        return $this;
    }

    /**
     * Get levelCount
     *
     * @return string 
     */
    public function getLevelCount()
    {
        return $this->levelCount;
    }

    /**
     * Set communication
     *
     * @param string $communication
     * @return SpkCntLhTech
     */
    public function setCommunication($communication)
    {
        $this->communication = $communication;

        return $this;
    }

    /**
     * Get communication
     *
     * @return string 
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Set furnitureMainview
     *
     * @param string $furnitureMainview
     * @return SpkCntLhTech
     */
    public function setFurnitureMainview($furnitureMainview)
    {
        $this->furnitureMainview = $furnitureMainview;

        return $this;
    }

    /**
     * Get furnitureMainview
     *
     * @return string 
     */
    public function getFurnitureMainview()
    {
        return $this->furnitureMainview;
    }

    /**
     * Set window
     *
     * @param string $window
     * @return SpkCntLhTech
     */
    public function setWindow($window)
    {
        $this->window = $window;

        return $this;
    }

    /**
     * Get window
     *
     * @return string 
     */
    public function getWindow()
    {
        return $this->window;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkCntLhTech
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
     * Set landType
     *
     * @param string $landType
     * @return SpkCntLhTech
     */
    public function setLandType($landType)
    {
        $this->landType = $landType;

        return $this;
    }

    /**
     * Get landType
     *
     * @return string 
     */
    public function getLandType()
    {
        return $this->landType;
    }

    /**
     * Set categoryLandlord
     *
     * @param string $categoryLandlord
     * @return SpkCntLhTech
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
