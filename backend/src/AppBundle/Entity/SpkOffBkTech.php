<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkTech
 *
 * @ORM\Table(name="SPK_OFF_BK_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_BK_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_c_5_214291823__K6", columns={"STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K8_K1", columns={"TOTAL_AREA", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K8", columns={"TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K1_K8", columns={"SPK_PROPERTYID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K1_6_8", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K1_K8_6", columns={"SPK_PROPERTYID", "TOTAL_AREA", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K6_1", columns={"STOREY_NUMBER", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_7_214291823__K1_K6", columns={"SPK_PROPERTYID", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K1_10", columns={"STOREY_NUMBER", "SPK_PROPERTYID", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_10", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_10", columns={"STOREY_NUMBER", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_10", columns={"SPK_PROPERTYID", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K1_7_8_9_10_20", columns={"STOREY_NUMBER", "SPK_PROPERTYID", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_7_8_9_10_20", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_7_8_9_10_20", columns={"STOREY_NUMBER", "KF_CLASS", "TOTAL_AREA", "LEASE_AREA", "FREE_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K8_K1_6", columns={"TOTAL_AREA", "SPK_PROPERTYID", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K8_6", columns={"TOTAL_AREA", "STOREY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K1_K8", columns={"STOREY_NUMBER", "SPK_PROPERTYID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K8", columns={"STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_11_12_13_14_15_16_17_18_19", columns={"STOREY_NUMBER", "FLOOR_TYPE", "CEILING_HEIGHT", "VENTILATION", "PHONE_LINE_COUNT", "TELECOMMUNICATION", "PROVIDER", "COMMENTS_RUS", "COMMENTS_ENG", "DECORATION"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_11_12_13_14_15_16_17_18_19", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "FLOOR_TYPE", "CEILING_HEIGHT", "VENTILATION", "PHONE_LINE_COUNT", "TELECOMMUNICATION", "PROVIDER", "COMMENTS_RUS", "COMMENTS_ENG", "DECORATION"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K1_11_12_13_14_15_16_17_18_19", columns={"STOREY_NUMBER", "SPK_PROPERTYID", "FLOOR_TYPE", "CEILING_HEIGHT", "VENTILATION", "PHONE_LINE_COUNT", "TELECOMMUNICATION", "PROVIDER", "COMMENTS_RUS", "COMMENTS_ENG", "DECORATION"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_8_10", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "FREE_AREA"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_8_20", columns={"STOREY_NUMBER", "TOTAL_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K6_K1_8_20", columns={"STOREY_NUMBER", "SPK_PROPERTYID", "TOTAL_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_8_20", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "STOREY_COUNT_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_TECH_5_214291823__K1_K6_8_10_20", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "FREE_AREA", "STOREY_COUNT_MAX"})})
 * @ORM\Entity
 */
class SpkOffBkTech
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
     * @ORM\Column(name="STOREY_NUMBER", type="smallint", nullable=true)
     */
    private $storeyNumber;

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
     * @var string
     *
     * @ORM\Column(name="FLOOR_TYPE", type="string", length=64, nullable=true)
     */
    private $floorType;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="VENTILATION", type="string", length=128, nullable=true)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="PHONE_LINE_COUNT", type="smallint", nullable=true)
     */
    private $phoneLineCount;

    /**
     * @var string
     *
     * @ORM\Column(name="TELECOMMUNICATION", type="string", length=128, nullable=true)
     */
    private $telecommunication;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVIDER", type="string", length=128, nullable=true)
     */
    private $provider;

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
     * @ORM\Column(name="DECORATION", type="string", length=64, nullable=true)
     */
    private $decoration;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREY_COUNT_MAX", type="smallint", nullable=true)
     */
    private $storeyCountMax;

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
     * @var integer
     *
     * @ORM\Column(name="COMPL_MONTH", type="integer", nullable=true)
     */
    private $complMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPL_DAY", type="integer", nullable=true)
     */
    private $complDay;


}
