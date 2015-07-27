<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScTech
 *
 */
class SpkRetScTech
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
    private $totalArea;

    /**
     * @var float
     *
     */
    private $tradeArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $useTradeArea;

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
    private $undergroundArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var float
     *
     */
    private $developmentArea;

    /**
     * @var integer
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingStartNote;

    /**
     * @var integer
     *
     */
    private $planningStartupYear;

    /**
     * @var integer
     *
     */
    private $strartupYear;

    /**
     * @var integer
     *
     */
    private $dateOpenYear;

    /**
     * @var string
     *
     */
    private $dateOpenNote;

    /**
     * @var integer
     *
     */
    private $reconstructionBeginYear;

    /**
     * @var string
     *
     */
    private $reconstructionBeginNote;

    /**
     * @var integer
     *
     */
    private $reconstructionEndYear;

    /**
     * @var string
     *
     */
    private $reconstructionEndNote;

    /**
     * @var float
     *
     */
    private $rate;

    /**
     * @var float
     *
     */
    private $entertainmentTotalArea;

    /**
     * @var string
     *
     */
    private $planningStartupQuarter;

    /**
     * @var string
     *
     */
    private $buildingStage;

    /**
     * @var float
     *
     */
    private $hotelArea;

    /**
     * @var float
     *
     */
    private $residentialArea;

    /**
     * @var float
     *
     */
    private $exhibitionArea;

    /**
     * @var string
     *
     */
    private $profTc;

    /**
     * @var string
     *
     */
    private $expIncluded;

    /**
     * @var integer
     *
     */
    private $storeys;

    /**
     * @var float
     *
     */
    private $basementArea;

    /**
     * @var float
     *
     */
    private $capArea;

    /**
     * @var float
     *
     */
    private $firstFloorArea;

    /**
     * @var float
     *
     */
    private $seconfFloorArea;

    /**
     * @var float
     *
     */
    private $entresolArea;

    /**
     * @var string
     *
     */
    private $shopName;

    /**
     * @var float
     *
     */
    private $saleArea;

    /**
     * @var string
     *
     */
    private $firstLine;

    /**
     * @var string
     *
     */
    private $windows;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $techComments;

    /**
     * @var string
     *
     */
    private $houseType;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetScTech
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
     * @return SpkRetScTech
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
     * @return SpkRetScTech
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
     * @return SpkRetScTech
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
     * @return SpkRetScTech
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkRetScTech
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
     * Set tradeArea
     *
     * @param float $tradeArea
     * @return SpkRetScTech
     */
    public function setTradeArea($tradeArea)
    {
        $this->tradeArea = $tradeArea;

        return $this;
    }

    /**
     * Get tradeArea
     *
     * @return float 
     */
    public function getTradeArea()
    {
        return $this->tradeArea;
    }

    /**
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return SpkRetScTech
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
     * Set useTradeArea
     *
     * @param float $useTradeArea
     * @return SpkRetScTech
     */
    public function setUseTradeArea($useTradeArea)
    {
        $this->useTradeArea = $useTradeArea;

        return $this;
    }

    /**
     * Get useTradeArea
     *
     * @return float 
     */
    public function getUseTradeArea()
    {
        return $this->useTradeArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return SpkRetScTech
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
     * @return SpkRetScTech
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
     * Set undergroundArea
     *
     * @param float $undergroundArea
     * @return SpkRetScTech
     */
    public function setUndergroundArea($undergroundArea)
    {
        $this->undergroundArea = $undergroundArea;

        return $this;
    }

    /**
     * Get undergroundArea
     *
     * @return float 
     */
    public function getUndergroundArea()
    {
        return $this->undergroundArea;
    }

    /**
     * Set freeArea
     *
     * @param float $freeArea
     * @return SpkRetScTech
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
     * Set landArea
     *
     * @param float $landArea
     * @return SpkRetScTech
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
     * Set developmentArea
     *
     * @param float $developmentArea
     * @return SpkRetScTech
     */
    public function setDevelopmentArea($developmentArea)
    {
        $this->developmentArea = $developmentArea;

        return $this;
    }

    /**
     * Get developmentArea
     *
     * @return float 
     */
    public function getDevelopmentArea()
    {
        return $this->developmentArea;
    }

    /**
     * Set buildingStartYear
     *
     * @param integer $buildingStartYear
     * @return SpkRetScTech
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
     * Set buildingStartNote
     *
     * @param string $buildingStartNote
     * @return SpkRetScTech
     */
    public function setBuildingStartNote($buildingStartNote)
    {
        $this->buildingStartNote = $buildingStartNote;

        return $this;
    }

    /**
     * Get buildingStartNote
     *
     * @return string 
     */
    public function getBuildingStartNote()
    {
        return $this->buildingStartNote;
    }

    /**
     * Set planningStartupYear
     *
     * @param integer $planningStartupYear
     * @return SpkRetScTech
     */
    public function setPlanningStartupYear($planningStartupYear)
    {
        $this->planningStartupYear = $planningStartupYear;

        return $this;
    }

    /**
     * Get planningStartupYear
     *
     * @return integer 
     */
    public function getPlanningStartupYear()
    {
        return $this->planningStartupYear;
    }

    /**
     * Set strartupYear
     *
     * @param integer $strartupYear
     * @return SpkRetScTech
     */
    public function setStrartupYear($strartupYear)
    {
        $this->strartupYear = $strartupYear;

        return $this;
    }

    /**
     * Get strartupYear
     *
     * @return integer 
     */
    public function getStrartupYear()
    {
        return $this->strartupYear;
    }

    /**
     * Set dateOpenYear
     *
     * @param integer $dateOpenYear
     * @return SpkRetScTech
     */
    public function setDateOpenYear($dateOpenYear)
    {
        $this->dateOpenYear = $dateOpenYear;

        return $this;
    }

    /**
     * Get dateOpenYear
     *
     * @return integer 
     */
    public function getDateOpenYear()
    {
        return $this->dateOpenYear;
    }

    /**
     * Set dateOpenNote
     *
     * @param string $dateOpenNote
     * @return SpkRetScTech
     */
    public function setDateOpenNote($dateOpenNote)
    {
        $this->dateOpenNote = $dateOpenNote;

        return $this;
    }

    /**
     * Get dateOpenNote
     *
     * @return string 
     */
    public function getDateOpenNote()
    {
        return $this->dateOpenNote;
    }

    /**
     * Set reconstructionBeginYear
     *
     * @param integer $reconstructionBeginYear
     * @return SpkRetScTech
     */
    public function setReconstructionBeginYear($reconstructionBeginYear)
    {
        $this->reconstructionBeginYear = $reconstructionBeginYear;

        return $this;
    }

    /**
     * Get reconstructionBeginYear
     *
     * @return integer 
     */
    public function getReconstructionBeginYear()
    {
        return $this->reconstructionBeginYear;
    }

    /**
     * Set reconstructionBeginNote
     *
     * @param string $reconstructionBeginNote
     * @return SpkRetScTech
     */
    public function setReconstructionBeginNote($reconstructionBeginNote)
    {
        $this->reconstructionBeginNote = $reconstructionBeginNote;

        return $this;
    }

    /**
     * Get reconstructionBeginNote
     *
     * @return string 
     */
    public function getReconstructionBeginNote()
    {
        return $this->reconstructionBeginNote;
    }

    /**
     * Set reconstructionEndYear
     *
     * @param integer $reconstructionEndYear
     * @return SpkRetScTech
     */
    public function setReconstructionEndYear($reconstructionEndYear)
    {
        $this->reconstructionEndYear = $reconstructionEndYear;

        return $this;
    }

    /**
     * Get reconstructionEndYear
     *
     * @return integer 
     */
    public function getReconstructionEndYear()
    {
        return $this->reconstructionEndYear;
    }

    /**
     * Set reconstructionEndNote
     *
     * @param string $reconstructionEndNote
     * @return SpkRetScTech
     */
    public function setReconstructionEndNote($reconstructionEndNote)
    {
        $this->reconstructionEndNote = $reconstructionEndNote;

        return $this;
    }

    /**
     * Get reconstructionEndNote
     *
     * @return string 
     */
    public function getReconstructionEndNote()
    {
        return $this->reconstructionEndNote;
    }

    /**
     * Set rate
     *
     * @param float $rate
     * @return SpkRetScTech
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set entertainmentTotalArea
     *
     * @param float $entertainmentTotalArea
     * @return SpkRetScTech
     */
    public function setEntertainmentTotalArea($entertainmentTotalArea)
    {
        $this->entertainmentTotalArea = $entertainmentTotalArea;

        return $this;
    }

    /**
     * Get entertainmentTotalArea
     *
     * @return float 
     */
    public function getEntertainmentTotalArea()
    {
        return $this->entertainmentTotalArea;
    }

    /**
     * Set planningStartupQuarter
     *
     * @param string $planningStartupQuarter
     * @return SpkRetScTech
     */
    public function setPlanningStartupQuarter($planningStartupQuarter)
    {
        $this->planningStartupQuarter = $planningStartupQuarter;

        return $this;
    }

    /**
     * Get planningStartupQuarter
     *
     * @return string 
     */
    public function getPlanningStartupQuarter()
    {
        return $this->planningStartupQuarter;
    }

    /**
     * Set buildingStage
     *
     * @param string $buildingStage
     * @return SpkRetScTech
     */
    public function setBuildingStage($buildingStage)
    {
        $this->buildingStage = $buildingStage;

        return $this;
    }

    /**
     * Get buildingStage
     *
     * @return string 
     */
    public function getBuildingStage()
    {
        return $this->buildingStage;
    }

    /**
     * Set hotelArea
     *
     * @param float $hotelArea
     * @return SpkRetScTech
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
     * Set residentialArea
     *
     * @param float $residentialArea
     * @return SpkRetScTech
     */
    public function setResidentialArea($residentialArea)
    {
        $this->residentialArea = $residentialArea;

        return $this;
    }

    /**
     * Get residentialArea
     *
     * @return float 
     */
    public function getResidentialArea()
    {
        return $this->residentialArea;
    }

    /**
     * Set exhibitionArea
     *
     * @param float $exhibitionArea
     * @return SpkRetScTech
     */
    public function setExhibitionArea($exhibitionArea)
    {
        $this->exhibitionArea = $exhibitionArea;

        return $this;
    }

    /**
     * Get exhibitionArea
     *
     * @return float 
     */
    public function getExhibitionArea()
    {
        return $this->exhibitionArea;
    }

    /**
     * Set profTc
     *
     * @param string $profTc
     * @return SpkRetScTech
     */
    public function setProfTc($profTc)
    {
        $this->profTc = $profTc;

        return $this;
    }

    /**
     * Get profTc
     *
     * @return string 
     */
    public function getProfTc()
    {
        return $this->profTc;
    }

    /**
     * Set expIncluded
     *
     * @param string $expIncluded
     * @return SpkRetScTech
     */
    public function setExpIncluded($expIncluded)
    {
        $this->expIncluded = $expIncluded;

        return $this;
    }

    /**
     * Get expIncluded
     *
     * @return string 
     */
    public function getExpIncluded()
    {
        return $this->expIncluded;
    }

    /**
     * Set storeys
     *
     * @param integer $storeys
     * @return SpkRetScTech
     */
    public function setStoreys($storeys)
    {
        $this->storeys = $storeys;

        return $this;
    }

    /**
     * Get storeys
     *
     * @return integer 
     */
    public function getStoreys()
    {
        return $this->storeys;
    }

    /**
     * Set basementArea
     *
     * @param float $basementArea
     * @return SpkRetScTech
     */
    public function setBasementArea($basementArea)
    {
        $this->basementArea = $basementArea;

        return $this;
    }

    /**
     * Get basementArea
     *
     * @return float 
     */
    public function getBasementArea()
    {
        return $this->basementArea;
    }

    /**
     * Set capArea
     *
     * @param float $capArea
     * @return SpkRetScTech
     */
    public function setCapArea($capArea)
    {
        $this->capArea = $capArea;

        return $this;
    }

    /**
     * Get capArea
     *
     * @return float 
     */
    public function getCapArea()
    {
        return $this->capArea;
    }

    /**
     * Set firstFloorArea
     *
     * @param float $firstFloorArea
     * @return SpkRetScTech
     */
    public function setFirstFloorArea($firstFloorArea)
    {
        $this->firstFloorArea = $firstFloorArea;

        return $this;
    }

    /**
     * Get firstFloorArea
     *
     * @return float 
     */
    public function getFirstFloorArea()
    {
        return $this->firstFloorArea;
    }

    /**
     * Set seconfFloorArea
     *
     * @param float $seconfFloorArea
     * @return SpkRetScTech
     */
    public function setSeconfFloorArea($seconfFloorArea)
    {
        $this->seconfFloorArea = $seconfFloorArea;

        return $this;
    }

    /**
     * Get seconfFloorArea
     *
     * @return float 
     */
    public function getSeconfFloorArea()
    {
        return $this->seconfFloorArea;
    }

    /**
     * Set entresolArea
     *
     * @param float $entresolArea
     * @return SpkRetScTech
     */
    public function setEntresolArea($entresolArea)
    {
        $this->entresolArea = $entresolArea;

        return $this;
    }

    /**
     * Get entresolArea
     *
     * @return float 
     */
    public function getEntresolArea()
    {
        return $this->entresolArea;
    }

    /**
     * Set shopName
     *
     * @param string $shopName
     * @return SpkRetScTech
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;

        return $this;
    }

    /**
     * Get shopName
     *
     * @return string 
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Set saleArea
     *
     * @param float $saleArea
     * @return SpkRetScTech
     */
    public function setSaleArea($saleArea)
    {
        $this->saleArea = $saleArea;

        return $this;
    }

    /**
     * Get saleArea
     *
     * @return float 
     */
    public function getSaleArea()
    {
        return $this->saleArea;
    }

    /**
     * Set firstLine
     *
     * @param string $firstLine
     * @return SpkRetScTech
     */
    public function setFirstLine($firstLine)
    {
        $this->firstLine = $firstLine;

        return $this;
    }

    /**
     * Get firstLine
     *
     * @return string 
     */
    public function getFirstLine()
    {
        return $this->firstLine;
    }

    /**
     * Set windows
     *
     * @param string $windows
     * @return SpkRetScTech
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
     * Set electricity
     *
     * @param float $electricity
     * @return SpkRetScTech
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
     * Set techComments
     *
     * @param string $techComments
     * @return SpkRetScTech
     */
    public function setTechComments($techComments)
    {
        $this->techComments = $techComments;

        return $this;
    }

    /**
     * Get techComments
     *
     * @return string 
     */
    public function getTechComments()
    {
        return $this->techComments;
    }

    /**
     * Set houseType
     *
     * @param string $houseType
     * @return SpkRetScTech
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
}
