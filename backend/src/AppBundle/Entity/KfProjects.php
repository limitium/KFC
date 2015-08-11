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



    /**
     * Set kfProjectsid
     *
     * @param string $kfProjectsid
     * @return KfProjects
     */
    public function setKfProjectsid($kfProjectsid)
    {
        $this->kfProjectsid = $kfProjectsid;

        return $this;
    }

    /**
     * Get kfProjectsid
     *
     * @return string 
     */
    public function getKfProjectsid()
    {
        return $this->kfProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfProjects
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
     * @return KfProjects
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
     * @return KfProjects
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
     * @return KfProjects
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
     * @return KfProjects
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
     * Set accountid
     *
     * @param string $accountid
     * @return KfProjects
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfProjects
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set objectid
     *
     * @param string $objectid
     * @return KfProjects
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
     * Set propertydescription
     *
     * @param string $propertydescription
     * @return KfProjects
     */
    public function setPropertydescription($propertydescription)
    {
        $this->propertydescription = $propertydescription;

        return $this;
    }

    /**
     * Get propertydescription
     *
     * @return string 
     */
    public function getPropertydescription()
    {
        return $this->propertydescription;
    }

    /**
     * Set services
     *
     * @param string $services
     * @return KfProjects
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get services
     *
     * @return string 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfProjects
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfProjects
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set marketSegment
     *
     * @param string $marketSegment
     * @return KfProjects
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
     * Set potentialComission
     *
     * @param string $potentialComission
     * @return KfProjects
     */
    public function setPotentialComission($potentialComission)
    {
        $this->potentialComission = $potentialComission;

        return $this;
    }

    /**
     * Get potentialComission
     *
     * @return string 
     */
    public function getPotentialComission()
    {
        return $this->potentialComission;
    }

    /**
     * Set actualComission
     *
     * @param string $actualComission
     * @return KfProjects
     */
    public function setActualComission($actualComission)
    {
        $this->actualComission = $actualComission;

        return $this;
    }

    /**
     * Get actualComission
     *
     * @return string 
     */
    public function getActualComission()
    {
        return $this->actualComission;
    }

    /**
     * Set signeddate
     *
     * @param \DateTime $signeddate
     * @return KfProjects
     */
    public function setSigneddate($signeddate)
    {
        $this->signeddate = $signeddate;

        return $this;
    }

    /**
     * Get signeddate
     *
     * @return \DateTime 
     */
    public function getSigneddate()
    {
        return $this->signeddate;
    }

    /**
     * Set closeddate
     *
     * @param \DateTime $closeddate
     * @return KfProjects
     */
    public function setCloseddate($closeddate)
    {
        $this->closeddate = $closeddate;

        return $this;
    }

    /**
     * Get closeddate
     *
     * @return \DateTime 
     */
    public function getCloseddate()
    {
        return $this->closeddate;
    }

    /**
     * Set projectDuration
     *
     * @param integer $projectDuration
     * @return KfProjects
     */
    public function setProjectDuration($projectDuration)
    {
        $this->projectDuration = $projectDuration;

        return $this;
    }

    /**
     * Get projectDuration
     *
     * @return integer 
     */
    public function getProjectDuration()
    {
        return $this->projectDuration;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return KfProjects
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set consultinggroup
     *
     * @param string $consultinggroup
     * @return KfProjects
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
     * Set reportform
     *
     * @param string $reportform
     * @return KfProjects
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
     * Set languageReport
     *
     * @param string $languageReport
     * @return KfProjects
     */
    public function setLanguageReport($languageReport)
    {
        $this->languageReport = $languageReport;

        return $this;
    }

    /**
     * Get languageReport
     *
     * @return string 
     */
    public function getLanguageReport()
    {
        return $this->languageReport;
    }

    /**
     * Set researchperiodfrom
     *
     * @param \DateTime $researchperiodfrom
     * @return KfProjects
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
     * @return KfProjects
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
     * Set payments
     *
     * @param string $payments
     * @return KfProjects
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * Get payments
     *
     * @return string 
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Set balance
     *
     * @param string $balance
     * @return KfProjects
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set projecttype
     *
     * @param string $projecttype
     * @return KfProjects
     */
    public function setProjecttype($projecttype)
    {
        $this->projecttype = $projecttype;

        return $this;
    }

    /**
     * Get projecttype
     *
     * @return string 
     */
    public function getProjecttype()
    {
        return $this->projecttype;
    }

    /**
     * Set projectsubtype
     *
     * @param string $projectsubtype
     * @return KfProjects
     */
    public function setProjectsubtype($projectsubtype)
    {
        $this->projectsubtype = $projectsubtype;

        return $this;
    }

    /**
     * Get projectsubtype
     *
     * @return string 
     */
    public function getProjectsubtype()
    {
        return $this->projectsubtype;
    }

    /**
     * Set contractkf
     *
     * @param string $contractkf
     * @return KfProjects
     */
    public function setContractkf($contractkf)
    {
        $this->contractkf = $contractkf;

        return $this;
    }

    /**
     * Get contractkf
     *
     * @return string 
     */
    public function getContractkf()
    {
        return $this->contractkf;
    }

    /**
     * Set currentstage
     *
     * @param string $currentstage
     * @return KfProjects
     */
    public function setCurrentstage($currentstage)
    {
        $this->currentstage = $currentstage;

        return $this;
    }

    /**
     * Get currentstage
     *
     * @return string 
     */
    public function getCurrentstage()
    {
        return $this->currentstage;
    }

    /**
     * Set leadsourceid
     *
     * @param string $leadsourceid
     * @return KfProjects
     */
    public function setLeadsourceid($leadsourceid)
    {
        $this->leadsourceid = $leadsourceid;

        return $this;
    }

    /**
     * Get leadsourceid
     *
     * @return string 
     */
    public function getLeadsourceid()
    {
        return $this->leadsourceid;
    }

    /**
     * Set estimatedclose
     *
     * @param \DateTime $estimatedclose
     * @return KfProjects
     */
    public function setEstimatedclose($estimatedclose)
    {
        $this->estimatedclose = $estimatedclose;

        return $this;
    }

    /**
     * Get estimatedclose
     *
     * @return \DateTime 
     */
    public function getEstimatedclose()
    {
        return $this->estimatedclose;
    }

    /**
     * Set dateopened
     *
     * @param \DateTime $dateopened
     * @return KfProjects
     */
    public function setDateopened($dateopened)
    {
        $this->dateopened = $dateopened;

        return $this;
    }

    /**
     * Get dateopened
     *
     * @return \DateTime 
     */
    public function getDateopened()
    {
        return $this->dateopened;
    }

    /**
     * Set probability
     *
     * @param float $probability
     * @return KfProjects
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float 
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set regionid
     *
     * @param string $regionid
     * @return KfProjects
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
     * @return KfProjects
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
     * Set projectName
     *
     * @param string $projectName
     * @return KfProjects
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set contractDate
     *
     * @param \DateTime $contractDate
     * @return KfProjects
     */
    public function setContractDate($contractDate)
    {
        $this->contractDate = $contractDate;

        return $this;
    }

    /**
     * Get contractDate
     *
     * @return \DateTime 
     */
    public function getContractDate()
    {
        return $this->contractDate;
    }

    /**
     * Set loiDate
     *
     * @param \DateTime $loiDate
     * @return KfProjects
     */
    public function setLoiDate($loiDate)
    {
        $this->loiDate = $loiDate;

        return $this;
    }

    /**
     * Get loiDate
     *
     * @return \DateTime 
     */
    public function getLoiDate()
    {
        return $this->loiDate;
    }

    /**
     * Set actDate
     *
     * @param \DateTime $actDate
     * @return KfProjects
     */
    public function setActDate($actDate)
    {
        $this->actDate = $actDate;

        return $this;
    }

    /**
     * Get actDate
     *
     * @return \DateTime 
     */
    public function getActDate()
    {
        return $this->actDate;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     * @return KfProjects
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime 
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set contractNumber
     *
     * @param string $contractNumber
     * @return KfProjects
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get contractNumber
     *
     * @return string 
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Set actNumber
     *
     * @param string $actNumber
     * @return KfProjects
     */
    public function setActNumber($actNumber)
    {
        $this->actNumber = $actNumber;

        return $this;
    }

    /**
     * Get actNumber
     *
     * @return string 
     */
    public function getActNumber()
    {
        return $this->actNumber;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     * @return KfProjects
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string 
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set legalaccointid
     *
     * @param string $legalaccointid
     * @return KfProjects
     */
    public function setLegalaccointid($legalaccointid)
    {
        $this->legalaccointid = $legalaccointid;

        return $this;
    }

    /**
     * Get legalaccointid
     *
     * @return string 
     */
    public function getLegalaccointid()
    {
        return $this->legalaccointid;
    }

    /**
     * Set oppissues
     *
     * @param string $oppissues
     * @return KfProjects
     */
    public function setOppissues($oppissues)
    {
        $this->oppissues = $oppissues;

        return $this;
    }

    /**
     * Get oppissues
     *
     * @return string 
     */
    public function getOppissues()
    {
        return $this->oppissues;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return KfProjects
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set legalCompany
     *
     * @param string $legalCompany
     * @return KfProjects
     */
    public function setLegalCompany($legalCompany)
    {
        $this->legalCompany = $legalCompany;

        return $this;
    }

    /**
     * Get legalCompany
     *
     * @return string 
     */
    public function getLegalCompany()
    {
        return $this->legalCompany;
    }

    /**
     * Set stage
     *
     * @param string $stage
     * @return KfProjects
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return KfProjects
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set salesStep
     *
     * @param integer $salesStep
     * @return KfProjects
     */
    public function setSalesStep($salesStep)
    {
        $this->salesStep = $salesStep;

        return $this;
    }

    /**
     * Get salesStep
     *
     * @return integer 
     */
    public function getSalesStep()
    {
        return $this->salesStep;
    }

    /**
     * Set phases
     *
     * @param string $phases
     * @return KfProjects
     */
    public function setPhases($phases)
    {
        $this->phases = $phases;

        return $this;
    }

    /**
     * Get phases
     *
     * @return string 
     */
    public function getPhases()
    {
        return $this->phases;
    }
}
