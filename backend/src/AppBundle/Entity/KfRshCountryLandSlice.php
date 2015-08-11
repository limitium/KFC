<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshCountryLandSlice
 *
 * @ORM\Table(name="kf_rsh_country_land_slice")
 * @ORM\Entity
 */
class KfRshCountryLandSlice
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
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfRshCountryLandSlice
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
     * @return KfRshCountryLandSlice
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
     * Set status
     *
     * @param string $status
     * @return KfRshCountryLandSlice
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
     * @return KfRshCountryLandSlice
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
     * @return KfRshCountryLandSlice
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
     * Set costPer100Min
     *
     * @param string $costPer100Min
     * @return KfRshCountryLandSlice
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
     * @return KfRshCountryLandSlice
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshCountryLandSlice
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
