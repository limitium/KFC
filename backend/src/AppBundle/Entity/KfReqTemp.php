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


}
