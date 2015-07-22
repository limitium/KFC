<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndObjTech
 *
 * @ORM\Table(name="SPK_IND_OBJ_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_OBJ_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_9_577437131__K1_K44_K43", columns={"SPK_PROPERTYID", "COMPLETED_YEAR", "COMPLETED_QUATER"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_9_577437131__K44_K43_1", columns={"COMPLETED_YEAR", "COMPLETED_QUATER", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_c_9_577437131__K44_K43", columns={"COMPLETED_YEAR", "COMPLETED_QUATER"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_5_577437131__K1_7_14", columns={"SPK_PROPERTYID", "TOTAL_AREA", "FREE_STORAGE_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_5_577437131__K1_7_12_14", columns={"SPK_PROPERTYID", "TOTAL_AREA", "LAND_AREA", "FREE_STORAGE_AREA"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_5_577437131__K1_6_8_9_10_11_12_16_37_38_43_44_48_49", columns={"SPK_PROPERTYID", "CLASS", "INDUSTRIAL_AREA", "STORAGE_AREA", "OFFICE_AREA", "GROUND_AREA", "LAND_AREA", "ADDITIONAL_AREA", "MEZONIN_AREA", "BUILDING_TYPE", "COMPLETED_QUATER", "COMPLETED_YEAR", "COMPLETION_STAGE", "COMPLETION_DATE"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_TECH_5_577437131__K1_43_44", columns={"SPK_PROPERTYID", "COMPLETED_QUATER", "COMPLETED_YEAR"})})
 * @ORM\Entity
 */
class SpkIndObjTech
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
     * @var string
     *
     * @ORM\Column(name="LAND_TARGET", type="string", length=32, nullable=true)
     */
    private $landTarget;

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
     * @var integer
     *
     * @ORM\Column(name="STOREYS", type="smallint", nullable=true)
     */
    private $storeys;

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
     * @var integer
     *
     * @ORM\Column(name="LIFTS", type="smallint", nullable=true)
     */
    private $lifts;

    /**
     * @var float
     *
     * @ORM\Column(name="LIFTS_WEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $liftsWeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOCKS", type="smallint", nullable=true)
     */
    private $docks;

    /**
     * @var integer
     *
     * @ORM\Column(name="GATES", type="smallint", nullable=true)
     */
    private $gates;

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
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var float
     *
     * @ORM\Column(name="TEMPERATURE", type="float", precision=53, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVIDER", type="string", length=128, nullable=true)
     */
    private $provider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTRY_DATE", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_DOCK", type="string", length=32, nullable=true)
     */
    private $loadUnloadDock;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABILITY_MKAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $availabilityMkad;

    /**
     * @var string
     *
     * @ORM\Column(name="AIRPORT", type="string", length=32, nullable=true)
     */
    private $airport;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABILITY_AIRPORT", type="float", precision=53, scale=0, nullable=true)
     */
    private $availabilityAirport;

    /**
     * @var float
     *
     * @ORM\Column(name="MEZONIN_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $mezoninArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_TYPE", type="string", length=128, nullable=true)
     */
    private $buildingType;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeTotalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_MEZZANINE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeMezzanineArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeIndustrialArea;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPER", type="string", length=32, nullable=true)
     */
    private $temper;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETED_QUATER", type="integer", nullable=true)
     */
    private $completedQuater;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETED_YEAR", type="integer", nullable=true)
     */
    private $completedYear;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCKS_TYPE", type="string", length=128, nullable=true)
     */
    private $docksType;

    /**
     * @var string
     *
     * @ORM\Column(name="GATES_TYPE", type="string", length=128, nullable=true)
     */
    private $gatesType;

    /**
     * @var float
     *
     * @ORM\Column(name="NENUZHNOE_POLE", type="float", precision=53, scale=0, nullable=true)
     */
    private $nenuzhnoePole;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLETION_STAGE", type="string", length=512, nullable=true)
     */
    private $completionStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="COMPLETION_DATE", type="datetime", nullable=true)
     */
    private $completionDate;


}
