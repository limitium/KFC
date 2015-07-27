<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkObjestSpb
 *
 */
class SpkObjestSpb
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
    private $propertyType;

    /**
     * @var string
     *
     */
    private $propType;

    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var string
     *
     */
    private $address;

    /**
     * @var string
     *
     */
    private $spkAddressid;

    /**
     * @var string
     *
     */
    private $kfObject;

    /**
     * @var string
     *
     */
    private $department;

    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @var string
     *
     */
    private $nameEng;

    /**
     * @var integer
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $saleArea;

    /**
     * @var float
     *
     */
    private $leaseMin;

    /**
     * @var float
     *
     */
    private $leaseMax;

    /**
     * @var float
     *
     */
    private $saleMin;

    /**
     * @var float
     *
     */
    private $saleMax;

    /**
     * @var string
     *
     */
    private $consultant;

    /**
     * @var string
     *
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     */
    private $cityRus;

    /**
     * @var string
     *
     */
    private $userid;

    /**
     * @var string
     *
     */
    private $result;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkObjestSpb
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
     * Set propertyType
     *
     * @param string $propertyType
     * @return SpkObjestSpb
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set propType
     *
     * @param string $propType
     * @return SpkObjestSpb
     */
    public function setPropType($propType)
    {
        $this->propType = $propType;

        return $this;
    }

    /**
     * Get propType
     *
     * @return string 
     */
    public function getPropType()
    {
        return $this->propType;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return SpkObjestSpb
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
     * @return SpkObjestSpb
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
     * Set address
     *
     * @param string $address
     * @return SpkObjestSpb
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return SpkObjestSpb
     */
    public function setSpkAddressid($spkAddressid)
    {
        $this->spkAddressid = $spkAddressid;

        return $this;
    }

    /**
     * Get spkAddressid
     *
     * @return string 
     */
    public function getSpkAddressid()
    {
        return $this->spkAddressid;
    }

    /**
     * Set kfObject
     *
     * @param string $kfObject
     * @return SpkObjestSpb
     */
    public function setKfObject($kfObject)
    {
        $this->kfObject = $kfObject;

        return $this;
    }

    /**
     * Get kfObject
     *
     * @return string 
     */
    public function getKfObject()
    {
        return $this->kfObject;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return SpkObjestSpb
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set nameRus
     *
     * @param string $nameRus
     * @return SpkObjestSpb
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string 
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set nameEng
     *
     * @param string $nameEng
     * @return SpkObjestSpb
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string 
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * Set totalArea
     *
     * @param integer $totalArea
     * @return SpkObjestSpb
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return integer 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return SpkObjestSpb
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;

        return $this;
    }

    /**
     * Get landArea
     *
     * @return float 
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return SpkObjestSpb
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
     * Set saleArea
     *
     * @param float $saleArea
     * @return SpkObjestSpb
     */
    public function setSaleArea($saleArea)
    {
        $this->saleArea = $saleArea;

        return $this;
    }

    /**
     * Get saleArea
     *
     * @return float 
     */
    public function getSaleArea()
    {
        return $this->saleArea;
    }

    /**
     * Set leaseMin
     *
     * @param float $leaseMin
     * @return SpkObjestSpb
     */
    public function setLeaseMin($leaseMin)
    {
        $this->leaseMin = $leaseMin;

        return $this;
    }

    /**
     * Get leaseMin
     *
     * @return float 
     */
    public function getLeaseMin()
    {
        return $this->leaseMin;
    }

    /**
     * Set leaseMax
     *
     * @param float $leaseMax
     * @return SpkObjestSpb
     */
    public function setLeaseMax($leaseMax)
    {
        $this->leaseMax = $leaseMax;

        return $this;
    }

    /**
     * Get leaseMax
     *
     * @return float 
     */
    public function getLeaseMax()
    {
        return $this->leaseMax;
    }

    /**
     * Set saleMin
     *
     * @param float $saleMin
     * @return SpkObjestSpb
     */
    public function setSaleMin($saleMin)
    {
        $this->saleMin = $saleMin;

        return $this;
    }

    /**
     * Get saleMin
     *
     * @return float 
     */
    public function getSaleMin()
    {
        return $this->saleMin;
    }

    /**
     * Set saleMax
     *
     * @param float $saleMax
     * @return SpkObjestSpb
     */
    public function setSaleMax($saleMax)
    {
        $this->saleMax = $saleMax;

        return $this;
    }

    /**
     * Get saleMax
     *
     * @return float 
     */
    public function getSaleMax()
    {
        return $this->saleMax;
    }

    /**
     * Set consultant
     *
     * @param string $consultant
     * @return SpkObjestSpb
     */
    public function setConsultant($consultant)
    {
        $this->consultant = $consultant;

        return $this;
    }

    /**
     * Get consultant
     *
     * @return string 
     */
    public function getConsultant()
    {
        return $this->consultant;
    }

    /**
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return SpkObjestSpb
     */
    public function setAccountmanagerid($accountmanagerid)
    {
        $this->accountmanagerid = $accountmanagerid;

        return $this;
    }

    /**
     * Get accountmanagerid
     *
     * @return string 
     */
    public function getAccountmanagerid()
    {
        return $this->accountmanagerid;
    }

    /**
     * Set cityRus
     *
     * @param string $cityRus
     * @return SpkObjestSpb
     */
    public function setCityRus($cityRus)
    {
        $this->cityRus = $cityRus;

        return $this;
    }

    /**
     * Get cityRus
     *
     * @return string 
     */
    public function getCityRus()
    {
        return $this->cityRus;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return SpkObjestSpb
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return SpkObjestSpb
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
