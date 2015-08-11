<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshOfficeSlice
 *
 * @ORM\Table(name="kf_rsh_office_slice")
 * @ORM\Entity
 */
class KfRshOfficeSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_SALE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeSaleArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseCostMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $costMin;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $costMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATING_EXP_TYPE", type="string", length=64, nullable=true)
     */
    private $operatingExpType;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=128, nullable=true)
     */
    private $vatType;

    /**
     * @var string
     *
     * @ORM\Column(name="UNDERGROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $undergroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $groundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOF_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $roofCost;

    /**
     * @var string
     *
     * @ORM\Column(name="USD", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $usd;

    /**
     * @var string
     *
     * @ORM\Column(name="EUR", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $eur;

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
     * @return KfRshOfficeSlice
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
     * @param integer $id
     * @return KfRshOfficeSlice
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return KfRshOfficeSlice
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set freeArea
     *
     * @param float $freeArea
     * @return KfRshOfficeSlice
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
     * Set freeSaleArea
     *
     * @param float $freeSaleArea
     * @return KfRshOfficeSlice
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
     * Set leaseCostMin
     *
     * @param float $leaseCostMin
     * @return KfRshOfficeSlice
     */
    public function setLeaseCostMin($leaseCostMin)
    {
        $this->leaseCostMin = $leaseCostMin;

        return $this;
    }

    /**
     * Get leaseCostMin
     *
     * @return float 
     */
    public function getLeaseCostMin()
    {
        return $this->leaseCostMin;
    }

    /**
     * Set leaseCostMax
     *
     * @param float $leaseCostMax
     * @return KfRshOfficeSlice
     */
    public function setLeaseCostMax($leaseCostMax)
    {
        $this->leaseCostMax = $leaseCostMax;

        return $this;
    }

    /**
     * Get leaseCostMax
     *
     * @return float 
     */
    public function getLeaseCostMax()
    {
        return $this->leaseCostMax;
    }

    /**
     * Set costPerSqmMin
     *
     * @param float $costPerSqmMin
     * @return KfRshOfficeSlice
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return float 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param float $costPerSqmMax
     * @return KfRshOfficeSlice
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return float 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costMin
     *
     * @param float $costMin
     * @return KfRshOfficeSlice
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return float 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param float $costMax
     * @return KfRshOfficeSlice
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return float 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set operationalCost
     *
     * @param float $operationalCost
     * @return KfRshOfficeSlice
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return float 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set operatingExpType
     *
     * @param string $operatingExpType
     * @return KfRshOfficeSlice
     */
    public function setOperatingExpType($operatingExpType)
    {
        $this->operatingExpType = $operatingExpType;

        return $this;
    }

    /**
     * Get operatingExpType
     *
     * @return string 
     */
    public function getOperatingExpType()
    {
        return $this->operatingExpType;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return KfRshOfficeSlice
     */
    public function setVatType($vatType)
    {
        $this->vatType = $vatType;

        return $this;
    }

    /**
     * Get vatType
     *
     * @return string 
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Set undergroundCost
     *
     * @param string $undergroundCost
     * @return KfRshOfficeSlice
     */
    public function setUndergroundCost($undergroundCost)
    {
        $this->undergroundCost = $undergroundCost;

        return $this;
    }

    /**
     * Get undergroundCost
     *
     * @return string 
     */
    public function getUndergroundCost()
    {
        return $this->undergroundCost;
    }

    /**
     * Set groundCost
     *
     * @param string $groundCost
     * @return KfRshOfficeSlice
     */
    public function setGroundCost($groundCost)
    {
        $this->groundCost = $groundCost;

        return $this;
    }

    /**
     * Get groundCost
     *
     * @return string 
     */
    public function getGroundCost()
    {
        return $this->groundCost;
    }

    /**
     * Set roofCost
     *
     * @param string $roofCost
     * @return KfRshOfficeSlice
     */
    public function setRoofCost($roofCost)
    {
        $this->roofCost = $roofCost;

        return $this;
    }

    /**
     * Get roofCost
     *
     * @return string 
     */
    public function getRoofCost()
    {
        return $this->roofCost;
    }

    /**
     * Set usd
     *
     * @param string $usd
     * @return KfRshOfficeSlice
     */
    public function setUsd($usd)
    {
        $this->usd = $usd;

        return $this;
    }

    /**
     * Get usd
     *
     * @return string 
     */
    public function getUsd()
    {
        return $this->usd;
    }

    /**
     * Set eur
     *
     * @param string $eur
     * @return KfRshOfficeSlice
     */
    public function setEur($eur)
    {
        $this->eur = $eur;

        return $this;
    }

    /**
     * Get eur
     *
     * @return string 
     */
    public function getEur()
    {
        return $this->eur;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshOfficeSlice
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
