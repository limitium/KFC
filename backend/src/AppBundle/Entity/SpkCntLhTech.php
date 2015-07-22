<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntLhTech
 *
 * @ORM\Table(name="SPK_CNT_LH_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_LH_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_CNT_LH_TECH_5_560721050__K1_9", columns={"SPK_PROPERTYID", "LAND_AREA"}), @ORM\Index(name="_dta_index_SPK_CNT_LH_TECH_5_560721050__K1_6_7_8_9_10_11_28_29_31_32_33_36_40_41_42_43", columns={"SPK_PROPERTYID", "HOUSE_TYPE", "HOUSE_MATERIAL", "BUILD_YEAR", "LAND_AREA", "TOTAL_AREA", "LIVING_AREA", "STOREY_COUNT_MIN", "STOREY_COUNT_MAX", "ROOMS_COUNT", "BEDROOMS_COUNT", "BATHROOMS_COUNT", "LEASE_LAND_AREA", "FOUNDATION_MATERIAL", "LEVEL_COUNT", "COMMUNICATION", "FURNITURE_MAINVIEW"}), @ORM\Index(name="_dta_index_SPK_CNT_LH_TECH_5_560721050__K1_9_10", columns={"SPK_PROPERTYID", "LAND_AREA", "TOTAL_AREA"})})
 * @ORM\Entity
 */
class SpkCntLhTech
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
     * @ORM\Column(name="HOUSE_TYPE", type="string", length=32, nullable=true)
     */
    private $houseType;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_MATERIAL", type="string", length=32, nullable=true)
     */
    private $houseMaterial;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILD_YEAR", type="smallint", nullable=true)
     */
    private $buildYear;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

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
     * @var integer
     *
     * @ORM\Column(name="GARAGE", type="smallint", nullable=true)
     */
    private $garage;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOF_MATERIAL", type="string", length=32, nullable=true)
     */
    private $roofMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOWS_TYPE", type="string", length=32, nullable=true)
     */
    private $windowsType;

    /**
     * @var string
     *
     * @ORM\Column(name="WALL_MATERIAL", type="string", length=32, nullable=true)
     */
    private $wallMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION", type="string", length=32, nullable=true)
     */
    private $decoration;

    /**
     * @var string
     *
     * @ORM\Column(name="RELIEF", type="string", length=128, nullable=true)
     */
    private $relief;

    /**
     * @var string
     *
     * @ORM\Column(name="POOL", type="string", length=128, nullable=true)
     */
    private $pool;

    /**
     * @var string
     *
     * @ORM\Column(name="FOREST", type="string", length=32, nullable=true)
     */
    private $forest;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_DESIGN", type="string", length=128, nullable=true)
     */
    private $landDesign;

    /**
     * @var string
     *
     * @ORM\Column(name="FENCE", type="string", length=128, nullable=true)
     */
    private $fence;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_BUILDINGS", type="string", length=128, nullable=true)
     */
    private $additionalBuildings;

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
     * @ORM\Column(name="STOREY_COUNT_MIN", type="smallint", nullable=true)
     */
    private $storeyCountMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREY_COUNT_MAX", type="smallint", nullable=true)
     */
    private $storeyCountMax;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=64, nullable=true)
     */
    private $preparedness;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOMS_COUNT", type="smallint", nullable=true)
     */
    private $roomsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS_COUNT", type="smallint", nullable=true)
     */
    private $bedroomsCount;

    /**
     * @var float
     *
     * @ORM\Column(name="BATHROOMS_COUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $bathroomsCount;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=1, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=256, nullable=true)
     */
    private $market;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseLandArea;

    /**
     * @var string
     *
     * @ORM\Column(name="CEILING", type="string", length=256, nullable=true)
     */
    private $ceiling;

    /**
     * @var string
     *
     * @ORM\Column(name="GAS", type="string", length=256, nullable=true)
     */
    private $gas;

    /**
     * @var string
     *
     * @ORM\Column(name="PURPOSE", type="string", length=256, nullable=true)
     */
    private $purpose;

    /**
     * @var string
     *
     * @ORM\Column(name="FOUNDATION_MATERIAL", type="string", length=256, nullable=true)
     */
    private $foundationMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="LEVEL_COUNT", type="string", length=32, nullable=true)
     */
    private $levelCount;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMUNICATION", type="string", length=1000, nullable=true)
     */
    private $communication;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE_MAINVIEW", type="string", length=32, nullable=true)
     */
    private $furnitureMainview;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOW", type="string", length=64, nullable=true)
     */
    private $window;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=1, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_TYPE", type="string", length=128, nullable=true)
     */
    private $landType;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_LANDLORD", type="string", length=24, nullable=true)
     */
    private $categoryLandlord;


}
