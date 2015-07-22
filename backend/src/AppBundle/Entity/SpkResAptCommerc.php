<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResAptCommerc
 *
 * @ORM\Table(name="SPK_RES_APT_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RES_APT_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_7_552389037__K1_6_7_9", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_MIN"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_7_552389037__K1_6_7_8_9_10_20", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "CURRENCY_APARTMENT"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_7_552389037__K7_K1_6_9", columns={"COST_PER_SQM_MIN", "SPK_PROPERTYID", "RENT", "COST_MIN"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_7_552389037__K1_K7_6_9", columns={"SPK_PROPERTYID", "COST_PER_SQM_MIN", "RENT", "COST_MIN"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_c_7_552389037__K7", columns={"COST_PER_SQM_MIN"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_9_10", columns={"SPK_PROPERTYID", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_7_9_10", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_9_10", columns={"SPK_PROPERTYID", "RENT", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_7_8_9_10_20_24_25_26_27_28", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "CURRENCY_APARTMENT", "COST_EUR_MIN", "COST_EUR_MAX", "COST_RUR_MIN", "COST_RUR_MAX", "MAIN_VAL"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_7_8_9_10_11", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "CAR_PLACE_COST"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_7_8_9_10_11_20_24_25_26_27_28", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "CAR_PLACE_COST", "CURRENCY_APARTMENT", "COST_EUR_MIN", "COST_EUR_MAX", "COST_RUR_MIN", "COST_RUR_MAX", "MAIN_VAL"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K6_K7_K8_K1", columns={"RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_K6_K7_K8", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX"}), @ORM\Index(name="_dta_index_SPK_RES_APT_COMMERC_5_552389037__K1_6_7_8_9_10", columns={"SPK_PROPERTYID", "RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX"})})
 * @ORM\Entity
 */
class SpkResAptCommerc
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
     * @ORM\Column(name="RENT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rent;

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
     * @ORM\Column(name="CAR_PLACE_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $carPlaceCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_TN_PERS", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionTnPers;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION_TN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commissionTn;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_LR_PERS", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionLrPers;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION_LR", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commissionLr;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_TYPE", type="string", length=128, nullable=true)
     */
    private $contractType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=1024, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=1024, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY_APARTMENT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $currencyApartment;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTNOTSHARED", type="string", length=1, nullable=true)
     */
    private $costnotshared;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTNSHARED", type="string", length=1, nullable=true)
     */
    private $costnshared;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCOUNT", type="string", length=32, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EUR_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costEurMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EUR_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costEurMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIN_VAL", type="string", length=10, nullable=true)
     */
    private $mainVal;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_FEE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfFee;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_EUR", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentEur;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_RUR", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentRur;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_CURRENCY", type="string", length=8, nullable=true)
     */
    private $rentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIVATE_SALE", type="string", length=1, nullable=true)
     */
    private $privateSale;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EUR_SQM_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costEurSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EUR_SQM_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costEurSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_SQM_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_SQM_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurSqmMax;


}
