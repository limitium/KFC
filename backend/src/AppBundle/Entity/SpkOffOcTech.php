<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcTech
 *
 * @ORM\Table(name="SPK_OFF_OC_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_OC_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_10_11", columns={"SPK_PROPERTYID", "TOTAL_AREA", "LEASE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_7_8_9_10_41_42", columns={"SPK_PROPERTYID", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "COMPL_YEAR", "COMPL_QUARTER"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K7_K1_8_9_10_41_42", columns={"STOREYS_COUNT_MIN", "SPK_PROPERTYID", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "COMPL_YEAR", "COMPL_QUARTER"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K7_8_9_10_41_42", columns={"STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "COMPL_YEAR", "COMPL_QUARTER"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_7_8_9_10_12_41", columns={"SPK_PROPERTYID", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "FREE_AREA", "COMPL_YEAR"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_7_8_9_10_12_41_42", columns={"SPK_PROPERTYID", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "FREE_AREA", "COMPL_YEAR", "COMPL_QUARTER"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_6_7_8_9_10_11_12_13_14_15_16_17_18_33_34_37_40_41_42_45_46_47_48_49_50_51_53_56_57", columns={"SPK_PROPERTYID", "BUILDING_TYPE", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "USEFUL_AREA", "OFFICE_AREA", "INDUSTRIAL_AREA", "RETAIL_AREA", "LIVING_AREA", "LEASE_AREA_MIN", "RINGS", "KF_DISTRICT", "LAND_AREA", "ACTUALITY", "COMPL_YEAR", "COMPL_QUARTER", "VACANCY_RATE", "HOTEL_AREA", "NOT_IN_LIST", "LISTING", "FREE_SALE_AREA", "MREF_CLASS", "EXPORT_SALE", "ORD_LISTING", "LAST_FREE_AREA_SALE", "Last_free_area_lease"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_7_8_11_12_49", columns={"SPK_PROPERTYID", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "LEASE_AREA", "FREE_AREA", "FREE_SALE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_19_20_21_22_23_24_25_26_27_28_29_30_31_32_35_36_38_39_43_44_54_55", columns={"SPK_PROPERTYID", "LIFT_COUNT", "LIFT_DESCRIPTION", "LIFT_WEIGHT", "OVERLAP_WEIGHT", "CEILING_HEIGHT_MIN", "CEILING_HEIGHT_MAX", "VENTILATION", "ENERGY_CATEGORY", "ELECTRICITY", "PROVIDER", "PHONE_LINE_COUNT", "COMMENTS_RUS", "COMMENTS_ENG", "FLOOR_TYPE", "PLANNING", "STOREY_DEEPNESS", "STEP_ACCESSIBILITY", "COLUMN_STEP", "MIN_FLOOR_PLATE", "MAX_FLOOR_PLATE", "TRANSPORT_ACCESSIBILITY", "SHUTTLE_BUS"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_19_21_22_23_24_27_36_43_44", columns={"SPK_PROPERTYID", "LIFT_COUNT", "LIFT_WEIGHT", "OVERLAP_WEIGHT", "CEILING_HEIGHT_MIN", "CEILING_HEIGHT_MAX", "ELECTRICITY", "STOREY_DEEPNESS", "MIN_FLOOR_PLATE", "MAX_FLOOR_PLATE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_10_11_52", columns={"SPK_PROPERTYID", "TOTAL_AREA", "LEASE_AREA", "COST_NOT_PUBLISH"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_7_8_9_10_11_12_41_42_49", columns={"SPK_PROPERTYID", "STOREYS_COUNT_MIN", "STOREYS_COUNT_MAX", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "COMPL_YEAR", "COMPL_QUARTER", "FREE_SALE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K12_K9_K1", columns={"FREE_AREA", "KF_CLASS", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_K12_K9", columns={"SPK_PROPERTYID", "FREE_AREA", "KF_CLASS"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_c_5_7007106__K9_K12", columns={"KF_CLASS", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_9_10_11_12_52", columns={"SPK_PROPERTYID", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "COST_NOT_PUBLISH"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_9", columns={"SPK_PROPERTYID", "KF_CLASS"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_10_11_12_33_34_41_42", columns={"SPK_PROPERTYID", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "RINGS", "KF_DISTRICT", "COMPL_YEAR", "COMPL_QUARTER"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_TECH_5_7007106__K1_11_12", columns={"SPK_PROPERTYID", "LEASE_AREA", "FREE_AREA"})})
 * @ORM\Entity
 */
class SpkOffOcTech
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
     * @var integer
     *
     * @ORM\Column(name="STOREYS_COUNT_MIN", type="smallint", nullable=true)
     */
    private $storeysCountMin;

    /**
     * @var string
     *
     * @ORM\Column(name="STOREYS_COUNT_MAX", type="string", length=32, nullable=true)
     */
    private $storeysCountMax;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLASS", type="string", length=16, nullable=true)
     */
    private $kfClass;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="USEFUL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $usefulArea;

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
     * @ORM\Column(name="RETAIL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $retailArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $livingArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseAreaMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="LIFT_COUNT", type="smallint", nullable=true)
     */
    private $liftCount;

    /**
     * @var string
     *
     * @ORM\Column(name="LIFT_DESCRIPTION", type="string", length=64, nullable=true)
     */
    private $liftDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="LIFT_WEIGHT", type="smallint", nullable=true)
     */
    private $liftWeight;

    /**
     * @var float
     *
     * @ORM\Column(name="OVERLAP_WEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $overlapWeight;

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
     * @ORM\Column(name="VENTILATION", type="string", length=128, nullable=true)
     */
    private $ventilation;

    /**
     * @var string
     *
     * @ORM\Column(name="ENERGY_CATEGORY", type="string", length=128, nullable=true)
     */
    private $energyCategory;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVIDER", type="string", length=128, nullable=true)
     */
    private $provider;

    /**
     * @var integer
     *
     * @ORM\Column(name="PHONE_LINE_COUNT", type="smallint", nullable=true)
     */
    private $phoneLineCount;

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
     * @var string
     *
     * @ORM\Column(name="FLOOR_TYPE", type="string", length=128, nullable=true)
     */
    private $floorType;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=64, nullable=true)
     */
    private $rings;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_DISTRICT", type="string", length=128, nullable=true)
     */
    private $kfDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING", type="string", length=64, nullable=true)
     */
    private $planning;

    /**
     * @var float
     *
     * @ORM\Column(name="STOREY_DEEPNESS", type="float", precision=53, scale=0, nullable=true)
     */
    private $storeyDeepness;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="STEP_ACCESSIBILITY", type="smallint", nullable=true)
     */
    private $stepAccessibility;

    /**
     * @var string
     *
     * @ORM\Column(name="COLUMN_STEP", type="string", length=32, nullable=true)
     */
    private $columnStep;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUALITY", type="string", length=128, nullable=true)
     */
    private $actuality;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPL_YEAR", type="integer", nullable=true)
     */
    private $complYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPL_QUARTER", type="integer", nullable=true)
     */
    private $complQuarter;

    /**
     * @var float
     *
     * @ORM\Column(name="MIN_FLOOR_PLATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $minFloorPlate;

    /**
     * @var float
     *
     * @ORM\Column(name="MAX_FLOOR_PLATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $maxFloorPlate;

    /**
     * @var float
     *
     * @ORM\Column(name="VACANCY_RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $vacancyRate;

    /**
     * @var float
     *
     * @ORM\Column(name="HOTEL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $hotelArea;

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_IN_LIST", type="string", length=1, nullable=true)
     */
    private $notInList;

    /**
     * @var string
     *
     * @ORM\Column(name="LISTING", type="string", length=1, nullable=true)
     */
    private $listing;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_SALE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeSaleArea;

    /**
     * @var string
     *
     * @ORM\Column(name="MREF_CLASS", type="string", length=32, nullable=true)
     */
    private $mrefClass;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT_SALE", type="string", length=1, nullable=true)
     */
    private $exportSale;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_NOT_PUBLISH", type="string", length=1, nullable=true)
     */
    private $costNotPublish;

    /**
     * @var float
     *
     * @ORM\Column(name="ORD_LISTING", type="float", precision=53, scale=0, nullable=true)
     */
    private $ordListing;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORT_ACCESSIBILITY", type="string", length=128, nullable=true)
     */
    private $transportAccessibility;

    /**
     * @var string
     *
     * @ORM\Column(name="SHUTTLE_BUS", type="string", length=1, nullable=true)
     */
    private $shuttleBus;

    /**
     * @var float
     *
     * @ORM\Column(name="LAST_FREE_AREA_SALE", type="float", precision=53, scale=0, nullable=true)
     */
    private $lastFreeAreaSale;

    /**
     * @var float
     *
     * @ORM\Column(name="Last_free_area_lease", type="float", precision=53, scale=0, nullable=true)
     */
    private $lastFreeAreaLease;


}
