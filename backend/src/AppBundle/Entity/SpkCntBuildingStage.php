<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntBuildingStage
 *
 */
class SpkCntBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkCntBuildingStageid;

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
    private $stage;

    /**
     * @var string
     *
     */
    private $buldingStartMonth;

    /**
     * @var string
     *
     */
    private $buildingEndMonth;

    /**
     * @var string
     *
     */
    private $stageType;

    /**
     * @var integer
     *
     */
    private $housesCount;

    /**
     * @var integer
     *
     */
    private $availableHousesCount;

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
     * @var string
     *
     */
    private $houseType;

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
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingEndYear;



    /**
     * Set spkCntBuildingStageid
     *
     * @param string $spkCntBuildingStageid
     * @return SpkCntBuildingStage
     */
    public function setSpkCntBuildingStageid($spkCntBuildingStageid)
    {
        $this->spkCntBuildingStageid = $spkCntBuildingStageid;

        return $this;
    }

    /**
     * Get spkCntBuildingStageid
     *
     * @return string 
     */
    public function getSpkCntBuildingStageid()
    {
        return $this->spkCntBuildingStageid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * Set stage
     *
     * @param string $stage
     * @return SpkCntBuildingStage
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set buldingStartMonth
     *
     * @param string $buldingStartMonth
     * @return SpkCntBuildingStage
     */
    public function setBuldingStartMonth($buldingStartMonth)
    {
        $this->buldingStartMonth = $buldingStartMonth;

        return $this;
    }

    /**
     * Get buldingStartMonth
     *
     * @return string 
     */
    public function getBuldingStartMonth()
    {
        return $this->buldingStartMonth;
    }

    /**
     * Set buildingEndMonth
     *
     * @param string $buildingEndMonth
     * @return SpkCntBuildingStage
     */
    public function setBuildingEndMonth($buildingEndMonth)
    {
        $this->buildingEndMonth = $buildingEndMonth;

        return $this;
    }

    /**
     * Get buildingEndMonth
     *
     * @return string 
     */
    public function getBuildingEndMonth()
    {
        return $this->buildingEndMonth;
    }

    /**
     * Set stageType
     *
     * @param string $stageType
     * @return SpkCntBuildingStage
     */
    public function setStageType($stageType)
    {
        $this->stageType = $stageType;

        return $this;
    }

    /**
     * Get stageType
     *
     * @return string 
     */
    public function getStageType()
    {
        return $this->stageType;
    }

    /**
     * Set housesCount
     *
     * @param integer $housesCount
     * @return SpkCntBuildingStage
     */
    public function setHousesCount($housesCount)
    {
        $this->housesCount = $housesCount;

        return $this;
    }

    /**
     * Get housesCount
     *
     * @return integer 
     */
    public function getHousesCount()
    {
        return $this->housesCount;
    }

    /**
     * Set availableHousesCount
     *
     * @param integer $availableHousesCount
     * @return SpkCntBuildingStage
     */
    public function setAvailableHousesCount($availableHousesCount)
    {
        $this->availableHousesCount = $availableHousesCount;

        return $this;
    }

    /**
     * Get availableHousesCount
     *
     * @return integer 
     */
    public function getAvailableHousesCount()
    {
        return $this->availableHousesCount;
    }

    /**
     * Set houseAreaMin
     *
     * @param float $houseAreaMin
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * Set houseType
     *
     * @param string $houseType
     * @return SpkCntBuildingStage
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
     * Set landAreaMin
     *
     * @param float $landAreaMin
     * @return SpkCntBuildingStage
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
     * @return SpkCntBuildingStage
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
     * Set costMin
     *
     * @param string $costMin
     * @return SpkCntBuildingStage
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return SpkCntBuildingStage
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set buildingStartYear
     *
     * @param string $buildingStartYear
     * @return SpkCntBuildingStage
     */
    public function setBuildingStartYear($buildingStartYear)
    {
        $this->buildingStartYear = $buildingStartYear;

        return $this;
    }

    /**
     * Get buildingStartYear
     *
     * @return string 
     */
    public function getBuildingStartYear()
    {
        return $this->buildingStartYear;
    }

    /**
     * Set buildingEndYear
     *
     * @param string $buildingEndYear
     * @return SpkCntBuildingStage
     */
    public function setBuildingEndYear($buildingEndYear)
    {
        $this->buildingEndYear = $buildingEndYear;

        return $this;
    }

    /**
     * Get buildingEndYear
     *
     * @return string 
     */
    public function getBuildingEndYear()
    {
        return $this->buildingEndYear;
    }
}
