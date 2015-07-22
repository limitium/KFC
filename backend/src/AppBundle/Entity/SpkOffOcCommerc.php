<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcCommerc
 *
 * @ORM\Table(name="SPK_OFF_OC_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_OC_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_7_1193771310__K1_6_7_10_11", columns={"SPK_PROPERTYID", "LEASE_COST_MIN", "LEASE_COST_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_7_1193771310__K14_K1", columns={"KF_COMMISION", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_7_1193771310__K14", columns={"KF_COMMISION"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_7_1193771310__K1_K14", columns={"SPK_PROPERTYID", "KF_COMMISION"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_10", columns={"SPK_PROPERTYID", "COST_MIN"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K5_K1_6_7_16_20", columns={"MODIFYDATE", "SPK_PROPERTYID", "LEASE_COST_MIN", "LEASE_COST_MAX", "OPERATIONAL_COST", "OPERATING_EXP_TYPE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K5_6_7_16_20", columns={"MODIFYDATE", "LEASE_COST_MIN", "LEASE_COST_MAX", "OPERATIONAL_COST", "OPERATING_EXP_TYPE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_5_6_7_16_20", columns={"SPK_PROPERTYID", "MODIFYDATE", "LEASE_COST_MIN", "LEASE_COST_MAX", "OPERATIONAL_COST", "OPERATING_EXP_TYPE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_6_7_16_20", columns={"SPK_PROPERTYID", "LEASE_COST_MIN", "LEASE_COST_MAX", "OPERATIONAL_COST", "OPERATING_EXP_TYPE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_31_32_33_34_35", columns={"SPK_PROPERTYID", "OPP_STRUCTURE", "OWNERSHIP_CERT", "OWNERSHIP_TYPE", "RENTAL_STATUS_ENG", "RENTAL_STATUS_RUS"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_6_7_8_9_10_11_14_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_36_37_40", columns={"SPK_PROPERTYID", "LEASE_COST_MIN", "LEASE_COST_MAX", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "KF_COMMISION", "OPERATIONAL_COST", "ADDITIONAL_COST", "DEPOSIT", "INDEXATION_CONDITIONS", "OPERATING_EXP_TYPE", "LEASE_LENGTH", "TERM_OF_LEASE_MIN", "TERM_OF_LEASE_MAX", "FITOUT_COMPENSATION", "UTILITY_COST", "VAT_TYPE", "COMMERCIAL_TERMS", "UTILITY_TYPE", "RENTAL_HOLIDAYS", "YIELD", "RENTAL_RATE_AVG", "RRA_CUR", "COMMERCIAL_TERMS_SALE"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_6_7_8_9_10_11_14_16_18_19_24", columns={"SPK_PROPERTYID", "LEASE_COST_MIN", "LEASE_COST_MAX", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "KF_COMMISION", "OPERATIONAL_COST", "DEPOSIT", "INDEXATION_CONDITIONS", "FITOUT_COMPENSATION"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_10_14", columns={"SPK_PROPERTYID", "COST_MIN", "KF_COMMISION"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_5_6_7_8_9_10_11_14_16_18_19_20_24", columns={"SPK_PROPERTYID", "MODIFYDATE", "LEASE_COST_MIN", "LEASE_COST_MAX", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "KF_COMMISION", "OPERATIONAL_COST", "DEPOSIT", "INDEXATION_CONDITIONS", "OPERATING_EXP_TYPE", "FITOUT_COMPENSATION"}), @ORM\Index(name="_dta_index_SPK_OFF_OC_COMMERC_5_1193771310__K1_20_26", columns={"SPK_PROPERTYID", "OPERATING_EXP_TYPE", "VAT_TYPE"})})
 * @ORM\Entity
 */
class SpkOffOcCommerc
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
     * @ORM\Column(name="LEASE_COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMax;

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
     * @ORM\Column(name="KF_COMMISION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommision;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA_KOEF", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalAreaKoef;

    /**
     * @var float
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $operationalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="ADDITIONAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $additionalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT", type="float", precision=53, scale=0, nullable=true)
     */
    private $deposit;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION_CONDITIONS", type="string", length=32, nullable=true)
     */
    private $indexationConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATING_EXP_TYPE", type="string", length=64, nullable=true)
     */
    private $operatingExpType;

    /**
     * @var integer
     *
     * @ORM\Column(name="LEASE_LENGTH", type="smallint", nullable=true)
     */
    private $leaseLength;

    /**
     * @var string
     *
     * @ORM\Column(name="TERM_OF_LEASE_MIN", type="string", length=32, nullable=true)
     */
    private $termOfLeaseMin;

    /**
     * @var string
     *
     * @ORM\Column(name="TERM_OF_LEASE_MAX", type="string", length=32, nullable=true)
     */
    private $termOfLeaseMax;

    /**
     * @var float
     *
     * @ORM\Column(name="FITOUT_COMPENSATION", type="float", precision=53, scale=0, nullable=true)
     */
    private $fitoutCompensation;

    /**
     * @var float
     *
     * @ORM\Column(name="UTILITY_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $utilityCost;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=128, nullable=true)
     */
    private $vatType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS", type="string", length=256, nullable=true)
     */
    private $commercialTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_TYPE", type="string", length=128, nullable=true)
     */
    private $utilityType;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_HOLIDAYS", type="string", length=32, nullable=true)
     */
    private $rentalHolidays;

    /**
     * @var float
     *
     * @ORM\Column(name="YIELD", type="float", precision=53, scale=0, nullable=true)
     */
    private $yield;

    /**
     * @var string
     *
     * @ORM\Column(name="OPP_STRUCTURE", type="string", length=128, nullable=true)
     */
    private $oppStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="OWNERSHIP_CERT", type="string", length=128, nullable=true)
     */
    private $ownershipCert;

    /**
     * @var string
     *
     * @ORM\Column(name="OWNERSHIP_TYPE", type="string", length=128, nullable=true)
     */
    private $ownershipType;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_ENG", type="string", length=128, nullable=true)
     */
    private $rentalStatusEng;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_RUS", type="string", length=128, nullable=true)
     */
    private $rentalStatusRus;

    /**
     * @var float
     *
     * @ORM\Column(name="RENTAL_RATE_AVG", type="float", precision=53, scale=0, nullable=true)
     */
    private $rentalRateAvg;

    /**
     * @var string
     *
     * @ORM\Column(name="RRA_CUR", type="string", length=32, nullable=true)
     */
    private $rraCur;

    /**
     * @var float
     *
     * @ORM\Column(name="PRICE_TA_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $priceTaSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="PRICE_LA_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $priceLaSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS_SALE", type="string", length=256, nullable=true)
     */
    private $commercialTermsSale;


}
