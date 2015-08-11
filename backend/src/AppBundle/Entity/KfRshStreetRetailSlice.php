<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshStreetRetailSlice
 *
 * @ORM\Table(name="kf_rsh_street_retail_slice")
 * @ORM\Entity
 */
class KfRshStreetRetailSlice
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
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_STAGE", type="string", length=128, nullable=true)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_DEFAULT_RATE", type="decimal", precision=38, scale=6, nullable=true)
     */
    private $avgDefaultRate;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_DEFAULT_COST", type="decimal", precision=38, scale=6, nullable=true)
     */
    private $avgDefaultCost;

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
     * @return KfRshStreetRetailSlice
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
     * @return KfRshStreetRetailSlice
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
     * Set status
     *
     * @param string $status
     * @return KfRshStreetRetailSlice
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
     * Set target
     *
     * @param string $target
     * @return KfRshStreetRetailSlice
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
     * Set tradeArea
     *
     * @param float $tradeArea
     * @return KfRshStreetRetailSlice
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
     * Set buildingStage
     *
     * @param string $buildingStage
     * @return KfRshStreetRetailSlice
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
     * Set avgDefaultRate
     *
     * @param string $avgDefaultRate
     * @return KfRshStreetRetailSlice
     */
    public function setAvgDefaultRate($avgDefaultRate)
    {
        $this->avgDefaultRate = $avgDefaultRate;

        return $this;
    }

    /**
     * Get avgDefaultRate
     *
     * @return string 
     */
    public function getAvgDefaultRate()
    {
        return $this->avgDefaultRate;
    }

    /**
     * Set avgDefaultCost
     *
     * @param string $avgDefaultCost
     * @return KfRshStreetRetailSlice
     */
    public function setAvgDefaultCost($avgDefaultCost)
    {
        $this->avgDefaultCost = $avgDefaultCost;

        return $this;
    }

    /**
     * Get avgDefaultCost
     *
     * @return string 
     */
    public function getAvgDefaultCost()
    {
        return $this->avgDefaultCost;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshStreetRetailSlice
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
