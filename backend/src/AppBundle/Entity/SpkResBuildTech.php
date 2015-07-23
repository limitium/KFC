<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResBuildTech
 *
 * @ORM\Table(name="SPK_RES_BUILD_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RES_BUILD_TECH_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkResBuildTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="BUILDING_TYPE", type="string", length=256, nullable=true)
     */
    private $buildingType;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_CLASS", type="string", length=256, nullable=true)
     */
    private $buildingClass;

    /**
     * @var string
     *
     * @ORM\Column(name="PROGRESS", type="string", length=256, nullable=true)
     */
    private $progress;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_START_QUARTER", type="string", length=32, nullable=true)
     */
    private $buildingStartQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILDING_START_YEAR", type="smallint", nullable=true)
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_END_QUARTER", type="string", length=32, nullable=true)
     */
    private $buildingEndQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILDING_END_YEAR", type="smallint", nullable=true)
     */
    private $buildingEndYear;

    /**
     * @var string
     *
     * @ORM\Column(name="ARCHITECTURE_STYLE", type="string", length=64, nullable=true)
     */
    private $architectureStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSTRUCTION", type="string", length=256, nullable=true)
     */
    private $construction;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $livingArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="APARTMENTS_COUNT", type="smallint", nullable=true)
     */
    private $apartmentsCount;

    /**
     * @var float
     *
     * @ORM\Column(name="APARTMENT_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $apartmentAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="APARTMENT_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $apartmentAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OSSATURE", type="string", length=64, nullable=true)
     */
    private $ossature;

    /**
     * @var string
     *
     * @ORM\Column(name="OVERLAP", type="string", length=64, nullable=true)
     */
    private $overlap;

    /**
     * @var string
     *
     * @ORM\Column(name="OUTDOOR_WALL", type="string", length=64, nullable=true)
     */
    private $outdoorWall;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREYS_COUNT_MIN", type="smallint", nullable=true)
     */
    private $storeysCountMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREYS_COUNT_MAX", type="smallint", nullable=true)
     */
    private $storeysCountMax;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeightMax;

    /**
     * @var string
     *
     * @ORM\Column(name="PENTHOUSE", type="string", length=1, nullable=true)
     */
    private $penthouse;

    /**
     * @var float
     *
     * @ORM\Column(name="PENTHOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $penthouseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="PENTHOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $penthouseAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="TOWNHOUSE", type="string", length=1, nullable=true)
     */
    private $townhouse;

    /**
     * @var float
     *
     * @ORM\Column(name="TOWNHOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $townhouseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="TOWNHOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $townhouseAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="LIFTS", type="string", length=32, nullable=true)
     */
    private $lifts;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING", type="string", length=32, nullable=true)
     */
    private $planning;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOWS", type="string", length=128, nullable=true)
     */
    private $windows;

    /**
     * @var string
     *
     * @ORM\Column(name="TERRITORY", type="string", length=64, nullable=true)
     */
    private $territory;

    /**
     * @var float
     *
     * @ORM\Column(name="TERRITORY_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $territoryArea;

    /**
     * @var string
     *
     * @ORM\Column(name="PERMISSION", type="string", length=1, nullable=true)
     */
    private $permission;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_CONTRACT", type="string", length=1, nullable=true)
     */
    private $leaseContract;

    /**
     * @var string
     *
     * @ORM\Column(name="OUT_BUY_CONTRACT", type="string", length=1, nullable=true)
     */
    private $outBuyContract;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENT_CONTRACT", type="string", length=1, nullable=true)
     */
    private $investmentContract;

    /**
     * @var integer
     *
     * @ORM\Column(name="FOR_LEASE", type="smallint", nullable=true)
     */
    private $forLease;

    /**
     * @var integer
     *
     * @ORM\Column(name="FOR_SALE", type="smallint", nullable=true)
     */
    private $forSale;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=1024, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=1024, nullable=true)
     */
    private $commentsEng;

    /**
     * @var float
     *
     * @ORM\Column(name="UNDERGROUND_PARKING", type="float", precision=53, scale=0, nullable=true)
     */
    private $undergroundParking;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=512, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMBER_OF_FLOORS", type="string", length=32, nullable=true)
     */
    private $numberOfFloors;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY_HOUSE", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $currencyHouse;

    /**
     * @var string
     *
     * @ORM\Column(name="ONLYSTREET", type="string", length=1, nullable=true)
     */
    private $onlystreet;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD", type="integer", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENT_PROJECT", type="string", length=1, nullable=true)
     */
    private $investmentProject;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_FEE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfFee;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_LANDLORD", type="string", length=24, nullable=true)
     */
    private $categoryLandlord;


}
