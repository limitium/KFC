<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetBkCommerc
 *
 * @ORM\Table(name="SPK_RET_BK_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_BK_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_K1_7", columns={"DEFAULT_RATE", "SPK_PROPERTYID", "DEFAULT_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K1_6_7", columns={"SPK_PROPERTYID", "DEFAULT_RATE", "DEFAULT_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_7", columns={"DEFAULT_RATE", "DEFAULT_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_K18_K7_K17", columns={"DEFAULT_RATE", "FINAL_RATE", "DEFAULT_COST", "FINAL_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_K18_K7_K17_K1", columns={"DEFAULT_RATE", "FINAL_RATE", "DEFAULT_COST", "FINAL_COST", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K1_K6_K18_K7_K17", columns={"SPK_PROPERTYID", "DEFAULT_RATE", "FINAL_RATE", "DEFAULT_COST", "FINAL_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K1_6_8", columns={"SPK_PROPERTYID", "DEFAULT_RATE", "OPERATIONAL_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_K8_K1", columns={"DEFAULT_RATE", "OPERATIONAL_COST", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K6_K8", columns={"DEFAULT_RATE", "OPERATIONAL_COST"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K1_6_7_8_17_18", columns={"SPK_PROPERTYID", "DEFAULT_RATE", "DEFAULT_COST", "OPERATIONAL_COST", "FINAL_COST", "FINAL_RATE"}), @ORM\Index(name="_dta_index_SPK_RET_BK_COMMERC_7_1776725382__K1_K6_K8_7_17_18", columns={"SPK_PROPERTYID", "DEFAULT_RATE", "OPERATIONAL_COST", "DEFAULT_COST", "FINAL_COST", "FINAL_RATE"})})
 * @ORM\Entity
 */
class SpkRetBkCommerc
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
     * @ORM\Column(name="DEFAULT_RATE", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $defaultRate;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFAULT_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $defaultCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEFAULT_DEPOSIT", type="smallint", nullable=true)
     */
    private $defaultDeposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEFAULT_PREPAYMENT", type="smallint", nullable=true)
     */
    private $defaultPrepayment;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_CONDITIONS", type="string", length=256, nullable=true)
     */
    private $additionalConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION_CONDITIONS", type="string", length=256, nullable=true)
     */
    private $indexationConditions;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERM_OF_LEASE", type="smallint", nullable=true)
     */
    private $termOfLease;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommission;

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
     * @ORM\Column(name="FINAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $finalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_RATE", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $finalRate;

    /**
     * @var string
     *
     * @ORM\Column(name="USD_RATE", type="string", length=32, nullable=true)
     */
    private $usdRate;

    /**
     * @var string
     *
     * @ORM\Column(name="EUR_RATE", type="string", length=32, nullable=true)
     */
    private $eurRate;

    /**
     * @var string
     *
     * @ORM\Column(name="RATE_CUR", type="string", length=32, nullable=true)
     */
    private $rateCur;

    /**
     * @var string
     *
     * @ORM\Column(name="CU_RATE", type="string", length=32, nullable=true)
     */
    private $cuRate;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_COST_CUR", type="string", length=32, nullable=true)
     */
    private $finalCostCur;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_CUR", type="string", length=32, nullable=true)
     */
    private $industrialCur;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_RENTAL_RATE_CUR", type="string", length=32, nullable=true)
     */
    private $officeRentalRateCur;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_CUR", type="string", length=32, nullable=true)
     */
    private $costCur;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_CUR", type="string", length=32, nullable=true)
     */
    private $opexCur;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_RATE_CUR", type="string", length=32, nullable=true)
     */
    private $finalRateCur;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_OBJECT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costObject;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=128, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPOSIT_TEXT", type="string", length=256, nullable=true)
     */
    private $depositText;

    /**
     * @var string
     *
     * @ORM\Column(name="TERM_TEXT", type="string", length=128, nullable=true)
     */
    private $termText;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_OBJECT_CUR", type="string", length=32, nullable=true)
     */
    private $costObjectCur;


}
