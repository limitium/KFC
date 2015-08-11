<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshCountryHouseSlice
 *
 * @ORM\Table(name="kf_rsh_country_house_slice")
 * @ORM\Entity
 */
class KfRshCountryHouseSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=10, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Building_stage", type="string", length=14, nullable=false)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Min;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Max;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=256, nullable=true)
     */
    private $market;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfRshCountryHouseSlice
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
     * Set id
     *
     * @param string $id
     * @return KfRshCountryHouseSlice
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set buildingStage
     *
     * @param string $buildingStage
     * @return KfRshCountryHouseSlice
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
     * Set status
     *
     * @param string $status
     * @return KfRshCountryHouseSlice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return KfRshCountryHouseSlice
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
     * @return KfRshCountryHouseSlice
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
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return KfRshCountryHouseSlice
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return string 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param string $costPerSqmMax
     * @return KfRshCountryHouseSlice
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return string 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costPer100Min
     *
     * @param string $costPer100Min
     * @return KfRshCountryHouseSlice
     */
    public function setCostPer100Min($costPer100Min)
    {
        $this->costPer100Min = $costPer100Min;

        return $this;
    }

    /**
     * Get costPer100Min
     *
     * @return string 
     */
    public function getCostPer100Min()
    {
        return $this->costPer100Min;
    }

    /**
     * Set costPer100Max
     *
     * @param string $costPer100Max
     * @return KfRshCountryHouseSlice
     */
    public function setCostPer100Max($costPer100Max)
    {
        $this->costPer100Max = $costPer100Max;

        return $this;
    }

    /**
     * Get costPer100Max
     *
     * @return string 
     */
    public function getCostPer100Max()
    {
        return $this->costPer100Max;
    }

    /**
     * Set rentMin
     *
     * @param string $rentMin
     * @return KfRshCountryHouseSlice
     */
    public function setRentMin($rentMin)
    {
        $this->rentMin = $rentMin;

        return $this;
    }

    /**
     * Get rentMin
     *
     * @return string 
     */
    public function getRentMin()
    {
        return $this->rentMin;
    }

    /**
     * Set rentMax
     *
     * @param string $rentMax
     * @return KfRshCountryHouseSlice
     */
    public function setRentMax($rentMax)
    {
        $this->rentMax = $rentMax;

        return $this;
    }

    /**
     * Get rentMax
     *
     * @return string 
     */
    public function getRentMax()
    {
        return $this->rentMax;
    }

    /**
     * Set market
     *
     * @param string $market
     * @return KfRshCountryHouseSlice
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshCountryHouseSlice
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
}
