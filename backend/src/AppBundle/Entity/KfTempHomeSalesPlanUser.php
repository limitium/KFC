<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempHomeSalesPlanUser
 *
 * @ORM\Table(name="KF_TEMP_HOME_SALES_PLAN_USER")
 * @ORM\Entity
 */
class KfTempHomeSalesPlanUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=12, nullable=true)
     */
    private $ssn;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=4, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="broker", type="string", length=12, nullable=true)
     */
    private $broker;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_closed", type="smallint", nullable=true)
     */
    private $yearClosed;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=53, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="PLAN_AMOUNT", type="float", precision=53, scale=0, nullable=false)
     */
    private $planAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="PLAN_AMOUNT_PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $planAmountProbability;

    /**
     * @var integer
     *
     * @ORM\Column(name="place_dep", type="bigint", nullable=true)
     */
    private $placeDep;

    /**
     * @var integer
     *
     * @ORM\Column(name="place_all", type="bigint", nullable=true)
     */
    private $placeAll;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;



    /**
     * Set ssn
     *
     * @param string $ssn
     * @return KfTempHomeSalesPlanUser
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return KfTempHomeSalesPlanUser
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set broker
     *
     * @param string $broker
     * @return KfTempHomeSalesPlanUser
     */
    public function setBroker($broker)
    {
        $this->broker = $broker;

        return $this;
    }

    /**
     * Get broker
     *
     * @return string 
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * Set yearClosed
     *
     * @param integer $yearClosed
     * @return KfTempHomeSalesPlanUser
     */
    public function setYearClosed($yearClosed)
    {
        $this->yearClosed = $yearClosed;

        return $this;
    }

    /**
     * Get yearClosed
     *
     * @return integer 
     */
    public function getYearClosed()
    {
        return $this->yearClosed;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return KfTempHomeSalesPlanUser
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set planAmount
     *
     * @param float $planAmount
     * @return KfTempHomeSalesPlanUser
     */
    public function setPlanAmount($planAmount)
    {
        $this->planAmount = $planAmount;

        return $this;
    }

    /**
     * Get planAmount
     *
     * @return float 
     */
    public function getPlanAmount()
    {
        return $this->planAmount;
    }

    /**
     * Set planAmountProbability
     *
     * @param float $planAmountProbability
     * @return KfTempHomeSalesPlanUser
     */
    public function setPlanAmountProbability($planAmountProbability)
    {
        $this->planAmountProbability = $planAmountProbability;

        return $this;
    }

    /**
     * Get planAmountProbability
     *
     * @return float 
     */
    public function getPlanAmountProbability()
    {
        return $this->planAmountProbability;
    }

    /**
     * Set placeDep
     *
     * @param integer $placeDep
     * @return KfTempHomeSalesPlanUser
     */
    public function setPlaceDep($placeDep)
    {
        $this->placeDep = $placeDep;

        return $this;
    }

    /**
     * Get placeDep
     *
     * @return integer 
     */
    public function getPlaceDep()
    {
        return $this->placeDep;
    }

    /**
     * Set placeAll
     *
     * @param integer $placeAll
     * @return KfTempHomeSalesPlanUser
     */
    public function setPlaceAll($placeAll)
    {
        $this->placeAll = $placeAll;

        return $this;
    }

    /**
     * Get placeAll
     *
     * @return integer 
     */
    public function getPlaceAll()
    {
        return $this->placeAll;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return KfTempHomeSalesPlanUser
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
