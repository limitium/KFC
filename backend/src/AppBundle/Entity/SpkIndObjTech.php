<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndObjTech
 *
 */
class SpkIndObjTech
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
     * @var string
     *
     */
    private $landTarget;

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
     * @var integer
     *
     */
    private $storeys;

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
     * @var integer
     *
     */
    private $lifts;

    /**
     * @var float
     *
     */
    private $liftsWeight;

    /**
     * @var integer
     *
     */
    private $docks;

    /**
     * @var integer
     *
     */
    private $gates;

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
    private $electricity;

    /**
     * @var float
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $provider;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $loadUnloadDock;

    /**
     * @var float
     *
     */
    private $availabilityMkad;

    /**
     * @var string
     *
     */
    private $airport;

    /**
     * @var float
     *
     */
    private $availabilityAirport;

    /**
     * @var float
     *
     */
    private $mezoninArea;

    /**
     * @var string
     *
     */
    private $buildingType;

    /**
     * @var float
     *
     */
    private $freeTotalArea;

    /**
     * @var float
     *
     */
    private $freeMezzanineArea;

    /**
     * @var float
     *
     */
    private $freeIndustrialArea;

    /**
     * @var string
     *
     */
    private $temper;

    /**
     * @var integer
     *
     */
    private $completedQuater;

    /**
     * @var integer
     *
     */
    private $completedYear;

    /**
     * @var string
     *
     */
    private $docksType;

    /**
     * @var string
     *
     */
    private $gatesType;

    /**
     * @var float
     *
     */
    private $nenuzhnoePole;

    /**
     * @var string
     *
     */
    private $completionStage;

    /**
     * @var \DateTime
     *
     */
    private $completionDate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * Set class
     *
     * @param string $class
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * Set landTarget
     *
     * @param string $landTarget
     * @return SpkIndObjTech
     */
    public function setLandTarget($landTarget)
    {
        $this->landTarget = $landTarget;

        return $this;
    }

    /**
     * Get landTarget
     *
     * @return string 
     */
    public function getLandTarget()
    {
        return $this->landTarget;
    }

    /**
     * Set freeStorageArea
     *
     * @param float $freeStorageArea
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * Set storeys
     *
     * @param integer $storeys
     * @return SpkIndObjTech
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
     * Set ceillingHeight
     *
     * @param float $ceillingHeight
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * Set lifts
     *
     * @param integer $lifts
     * @return SpkIndObjTech
     */
    public function setLifts($lifts)
    {
        $this->lifts = $lifts;

        return $this;
    }

    /**
     * Get lifts
     *
     * @return integer 
     */
    public function getLifts()
    {
        return $this->lifts;
    }

    /**
     * Set liftsWeight
     *
     * @param float $liftsWeight
     * @return SpkIndObjTech
     */
    public function setLiftsWeight($liftsWeight)
    {
        $this->liftsWeight = $liftsWeight;

        return $this;
    }

    /**
     * Get liftsWeight
     *
     * @return float 
     */
    public function getLiftsWeight()
    {
        return $this->liftsWeight;
    }

    /**
     * Set docks
     *
     * @param integer $docks
     * @return SpkIndObjTech
     */
    public function setDocks($docks)
    {
        $this->docks = $docks;

        return $this;
    }

    /**
     * Get docks
     *
     * @return integer 
     */
    public function getDocks()
    {
        return $this->docks;
    }

    /**
     * Set gates
     *
     * @param integer $gates
     * @return SpkIndObjTech
     */
    public function setGates($gates)
    {
        $this->gates = $gates;

        return $this;
    }

    /**
     * Get gates
     *
     * @return integer 
     */
    public function getGates()
    {
        return $this->gates;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkIndObjTech
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
     * @return SpkIndObjTech
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
     * Set electricity
     *
     * @param float $electricity
     * @return SpkIndObjTech
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
     * Set temperature
     *
     * @param float $temperature
     * @return SpkIndObjTech
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set provider
     *
     * @param string $provider
     * @return SpkIndObjTech
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
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return SpkIndObjTech
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
     * Set loadUnloadDock
     *
     * @param string $loadUnloadDock
     * @return SpkIndObjTech
     */
    public function setLoadUnloadDock($loadUnloadDock)
    {
        $this->loadUnloadDock = $loadUnloadDock;

        return $this;
    }

    /**
     * Get loadUnloadDock
     *
     * @return string 
     */
    public function getLoadUnloadDock()
    {
        return $this->loadUnloadDock;
    }

    /**
     * Set availabilityMkad
     *
     * @param float $availabilityMkad
     * @return SpkIndObjTech
     */
    public function setAvailabilityMkad($availabilityMkad)
    {
        $this->availabilityMkad = $availabilityMkad;

        return $this;
    }

    /**
     * Get availabilityMkad
     *
     * @return float 
     */
    public function getAvailabilityMkad()
    {
        return $this->availabilityMkad;
    }

    /**
     * Set airport
     *
     * @param string $airport
     * @return SpkIndObjTech
     */
    public function setAirport($airport)
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * Get airport
     *
     * @return string 
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Set availabilityAirport
     *
     * @param float $availabilityAirport
     * @return SpkIndObjTech
     */
    public function setAvailabilityAirport($availabilityAirport)
    {
        $this->availabilityAirport = $availabilityAirport;

        return $this;
    }

    /**
     * Get availabilityAirport
     *
     * @return float 
     */
    public function getAvailabilityAirport()
    {
        return $this->availabilityAirport;
    }

    /**
     * Set mezoninArea
     *
     * @param float $mezoninArea
     * @return SpkIndObjTech
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
     * Set buildingType
     *
     * @param string $buildingType
     * @return SpkIndObjTech
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
     * Set freeTotalArea
     *
     * @param float $freeTotalArea
     * @return SpkIndObjTech
     */
    public function setFreeTotalArea($freeTotalArea)
    {
        $this->freeTotalArea = $freeTotalArea;

        return $this;
    }

    /**
     * Get freeTotalArea
     *
     * @return float 
     */
    public function getFreeTotalArea()
    {
        return $this->freeTotalArea;
    }

    /**
     * Set freeMezzanineArea
     *
     * @param float $freeMezzanineArea
     * @return SpkIndObjTech
     */
    public function setFreeMezzanineArea($freeMezzanineArea)
    {
        $this->freeMezzanineArea = $freeMezzanineArea;

        return $this;
    }

    /**
     * Get freeMezzanineArea
     *
     * @return float 
     */
    public function getFreeMezzanineArea()
    {
        return $this->freeMezzanineArea;
    }

    /**
     * Set freeIndustrialArea
     *
     * @param float $freeIndustrialArea
     * @return SpkIndObjTech
     */
    public function setFreeIndustrialArea($freeIndustrialArea)
    {
        $this->freeIndustrialArea = $freeIndustrialArea;

        return $this;
    }

    /**
     * Get freeIndustrialArea
     *
     * @return float 
     */
    public function getFreeIndustrialArea()
    {
        return $this->freeIndustrialArea;
    }

    /**
     * Set temper
     *
     * @param string $temper
     * @return SpkIndObjTech
     */
    public function setTemper($temper)
    {
        $this->temper = $temper;

        return $this;
    }

    /**
     * Get temper
     *
     * @return string 
     */
    public function getTemper()
    {
        return $this->temper;
    }

    /**
     * Set completedQuater
     *
     * @param integer $completedQuater
     * @return SpkIndObjTech
     */
    public function setCompletedQuater($completedQuater)
    {
        $this->completedQuater = $completedQuater;

        return $this;
    }

    /**
     * Get completedQuater
     *
     * @return integer 
     */
    public function getCompletedQuater()
    {
        return $this->completedQuater;
    }

    /**
     * Set completedYear
     *
     * @param integer $completedYear
     * @return SpkIndObjTech
     */
    public function setCompletedYear($completedYear)
    {
        $this->completedYear = $completedYear;

        return $this;
    }

    /**
     * Get completedYear
     *
     * @return integer 
     */
    public function getCompletedYear()
    {
        return $this->completedYear;
    }

    /**
     * Set docksType
     *
     * @param string $docksType
     * @return SpkIndObjTech
     */
    public function setDocksType($docksType)
    {
        $this->docksType = $docksType;

        return $this;
    }

    /**
     * Get docksType
     *
     * @return string 
     */
    public function getDocksType()
    {
        return $this->docksType;
    }

    /**
     * Set gatesType
     *
     * @param string $gatesType
     * @return SpkIndObjTech
     */
    public function setGatesType($gatesType)
    {
        $this->gatesType = $gatesType;

        return $this;
    }

    /**
     * Get gatesType
     *
     * @return string 
     */
    public function getGatesType()
    {
        return $this->gatesType;
    }

    /**
     * Set nenuzhnoePole
     *
     * @param float $nenuzhnoePole
     * @return SpkIndObjTech
     */
    public function setNenuzhnoePole($nenuzhnoePole)
    {
        $this->nenuzhnoePole = $nenuzhnoePole;

        return $this;
    }

    /**
     * Get nenuzhnoePole
     *
     * @return float 
     */
    public function getNenuzhnoePole()
    {
        return $this->nenuzhnoePole;
    }

    /**
     * Set completionStage
     *
     * @param string $completionStage
     * @return SpkIndObjTech
     */
    public function setCompletionStage($completionStage)
    {
        $this->completionStage = $completionStage;

        return $this;
    }

    /**
     * Get completionStage
     *
     * @return string 
     */
    public function getCompletionStage()
    {
        return $this->completionStage;
    }

    /**
     * Set completionDate
     *
     * @param \DateTime $completionDate
     * @return SpkIndObjTech
     */
    public function setCompletionDate($completionDate)
    {
        $this->completionDate = $completionDate;

        return $this;
    }

    /**
     * Get completionDate
     *
     * @return \DateTime 
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }
}
