<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshIndustrialSlice
 *
 * @ORM\Table(name="kf_rsh_industrial_slice")
 * @ORM\Entity
 */
class KfRshIndustrialSlice
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
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="free_total_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeTotalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_office_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeOfficeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_mezonin_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeMezoninArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_industrial_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeIndustrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="PROC_FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $procFreeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_industrial_min", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_industrial_max", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentIndustrialMax;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_office_min", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentOfficeMin;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_office_max", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentOfficeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RENT_MESONIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $minRentMesonin;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RENT_MESONIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $maxRentMesonin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $opexMin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $opexMax;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_pallet", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPallet;

    /**
     * @var string
     *
     * @ORM\Column(name="lul_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $lulMin;

    /**
     * @var string
     *
     * @ORM\Column(name="lul_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $lulMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="insdep_min", type="smallint", nullable=true)
     */
    private $insdepMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="insdep_max", type="smallint", nullable=true)
     */
    private $insdepMax;

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
     * @return KfRshIndustrialSlice
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
     * @return KfRshIndustrialSlice
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
     * @return KfRshIndustrialSlice
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
     * Set freeTotalArea
     *
     * @param float $freeTotalArea
     * @return KfRshIndustrialSlice
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
     * Set freeOfficeArea
     *
     * @param float $freeOfficeArea
     * @return KfRshIndustrialSlice
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
     * Set freeMezoninArea
     *
     * @param float $freeMezoninArea
     * @return KfRshIndustrialSlice
     */
    public function setFreeMezoninArea($freeMezoninArea)
    {
        $this->freeMezoninArea = $freeMezoninArea;

        return $this;
    }

    /**
     * Get freeMezoninArea
     *
     * @return float 
     */
    public function getFreeMezoninArea()
    {
        return $this->freeMezoninArea;
    }

    /**
     * Set freeIndustrialArea
     *
     * @param float $freeIndustrialArea
     * @return KfRshIndustrialSlice
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
     * Set procFreeArea
     *
     * @param float $procFreeArea
     * @return KfRshIndustrialSlice
     */
    public function setProcFreeArea($procFreeArea)
    {
        $this->procFreeArea = $procFreeArea;

        return $this;
    }

    /**
     * Get procFreeArea
     *
     * @return float 
     */
    public function getProcFreeArea()
    {
        return $this->procFreeArea;
    }

    /**
     * Set rentIndustrialMin
     *
     * @param string $rentIndustrialMin
     * @return KfRshIndustrialSlice
     */
    public function setRentIndustrialMin($rentIndustrialMin)
    {
        $this->rentIndustrialMin = $rentIndustrialMin;

        return $this;
    }

    /**
     * Get rentIndustrialMin
     *
     * @return string 
     */
    public function getRentIndustrialMin()
    {
        return $this->rentIndustrialMin;
    }

    /**
     * Set rentIndustrialMax
     *
     * @param string $rentIndustrialMax
     * @return KfRshIndustrialSlice
     */
    public function setRentIndustrialMax($rentIndustrialMax)
    {
        $this->rentIndustrialMax = $rentIndustrialMax;

        return $this;
    }

    /**
     * Get rentIndustrialMax
     *
     * @return string 
     */
    public function getRentIndustrialMax()
    {
        return $this->rentIndustrialMax;
    }

    /**
     * Set rentOfficeMin
     *
     * @param string $rentOfficeMin
     * @return KfRshIndustrialSlice
     */
    public function setRentOfficeMin($rentOfficeMin)
    {
        $this->rentOfficeMin = $rentOfficeMin;

        return $this;
    }

    /**
     * Get rentOfficeMin
     *
     * @return string 
     */
    public function getRentOfficeMin()
    {
        return $this->rentOfficeMin;
    }

    /**
     * Set rentOfficeMax
     *
     * @param string $rentOfficeMax
     * @return KfRshIndustrialSlice
     */
    public function setRentOfficeMax($rentOfficeMax)
    {
        $this->rentOfficeMax = $rentOfficeMax;

        return $this;
    }

    /**
     * Get rentOfficeMax
     *
     * @return string 
     */
    public function getRentOfficeMax()
    {
        return $this->rentOfficeMax;
    }

    /**
     * Set minRentMesonin
     *
     * @param string $minRentMesonin
     * @return KfRshIndustrialSlice
     */
    public function setMinRentMesonin($minRentMesonin)
    {
        $this->minRentMesonin = $minRentMesonin;

        return $this;
    }

    /**
     * Get minRentMesonin
     *
     * @return string 
     */
    public function getMinRentMesonin()
    {
        return $this->minRentMesonin;
    }

    /**
     * Set maxRentMesonin
     *
     * @param string $maxRentMesonin
     * @return KfRshIndustrialSlice
     */
    public function setMaxRentMesonin($maxRentMesonin)
    {
        $this->maxRentMesonin = $maxRentMesonin;

        return $this;
    }

    /**
     * Get maxRentMesonin
     *
     * @return string 
     */
    public function getMaxRentMesonin()
    {
        return $this->maxRentMesonin;
    }

    /**
     * Set opexMin
     *
     * @param string $opexMin
     * @return KfRshIndustrialSlice
     */
    public function setOpexMin($opexMin)
    {
        $this->opexMin = $opexMin;

        return $this;
    }

    /**
     * Get opexMin
     *
     * @return string 
     */
    public function getOpexMin()
    {
        return $this->opexMin;
    }

    /**
     * Set opexMax
     *
     * @param string $opexMax
     * @return KfRshIndustrialSlice
     */
    public function setOpexMax($opexMax)
    {
        $this->opexMax = $opexMax;

        return $this;
    }

    /**
     * Get opexMax
     *
     * @return string 
     */
    public function getOpexMax()
    {
        return $this->opexMax;
    }

    /**
     * Set saleMin
     *
     * @param string $saleMin
     * @return KfRshIndustrialSlice
     */
    public function setSaleMin($saleMin)
    {
        $this->saleMin = $saleMin;

        return $this;
    }

    /**
     * Get saleMin
     *
     * @return string 
     */
    public function getSaleMin()
    {
        return $this->saleMin;
    }

    /**
     * Set saleMax
     *
     * @param string $saleMax
     * @return KfRshIndustrialSlice
     */
    public function setSaleMax($saleMax)
    {
        $this->saleMax = $saleMax;

        return $this;
    }

    /**
     * Get saleMax
     *
     * @return string 
     */
    public function getSaleMax()
    {
        return $this->saleMax;
    }

    /**
     * Set costPallet
     *
     * @param string $costPallet
     * @return KfRshIndustrialSlice
     */
    public function setCostPallet($costPallet)
    {
        $this->costPallet = $costPallet;

        return $this;
    }

    /**
     * Get costPallet
     *
     * @return string 
     */
    public function getCostPallet()
    {
        return $this->costPallet;
    }

    /**
     * Set lulMin
     *
     * @param string $lulMin
     * @return KfRshIndustrialSlice
     */
    public function setLulMin($lulMin)
    {
        $this->lulMin = $lulMin;

        return $this;
    }

    /**
     * Get lulMin
     *
     * @return string 
     */
    public function getLulMin()
    {
        return $this->lulMin;
    }

    /**
     * Set lulMax
     *
     * @param string $lulMax
     * @return KfRshIndustrialSlice
     */
    public function setLulMax($lulMax)
    {
        $this->lulMax = $lulMax;

        return $this;
    }

    /**
     * Get lulMax
     *
     * @return string 
     */
    public function getLulMax()
    {
        return $this->lulMax;
    }

    /**
     * Set insdepMin
     *
     * @param integer $insdepMin
     * @return KfRshIndustrialSlice
     */
    public function setInsdepMin($insdepMin)
    {
        $this->insdepMin = $insdepMin;

        return $this;
    }

    /**
     * Get insdepMin
     *
     * @return integer 
     */
    public function getInsdepMin()
    {
        return $this->insdepMin;
    }

    /**
     * Set insdepMax
     *
     * @param integer $insdepMax
     * @return KfRshIndustrialSlice
     */
    public function setInsdepMax($insdepMax)
    {
        $this->insdepMax = $insdepMax;

        return $this;
    }

    /**
     * Get insdepMax
     *
     * @return integer 
     */
    public function getInsdepMax()
    {
        return $this->insdepMax;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfRshIndustrialSlice
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
