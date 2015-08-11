<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshRetailSlice
 *
 * @ORM\Table(name="kf_rsh_retail_slice")
 * @ORM\Entity
 */
class KfRshRetailSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_STAGE", type="string", length=128, nullable=true)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_BIG", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateBig;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_BIG", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateBig;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_LIT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateLit;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_LIT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateLit;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_CHILD", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateChild;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_CHILD", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateChild;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_SHOUES", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateShoues;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_SHOUES", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateShoues;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_LEATHER", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateLeather;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_LEATHER", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateLeather;

    /**
     * @var float
     *
     * @ORM\Column(name="SRED_VZV_LIT_ANCH", type="float", precision=53, scale=0, nullable=true)
     */
    private $sredVzvLitAnch;

    /**
     * @var float
     *
     * @ORM\Column(name="SRED_VZV_BIG_ANCH", type="float", precision=53, scale=0, nullable=true)
     */
    private $sredVzvBigAnch;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_SALE_COST", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $avgSaleCost;

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
     * @return KfRshRetailSlice
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
     * @return KfRshRetailSlice
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfRshRetailSlice
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
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return KfRshRetailSlice
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
     * Set buildingStage
     *
     * @param string $buildingStage
     * @return KfRshRetailSlice
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
     * Set minRateBig
     *
     * @param string $minRateBig
     * @return KfRshRetailSlice
     */
    public function setMinRateBig($minRateBig)
    {
        $this->minRateBig = $minRateBig;

        return $this;
    }

    /**
     * Get minRateBig
     *
     * @return string 
     */
    public function getMinRateBig()
    {
        return $this->minRateBig;
    }

    /**
     * Set maxRateBig
     *
     * @param string $maxRateBig
     * @return KfRshRetailSlice
     */
    public function setMaxRateBig($maxRateBig)
    {
        $this->maxRateBig = $maxRateBig;

        return $this;
    }

    /**
     * Get maxRateBig
     *
     * @return string 
     */
    public function getMaxRateBig()
    {
        return $this->maxRateBig;
    }

    /**
     * Set minRateLit
     *
     * @param string $minRateLit
     * @return KfRshRetailSlice
     */
    public function setMinRateLit($minRateLit)
    {
        $this->minRateLit = $minRateLit;

        return $this;
    }

    /**
     * Get minRateLit
     *
     * @return string 
     */
    public function getMinRateLit()
    {
        return $this->minRateLit;
    }

    /**
     * Set maxRateLit
     *
     * @param string $maxRateLit
     * @return KfRshRetailSlice
     */
    public function setMaxRateLit($maxRateLit)
    {
        $this->maxRateLit = $maxRateLit;

        return $this;
    }

    /**
     * Get maxRateLit
     *
     * @return string 
     */
    public function getMaxRateLit()
    {
        return $this->maxRateLit;
    }

    /**
     * Set minRateChild
     *
     * @param string $minRateChild
     * @return KfRshRetailSlice
     */
    public function setMinRateChild($minRateChild)
    {
        $this->minRateChild = $minRateChild;

        return $this;
    }

    /**
     * Get minRateChild
     *
     * @return string 
     */
    public function getMinRateChild()
    {
        return $this->minRateChild;
    }

    /**
     * Set maxRateChild
     *
     * @param string $maxRateChild
     * @return KfRshRetailSlice
     */
    public function setMaxRateChild($maxRateChild)
    {
        $this->maxRateChild = $maxRateChild;

        return $this;
    }

    /**
     * Get maxRateChild
     *
     * @return string 
     */
    public function getMaxRateChild()
    {
        return $this->maxRateChild;
    }

    /**
     * Set minRateShoues
     *
     * @param string $minRateShoues
     * @return KfRshRetailSlice
     */
    public function setMinRateShoues($minRateShoues)
    {
        $this->minRateShoues = $minRateShoues;

        return $this;
    }

    /**
     * Get minRateShoues
     *
     * @return string 
     */
    public function getMinRateShoues()
    {
        return $this->minRateShoues;
    }

    /**
     * Set maxRateShoues
     *
     * @param string $maxRateShoues
     * @return KfRshRetailSlice
     */
    public function setMaxRateShoues($maxRateShoues)
    {
        $this->maxRateShoues = $maxRateShoues;

        return $this;
    }

    /**
     * Get maxRateShoues
     *
     * @return string 
     */
    public function getMaxRateShoues()
    {
        return $this->maxRateShoues;
    }

    /**
     * Set minRateLeather
     *
     * @param string $minRateLeather
     * @return KfRshRetailSlice
     */
    public function setMinRateLeather($minRateLeather)
    {
        $this->minRateLeather = $minRateLeather;

        return $this;
    }

    /**
     * Get minRateLeather
     *
     * @return string 
     */
    public function getMinRateLeather()
    {
        return $this->minRateLeather;
    }

    /**
     * Set maxRateLeather
     *
     * @param string $maxRateLeather
     * @return KfRshRetailSlice
     */
    public function setMaxRateLeather($maxRateLeather)
    {
        $this->maxRateLeather = $maxRateLeather;

        return $this;
    }

    /**
     * Get maxRateLeather
     *
     * @return string 
     */
    public function getMaxRateLeather()
    {
        return $this->maxRateLeather;
    }

    /**
     * Set sredVzvLitAnch
     *
     * @param float $sredVzvLitAnch
     * @return KfRshRetailSlice
     */
    public function setSredVzvLitAnch($sredVzvLitAnch)
    {
        $this->sredVzvLitAnch = $sredVzvLitAnch;

        return $this;
    }

    /**
     * Get sredVzvLitAnch
     *
     * @return float 
     */
    public function getSredVzvLitAnch()
    {
        return $this->sredVzvLitAnch;
    }

    /**
     * Set sredVzvBigAnch
     *
     * @param float $sredVzvBigAnch
     * @return KfRshRetailSlice
     */
    public function setSredVzvBigAnch($sredVzvBigAnch)
    {
        $this->sredVzvBigAnch = $sredVzvBigAnch;

        return $this;
    }

    /**
     * Get sredVzvBigAnch
     *
     * @return float 
     */
    public function getSredVzvBigAnch()
    {
        return $this->sredVzvBigAnch;
    }

    /**
     * Set avgSaleCost
     *
     * @param string $avgSaleCost
     * @return KfRshRetailSlice
     */
    public function setAvgSaleCost($avgSaleCost)
    {
        $this->avgSaleCost = $avgSaleCost;

        return $this;
    }

    /**
     * Get avgSaleCost
     *
     * @return string 
     */
    public function getAvgSaleCost()
    {
        return $this->avgSaleCost;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshRetailSlice
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
