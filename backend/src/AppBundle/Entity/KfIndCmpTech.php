<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfIndCmpTech
 *
 * @ORM\Table(name="KF_IND_CMP_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_IND_CMP_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_IND_CMP_TECH_5_397960494__K1_K6_7_8_9_10_11_12_13_14_15_30_31_32_35", columns={"SPK_PROPERTYID", "SECCODEID", "CLASS", "FACT_AREA", "FORECAST_AREA", "LAND_AREA", "TEMPERATURE", "MESONIN_AREA", "OFFICE_AREA", "TOTAL_AREA", "MIN_BLOCK_SQUARE", "DISTANCEFROMCITY", "COMPLEX_TYPE", "DIRECTION", "IS_LISTING"}), @ORM\Index(name="_dta_index_KF_IND_CMP_TECH_5_397960494__K6_K1_7_8_9_10_11_12_13_14_15_30_31_32_35", columns={"SECCODEID", "SPK_PROPERTYID", "CLASS", "FACT_AREA", "FORECAST_AREA", "LAND_AREA", "TEMPERATURE", "MESONIN_AREA", "OFFICE_AREA", "TOTAL_AREA", "MIN_BLOCK_SQUARE", "DISTANCEFROMCITY", "COMPLEX_TYPE", "DIRECTION", "IS_LISTING"}), @ORM\Index(name="_dta_index_KF_IND_CMP_TECH_c_5_397960494__K6_K1", columns={"SECCODEID", "SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfIndCmpTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASS", type="string", length=8, nullable=true)
     */
    private $class;

    /**
     * @var float
     *
     * @ORM\Column(name="FACT_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $factArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FORECAST_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $forecastArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TEMPERATURE", type="float", precision=53, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="MESONIN_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $mesoninArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="MIN_BLOCK_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $minBlockSquare;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOCKS", type="integer", nullable=true)
     */
    private $docks;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCKS_TYPE", type="string", length=128, nullable=true)
     */
    private $docksType;

    /**
     * @var integer
     *
     * @ORM\Column(name="GATES", type="integer", nullable=true)
     */
    private $gates;

    /**
     * @var string
     *
     * @ORM\Column(name="GATES_TYPE", type="string", length=128, nullable=true)
     */
    private $gatesType;

    /**
     * @var float
     *
     * @ORM\Column(name="PARKING_INDEX_CARS", type="float", precision=53, scale=0, nullable=true)
     */
    private $parkingIndexCars;

    /**
     * @var float
     *
     * @ORM\Column(name="PARKING_INDEX_TRUCKS", type="float", precision=53, scale=0, nullable=true)
     */
    private $parkingIndexTrucks;

    /**
     * @var string
     *
     * @ORM\Column(name="PARK_TYPE_CARS", type="string", length=128, nullable=true)
     */
    private $parkTypeCars;

    /**
     * @var string
     *
     * @ORM\Column(name="PARK_TYPE_TRUCKS", type="string", length=128, nullable=true)
     */
    private $parkTypeTrucks;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="text", length=16, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="text", length=16, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_PARKING", type="text", length=16, nullable=true)
     */
    private $commentsParking;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPER", type="string", length=32, nullable=true)
     */
    private $temper;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCEFROMCITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $distancefromcity;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_TYPE", type="string", length=128, nullable=true)
     */
    private $complexType;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=64, nullable=true)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="SHARE_ADDRESS", type="string", length=1, nullable=true)
     */
    private $shareAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="SHARE_NAME", type="string", length=1, nullable=true)
     */
    private $shareName;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LISTING", type="string", length=1, nullable=true)
     */
    private $isListing;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILLING_HEIGHT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceillingHeightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILLING_HEIGHT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceillingHeightMax;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfIndCmpTech
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
     * @return KfIndCmpTech
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
     * @return KfIndCmpTech
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
     * @return KfIndCmpTech
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
     * @return KfIndCmpTech
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfIndCmpTech
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return KfIndCmpTech
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
     * Set factArea
     *
     * @param float $factArea
     * @return KfIndCmpTech
     */
    public function setFactArea($factArea)
    {
        $this->factArea = $factArea;

        return $this;
    }

    /**
     * Get factArea
     *
     * @return float 
     */
    public function getFactArea()
    {
        return $this->factArea;
    }

    /**
     * Set forecastArea
     *
     * @param float $forecastArea
     * @return KfIndCmpTech
     */
    public function setForecastArea($forecastArea)
    {
        $this->forecastArea = $forecastArea;

        return $this;
    }

    /**
     * Get forecastArea
     *
     * @return float 
     */
    public function getForecastArea()
    {
        return $this->forecastArea;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return KfIndCmpTech
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
     * Set temperature
     *
     * @param float $temperature
     * @return KfIndCmpTech
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
     * Set mesoninArea
     *
     * @param float $mesoninArea
     * @return KfIndCmpTech
     */
    public function setMesoninArea($mesoninArea)
    {
        $this->mesoninArea = $mesoninArea;

        return $this;
    }

    /**
     * Get mesoninArea
     *
     * @return float 
     */
    public function getMesoninArea()
    {
        return $this->mesoninArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return KfIndCmpTech
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfIndCmpTech
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
     * Set minBlockSquare
     *
     * @param float $minBlockSquare
     * @return KfIndCmpTech
     */
    public function setMinBlockSquare($minBlockSquare)
    {
        $this->minBlockSquare = $minBlockSquare;

        return $this;
    }

    /**
     * Get minBlockSquare
     *
     * @return float 
     */
    public function getMinBlockSquare()
    {
        return $this->minBlockSquare;
    }

    /**
     * Set docks
     *
     * @param integer $docks
     * @return KfIndCmpTech
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
     * Set docksType
     *
     * @param string $docksType
     * @return KfIndCmpTech
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
     * Set gates
     *
     * @param integer $gates
     * @return KfIndCmpTech
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
     * Set gatesType
     *
     * @param string $gatesType
     * @return KfIndCmpTech
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
     * Set parkingIndexCars
     *
     * @param float $parkingIndexCars
     * @return KfIndCmpTech
     */
    public function setParkingIndexCars($parkingIndexCars)
    {
        $this->parkingIndexCars = $parkingIndexCars;

        return $this;
    }

    /**
     * Get parkingIndexCars
     *
     * @return float 
     */
    public function getParkingIndexCars()
    {
        return $this->parkingIndexCars;
    }

    /**
     * Set parkingIndexTrucks
     *
     * @param float $parkingIndexTrucks
     * @return KfIndCmpTech
     */
    public function setParkingIndexTrucks($parkingIndexTrucks)
    {
        $this->parkingIndexTrucks = $parkingIndexTrucks;

        return $this;
    }

    /**
     * Get parkingIndexTrucks
     *
     * @return float 
     */
    public function getParkingIndexTrucks()
    {
        return $this->parkingIndexTrucks;
    }

    /**
     * Set parkTypeCars
     *
     * @param string $parkTypeCars
     * @return KfIndCmpTech
     */
    public function setParkTypeCars($parkTypeCars)
    {
        $this->parkTypeCars = $parkTypeCars;

        return $this;
    }

    /**
     * Get parkTypeCars
     *
     * @return string 
     */
    public function getParkTypeCars()
    {
        return $this->parkTypeCars;
    }

    /**
     * Set parkTypeTrucks
     *
     * @param string $parkTypeTrucks
     * @return KfIndCmpTech
     */
    public function setParkTypeTrucks($parkTypeTrucks)
    {
        $this->parkTypeTrucks = $parkTypeTrucks;

        return $this;
    }

    /**
     * Get parkTypeTrucks
     *
     * @return string 
     */
    public function getParkTypeTrucks()
    {
        return $this->parkTypeTrucks;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return KfIndCmpTech
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
     * @return KfIndCmpTech
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
     * Set commentsParking
     *
     * @param string $commentsParking
     * @return KfIndCmpTech
     */
    public function setCommentsParking($commentsParking)
    {
        $this->commentsParking = $commentsParking;

        return $this;
    }

    /**
     * Get commentsParking
     *
     * @return string 
     */
    public function getCommentsParking()
    {
        return $this->commentsParking;
    }

    /**
     * Set electricity
     *
     * @param float $electricity
     * @return KfIndCmpTech
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
     * Set temper
     *
     * @param string $temper
     * @return KfIndCmpTech
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
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return KfIndCmpTech
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
     * Set distancefromcity
     *
     * @param float $distancefromcity
     * @return KfIndCmpTech
     */
    public function setDistancefromcity($distancefromcity)
    {
        $this->distancefromcity = $distancefromcity;

        return $this;
    }

    /**
     * Get distancefromcity
     *
     * @return float 
     */
    public function getDistancefromcity()
    {
        return $this->distancefromcity;
    }

    /**
     * Set complexType
     *
     * @param string $complexType
     * @return KfIndCmpTech
     */
    public function setComplexType($complexType)
    {
        $this->complexType = $complexType;

        return $this;
    }

    /**
     * Get complexType
     *
     * @return string 
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return KfIndCmpTech
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
     * Set shareAddress
     *
     * @param string $shareAddress
     * @return KfIndCmpTech
     */
    public function setShareAddress($shareAddress)
    {
        $this->shareAddress = $shareAddress;

        return $this;
    }

    /**
     * Get shareAddress
     *
     * @return string 
     */
    public function getShareAddress()
    {
        return $this->shareAddress;
    }

    /**
     * Set shareName
     *
     * @param string $shareName
     * @return KfIndCmpTech
     */
    public function setShareName($shareName)
    {
        $this->shareName = $shareName;

        return $this;
    }

    /**
     * Get shareName
     *
     * @return string 
     */
    public function getShareName()
    {
        return $this->shareName;
    }

    /**
     * Set isListing
     *
     * @param string $isListing
     * @return KfIndCmpTech
     */
    public function setIsListing($isListing)
    {
        $this->isListing = $isListing;

        return $this;
    }

    /**
     * Get isListing
     *
     * @return string 
     */
    public function getIsListing()
    {
        return $this->isListing;
    }

    /**
     * Set ceillingHeightMin
     *
     * @param float $ceillingHeightMin
     * @return KfIndCmpTech
     */
    public function setCeillingHeightMin($ceillingHeightMin)
    {
        $this->ceillingHeightMin = $ceillingHeightMin;

        return $this;
    }

    /**
     * Get ceillingHeightMin
     *
     * @return float 
     */
    public function getCeillingHeightMin()
    {
        return $this->ceillingHeightMin;
    }

    /**
     * Set ceillingHeightMax
     *
     * @param float $ceillingHeightMax
     * @return KfIndCmpTech
     */
    public function setCeillingHeightMax($ceillingHeightMax)
    {
        $this->ceillingHeightMax = $ceillingHeightMax;

        return $this;
    }

    /**
     * Get ceillingHeightMax
     *
     * @return float 
     */
    public function getCeillingHeightMax()
    {
        return $this->ceillingHeightMax;
    }
}
