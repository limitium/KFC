<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScTech
 *
 * @ORM\Table(name="SPK_RET_SC_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_SC_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RET_SC_TECH_7_610817238__K1_7", columns={"SPK_PROPERTYID", "TRADE_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_SC_TECH_7_610817238__K1_6_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_28_29_30_31_32_33_34", columns={"SPK_PROPERTYID", "TOTAL_AREA", "TRADE_AREA", "LEASE_AREA", "USE_TRADE_AREA", "OFFICE_AREA", "INDUSTRIAL_AREA", "UNDERGROUND_AREA", "FREE_AREA", "LAND_AREA", "DEVELOPMENT_AREA", "BUILDING_START_YEAR", "BUILDING_START_NOTE", "PLANNING_STARTUP_YEAR", "STRARTUP_YEAR", "DATE_OPEN_YEAR", "DATE_OPEN_NOTE", "RECONSTRUCTION_BEGIN_YEAR", "RECONSTRUCTION_BEGIN_NOTE", "RECONSTRUCTION_END_YEAR", "RECONSTRUCTION_END_NOTE", "PLANNING_STARTUP_QUARTER", "BUILDING_STAGE", "HOTEL_AREA", "RESIDENTIAL_AREA", "EXHIBITION_AREA", "PROF_TC", "EXP_INCLUDED"}), @ORM\Index(name="_dta_index_SPK_RET_SC_TECH_5_610817238__K1_6_8", columns={"SPK_PROPERTYID", "TOTAL_AREA", "LEASE_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_SC_TECH_5_610817238__K1_6_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_28_29_30_31_32_33_34_35_41_", columns={"SPK_PROPERTYID", "TOTAL_AREA", "TRADE_AREA", "LEASE_AREA", "USE_TRADE_AREA", "OFFICE_AREA", "INDUSTRIAL_AREA", "UNDERGROUND_AREA", "FREE_AREA", "LAND_AREA", "DEVELOPMENT_AREA", "BUILDING_START_YEAR", "BUILDING_START_NOTE", "PLANNING_STARTUP_YEAR", "STRARTUP_YEAR", "DATE_OPEN_YEAR", "DATE_OPEN_NOTE", "RECONSTRUCTION_BEGIN_YEAR", "RECONSTRUCTION_BEGIN_NOTE", "RECONSTRUCTION_END_YEAR", "RECONSTRUCTION_END_NOTE", "PLANNING_STARTUP_QUARTER", "BUILDING_STAGE", "HOTEL_AREA", "RESIDENTIAL_AREA", "EXHIBITION_AREA", "PROF_TC", "EXP_INCLUDED", "STOREYS", "SHOP_NAME", "SALE_AREA", "FIRST_LINE", "WINDOWS"})})
 * @ORM\Entity
 */
class SpkRetScTech
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
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var float
     *
     * @ORM\Column(name="USE_TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $useTradeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="UNDERGROUND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $undergroundArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="DEVELOPMENT_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $developmentArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILDING_START_YEAR", type="smallint", nullable=true)
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_START_NOTE", type="string", length=64, nullable=true)
     */
    private $buildingStartNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLANNING_STARTUP_YEAR", type="smallint", nullable=true)
     */
    private $planningStartupYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="STRARTUP_YEAR", type="smallint", nullable=true)
     */
    private $strartupYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATE_OPEN_YEAR", type="smallint", nullable=true)
     */
    private $dateOpenYear;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_OPEN_NOTE", type="string", length=64, nullable=true)
     */
    private $dateOpenNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="RECONSTRUCTION_BEGIN_YEAR", type="smallint", nullable=true)
     */
    private $reconstructionBeginYear;

    /**
     * @var string
     *
     * @ORM\Column(name="RECONSTRUCTION_BEGIN_NOTE", type="string", length=64, nullable=true)
     */
    private $reconstructionBeginNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="RECONSTRUCTION_END_YEAR", type="smallint", nullable=true)
     */
    private $reconstructionEndYear;

    /**
     * @var string
     *
     * @ORM\Column(name="RECONSTRUCTION_END_NOTE", type="string", length=64, nullable=true)
     */
    private $reconstructionEndNote;

    /**
     * @var float
     *
     * @ORM\Column(name="RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $rate;

    /**
     * @var float
     *
     * @ORM\Column(name="ENTERTAINMENT_TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $entertainmentTotalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING_STARTUP_QUARTER", type="string", length=32, nullable=true)
     */
    private $planningStartupQuarter;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_STAGE", type="string", length=128, nullable=true)
     */
    private $buildingStage;

    /**
     * @var float
     *
     * @ORM\Column(name="HOTEL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $hotelArea;

    /**
     * @var float
     *
     * @ORM\Column(name="RESIDENTIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $residentialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="EXHIBITION_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $exhibitionArea;

    /**
     * @var string
     *
     * @ORM\Column(name="PROF_TC", type="string", length=1, nullable=true)
     */
    private $profTc;

    /**
     * @var string
     *
     * @ORM\Column(name="EXP_INCLUDED", type="string", length=1, nullable=true)
     */
    private $expIncluded;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREYS", type="smallint", nullable=true)
     */
    private $storeys;

    /**
     * @var float
     *
     * @ORM\Column(name="BASEMENT_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $basementArea;

    /**
     * @var float
     *
     * @ORM\Column(name="CAP_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $capArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FIRST_FLOOR_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $firstFloorArea;

    /**
     * @var float
     *
     * @ORM\Column(name="SECONF_FLOOR_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $seconfFloorArea;

    /**
     * @var float
     *
     * @ORM\Column(name="ENTRESOL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $entresolArea;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOP_NAME", type="string", length=128, nullable=true)
     */
    private $shopName;

    /**
     * @var float
     *
     * @ORM\Column(name="SALE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $saleArea;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRST_LINE", type="string", length=1, nullable=true)
     */
    private $firstLine;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOWS", type="string", length=1, nullable=true)
     */
    private $windows;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="TECH_COMMENTS", type="string", length=1024, nullable=true)
     */
    private $techComments;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_TYPE", type="string", length=128, nullable=true)
     */
    private $houseType;


}
