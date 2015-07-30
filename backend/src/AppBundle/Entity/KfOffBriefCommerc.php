<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefCommerc
 *
 * @ORM\Table(name="KF_OFF_BRIEF_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_BRIEF_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_7_14_21", columns={"SPK_PROPERTYID", "CURRENCY", "OPERATIONAL_COST", "OPERATIONAL_COST_MAX"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_K6_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_31_32", columns={"SPK_PROPERTYID", "SECCODEID", "CURRENCY", "RENTAL_RATE_MIN", "RENTAL_RATE_MAX", "SALE_PRICE_MIN", "SALE_PRICE_MAX", "SALE_PER_SQM_MIN", "SALE_PER_SQM_MAX", "OPERATIONAL_COST", "OTHER_COST", "UTILITY_COST", "FIT_OUT", "PARKING_UNDERGROUND_COST", "PARKING_GROUND_COST", "PARKING_ROOF_COST", "OPERATIONAL_COST_MAX", "FIT_OUT_MAX", "CRENTAL_RATE", "CSALE_PRICE", "CSALE_PRICE_SQM", "COPERATIONAL_COST", "CFIT_OUT", "CUTILITY", "CROOF_PARKING", "CGROUND_PARKING", "CUNDER_PARKING", "COTHER"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K6_K1_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_31_32", columns={"SECCODEID", "SPK_PROPERTYID", "CURRENCY", "RENTAL_RATE_MIN", "RENTAL_RATE_MAX", "SALE_PRICE_MIN", "SALE_PRICE_MAX", "SALE_PER_SQM_MIN", "SALE_PER_SQM_MAX", "OPERATIONAL_COST", "OTHER_COST", "UTILITY_COST", "FIT_OUT", "PARKING_UNDERGROUND_COST", "PARKING_GROUND_COST", "PARKING_ROOF_COST", "OPERATIONAL_COST_MAX", "FIT_OUT_MAX", "CRENTAL_RATE", "CSALE_PRICE", "CSALE_PRICE_SQM", "COPERATIONAL_COST", "CFIT_OUT", "CUTILITY", "CROOF_PARKING", "CGROUND_PARKING", "CUNDER_PARKING", "COTHER"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_c_5_2125966650__K6", columns={"SECCODEID"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_c_5_2125966650__K1_K6", columns={"SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_8", columns={"SPK_PROPERTYID", "RENTAL_RATE_MIN"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_7_8_14_21", columns={"SPK_PROPERTYID", "CURRENCY", "RENTAL_RATE_MIN", "OPERATIONAL_COST", "OPERATIONAL_COST_MAX"})})
 * @ORM\Entity
 */
class KfOffBriefCommerc
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
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_RATE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalRateMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_RATE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalRateMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PRICE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePriceMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PRICE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePriceMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PER_SQM_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PER_SQM_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $otherCost;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $utilityCost;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $fitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_UNDERGROUND_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingUndergroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_GROUND_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingGroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_ROOF_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingRoofCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $fitOutMax;

    /**
     * @var string
     *
     * @ORM\Column(name="CRENTAL_RATE", type="string", length=32, nullable=true)
     */
    private $crentalRate;

    /**
     * @var string
     *
     * @ORM\Column(name="CSALE_PRICE", type="string", length=32, nullable=true)
     */
    private $csalePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="CSALE_PRICE_SQM", type="string", length=32, nullable=true)
     */
    private $csalePriceSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="COPERATIONAL_COST", type="string", length=32, nullable=true)
     */
    private $coperationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="CFIT_OUT", type="string", length=32, nullable=true)
     */
    private $cfitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="CUTILITY", type="string", length=32, nullable=true)
     */
    private $cutility;

    /**
     * @var string
     *
     * @ORM\Column(name="CROOF_PARKING", type="string", length=32, nullable=true)
     */
    private $croofParking;

    /**
     * @var string
     *
     * @ORM\Column(name="CGROUND_PARKING", type="string", length=32, nullable=true)
     */
    private $cgroundParking;

    /**
     * @var string
     *
     * @ORM\Column(name="CUNDER_PARKING", type="string", length=32, nullable=true)
     */
    private $cunderParking;

    /**
     * @var string
     *
     * @ORM\Column(name="COTHER", type="string", length=32, nullable=true)
     */
    private $cother;


}
