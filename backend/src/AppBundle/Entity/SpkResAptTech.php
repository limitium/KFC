<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResAptTech
 *
 * @ORM\Table(name="SPK_RES_APT_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RES_APT_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_12", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "ROOMS_COUNT"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_28", columns={"SPK_PROPERTYID", "APARTMENT_TYPE"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_12_28", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "ROOMS_COUNT", "APARTMENT_TYPE"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_9_12_28", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "LIVING_AREA", "ROOMS_COUNT", "APARTMENT_TYPE"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_12_13_14_15_22_23_28_32_33", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "ROOMS_COUNT", "BEDROOMS_COUNT", "BATHROOMS_COUNT", "FURNITURE", "WINDOWS_TYPE", "DECORATION", "APARTMENT_TYPE", "CEILING_HEIGHT", "APP_COLOR"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_20_28", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "CAR_PLACE", "APARTMENT_TYPE"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7", columns={"SPK_PROPERTYID", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_7_8_9_12_20_28", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "LIVING_AREA", "ROOMS_COUNT", "CAR_PLACE", "APARTMENT_TYPE"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K8_K7_K1", columns={"TOTAL_AREA", "STOREY_NUMBER", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_K8_K7", columns={"SPK_PROPERTYID", "TOTAL_AREA", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RES_APT_TECH_5_1344059874__K1_K8_K7_12", columns={"SPK_PROPERTYID", "TOTAL_AREA", "STOREY_NUMBER", "ROOMS_COUNT"})})
 * @ORM\Entity
 */
class SpkResAptTech
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
     * @var integer
     *
     * @ORM\Column(name="STOREYS_COUNT", type="smallint", nullable=true)
     */
    private $storeysCount;

    /**
     * @var string
     *
     * @ORM\Column(name="STOREY_NUMBER", type="string", length=50, nullable=true)
     */
    private $storeyNumber;

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
     * @ORM\Column(name="FURNITURE", type="string", length=64, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_CONDITION", type="string", length=64, nullable=true)
     */
    private $specialCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="VIEWS", type="string", length=128, nullable=true)
     */
    private $views;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=512, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=128, nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="CAR_PLACE", type="smallint", nullable=true)
     */
    private $carPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="FLOOR_TYPE", type="string", length=64, nullable=true)
     */
    private $floorType;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOWS_TYPE", type="string", length=128, nullable=true)
     */
    private $windowsType;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION", type="string", length=64, nullable=true)
     */
    private $decoration;

    /**
     * @var string
     *
     * @ORM\Column(name="REPAIR_TYPE", type="string", length=64, nullable=true)
     */
    private $repairType;

    /**
     * @var string
     *
     * @ORM\Column(name="REPAIR_OLD", type="string", length=64, nullable=true)
     */
    private $repairOld;

    /**
     * @var string
     *
     * @ORM\Column(name="DESIGN", type="string", length=64, nullable=true)
     */
    private $design;

    /**
     * @var string
     *
     * @ORM\Column(name="WALLS", type="string", length=64, nullable=true)
     */
    private $walls;

    /**
     * @var string
     *
     * @ORM\Column(name="APARTMENT_TYPE", type="string", length=64, nullable=true)
     */
    private $apartmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=2048, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=1024, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING", type="string", length=64, nullable=true)
     */
    private $planning;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="APP_COLOR", type="float", precision=53, scale=0, nullable=true)
     */
    private $appColor;

    /**
     * @var string
     *
     * @ORM\Column(name="INCLUDE_PARKING", type="string", length=1, nullable=true)
     */
    private $includeParking;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD", type="smallint", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY", type="string", length=16, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_LANDLORD", type="string", length=24, nullable=true)
     */
    private $categoryLandlord;


}
