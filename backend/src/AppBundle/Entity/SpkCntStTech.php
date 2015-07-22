<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntStTech
 *
 * @ORM\Table(name="SPK_CNT_ST_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_ST_TECH_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkCntStTech
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
     * @ORM\Column(name="HOUSE_TYPES", type="string", length=128, nullable=true)
     */
    private $houseTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_MATERIALS", type="string", length=64, nullable=true)
     */
    private $houseMaterials;

    /**
     * @var integer
     *
     * @ORM\Column(name="STANDART_DESIGN_COUNT", type="smallint", nullable=true)
     */
    private $standartDesignCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="HOUSE_COUNT", type="smallint", nullable=true)
     */
    private $houseCount;

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
     * @ORM\Column(name="LAND_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaMax;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

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
     * @var integer
     *
     * @ORM\Column(name="COTTAGE_COUNT", type="smallint", nullable=true)
     */
    private $cottageCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="TOWNHOUSE_COUNT", type="smallint", nullable=true)
     */
    private $townhouseCount;

    /**
     * @var string
     *
     * @ORM\Column(name="SEWERAGE", type="string", length=32, nullable=true)
     */
    private $sewerage;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="WATER", type="string", length=32, nullable=true)
     */
    private $water;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=256, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=256, nullable=true)
     */
    private $commentsEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTIMATED_HOUSE_COUNT", type="smallint", nullable=true)
     */
    private $estimatedHouseCount;

    /**
     * @var float
     *
     * @ORM\Column(name="HOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $houseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="HOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $houseAreaMax;

    /**
     * @var float
     *
     * @ORM\Column(name="VERY_LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $veryLandArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_COTTAGE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaCottageMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_COTTAGE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaCottageMax;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_TOWNHOUSE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaTownhouseMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_TOWNHOUSE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaTownhouseMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=1, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLASS", type="string", length=16, nullable=true)
     */
    private $kfClass;

    /**
     * @var string
     *
     * @ORM\Column(name="THIS_PROJECT", type="string", length=1, nullable=true)
     */
    private $thisProject;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=256, nullable=true)
     */
    private $market;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_LANDLORD", type="string", length=24, nullable=true)
     */
    private $categoryLandlord;


}
