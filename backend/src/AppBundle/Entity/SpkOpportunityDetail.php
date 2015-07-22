<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOpportunityDetail
 *
 * @ORM\Table(name="SPK_OPPORTUNITY_DETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPPORTUNITY_DETAIL_PRIMARY", columns={"OPPORTUNITYID"})}, indexes={@ORM\Index(name="KF_SR_IX_ActDate", columns={"ACT_DATE", "CONTRACT_TYPE"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_6", columns={"OPPORTUNITYID", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K6_K1", columns={"CONTACTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_K1_K29", columns={"PARENTID", "OPPORTUNITYID", "POTENTIAL_COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K29_K35_1", columns={"POTENTIAL_COMMISION_KF", "PARENTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_1", columns={"PARENTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35_K29", columns={"OPPORTUNITYID", "PARENTID", "POTENTIAL_COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35", columns={"PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35", columns={"OPPORTUNITYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_c_7_717245610__K29", columns={"POTENTIAL_COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_K1_K38_K37_K15_K13_K17_K22_K19_K23_K21_K24_10_16", columns={"PARENTID", "OPPORTUNITYID", "SERVICE_ACT_NUMBER", "SERVICE_ACT_DATE", "DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_K1_K15_K13_K17_K22_K19_K23_K21_K24_10_16", columns={"PARENTID", "OPPORTUNITYID", "DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K38_K37_K15_K13_K17_K22_K19_K23_K21_K24_1_10_16_35", columns={"SERVICE_ACT_NUMBER", "SERVICE_ACT_DATE", "DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE", "OPPORTUNITYID", "IS_OFFERTA", "IS_ACT", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35_K38_K37_K15_K13_K17_K22_K19_K23_K21_K24_10_16", columns={"OPPORTUNITYID", "PARENTID", "SERVICE_ACT_NUMBER", "SERVICE_ACT_DATE", "DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K15_K13_K17_K22_K19_K23_K21_K24_1_10_16_35", columns={"DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE", "OPPORTUNITYID", "IS_OFFERTA", "IS_ACT", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_c_7_717245610__K38_K37_K15_K13_K17_K22_K19_K23_K21_K24", columns={"SERVICE_ACT_NUMBER", "SERVICE_ACT_DATE", "DOGOVOR_NUMBER", "DOGOVOR_DATE", "ACT_NUMBER", "ACT_DATE", "BILL_NUMBER", "BILL_DATE", "INVOICE_NUMBER", "INVOICE_DATE"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K6", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K6_29_35", columns={"OPPORTUNITYID", "CONTACTID", "POTENTIAL_COMMISION_KF", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_K1_10_16", columns={"PARENTID", "OPPORTUNITYID", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35_10_16", columns={"OPPORTUNITYID", "PARENTID", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_10_16_35", columns={"OPPORTUNITYID", "IS_OFFERTA", "IS_ACT", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_6_10_16_29_35", columns={"OPPORTUNITYID", "CONTACTID", "IS_OFFERTA", "IS_ACT", "POTENTIAL_COMMISION_KF", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35_K6_10_16", columns={"OPPORTUNITYID", "PARENTID", "CONTACTID", "IS_OFFERTA", "IS_ACT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_6_10_16_35", columns={"OPPORTUNITYID", "CONTACTID", "IS_OFFERTA", "IS_ACT", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_c_7_717245610__K1_K35_K6", columns={"OPPORTUNITYID", "PARENTID", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_34_35", columns={"OPPORTUNITYID", "COMMISION_KF", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K35_K1_34", columns={"PARENTID", "OPPORTUNITYID", "COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_34", columns={"OPPORTUNITYID", "COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_7_717245610__K1_K35_34", columns={"OPPORTUNITYID", "PARENTID", "COMMISION_KF"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_15", columns={"OPPORTUNITYID", "DOGOVOR_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K6_K1_15", columns={"CONTACTID", "OPPORTUNITYID", "DOGOVOR_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K6_15", columns={"OPPORTUNITYID", "CONTACTID", "DOGOVOR_NUMBER"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_6_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_26_33_34_35_36_37_38_41_42", columns={"OPPORTUNITYID", "CONTACTID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMPETITORID", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K6_K26_K1_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_33_34_35_36_37_38_41_42", columns={"CONTACTID", "COMPETITORID", "OPPORTUNITYID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K6_K26_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_33_34_35_36_37_38_41_42", columns={"OPPORTUNITYID", "CONTACTID", "COMPETITORID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K6_K1_K26_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_33_34_35_36_37_38_41_42", columns={"CONTACTID", "OPPORTUNITYID", "COMPETITORID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K22_K1", columns={"ACT_DATE", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K22", columns={"OPPORTUNITYID", "ACT_DATE"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K22_1_35", columns={"ACT_DATE", "OPPORTUNITYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K6_13_15_17_22_33_34_36_44_45", columns={"OPPORTUNITYID", "CONTACTID", "DOGOVOR_DATE", "DOGOVOR_NUMBER", "ACT_NUMBER", "ACT_DATE", "COMMISION_TYPE", "COMMISION_KF", "CONTRACT_TYPE", "OBJECT_NOT_INDB", "TARGET_ACQUISITION"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K6_K1_13_15_17_22_33_34_36_44_45", columns={"CONTACTID", "OPPORTUNITYID", "DOGOVOR_DATE", "DOGOVOR_NUMBER", "ACT_NUMBER", "ACT_DATE", "COMMISION_TYPE", "COMMISION_KF", "CONTRACT_TYPE", "OBJECT_NOT_INDB", "TARGET_ACQUISITION"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_6_27", columns={"OPPORTUNITYID", "CONTACTID", "OPP_AMOUNT"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K26", columns={"OPPORTUNITYID", "COMPETITORID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K26_K1_K6_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_33_34_35_36_37_38_41_42", columns={"COMPETITORID", "OPPORTUNITYID", "CONTACTID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K26_K1", columns={"COMPETITORID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K26_K6_9_10_13_14_15_16_17_18_19_20_21_22_23_24_25_33_34_35_36_37_38_41_42", columns={"OPPORTUNITYID", "COMPETITORID", "CONTACTID", "IS_DOGOVOR", "IS_OFFERTA", "DOGOVOR_DATE", "OFFERTA_DATE", "DOGOVOR_NUMBER", "IS_ACT", "ACT_NUMBER", "IS_BILL", "BILL_NUMBER", "IS_INVOICE", "INVOICE_NUMBER", "ACT_DATE", "BILL_DATE", "INVOICE_DATE", "IS_COMPETITOR", "COMMISION_TYPE", "COMMISION_KF", "PARENTID", "CONTRACT_TYPE", "SERVICE_ACT_DATE", "SERVICE_ACT_NUMBER", "TENANTPAY_DATE", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_K6_42", columns={"OPPORTUNITYID", "CONTACTID", "IS_WIP"}), @ORM\Index(name="_dta_index_SPK_OPPORTUNITY_DETAIL_5_717245610__K1_42", columns={"OPPORTUNITYID", "IS_WIP"})})
 * @ORM\Entity
 */
class SpkOpportunityDetail
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
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESELLER_CONTACTID", type="string", length=12, nullable=true)
     */
    private $resellerContactid;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_DOGOVOR", type="string", length=1, nullable=true)
     */
    private $isDogovor;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_OFFERTA", type="string", length=1, nullable=true)
     */
    private $isOfferta;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMITION_KF", type="float", precision=53, scale=0, nullable=true)
     */
    private $commitionKf;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PERCENT", type="string", length=1, nullable=true)
     */
    private $isPercent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DOGOVOR_DATE", type="datetime", nullable=true)
     */
    private $dogovorDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OFFERTA_DATE", type="datetime", nullable=true)
     */
    private $offertaDate;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR_NUMBER", type="string", length=32, nullable=true)
     */
    private $dogovorNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_ACT", type="string", length=1, nullable=true)
     */
    private $isAct;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_BILL", type="string", length=1, nullable=true)
     */
    private $isBill;

    /**
     * @var string
     *
     * @ORM\Column(name="BILL_NUMBER", type="string", length=32, nullable=true)
     */
    private $billNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_INVOICE", type="string", length=1, nullable=true)
     */
    private $isInvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="INVOICE_NUMBER", type="string", length=32, nullable=true)
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACT_DATE", type="datetime", nullable=true)
     */
    private $actDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BILL_DATE", type="datetime", nullable=true)
     */
    private $billDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="INVOICE_DATE", type="datetime", nullable=true)
     */
    private $invoiceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_COMPETITOR", type="string", length=1, nullable=true)
     */
    private $isCompetitor;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPETITORID", type="string", length=12, nullable=true)
     */
    private $competitorid;

    /**
     * @var float
     *
     * @ORM\Column(name="OPP_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $oppAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialCost;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_COMMISION_KF", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialCommisionKf;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialSquare;

    /**
     * @var string
     *
     * @ORM\Column(name="POTENTIAL_COMMISION_TYPE", type="string", length=64, nullable=true)
     */
    private $potentialCommisionType;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialRent;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISION_TYPE", type="string", length=64, nullable=true)
     */
    private $commisionType;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISION_KF", type="float", precision=53, scale=0, nullable=true)
     */
    private $commisionKf;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTID", type="string", length=12, nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_TYPE", type="string", length=64, nullable=true)
     */
    private $contractType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SERVICE_ACT_DATE", type="datetime", nullable=true)
     */
    private $serviceActDate;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $serviceActNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_SERVICE_ACT", type="string", length=1, nullable=true)
     */
    private $isServiceAct;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TENANTPAY_DATE", type="datetime", nullable=true)
     */
    private $tenantpayDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WIP", type="string", length=1, nullable=true)
     */
    private $isWip;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CURRENCY", type="string", length=32, nullable=true)
     */
    private $kfCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECT_NOT_INDB", type="string", length=1, nullable=true)
     */
    private $objectNotIndb;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET_ACQUISITION", type="string", length=128, nullable=true)
     */
    private $targetAcquisition;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERRALDESC", type="string", length=64, nullable=true)
     */
    private $referraldesc;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PREPAYMANT", type="string", length=1, nullable=true)
     */
    private $isPrepaymant;

    /**
     * @var string
     *
     * @ORM\Column(name="INCLUDE_VAT", type="string", length=1, nullable=true)
     */
    private $includeVat;

    /**
     * @var string
     *
     * @ORM\Column(name="WHOPAYS", type="string", length=32, nullable=true)
     */
    private $whopays;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_INACTIVE", type="string", length=1, nullable=true)
     */
    private $isInactive;


}
