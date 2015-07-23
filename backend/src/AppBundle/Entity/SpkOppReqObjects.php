<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjects
 *
 * @ORM\Table(name="SPK_OPP_REQ_OBJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_REQ_OBJECTS_PRIMARY", columns={"OPPORTUNITYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OPP_REQ_OBJECTS_7_1808725496__K6_7_10_11", columns={"BUDGET_MAX", "BUDGET_MIN", "SQUARE_MIN", "SQUARE_MAX"}), @ORM\Index(name="_dta_index_SPK_OPP_REQ_OBJECTS_7_1808725496__K1_6_7_10_11", columns={"OPPORTUNITYID", "BUDGET_MAX", "BUDGET_MIN", "SQUARE_MIN", "SQUARE_MAX"}), @ORM\Index(name="_dta_index_SPK_OPP_REQ_OBJECTS_7_1808725496__K6_K1_7_10_11", columns={"BUDGET_MAX", "OPPORTUNITYID", "BUDGET_MIN", "SQUARE_MIN", "SQUARE_MAX"})})
 * @ORM\Entity
 */
class SpkOppReqObjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMin;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMax;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMax;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONID", type="string", length=12, nullable=true)
     */
    private $regionid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTRY_DATE", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=256, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PARKING", type="string", length=1, nullable=true)
     */
    private $isParking;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FURNITURE", type="string", length=1, nullable=true)
     */
    private $isFurniture;

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
     * @ORM\Column(name="MARKET", type="string", length=64, nullable=true)
     */
    private $market;

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
     * @ORM\Column(name="OBJECT_TYPE", type="string", length=128, nullable=true)
     */
    private $objectType;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=128, nullable=true)
     */
    private $preparedness;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=12, nullable=true)
     */
    private $direction;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_MKAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToMkad;

    /**
     * @var float
     *
     * @ORM\Column(name="BEDROOMS", type="float", precision=53, scale=0, nullable=true)
     */
    private $bedrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_TIMBERLAND", type="string", length=1, nullable=true)
     */
    private $isTimberland;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRYID", type="string", length=12, nullable=true)
     */
    private $industryid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=32, nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATING", type="string", length=128, nullable=true)
     */
    private $decorating;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_AREA", type="string", length=128, nullable=true)
     */
    private $kfArea;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTRICTID", type="string", length=12, nullable=true)
     */
    private $districtid;

    /**
     * @var string
     *
     * @ORM\Column(name="WAREHOUSE_TYPE", type="string", length=64, nullable=true)
     */
    private $warehouseType;

    /**
     * @var float
     *
     * @ORM\Column(name="PALLET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $palletMin;

    /**
     * @var float
     *
     * @ORM\Column(name="PALLET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $palletMax;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_TYPE", type="string", length=256, nullable=true)
     */
    private $storageType;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_METHOD", type="string", length=256, nullable=true)
     */
    private $storageMethod;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_CITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToCity;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RAILWAY", type="string", length=1, nullable=true)
     */
    private $isRailway;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPERATURE", type="string", length=32, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LOCALRAILWAY", type="string", length=1, nullable=true)
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     * @ORM\Column(name="STREETID", type="string", length=12, nullable=true)
     */
    private $streetid;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="string", length=32, nullable=true)
     */
    private $fitOut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_EXPIRY", type="datetime", nullable=true)
     */
    private $leaseExpiry;


}
