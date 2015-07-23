<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBkTech
 *
 * @ORM\Table(name="SPK_IND_BK_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_BK_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_IND_BK_TECH_9_83531381__K1_21", columns={"SPK_PROPERTYID", "FREE_STORAGE_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_9_83531381__K21_K1", columns={"FREE_STORAGE_AREA", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_9_83531381__K21", columns={"FREE_STORAGE_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K1_16_21_22_25", columns={"SPK_PROPERTYID", "INDUSTRIAL_AREA", "FREE_STORAGE_AREA", "FREE_OFFICE_AREA", "MEZONIN_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K1_16_21_22_23_25", columns={"SPK_PROPERTYID", "INDUSTRIAL_AREA", "FREE_STORAGE_AREA", "FREE_OFFICE_AREA", "ADDITIONAL_AREA", "MEZONIN_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K15", columns={"TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K1_K15", columns={"SPK_PROPERTYID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K15_K1", columns={"TOTAL_AREA", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_IND_BK_TECH_5_83531381__K1_14_15_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_31_32_33_34_35_36_37_38_39_40_41", columns={"SPK_PROPERTYID", "CLASS", "TOTAL_AREA", "INDUSTRIAL_AREA", "STORAGE_AREA", "OFFICE_AREA", "GROUND_AREA", "LAND_AREA", "FREE_STORAGE_AREA", "FREE_OFFICE_AREA", "ADDITIONAL_AREA", "BOCK_TYPE", "MEZONIN_AREA", "GOODS", "AVAILABLE_PALETOMEST", "TOTAL_AREA_PALETOMEST", "AVAILABLE_AREA", "AVAILABLE_AREA_M3", "TOTAL_AREA_M3", "AVAILABLE_AREA_MASS", "TOTAL_AREA_MASS", "PALLET_TYPE", "TEMPERATURE_TYPE", "MEZONIN_STORAGE", "STORAGE_TYPE", "STORAGE_METHOD", "PANDUS", "PANDUS_NEAR", "TPL_SERVICES"})})
 * @ORM\Entity
 */
class SpkIndBkTech
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
     * @ORM\Column(name="CEILLING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceillingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="FLOOR_TYPE", type="string", length=64, nullable=true)
     */
    private $floorType;

    /**
     * @var float
     *
     * @ORM\Column(name="FLOOR_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $floorHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="FLOOR_WEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $floorWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="COLUMN_GRID", type="string", length=32, nullable=true)
     */
    private $columnGrid;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="text", length=16, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="text", length=16, nullable=true)
     */
    private $commentsEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREY", type="smallint", nullable=true)
     */
    private $storey;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASS", type="string", length=8, nullable=true)
     */
    private $class;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="STORAGE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $storageArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="GROUND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $groundArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_STORAGE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeStorageArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeOfficeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="ADDITIONAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $additionalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BOCK_TYPE", type="string", length=32, nullable=true)
     */
    private $bockType;

    /**
     * @var float
     *
     * @ORM\Column(name="MEZONIN_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $mezoninArea;

    /**
     * @var string
     *
     * @ORM\Column(name="GOODS", type="string", length=128, nullable=true)
     */
    private $goods;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABLE_PALETOMEST", type="float", precision=53, scale=0, nullable=true)
     */
    private $availablePaletomest;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA_PALETOMEST", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalAreaPaletomest;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABLE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $availableArea;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABLE_AREA_M3", type="float", precision=53, scale=0, nullable=true)
     */
    private $availableAreaM3;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA_M3", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalAreaM3;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABLE_AREA_MASS", type="float", precision=53, scale=0, nullable=true)
     */
    private $availableAreaMass;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA_MASS", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalAreaMass;

    /**
     * @var string
     *
     * @ORM\Column(name="PALLET_TYPE", type="string", length=128, nullable=true)
     */
    private $palletType;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPERATURE_TYPE", type="string", length=32, nullable=true)
     */
    private $temperatureType;

    /**
     * @var string
     *
     * @ORM\Column(name="MEZONIN_STORAGE", type="string", length=1, nullable=true)
     */
    private $mezoninStorage;

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
     * @var string
     *
     * @ORM\Column(name="PANDUS", type="string", length=1, nullable=true)
     */
    private $pandus;

    /**
     * @var string
     *
     * @ORM\Column(name="PANDUS_NEAR", type="string", length=1, nullable=true)
     */
    private $pandusNear;

    /**
     * @var string
     *
     * @ORM\Column(name="TPL_SERVICES", type="string", length=256, nullable=true)
     */
    private $tplServices;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_CATEGORY", type="string", length=256, nullable=true)
     */
    private $landCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_USETYPE", type="string", length=256, nullable=true)
     */
    private $landUsetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERM_OF_LEASE", type="smallint", nullable=true)
     */
    private $termOfLease;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVIDED", type="string", length=1, nullable=true)
     */
    private $divided;

    /**
     * @var string
     *
     * @ORM\Column(name="COORDINATE", type="string", length=512, nullable=true)
     */
    private $coordinate;


}
