<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfProjects
 *
 * @ORM\Table(name="KF_PROJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROJECTS_PRIMARY", columns={"KF_PROJECTSID"})}, indexes={@ORM\Index(name="KF_SR_IX_CONTACTID_MANAGERID", columns={"CONTACTID", "MANAGERID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_12_21_34_38_50_51", columns={"KF_PROJECTSID", "STATUS", "CONSULTINGGROUP", "DATEOPENED", "PROJECT_NAME", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K6_K1", columns={"SECCODEID", "KF_PROJECTSID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K13_K7_K8", columns={"KF_PROJECTSID", "MANAGERID", "ACCOUNTID", "CONTACTID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K7_K1_K13", columns={"CONTACTID", "ACCOUNTID", "KF_PROJECTSID", "MANAGERID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K34_K28_K12_K18_K31_K3_K7_9_15_16_26", columns={"DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "ACCOUNTID", "OBJECTID", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K1_K13_K7", columns={"CONTACTID", "KF_PROJECTSID", "MANAGERID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K1_K34_K28_K13_K12_K18_K31_K3_K7_9_15_16_26", columns={"CONTACTID", "KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "ACCOUNTID", "OBJECTID", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K1_K13_K7_K9_K34_K28_K12_K18_K31_K3_15_16_26", columns={"CONTACTID", "KF_PROJECTSID", "MANAGERID", "ACCOUNTID", "OBJECTID", "DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K34_K28_K13_K12_K18_K31_K3_K7_K8_9_15_16_26", columns={"KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "ACCOUNTID", "CONTACTID", "OBJECTID", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K8_K1_K13_K9_K34_K28_K12_K18_K31_K3_15_16_26", columns={"ACCOUNTID", "CONTACTID", "KF_PROJECTSID", "MANAGERID", "OBJECTID", "DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K13_K7_K8_K9_K34_K28_K12_K18_K31_K3_15_16_26", columns={"KF_PROJECTSID", "MANAGERID", "ACCOUNTID", "CONTACTID", "OBJECTID", "DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K7_K1_K13_K9_K34_K28_K12_K18_K31_K3_15_16_26", columns={"CONTACTID", "ACCOUNTID", "KF_PROJECTSID", "MANAGERID", "OBJECTID", "DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K9_K34_K28_K12_K18_K31_K3_15_16_26", columns={"ACCOUNTID", "OBJECTID", "DATEOPENED", "PROJECTTYPE", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K8_K1_K13", columns={"ACCOUNTID", "CONTACTID", "KF_PROJECTSID", "MANAGERID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K8_K7_K9_K1_K34_K28_K13_K12_K18_K31_K3_15_16_26", columns={"CONTACTID", "ACCOUNTID", "OBJECTID", "KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K9_K8_K1_K34_K28_K13_K12_K18_K31_K3_15_16_26", columns={"ACCOUNTID", "OBJECTID", "CONTACTID", "KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K9_K8_K7_K1_K34_K28_K13_K12_K18_K31_K3_15_16_26", columns={"OBJECTID", "CONTACTID", "ACCOUNTID", "KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K1_K34_K28_K13_K12_K18_K31_K3_8_9_15_16_26", columns={"ACCOUNTID", "KF_PROJECTSID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "CONTACTID", "OBJECTID", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K6_38", columns={"ACCOUNTID", "SECCODEID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K7_K6_38", columns={"KF_PROJECTSID", "ACCOUNTID", "SECCODEID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_6_7_38", columns={"KF_PROJECTSID", "SECCODEID", "ACCOUNTID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_7", columns={"KF_PROJECTSID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K6_7_38", columns={"SECCODEID", "ACCOUNTID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_38", columns={"KF_PROJECTSID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K1_K6_38", columns={"ACCOUNTID", "KF_PROJECTSID", "SECCODEID", "PROJECT_NAME"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7", columns={"ACCOUNTID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K1", columns={"ACCOUNTID", "KF_PROJECTSID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K1_K9_K8_K34_K28_K13_K12_K18_K31_K3_15_16_26", columns={"ACCOUNTID", "KF_PROJECTSID", "OBJECTID", "CONTACTID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K7_K9_K8_K34_K28_K13_K12_K18_K31_K3_15_16_26", columns={"KF_PROJECTSID", "ACCOUNTID", "OBJECTID", "CONTACTID", "DATEOPENED", "PROJECTTYPE", "MANAGERID", "STATUS", "CLOSEDDATE", "CURRENTSTAGE", "CREATEDATE", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "PAYMENTS"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K7_K6_K36_K37_K32_K8_5_10_12_13_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_", columns={"KF_PROJECTSID", "ACCOUNTID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "CONTACTID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MANAGERID", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K6_K36_K37_K32_5_10_12_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_43_44_45_", columns={"ACCOUNTID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_16", columns={"ACCOUNTID", "ACTUAL_COMISSION"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K1_K6_K36_K37_K32_K8_5_10_12_13_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_", columns={"ACCOUNTID", "KF_PROJECTSID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "CONTACTID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MANAGERID", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K6_K36_K37_K32_K8_K1_5_10_12_13_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_", columns={"ACCOUNTID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "CONTACTID", "KF_PROJECTSID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MANAGERID", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K7_K8_K6_K36_K37_K32_5_10_12_13_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_", columns={"KF_PROJECTSID", "ACCOUNTID", "CONTACTID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MANAGERID", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K1_K7_K8_13", columns={"KF_PROJECTSID", "ACCOUNTID", "CONTACTID", "MANAGERID"}), @ORM\Index(name="_dta_index_KF_PROJECTS_5_1681441064__K7_K8_K1_K6_K36_K37_K32_5_10_12_13_14_15_16_20_21_22_23_28_29_30_33_34_35_38_39_40_41_42_", columns={"ACCOUNTID", "CONTACTID", "KF_PROJECTSID", "SECCODEID", "REGIONID", "CITYID", "LEADSOURCEID", "MODIFYDATE", "PROPERTYDESCRIPTION", "STATUS", "MANAGERID", "MARKET_SEGMENT", "POTENTIAL_COMISSION", "ACTUAL_COMISSION", "COMMENTS", "CONSULTINGGROUP", "REPORTFORM", "LANGUAGE_REPORT", "PROJECTTYPE", "PROJECTSUBTYPE", "CONTRACTKF", "ESTIMATEDCLOSE", "DATEOPENED", "PROBABILITY", "PROJECT_NAME", "CONTRACT_DATE", "LOI_DATE", "ACT_DATE", "INVOICE_DATE", "CONTRACT_NUMBER", "ACT_NUMBER", "INVOICE_NUMBER", "STAGE", "CURRENCY"})})
 * @ORM\Entity
 */
class KfProjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfProjectsid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTYDESCRIPTION", type="string", length=1024, nullable=true)
     */
    private $propertydescription;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICES", type="string", length=256, nullable=true)
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_SEGMENT", type="string", length=256, nullable=true)
     */
    private $marketSegment;

    /**
     * @var string
     *
     * @ORM\Column(name="POTENTIAL_COMISSION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $potentialComission;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUAL_COMISSION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $actualComission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SIGNEDDATE", type="datetime", nullable=true)
     */
    private $signeddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CLOSEDDATE", type="datetime", nullable=true)
     */
    private $closeddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROJECT_DURATION", type="integer", nullable=true)
     */
    private $projectDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=2048, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGGROUP", type="string", length=256, nullable=true)
     */
    private $consultinggroup;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTFORM", type="string", length=256, nullable=true)
     */
    private $reportform;

    /**
     * @var string
     *
     * @ORM\Column(name="LANGUAGE_REPORT", type="string", length=128, nullable=true)
     */
    private $languageReport;

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
     * @ORM\Column(name="PAYMENTS", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $payments;

    /**
     * @var string
     *
     * @ORM\Column(name="BALANCE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $balance;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECTTYPE", type="string", length=64, nullable=true)
     */
    private $projecttype;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECTSUBTYPE", type="string", length=256, nullable=true)
     */
    private $projectsubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTKF", type="string", length=64, nullable=true)
     */
    private $contractkf;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENTSTAGE", type="string", length=512, nullable=true)
     */
    private $currentstage;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATEDCLOSE", type="datetime", nullable=true)
     */
    private $estimatedclose;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEOPENED", type="datetime", nullable=true)
     */
    private $dateopened;

    /**
     * @var float
     *
     * @ORM\Column(name="PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $probability;

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
     * @var string
     *
     * @ORM\Column(name="PROJECT_NAME", type="string", length=256, nullable=true)
     */
    private $projectName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONTRACT_DATE", type="datetime", nullable=true)
     */
    private $contractDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOI_DATE", type="datetime", nullable=true)
     */
    private $loiDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACT_DATE", type="datetime", nullable=true)
     */
    private $actDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="INVOICE_DATE", type="datetime", nullable=true)
     */
    private $invoiceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_NUMBER", type="string", length=128, nullable=true)
     */
    private $contractNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=128, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="INVOICE_NUMBER", type="string", length=128, nullable=true)
     */
    private $invoiceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="LEGALACCOINTID", type="string", length=12, nullable=true)
     */
    private $legalaccointid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPISSUES", type="string", length=1024, nullable=true)
     */
    private $oppissues;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     * @ORM\Column(name="LEGAL_COMPANY", type="string", length=128, nullable=true)
     */
    private $legalCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="STAGE", type="string", length=128, nullable=true)
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=64, nullable=true)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALES_STEP", type="smallint", nullable=true)
     */
    private $salesStep;

    /**
     * @var string
     *
     * @ORM\Column(name="PHASES", type="string", length=1, nullable=true)
     */
    private $phases;


}
