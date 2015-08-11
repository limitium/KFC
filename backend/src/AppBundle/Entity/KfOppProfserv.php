<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppProfserv
 *
 * @ORM\Table(name="KF_OPP_PROFSERV", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_PROFSERV_PRIMARY", columns={"OPPORTUNITYID"})}, indexes={@ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K8", columns={"OPPORTUNITYID", "PROJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K8_K6_K9", columns={"OPPORTUNITYID", "PROJECTID", "SECCODEID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K8_1", columns={"PROJECTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K8_1_6_9", columns={"PROJECTID", "OPPORTUNITYID", "SECCODEID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_6_9", columns={"OPPORTUNITYID", "SECCODEID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K6_K9_K8", columns={"OPPORTUNITYID", "SECCODEID", "OBJECTID", "PROJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K26_K6_K27_K9_K8_K14_K15_K1_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"AREAID", "SECCODEID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "OPPORTUNITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K26_K6_K27_K9_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "AREAID", "SECCODEID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_6_7_8_9_10_11_12_13_14_15_16_17_19_20_21_22_23_24_25_26_27_28_31", columns={"OPPORTUNITYID", "SECCODEID", "INDUS_INCLUDEOPEX", "PROJECTID", "OBJECTID", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "REGIONID", "CITYID", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "AREAID", "PROFILEID", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K26_K27_K9_K8_K14_K15_K1_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "OPPORTUNITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_7_8_9_10_11_12_13_14_15_16_17_19_20_21_22_23_24_25_26_27_28_31", columns={"OPPORTUNITYID", "INDUS_INCLUDEOPEX", "PROJECTID", "OBJECTID", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "REGIONID", "CITYID", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "AREAID", "PROFILEID", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K26_K27_K9_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_9", columns={"OPPORTUNITYID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K8_K9", columns={"OPPORTUNITYID", "PROJECTID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K8_1_9", columns={"PROJECTID", "OPPORTUNITYID", "OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K9_K8", columns={"OPPORTUNITYID", "OBJECTID", "PROJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K9_K26_K6_K27_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "OBJECTID", "AREAID", "SECCODEID", "PROFILEID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1_K26_K6_K27_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OBJECTID", "OPPORTUNITYID", "AREAID", "SECCODEID", "PROFILEID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1", columns={"OBJECTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K14_K15_K1_11_12_19_20_22_23_25_28", columns={"OBJECTID", "REGIONID", "CITYID", "OPPORTUNITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_9_11_12_14_15_19_20_22_23_25_28", columns={"OPPORTUNITYID", "OBJECTID", "MARKET_SEGMENT", "NOTINDB", "REGIONID", "CITYID", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1_K14_K15_11_12_19_20_22_23_25_28", columns={"OBJECTID", "OPPORTUNITYID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K9_K14_K15_11_12_19_20_22_23_25_28", columns={"OPPORTUNITYID", "OBJECTID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1_K26_K27_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OBJECTID", "OPPORTUNITYID", "AREAID", "PROFILEID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K9_K26_K27_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "OBJECTID", "AREAID", "PROFILEID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1_K8", columns={"OBJECTID", "OPPORTUNITYID", "PROJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9", columns={"OBJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K8", columns={"PROJECTID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K6_K9_K14_K15_K1_11_12_19_20_22_23_25_28", columns={"SECCODEID", "OBJECTID", "REGIONID", "CITYID", "OPPORTUNITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K9_K1_K6_K14_K15_11_12_19_20_22_23_25_28", columns={"OBJECTID", "OPPORTUNITYID", "SECCODEID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K14_K6_K9_K15_11_12_19_20_22_23_25_28", columns={"OPPORTUNITYID", "REGIONID", "SECCODEID", "OBJECTID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K15_K1", columns={"CITYID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K15_K1_K6_K9_K14_11_12_19_20_22_23_25_28", columns={"CITYID", "OPPORTUNITYID", "SECCODEID", "OBJECTID", "REGIONID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_6_9_11_12_14_15_19_20_22_23_25_28", columns={"OPPORTUNITYID", "SECCODEID", "OBJECTID", "MARKET_SEGMENT", "NOTINDB", "REGIONID", "CITYID", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K14_K1_K6_K9_K15_11_12_19_20_22_23_25_28", columns={"REGIONID", "OPPORTUNITYID", "SECCODEID", "OBJECTID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K15_K6_K9_K14_11_12_19_20_22_23_25_28", columns={"OPPORTUNITYID", "CITYID", "SECCODEID", "OBJECTID", "REGIONID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K14_K1", columns={"REGIONID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K6_K9_K14_K15_11_12_19_20_22_23_25_28", columns={"OPPORTUNITYID", "SECCODEID", "OBJECTID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K9_K6_K14_K15_11_12_19_20_22_23_25_28", columns={"OPPORTUNITYID", "OBJECTID", "SECCODEID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K15", columns={"OPPORTUNITYID", "CITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K14", columns={"OPPORTUNITYID", "REGIONID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K15_K26_K27_K9_K8_K14_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "CITYID", "AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K26_K1", columns={"AREAID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K8_K1_K26_K27_K9_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"PROJECTID", "OPPORTUNITYID", "AREAID", "PROFILEID", "OBJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K26_K1_K27_K9_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"AREAID", "OPPORTUNITYID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K27_K26_K9_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "PROFILEID", "AREAID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K27_K1_K26_K9_K8_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"PROFILEID", "OPPORTUNITYID", "AREAID", "OBJECTID", "PROJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K27_K1", columns={"PROFILEID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K27", columns={"OPPORTUNITYID", "PROFILEID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K8_K26_K27_K9_K14_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "PROJECTID", "AREAID", "PROFILEID", "OBJECTID", "REGIONID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K15_K1_K26_K27_K9_K8_K14_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"CITYID", "OPPORTUNITYID", "AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "REGIONID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K26", columns={"OPPORTUNITYID", "AREAID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K14_K1_K26_K27_K9_K8_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"REGIONID", "OPPORTUNITYID", "AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K14_K26_K27_K9_K8_K15_7_10_11_12_13_16_17_19_20_21_22_23_24_25_28_31", columns={"OPPORTUNITYID", "REGIONID", "AREAID", "PROFILEID", "OBJECTID", "PROJECTID", "CITYID", "INDUS_INCLUDEOPEX", "CONSULTINGGROUP", "MARKET_SEGMENT", "NOTINDB", "REPORTFORM", "RESEARCHPERIODFROM", "RESEARCHPERIODTO", "VALSERVICES", "TARGET", "SUBTARGET", "ESTCOST", "PROJECT_STAGE", "PROJECT_SUBSTAGE", "OWNERSHIP", "INVSERVICES", "STORAGE_PERCENT"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K1_K6", columns={"OPPORTUNITYID", "SECCODEID"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K6_K1_K9_K14_K15_11_12_19_20_22_23_25_28", columns={"SECCODEID", "OPPORTUNITYID", "OBJECTID", "REGIONID", "CITYID", "MARKET_SEGMENT", "NOTINDB", "VALSERVICES", "TARGET", "ESTCOST", "PROJECT_STAGE", "OWNERSHIP", "INVSERVICES"}), @ORM\Index(name="_dta_index_KF_OPP_PROFSERV_5_1789965453__K6_K1", columns={"SECCODEID", "OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppProfserv
{
    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="INDUS_INCLUDEOPEX", type="string", length=1, nullable=true)
     */
    private $indusIncludeopex;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECTID", type="string", length=12, nullable=true)
     */
    private $projectid;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGGROUP", type="string", length=128, nullable=true)
     */
    private $consultinggroup;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_SEGMENT", type="string", length=256, nullable=true)
     */
    private $marketSegment;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTINDB", type="string", length=2048, nullable=true)
     */
    private $notindb;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTFORM", type="string", length=256, nullable=true)
     */
    private $reportform;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONID", type="string", length=12, nullable=true)
     */
    private $regionid;

    /**
     * @var string
     *
     * @ORM\Column(name="CITYID", type="string", length=12, nullable=true)
     */
    private $cityid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RESEARCHPERIODFROM", type="datetime", nullable=true)
     */
    private $researchperiodfrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RESEARCHPERIODTO", type="datetime", nullable=true)
     */
    private $researchperiodto;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECT_DESCRIPTION", type="text", length=16, nullable=true)
     */
    private $objectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="VALSERVICES", type="string", length=512, nullable=true)
     */
    private $valservices;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=512, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTARGET", type="string", length=512, nullable=true)
     */
    private $subtarget;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTCOST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $estcost;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_STAGE", type="string", length=256, nullable=true)
     */
    private $projectStage;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_SUBSTAGE", type="string", length=256, nullable=true)
     */
    private $projectSubstage;

    /**
     * @var string
     *
     * @ORM\Column(name="OWNERSHIP", type="string", length=128, nullable=true)
     */
    private $ownership;

    /**
     * @var string
     *
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=true)
     */
    private $areaid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="INVSERVICES", type="string", length=512, nullable=true)
     */
    private $invservices;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_CITY", type="string", length=128, nullable=true)
     */
    private $invCity;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_CITY_TYPE", type="string", length=32, nullable=true)
     */
    private $invCityType;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_PERCENT", type="string", length=1, nullable=true)
     */
    private $storagePercent;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppProfserv
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfOppProfserv
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfOppProfserv
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfOppProfserv
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfOppProfserv
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfOppProfserv
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set indusIncludeopex
     *
     * @param string $indusIncludeopex
     * @return KfOppProfserv
     */
    public function setIndusIncludeopex($indusIncludeopex)
    {
        $this->indusIncludeopex = $indusIncludeopex;

        return $this;
    }

    /**
     * Get indusIncludeopex
     *
     * @return string 
     */
    public function getIndusIncludeopex()
    {
        return $this->indusIncludeopex;
    }

    /**
     * Set projectid
     *
     * @param string $projectid
     * @return KfOppProfserv
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return string 
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set objectid
     *
     * @param string $objectid
     * @return KfOppProfserv
     */
    public function setObjectid($objectid)
    {
        $this->objectid = $objectid;

        return $this;
    }

    /**
     * Get objectid
     *
     * @return string 
     */
    public function getObjectid()
    {
        return $this->objectid;
    }

    /**
     * Set consultinggroup
     *
     * @param string $consultinggroup
     * @return KfOppProfserv
     */
    public function setConsultinggroup($consultinggroup)
    {
        $this->consultinggroup = $consultinggroup;

        return $this;
    }

    /**
     * Get consultinggroup
     *
     * @return string 
     */
    public function getConsultinggroup()
    {
        return $this->consultinggroup;
    }

    /**
     * Set marketSegment
     *
     * @param string $marketSegment
     * @return KfOppProfserv
     */
    public function setMarketSegment($marketSegment)
    {
        $this->marketSegment = $marketSegment;

        return $this;
    }

    /**
     * Get marketSegment
     *
     * @return string 
     */
    public function getMarketSegment()
    {
        return $this->marketSegment;
    }

    /**
     * Set notindb
     *
     * @param string $notindb
     * @return KfOppProfserv
     */
    public function setNotindb($notindb)
    {
        $this->notindb = $notindb;

        return $this;
    }

    /**
     * Get notindb
     *
     * @return string 
     */
    public function getNotindb()
    {
        return $this->notindb;
    }

    /**
     * Set reportform
     *
     * @param string $reportform
     * @return KfOppProfserv
     */
    public function setReportform($reportform)
    {
        $this->reportform = $reportform;

        return $this;
    }

    /**
     * Get reportform
     *
     * @return string 
     */
    public function getReportform()
    {
        return $this->reportform;
    }

    /**
     * Set regionid
     *
     * @param string $regionid
     * @return KfOppProfserv
     */
    public function setRegionid($regionid)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return string 
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set cityid
     *
     * @param string $cityid
     * @return KfOppProfserv
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid
     *
     * @return string 
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set researchperiodfrom
     *
     * @param \DateTime $researchperiodfrom
     * @return KfOppProfserv
     */
    public function setResearchperiodfrom($researchperiodfrom)
    {
        $this->researchperiodfrom = $researchperiodfrom;

        return $this;
    }

    /**
     * Get researchperiodfrom
     *
     * @return \DateTime 
     */
    public function getResearchperiodfrom()
    {
        return $this->researchperiodfrom;
    }

    /**
     * Set researchperiodto
     *
     * @param \DateTime $researchperiodto
     * @return KfOppProfserv
     */
    public function setResearchperiodto($researchperiodto)
    {
        $this->researchperiodto = $researchperiodto;

        return $this;
    }

    /**
     * Get researchperiodto
     *
     * @return \DateTime 
     */
    public function getResearchperiodto()
    {
        return $this->researchperiodto;
    }

    /**
     * Set objectDescription
     *
     * @param string $objectDescription
     * @return KfOppProfserv
     */
    public function setObjectDescription($objectDescription)
    {
        $this->objectDescription = $objectDescription;

        return $this;
    }

    /**
     * Get objectDescription
     *
     * @return string 
     */
    public function getObjectDescription()
    {
        return $this->objectDescription;
    }

    /**
     * Set valservices
     *
     * @param string $valservices
     * @return KfOppProfserv
     */
    public function setValservices($valservices)
    {
        $this->valservices = $valservices;

        return $this;
    }

    /**
     * Get valservices
     *
     * @return string 
     */
    public function getValservices()
    {
        return $this->valservices;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return KfOppProfserv
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set subtarget
     *
     * @param string $subtarget
     * @return KfOppProfserv
     */
    public function setSubtarget($subtarget)
    {
        $this->subtarget = $subtarget;

        return $this;
    }

    /**
     * Get subtarget
     *
     * @return string 
     */
    public function getSubtarget()
    {
        return $this->subtarget;
    }

    /**
     * Set estcost
     *
     * @param string $estcost
     * @return KfOppProfserv
     */
    public function setEstcost($estcost)
    {
        $this->estcost = $estcost;

        return $this;
    }

    /**
     * Get estcost
     *
     * @return string 
     */
    public function getEstcost()
    {
        return $this->estcost;
    }

    /**
     * Set projectStage
     *
     * @param string $projectStage
     * @return KfOppProfserv
     */
    public function setProjectStage($projectStage)
    {
        $this->projectStage = $projectStage;

        return $this;
    }

    /**
     * Get projectStage
     *
     * @return string 
     */
    public function getProjectStage()
    {
        return $this->projectStage;
    }

    /**
     * Set projectSubstage
     *
     * @param string $projectSubstage
     * @return KfOppProfserv
     */
    public function setProjectSubstage($projectSubstage)
    {
        $this->projectSubstage = $projectSubstage;

        return $this;
    }

    /**
     * Get projectSubstage
     *
     * @return string 
     */
    public function getProjectSubstage()
    {
        return $this->projectSubstage;
    }

    /**
     * Set ownership
     *
     * @param string $ownership
     * @return KfOppProfserv
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Get ownership
     *
     * @return string 
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Set areaid
     *
     * @param string $areaid
     * @return KfOppProfserv
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return KfOppProfserv
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set invservices
     *
     * @param string $invservices
     * @return KfOppProfserv
     */
    public function setInvservices($invservices)
    {
        $this->invservices = $invservices;

        return $this;
    }

    /**
     * Get invservices
     *
     * @return string 
     */
    public function getInvservices()
    {
        return $this->invservices;
    }

    /**
     * Set invCity
     *
     * @param string $invCity
     * @return KfOppProfserv
     */
    public function setInvCity($invCity)
    {
        $this->invCity = $invCity;

        return $this;
    }

    /**
     * Get invCity
     *
     * @return string 
     */
    public function getInvCity()
    {
        return $this->invCity;
    }

    /**
     * Set invCityType
     *
     * @param string $invCityType
     * @return KfOppProfserv
     */
    public function setInvCityType($invCityType)
    {
        $this->invCityType = $invCityType;

        return $this;
    }

    /**
     * Get invCityType
     *
     * @return string 
     */
    public function getInvCityType()
    {
        return $this->invCityType;
    }

    /**
     * Set storagePercent
     *
     * @param string $storagePercent
     * @return KfOppProfserv
     */
    public function setStoragePercent($storagePercent)
    {
        $this->storagePercent = $storagePercent;

        return $this;
    }

    /**
     * Get storagePercent
     *
     * @return string 
     */
    public function getStoragePercent()
    {
        return $this->storagePercent;
    }
}
