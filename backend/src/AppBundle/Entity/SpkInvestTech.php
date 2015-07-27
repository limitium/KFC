<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestTech
 *
 */
class SpkInvestTech
{
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
    private $class;

    /**
     * @var string
     *
     */
    private $fitOut;

    /**
     * @var float
     *
     */
    private $landGa;

    /**
     * @var string
     *
     */
    private $leaseStatus;

    /**
     * @var float
     *
     */
    private $occupancy;

    /**
     * @var string
     *
     */
    private $individualSale;

    /**
     * @var float
     *
     */
    private $totalSqm;

    /**
     * @var float
     *
     */
    private $groundSqm;

    /**
     * @var float
     *
     */
    private $ugroundSqm;

    /**
     * @var float
     *
     */
    private $leaseableSqm;

    /**
     * @var float
     *
     */
    private $officeSqm;

    /**
     * @var float
     *
     */
    private $retailSqm;

    /**
     * @var float
     *
     */
    private $hotelSqm;

    /**
     * @var string
     *
     */
    private $complYear;

    /**
     * @var string
     *
     */
    private $landOwnerType;

    /**
     * @var string
     *
     */
    private $salePerBlock;

    /**
     * @var integer
     *
     */
    private $landLeaseTerm;

    /**
     * @var float
     *
     */
    private $groundParking;

    /**
     * @var float
     *
     */
    private $ugroundParking;

    /**
     * @var float
     *
     */
    private $multilevelParking;

    /**
     * @var string
     *
     */
    private $reconstrYear;

    /**
     * @var float
     *
     */
    private $industrialSqm;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $floor;

    /**
     * @var string
     *
     */
    private $ufloor;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestTech
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
     * @return SpkInvestTech
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
     * @return SpkInvestTech
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
     * @return SpkInvestTech
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
     * @return SpkInvestTech
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
     * Set class
     *
     * @param string $class
     * @return SpkInvestTech
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
     * Set fitOut
     *
     * @param string $fitOut
     * @return SpkInvestTech
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
     * Set landGa
     *
     * @param float $landGa
     * @return SpkInvestTech
     */
    public function setLandGa($landGa)
    {
        $this->landGa = $landGa;

        return $this;
    }

    /**
     * Get landGa
     *
     * @return float 
     */
    public function getLandGa()
    {
        return $this->landGa;
    }

    /**
     * Set leaseStatus
     *
     * @param string $leaseStatus
     * @return SpkInvestTech
     */
    public function setLeaseStatus($leaseStatus)
    {
        $this->leaseStatus = $leaseStatus;

        return $this;
    }

    /**
     * Get leaseStatus
     *
     * @return string 
     */
    public function getLeaseStatus()
    {
        return $this->leaseStatus;
    }

    /**
     * Set occupancy
     *
     * @param float $occupancy
     * @return SpkInvestTech
     */
    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;

        return $this;
    }

    /**
     * Get occupancy
     *
     * @return float 
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Set individualSale
     *
     * @param string $individualSale
     * @return SpkInvestTech
     */
    public function setIndividualSale($individualSale)
    {
        $this->individualSale = $individualSale;

        return $this;
    }

    /**
     * Get individualSale
     *
     * @return string 
     */
    public function getIndividualSale()
    {
        return $this->individualSale;
    }

    /**
     * Set totalSqm
     *
     * @param float $totalSqm
     * @return SpkInvestTech
     */
    public function setTotalSqm($totalSqm)
    {
        $this->totalSqm = $totalSqm;

        return $this;
    }

    /**
     * Get totalSqm
     *
     * @return float 
     */
    public function getTotalSqm()
    {
        return $this->totalSqm;
    }

    /**
     * Set groundSqm
     *
     * @param float $groundSqm
     * @return SpkInvestTech
     */
    public function setGroundSqm($groundSqm)
    {
        $this->groundSqm = $groundSqm;

        return $this;
    }

    /**
     * Get groundSqm
     *
     * @return float 
     */
    public function getGroundSqm()
    {
        return $this->groundSqm;
    }

    /**
     * Set ugroundSqm
     *
     * @param float $ugroundSqm
     * @return SpkInvestTech
     */
    public function setUgroundSqm($ugroundSqm)
    {
        $this->ugroundSqm = $ugroundSqm;

        return $this;
    }

    /**
     * Get ugroundSqm
     *
     * @return float 
     */
    public function getUgroundSqm()
    {
        return $this->ugroundSqm;
    }

    /**
     * Set leaseableSqm
     *
     * @param float $leaseableSqm
     * @return SpkInvestTech
     */
    public function setLeaseableSqm($leaseableSqm)
    {
        $this->leaseableSqm = $leaseableSqm;

        return $this;
    }

    /**
     * Get leaseableSqm
     *
     * @return float 
     */
    public function getLeaseableSqm()
    {
        return $this->leaseableSqm;
    }

    /**
     * Set officeSqm
     *
     * @param float $officeSqm
     * @return SpkInvestTech
     */
    public function setOfficeSqm($officeSqm)
    {
        $this->officeSqm = $officeSqm;

        return $this;
    }

    /**
     * Get officeSqm
     *
     * @return float 
     */
    public function getOfficeSqm()
    {
        return $this->officeSqm;
    }

    /**
     * Set retailSqm
     *
     * @param float $retailSqm
     * @return SpkInvestTech
     */
    public function setRetailSqm($retailSqm)
    {
        $this->retailSqm = $retailSqm;

        return $this;
    }

    /**
     * Get retailSqm
     *
     * @return float 
     */
    public function getRetailSqm()
    {
        return $this->retailSqm;
    }

    /**
     * Set hotelSqm
     *
     * @param float $hotelSqm
     * @return SpkInvestTech
     */
    public function setHotelSqm($hotelSqm)
    {
        $this->hotelSqm = $hotelSqm;

        return $this;
    }

    /**
     * Get hotelSqm
     *
     * @return float 
     */
    public function getHotelSqm()
    {
        return $this->hotelSqm;
    }

    /**
     * Set complYear
     *
     * @param string $complYear
     * @return SpkInvestTech
     */
    public function setComplYear($complYear)
    {
        $this->complYear = $complYear;

        return $this;
    }

    /**
     * Get complYear
     *
     * @return string 
     */
    public function getComplYear()
    {
        return $this->complYear;
    }

    /**
     * Set landOwnerType
     *
     * @param string $landOwnerType
     * @return SpkInvestTech
     */
    public function setLandOwnerType($landOwnerType)
    {
        $this->landOwnerType = $landOwnerType;

        return $this;
    }

    /**
     * Get landOwnerType
     *
     * @return string 
     */
    public function getLandOwnerType()
    {
        return $this->landOwnerType;
    }

    /**
     * Set salePerBlock
     *
     * @param string $salePerBlock
     * @return SpkInvestTech
     */
    public function setSalePerBlock($salePerBlock)
    {
        $this->salePerBlock = $salePerBlock;

        return $this;
    }

    /**
     * Get salePerBlock
     *
     * @return string 
     */
    public function getSalePerBlock()
    {
        return $this->salePerBlock;
    }

    /**
     * Set landLeaseTerm
     *
     * @param integer $landLeaseTerm
     * @return SpkInvestTech
     */
    public function setLandLeaseTerm($landLeaseTerm)
    {
        $this->landLeaseTerm = $landLeaseTerm;

        return $this;
    }

    /**
     * Get landLeaseTerm
     *
     * @return integer 
     */
    public function getLandLeaseTerm()
    {
        return $this->landLeaseTerm;
    }

    /**
     * Set groundParking
     *
     * @param float $groundParking
     * @return SpkInvestTech
     */
    public function setGroundParking($groundParking)
    {
        $this->groundParking = $groundParking;

        return $this;
    }

    /**
     * Get groundParking
     *
     * @return float 
     */
    public function getGroundParking()
    {
        return $this->groundParking;
    }

    /**
     * Set ugroundParking
     *
     * @param float $ugroundParking
     * @return SpkInvestTech
     */
    public function setUgroundParking($ugroundParking)
    {
        $this->ugroundParking = $ugroundParking;

        return $this;
    }

    /**
     * Get ugroundParking
     *
     * @return float 
     */
    public function getUgroundParking()
    {
        return $this->ugroundParking;
    }

    /**
     * Set multilevelParking
     *
     * @param float $multilevelParking
     * @return SpkInvestTech
     */
    public function setMultilevelParking($multilevelParking)
    {
        $this->multilevelParking = $multilevelParking;

        return $this;
    }

    /**
     * Get multilevelParking
     *
     * @return float 
     */
    public function getMultilevelParking()
    {
        return $this->multilevelParking;
    }

    /**
     * Set reconstrYear
     *
     * @param string $reconstrYear
     * @return SpkInvestTech
     */
    public function setReconstrYear($reconstrYear)
    {
        $this->reconstrYear = $reconstrYear;

        return $this;
    }

    /**
     * Get reconstrYear
     *
     * @return string 
     */
    public function getReconstrYear()
    {
        return $this->reconstrYear;
    }

    /**
     * Set industrialSqm
     *
     * @param float $industrialSqm
     * @return SpkInvestTech
     */
    public function setIndustrialSqm($industrialSqm)
    {
        $this->industrialSqm = $industrialSqm;

        return $this;
    }

    /**
     * Get industrialSqm
     *
     * @return float 
     */
    public function getIndustrialSqm()
    {
        return $this->industrialSqm;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return SpkInvestTech
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    /**
     * Get bedrooms
     *
     * @return integer 
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Set floor
     *
     * @param string $floor
     * @return SpkInvestTech
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set ufloor
     *
     * @param string $ufloor
     * @return SpkInvestTech
     */
    public function setUfloor($ufloor)
    {
        $this->ufloor = $ufloor;

        return $this;
    }

    /**
     * Get ufloor
     *
     * @return string 
     */
    public function getUfloor()
    {
        return $this->ufloor;
    }
}
