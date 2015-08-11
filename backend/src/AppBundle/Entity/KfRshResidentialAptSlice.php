<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshResidentialAptSlice
 *
 * @ORM\Table(name="kf_rsh_residential_apt_slice")
 * @ORM\Entity
 */
class KfRshResidentialAptSlice
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
     * @ORM\Column(name="status", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="total_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

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
     * @ORM\Column(name="operational_cost", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="CAR_PLACE_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $carPlaceCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="car_place", type="smallint", nullable=true)
     */
    private $carPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="string", length=64, nullable=true)
     */
    private $fitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=64, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCOUNT", type="string", length=32, nullable=true)
     */
    private $discount;

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
     * @return KfRshResidentialAptSlice
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
     * @return KfRshResidentialAptSlice
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
     * @return KfRshResidentialAptSlice
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
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfRshResidentialAptSlice
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
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return KfRshResidentialAptSlice
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
     * @return KfRshResidentialAptSlice
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
     * Set costMin
     *
     * @param string $costMin
     * @return KfRshResidentialAptSlice
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
     * @return KfRshResidentialAptSlice
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
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return KfRshResidentialAptSlice
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set carPlaceCost
     *
     * @param string $carPlaceCost
     * @return KfRshResidentialAptSlice
     */
    public function setCarPlaceCost($carPlaceCost)
    {
        $this->carPlaceCost = $carPlaceCost;

        return $this;
    }

    /**
     * Get carPlaceCost
     *
     * @return string 
     */
    public function getCarPlaceCost()
    {
        return $this->carPlaceCost;
    }

    /**
     * Set carPlace
     *
     * @param integer $carPlace
     * @return KfRshResidentialAptSlice
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
     * Set fitOut
     *
     * @param string $fitOut
     * @return KfRshResidentialAptSlice
     */
    public function setFitOut($fitOut)
    {
        $this->fitOut = $fitOut;

        return $this;
    }

    /**
     * Get fitOut
     *
     * @return string 
     */
    public function getFitOut()
    {
        return $this->fitOut;
    }

    /**
     * Set furniture
     *
     * @param string $furniture
     * @return KfRshResidentialAptSlice
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
     * Set discount
     *
     * @param string $discount
     * @return KfRshResidentialAptSlice
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshResidentialAptSlice
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
