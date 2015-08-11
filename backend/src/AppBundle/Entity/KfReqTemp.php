<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReqTemp
 *
 * @ORM\Table(name="kf_REQ_temp")
 * @ORM\Entity
 */
class KfReqTemp
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=128, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_TYPE", type="string", length=64, nullable=true)
     */
    private $reqType;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTYPE", type="string", length=64, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=4000, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="REQUIREMENTS", type="string", length=4000, nullable=true)
     */
    private $requirements;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONDEVELOPMENT", type="string", length=1024, nullable=true)
     */
    private $regiondevelopment;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMINALS", type="string", length=1024, nullable=true)
     */
    private $terminals;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_KF", type="string", length=1024, nullable=true)
     */
    private $areaKf;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_MOSCOW", type="string", length=1024, nullable=true)
     */
    private $areaMoscow;

    /**
     * @var string
     *
     * @ORM\Column(name="AVGBILL", type="string", length=128, nullable=true)
     */
    private $avgbill;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS", type="integer", nullable=true)
     */
    private $bedrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION", type="string", length=64, nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATING", type="string", length=128, nullable=true)
     */
    private $decorating;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_MKAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToMkad;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION_STYLE", type="string", length=128, nullable=true)
     */
    private $decorationStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=12, nullable=true)
     */
    private $direction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTRY_DATE", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY", type="string", length=64, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_CAR_PLACE", type="string", length=1, nullable=true)
     */
    private $isCarPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_DECORATION", type="string", length=1, nullable=true)
     */
    private $isDecoration;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_ELECTRICITY", type="string", length=1, nullable=true)
     */
    private $isElectricity;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FURNITURE", type="string", length=1, nullable=true)
     */
    private $isFurniture;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_HEATING", type="string", length=1, nullable=true)
     */
    private $isHeating;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LOCALRAILWAY", type="string", length=1, nullable=true)
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PARKING", type="string", length=1, nullable=true)
     */
    private $isParking;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RAILWAY", type="string", length=1, nullable=true)
     */
    private $isRailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_TIMBERLAND", type="string", length=1, nullable=true)
     */
    private $isTimberland;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMin;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=64, nullable=true)
     */
    private $market;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMBER_PERSON", type="string", length=128, nullable=true)
     */
    private $numberPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECT_TYPE", type="string", length=128, nullable=true)
     */
    private $objectType;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMin;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=64, nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=64, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOD", type="string", length=64, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=128, nullable=true)
     */
    private $preparedness;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION_NOTES", type="string", length=1024, nullable=true)
     */
    private $regionNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONID", type="string", length=12, nullable=true)
     */
    private $regionid;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $reqDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_SUBTYPE", type="string", length=32, nullable=true)
     */
    private $reqSubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOM_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMax;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=256, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOPENAME", type="string", length=128, nullable=true)
     */
    private $shopename;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOSSE", type="string", length=128, nullable=true)
     */
    private $shosse;

    /**
     * @var string
     *
     * @ORM\Column(name="SOURCEID", type="string", length=12, nullable=true)
     */
    private $sourceid;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="STANDING", type="float", precision=53, scale=0, nullable=true)
     */
    private $standing;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="WAREHOUSE_TYPE", type="string", length=64, nullable=true)
     */
    private $warehouseType;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=32, nullable=true)
     */
    private $furniture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONVERTED_DATE", type="datetime", nullable=true)
     */
    private $convertedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT_SOURCE", type="string", length=64, nullable=true)
     */
    private $importSource;

    /**
     * @var string
     *
     * @ORM\Column(name="DUPLICATE", type="string", length=1, nullable=true)
     */
    private $duplicate;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_STATUS", type="string", length=32, nullable=true)
     */
    private $countryStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_HIGHWAY", type="string", length=128, nullable=true)
     */
    private $countryHighway;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBDIVISION", type="string", length=64, nullable=true)
     */
    private $subdivision;

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_AVAILABLE", type="string", length=1, nullable=true)
     */
    private $notAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LAND", type="string", length=1, nullable=true)
     */
    private $isLand;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WAREHOUSE", type="string", length=1, nullable=true)
     */
    private $isWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_HIGHWAY", type="string", length=256, nullable=true)
     */
    private $industrialHighway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FIRST", type="string", length=1, nullable=true)
     */
    private $isFirst;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RESP_STORAGE", type="string", length=1, nullable=true)
     */
    private $isRespStorage;



    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return KfReqTemp
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfReqTemp
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
     * @return KfReqTemp
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
     * @return KfReqTemp
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
     * @return KfReqTemp
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
     * Set managerid
     *
     * @param string $managerid
     * @return KfReqTemp
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfReqTemp
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
     * Set reqType
     *
     * @param string $reqType
     * @return KfReqTemp
     */
    public function setReqType($reqType)
    {
        $this->reqType = $reqType;

        return $this;
    }

    /**
     * Get reqType
     *
     * @return string 
     */
    public function getReqType()
    {
        return $this->reqType;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     * @return KfReqTemp
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string 
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfReqTemp
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
     * Set contactid
     *
     * @param string $contactid
     * @return KfReqTemp
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfReqTemp
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfReqTemp
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set requirements
     *
     * @param string $requirements
     * @return KfReqTemp
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * Get requirements
     *
     * @return string 
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Set regiondevelopment
     *
     * @param string $regiondevelopment
     * @return KfReqTemp
     */
    public function setRegiondevelopment($regiondevelopment)
    {
        $this->regiondevelopment = $regiondevelopment;

        return $this;
    }

    /**
     * Get regiondevelopment
     *
     * @return string 
     */
    public function getRegiondevelopment()
    {
        return $this->regiondevelopment;
    }

    /**
     * Set terminals
     *
     * @param string $terminals
     * @return KfReqTemp
     */
    public function setTerminals($terminals)
    {
        $this->terminals = $terminals;

        return $this;
    }

    /**
     * Get terminals
     *
     * @return string 
     */
    public function getTerminals()
    {
        return $this->terminals;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfReqTemp
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfReqTemp
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
     * Set areaKf
     *
     * @param string $areaKf
     * @return KfReqTemp
     */
    public function setAreaKf($areaKf)
    {
        $this->areaKf = $areaKf;

        return $this;
    }

    /**
     * Get areaKf
     *
     * @return string 
     */
    public function getAreaKf()
    {
        return $this->areaKf;
    }

    /**
     * Set areaMoscow
     *
     * @param string $areaMoscow
     * @return KfReqTemp
     */
    public function setAreaMoscow($areaMoscow)
    {
        $this->areaMoscow = $areaMoscow;

        return $this;
    }

    /**
     * Get areaMoscow
     *
     * @return string 
     */
    public function getAreaMoscow()
    {
        return $this->areaMoscow;
    }

    /**
     * Set avgbill
     *
     * @param string $avgbill
     * @return KfReqTemp
     */
    public function setAvgbill($avgbill)
    {
        $this->avgbill = $avgbill;

        return $this;
    }

    /**
     * Get avgbill
     *
     * @return string 
     */
    public function getAvgbill()
    {
        return $this->avgbill;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return KfReqTemp
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
     * Set brand
     *
     * @param string $brand
     * @return KfReqTemp
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return KfReqTemp
     */
    public function setBudgetMax($budgetMax)
    {
        $this->budgetMax = $budgetMax;

        return $this;
    }

    /**
     * Get budgetMax
     *
     * @return float 
     */
    public function getBudgetMax()
    {
        return $this->budgetMax;
    }

    /**
     * Set budgetMin
     *
     * @param float $budgetMin
     * @return KfReqTemp
     */
    public function setBudgetMin($budgetMin)
    {
        $this->budgetMin = $budgetMin;

        return $this;
    }

    /**
     * Get budgetMin
     *
     * @return float 
     */
    public function getBudgetMin()
    {
        return $this->budgetMin;
    }

    /**
     * Set commission
     *
     * @param string $commission
     * @return KfReqTemp
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set decorating
     *
     * @param string $decorating
     * @return KfReqTemp
     */
    public function setDecorating($decorating)
    {
        $this->decorating = $decorating;

        return $this;
    }

    /**
     * Get decorating
     *
     * @return string 
     */
    public function getDecorating()
    {
        return $this->decorating;
    }

    /**
     * Set distanceToMkad
     *
     * @param float $distanceToMkad
     * @return KfReqTemp
     */
    public function setDistanceToMkad($distanceToMkad)
    {
        $this->distanceToMkad = $distanceToMkad;

        return $this;
    }

    /**
     * Get distanceToMkad
     *
     * @return float 
     */
    public function getDistanceToMkad()
    {
        return $this->distanceToMkad;
    }

    /**
     * Set decorationStyle
     *
     * @param string $decorationStyle
     * @return KfReqTemp
     */
    public function setDecorationStyle($decorationStyle)
    {
        $this->decorationStyle = $decorationStyle;

        return $this;
    }

    /**
     * Get decorationStyle
     *
     * @return string 
     */
    public function getDecorationStyle()
    {
        return $this->decorationStyle;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return KfReqTemp
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return KfReqTemp
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime 
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return KfReqTemp
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set isCarPlace
     *
     * @param string $isCarPlace
     * @return KfReqTemp
     */
    public function setIsCarPlace($isCarPlace)
    {
        $this->isCarPlace = $isCarPlace;

        return $this;
    }

    /**
     * Get isCarPlace
     *
     * @return string 
     */
    public function getIsCarPlace()
    {
        return $this->isCarPlace;
    }

    /**
     * Set isDecoration
     *
     * @param string $isDecoration
     * @return KfReqTemp
     */
    public function setIsDecoration($isDecoration)
    {
        $this->isDecoration = $isDecoration;

        return $this;
    }

    /**
     * Get isDecoration
     *
     * @return string 
     */
    public function getIsDecoration()
    {
        return $this->isDecoration;
    }

    /**
     * Set isElectricity
     *
     * @param string $isElectricity
     * @return KfReqTemp
     */
    public function setIsElectricity($isElectricity)
    {
        $this->isElectricity = $isElectricity;

        return $this;
    }

    /**
     * Get isElectricity
     *
     * @return string 
     */
    public function getIsElectricity()
    {
        return $this->isElectricity;
    }

    /**
     * Set isFurniture
     *
     * @param string $isFurniture
     * @return KfReqTemp
     */
    public function setIsFurniture($isFurniture)
    {
        $this->isFurniture = $isFurniture;

        return $this;
    }

    /**
     * Get isFurniture
     *
     * @return string 
     */
    public function getIsFurniture()
    {
        return $this->isFurniture;
    }

    /**
     * Set isHeating
     *
     * @param string $isHeating
     * @return KfReqTemp
     */
    public function setIsHeating($isHeating)
    {
        $this->isHeating = $isHeating;

        return $this;
    }

    /**
     * Get isHeating
     *
     * @return string 
     */
    public function getIsHeating()
    {
        return $this->isHeating;
    }

    /**
     * Set isLocalrailway
     *
     * @param string $isLocalrailway
     * @return KfReqTemp
     */
    public function setIsLocalrailway($isLocalrailway)
    {
        $this->isLocalrailway = $isLocalrailway;

        return $this;
    }

    /**
     * Get isLocalrailway
     *
     * @return string 
     */
    public function getIsLocalrailway()
    {
        return $this->isLocalrailway;
    }

    /**
     * Set isParking
     *
     * @param string $isParking
     * @return KfReqTemp
     */
    public function setIsParking($isParking)
    {
        $this->isParking = $isParking;

        return $this;
    }

    /**
     * Get isParking
     *
     * @return string 
     */
    public function getIsParking()
    {
        return $this->isParking;
    }

    /**
     * Set isRailway
     *
     * @param string $isRailway
     * @return KfReqTemp
     */
    public function setIsRailway($isRailway)
    {
        $this->isRailway = $isRailway;

        return $this;
    }

    /**
     * Get isRailway
     *
     * @return string 
     */
    public function getIsRailway()
    {
        return $this->isRailway;
    }

    /**
     * Set isTimberland
     *
     * @param string $isTimberland
     * @return KfReqTemp
     */
    public function setIsTimberland($isTimberland)
    {
        $this->isTimberland = $isTimberland;

        return $this;
    }

    /**
     * Get isTimberland
     *
     * @return string 
     */
    public function getIsTimberland()
    {
        return $this->isTimberland;
    }

    /**
     * Set landSquareMax
     *
     * @param float $landSquareMax
     * @return KfReqTemp
     */
    public function setLandSquareMax($landSquareMax)
    {
        $this->landSquareMax = $landSquareMax;

        return $this;
    }

    /**
     * Get landSquareMax
     *
     * @return float 
     */
    public function getLandSquareMax()
    {
        return $this->landSquareMax;
    }

    /**
     * Set landSquareMin
     *
     * @param float $landSquareMin
     * @return KfReqTemp
     */
    public function setLandSquareMin($landSquareMin)
    {
        $this->landSquareMin = $landSquareMin;

        return $this;
    }

    /**
     * Get landSquareMin
     *
     * @return float 
     */
    public function getLandSquareMin()
    {
        return $this->landSquareMin;
    }

    /**
     * Set market
     *
     * @param string $market
     * @return KfReqTemp
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
     * Set numberPerson
     *
     * @param string $numberPerson
     * @return KfReqTemp
     */
    public function setNumberPerson($numberPerson)
    {
        $this->numberPerson = $numberPerson;

        return $this;
    }

    /**
     * Get numberPerson
     *
     * @return string 
     */
    public function getNumberPerson()
    {
        return $this->numberPerson;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return KfReqTemp
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set officeSquareMax
     *
     * @param float $officeSquareMax
     * @return KfReqTemp
     */
    public function setOfficeSquareMax($officeSquareMax)
    {
        $this->officeSquareMax = $officeSquareMax;

        return $this;
    }

    /**
     * Get officeSquareMax
     *
     * @return float 
     */
    public function getOfficeSquareMax()
    {
        return $this->officeSquareMax;
    }

    /**
     * Set officeSquareMin
     *
     * @param float $officeSquareMin
     * @return KfReqTemp
     */
    public function setOfficeSquareMin($officeSquareMin)
    {
        $this->officeSquareMin = $officeSquareMin;

        return $this;
    }

    /**
     * Get officeSquareMin
     *
     * @return float 
     */
    public function getOfficeSquareMin()
    {
        return $this->officeSquareMin;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return KfReqTemp
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return string 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return KfReqTemp
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return KfReqTemp
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set preparedness
     *
     * @param string $preparedness
     * @return KfReqTemp
     */
    public function setPreparedness($preparedness)
    {
        $this->preparedness = $preparedness;

        return $this;
    }

    /**
     * Get preparedness
     *
     * @return string 
     */
    public function getPreparedness()
    {
        return $this->preparedness;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return KfReqTemp
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set regionNotes
     *
     * @param string $regionNotes
     * @return KfReqTemp
     */
    public function setRegionNotes($regionNotes)
    {
        $this->regionNotes = $regionNotes;

        return $this;
    }

    /**
     * Get regionNotes
     *
     * @return string 
     */
    public function getRegionNotes()
    {
        return $this->regionNotes;
    }

    /**
     * Set regionid
     *
     * @param string $regionid
     * @return KfReqTemp
     */
    public function setRegionid($regionid)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return string 
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set reqDepartment
     *
     * @param string $reqDepartment
     * @return KfReqTemp
     */
    public function setReqDepartment($reqDepartment)
    {
        $this->reqDepartment = $reqDepartment;

        return $this;
    }

    /**
     * Get reqDepartment
     *
     * @return string 
     */
    public function getReqDepartment()
    {
        return $this->reqDepartment;
    }

    /**
     * Set reqSubtype
     *
     * @param string $reqSubtype
     * @return KfReqTemp
     */
    public function setReqSubtype($reqSubtype)
    {
        $this->reqSubtype = $reqSubtype;

        return $this;
    }

    /**
     * Get reqSubtype
     *
     * @return string 
     */
    public function getReqSubtype()
    {
        return $this->reqSubtype;
    }

    /**
     * Set rings
     *
     * @param string $rings
     * @return KfReqTemp
     */
    public function setRings($rings)
    {
        $this->rings = $rings;

        return $this;
    }

    /**
     * Get rings
     *
     * @return string 
     */
    public function getRings()
    {
        return $this->rings;
    }

    /**
     * Set roomHeight
     *
     * @param float $roomHeight
     * @return KfReqTemp
     */
    public function setRoomHeight($roomHeight)
    {
        $this->roomHeight = $roomHeight;

        return $this;
    }

    /**
     * Get roomHeight
     *
     * @return float 
     */
    public function getRoomHeight()
    {
        return $this->roomHeight;
    }

    /**
     * Set roomsCountMax
     *
     * @param float $roomsCountMax
     * @return KfReqTemp
     */
    public function setRoomsCountMax($roomsCountMax)
    {
        $this->roomsCountMax = $roomsCountMax;

        return $this;
    }

    /**
     * Get roomsCountMax
     *
     * @return float 
     */
    public function getRoomsCountMax()
    {
        return $this->roomsCountMax;
    }

    /**
     * Set roomsCountMin
     *
     * @param float $roomsCountMin
     * @return KfReqTemp
     */
    public function setRoomsCountMin($roomsCountMin)
    {
        $this->roomsCountMin = $roomsCountMin;

        return $this;
    }

    /**
     * Get roomsCountMin
     *
     * @return float 
     */
    public function getRoomsCountMin()
    {
        return $this->roomsCountMin;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return KfReqTemp
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set shopename
     *
     * @param string $shopename
     * @return KfReqTemp
     */
    public function setShopename($shopename)
    {
        $this->shopename = $shopename;

        return $this;
    }

    /**
     * Get shopename
     *
     * @return string 
     */
    public function getShopename()
    {
        return $this->shopename;
    }

    /**
     * Set shosse
     *
     * @param string $shosse
     * @return KfReqTemp
     */
    public function setShosse($shosse)
    {
        $this->shosse = $shosse;

        return $this;
    }

    /**
     * Get shosse
     *
     * @return string 
     */
    public function getShosse()
    {
        return $this->shosse;
    }

    /**
     * Set sourceid
     *
     * @param string $sourceid
     * @return KfReqTemp
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return string 
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }

    /**
     * Set squareMax
     *
     * @param float $squareMax
     * @return KfReqTemp
     */
    public function setSquareMax($squareMax)
    {
        $this->squareMax = $squareMax;

        return $this;
    }

    /**
     * Get squareMax
     *
     * @return float 
     */
    public function getSquareMax()
    {
        return $this->squareMax;
    }

    /**
     * Set squareMin
     *
     * @param float $squareMin
     * @return KfReqTemp
     */
    public function setSquareMin($squareMin)
    {
        $this->squareMin = $squareMin;

        return $this;
    }

    /**
     * Get squareMin
     *
     * @return float 
     */
    public function getSquareMin()
    {
        return $this->squareMin;
    }

    /**
     * Set standing
     *
     * @param float $standing
     * @return KfReqTemp
     */
    public function setStanding($standing)
    {
        $this->standing = $standing;

        return $this;
    }

    /**
     * Get standing
     *
     * @return float 
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return KfReqTemp
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }

    /**
     * Set warehouseType
     *
     * @param string $warehouseType
     * @return KfReqTemp
     */
    public function setWarehouseType($warehouseType)
    {
        $this->warehouseType = $warehouseType;

        return $this;
    }

    /**
     * Get warehouseType
     *
     * @return string 
     */
    public function getWarehouseType()
    {
        return $this->warehouseType;
    }

    /**
     * Set furniture
     *
     * @param string $furniture
     * @return KfReqTemp
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
     * Set convertedDate
     *
     * @param \DateTime $convertedDate
     * @return KfReqTemp
     */
    public function setConvertedDate($convertedDate)
    {
        $this->convertedDate = $convertedDate;

        return $this;
    }

    /**
     * Get convertedDate
     *
     * @return \DateTime 
     */
    public function getConvertedDate()
    {
        return $this->convertedDate;
    }

    /**
     * Set importSource
     *
     * @param string $importSource
     * @return KfReqTemp
     */
    public function setImportSource($importSource)
    {
        $this->importSource = $importSource;

        return $this;
    }

    /**
     * Get importSource
     *
     * @return string 
     */
    public function getImportSource()
    {
        return $this->importSource;
    }

    /**
     * Set duplicate
     *
     * @param string $duplicate
     * @return KfReqTemp
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;

        return $this;
    }

    /**
     * Get duplicate
     *
     * @return string 
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

    /**
     * Set countryStatus
     *
     * @param string $countryStatus
     * @return KfReqTemp
     */
    public function setCountryStatus($countryStatus)
    {
        $this->countryStatus = $countryStatus;

        return $this;
    }

    /**
     * Get countryStatus
     *
     * @return string 
     */
    public function getCountryStatus()
    {
        return $this->countryStatus;
    }

    /**
     * Set countryHighway
     *
     * @param string $countryHighway
     * @return KfReqTemp
     */
    public function setCountryHighway($countryHighway)
    {
        $this->countryHighway = $countryHighway;

        return $this;
    }

    /**
     * Get countryHighway
     *
     * @return string 
     */
    public function getCountryHighway()
    {
        return $this->countryHighway;
    }

    /**
     * Set subdivision
     *
     * @param string $subdivision
     * @return KfReqTemp
     */
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * Get subdivision
     *
     * @return string 
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * Set notAvailable
     *
     * @param string $notAvailable
     * @return KfReqTemp
     */
    public function setNotAvailable($notAvailable)
    {
        $this->notAvailable = $notAvailable;

        return $this;
    }

    /**
     * Get notAvailable
     *
     * @return string 
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * Set isLand
     *
     * @param string $isLand
     * @return KfReqTemp
     */
    public function setIsLand($isLand)
    {
        $this->isLand = $isLand;

        return $this;
    }

    /**
     * Get isLand
     *
     * @return string 
     */
    public function getIsLand()
    {
        return $this->isLand;
    }

    /**
     * Set isWarehouse
     *
     * @param string $isWarehouse
     * @return KfReqTemp
     */
    public function setIsWarehouse($isWarehouse)
    {
        $this->isWarehouse = $isWarehouse;

        return $this;
    }

    /**
     * Get isWarehouse
     *
     * @return string 
     */
    public function getIsWarehouse()
    {
        return $this->isWarehouse;
    }

    /**
     * Set industrialHighway
     *
     * @param string $industrialHighway
     * @return KfReqTemp
     */
    public function setIndustrialHighway($industrialHighway)
    {
        $this->industrialHighway = $industrialHighway;

        return $this;
    }

    /**
     * Get industrialHighway
     *
     * @return string 
     */
    public function getIndustrialHighway()
    {
        return $this->industrialHighway;
    }

    /**
     * Set isFirst
     *
     * @param string $isFirst
     * @return KfReqTemp
     */
    public function setIsFirst($isFirst)
    {
        $this->isFirst = $isFirst;

        return $this;
    }

    /**
     * Get isFirst
     *
     * @return string 
     */
    public function getIsFirst()
    {
        return $this->isFirst;
    }

    /**
     * Set isRespStorage
     *
     * @param string $isRespStorage
     * @return KfReqTemp
     */
    public function setIsRespStorage($isRespStorage)
    {
        $this->isRespStorage = $isRespStorage;

        return $this;
    }

    /**
     * Get isRespStorage
     *
     * @return string 
     */
    public function getIsRespStorage()
    {
        return $this->isRespStorage;
    }
}
