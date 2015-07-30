<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfIndCmpTech
 *
 * @ORM\Table(name="KF_IND_CMP_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_IND_CMP_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_IND_CMP_TECH_5_397960494__K1_K6_7_8_9_10_11_12_13_14_15_30_31_32_35", columns={"SPK_PROPERTYID", "SECCODEID", "CLASS", "FACT_AREA", "FORECAST_AREA", "LAND_AREA", "TEMPERATURE", "MESONIN_AREA", "OFFICE_AREA", "TOTAL_AREA", "MIN_BLOCK_SQUARE", "DISTANCEFROMCITY", "COMPLEX_TYPE", "DIRECTION", "IS_LISTING"}), @ORM\Index(name="_dta_index_KF_IND_CMP_TECH_5_397960494__K6_K1_7_8_9_10_11_12_13_14_15_30_31_32_35", columns={"SECCODEID", "SPK_PROPERTYID", "CLASS", "FACT_AREA", "FORECAST_AREA", "LAND_AREA", "TEMPERATURE", "MESONIN_AREA", "OFFICE_AREA", "TOTAL_AREA", "MIN_BLOCK_SQUARE", "DISTANCEFROMCITY", "COMPLEX_TYPE", "DIRECTION", "IS_LISTING"}), @ORM\Index(name="_dta_index_KF_IND_CMP_TECH_c_5_397960494__K6_K1", columns={"SECCODEID", "SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfIndCmpTech
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASS", type="string", length=8, nullable=true)
     */
    private $class;

    /**
     * @var float
     *
     * @ORM\Column(name="FACT_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $factArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FORECAST_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $forecastArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TEMPERATURE", type="float", precision=53, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var float
     *
     * @ORM\Column(name="MESONIN_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $mesoninArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="MIN_BLOCK_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $minBlockSquare;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOCKS", type="integer", nullable=true)
     */
    private $docks;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCKS_TYPE", type="string", length=128, nullable=true)
     */
    private $docksType;

    /**
     * @var integer
     *
     * @ORM\Column(name="GATES", type="integer", nullable=true)
     */
    private $gates;

    /**
     * @var string
     *
     * @ORM\Column(name="GATES_TYPE", type="string", length=128, nullable=true)
     */
    private $gatesType;

    /**
     * @var float
     *
     * @ORM\Column(name="PARKING_INDEX_CARS", type="float", precision=53, scale=0, nullable=true)
     */
    private $parkingIndexCars;

    /**
     * @var float
     *
     * @ORM\Column(name="PARKING_INDEX_TRUCKS", type="float", precision=53, scale=0, nullable=true)
     */
    private $parkingIndexTrucks;

    /**
     * @var string
     *
     * @ORM\Column(name="PARK_TYPE_CARS", type="string", length=128, nullable=true)
     */
    private $parkTypeCars;

    /**
     * @var string
     *
     * @ORM\Column(name="PARK_TYPE_TRUCKS", type="string", length=128, nullable=true)
     */
    private $parkTypeTrucks;

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
     * @var string
     *
     * @ORM\Column(name="COMMENTS_PARKING", type="text", length=16, nullable=true)
     */
    private $commentsParking;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPER", type="string", length=32, nullable=true)
     */
    private $temper;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCEFROMCITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $distancefromcity;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_TYPE", type="string", length=128, nullable=true)
     */
    private $complexType;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=64, nullable=true)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="SHARE_ADDRESS", type="string", length=1, nullable=true)
     */
    private $shareAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="SHARE_NAME", type="string", length=1, nullable=true)
     */
    private $shareName;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LISTING", type="string", length=1, nullable=true)
     */
    private $isListing;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILLING_HEIGHT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceillingHeightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILLING_HEIGHT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceillingHeightMax;


}
