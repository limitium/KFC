<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScCommerc
 *
 * @ORM\Table(name="SPK_RET_SC_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_SC_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RET_SC_COMMERC_7_637245325__K33_1", columns={"KF_COMMISSION", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RET_SC_COMMERC_7_637245325__K1_K33", columns={"SPK_PROPERTYID", "KF_COMMISSION"}), @ORM\Index(name="_dta_index_SPK_RET_SC_COMMERC_c_7_637245325__K33", columns={"KF_COMMISSION"}), @ORM\Index(name="_dta_index_SPK_RET_SC_COMMERC_5_637245325__K1_21", columns={"SPK_PROPERTYID", "SALE_COST_MIN"}), @ORM\Index(name="_dta_index_SPK_RET_SC_COMMERC_5_637245325__K1_21_33", columns={"SPK_PROPERTYID", "SALE_COST_MIN", "KF_COMMISSION"})})
 * @ORM\Entity
 */
class SpkRetScCommerc
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
     * @ORM\Column(name="SC_TARGET", type="string", length=128, nullable=true)
     */
    private $scTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENT_VOLUME", type="string", length=256, nullable=true)
     */
    private $investmentVolume;

    /**
     * @var string
     *
     * @ORM\Column(name="GOODS_TURNOVER", type="string", length=256, nullable=true)
     */
    private $goodsTurnover;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $buildingCost;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_COST_PER_SQM", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $buildingCostPerSqm;

    /**
     * @var integer
     *
     * @ORM\Column(name="LEASER_COUNT", type="integer", nullable=true)
     */
    private $leaserCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="LEASER_ANCHOR_COUNT", type="integer", nullable=true)
     */
    private $leaserAnchorCount;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCK_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $blockAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BLOCK_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $blockAreaMax;

    /**
     * @var float
     *
     * @ORM\Column(name="TERM_OF_LEASE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $termOfLeaseMin;

    /**
     * @var float
     *
     * @ORM\Column(name="TERM_OF_LEASE_AVG", type="float", precision=53, scale=0, nullable=true)
     */
    private $termOfLeaseAvg;

    /**
     * @var float
     *
     * @ORM\Column(name="TERM_OF_LEASE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $termOfLeaseMax;

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
     * @ORM\Column(name="LEASE_COST_AVG", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseCostAvg;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $municipalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION_CONDITIONS", type="string", length=512, nullable=true)
     */
    private $indexationConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="ADVERTISMENT_EXPENSES", type="string", length=256, nullable=true)
     */
    private $advertismentExpenses;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION", type="string", length=256, nullable=true)
     */
    private $decoration;

    /**
     * @var string
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT", type="string", length=256, nullable=true)
     */
    private $insuranceDeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAY", type="string", length=256, nullable=true)
     */
    private $prepay;

    /**
     * @var string
     *
     * @ORM\Column(name="PAY_ORDER", type="string", length=256, nullable=true)
     */
    private $payOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_CONDITIONS", type="string", length=256, nullable=true)
     */
    private $contractConditions;

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
     * @ORM\Column(name="KF_COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommission;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=32, nullable=true)
     */
    private $vat;

    /**
     * @var float
     *
     * @ORM\Column(name="VALU", type="float", precision=53, scale=0, nullable=true)
     */
    private $valu;

    /**
     * @var string
     *
     * @ORM\Column(name="CUR", type="string", length=32, nullable=true)
     */
    private $cur;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=32, nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="LISTING", type="string", length=1, nullable=true)
     */
    private $listing;

    /**
     * @var float
     *
     * @ORM\Column(name="USD_RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $usdRate;

    /**
     * @var float
     *
     * @ORM\Column(name="EUR_RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $eurRate;

    /**
     * @var float
     *
     * @ORM\Column(name="CU_RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $cuRate;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_COST_CUR", type="string", length=32, nullable=true)
     */
    private $buildingCostCur;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_COST_SQM_CUR", type="string", length=32, nullable=true)
     */
    private $buildingCostSqmCur;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_CUR", type="string", length=32, nullable=true)
     */
    private $rentCur;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_COST_CUR", type="string", length=32, nullable=true)
     */
    private $saleCostCur;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_CUR", type="string", length=32, nullable=true)
     */
    private $municipalCostCur;


}
