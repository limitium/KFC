<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBkCommerc
 *
 * @ORM\Table(name="SPK_IND_BK_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_BK_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K1_24", columns={"SPK_PROPERTYID", "SALE_ALL"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K1_6_7_8_9", columns={"SPK_PROPERTYID", "LEASE_MIN", "LEASE_MAX", "SALE_MIN", "SALE_MAX"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K6_K1_7_8_9", columns={"LEASE_MIN", "SPK_PROPERTYID", "LEASE_MAX", "SALE_MIN", "SALE_MAX"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K6_7_8_9", columns={"LEASE_MIN", "LEASE_MAX", "SALE_MIN", "SALE_MAX"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K1_6_7_8_9_17_24_26", columns={"SPK_PROPERTYID", "LEASE_MIN", "LEASE_MAX", "SALE_MIN", "SALE_MAX", "RENT_OFFICE", "SALE_ALL", "BASE_RENT_DAY"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K1_6", columns={"SPK_PROPERTYID", "LEASE_MIN"}), @ORM\Index(name="_dta_index_SPK_IND_BK_COMMERC_5_733245667__K1_6_24", columns={"SPK_PROPERTYID", "LEASE_MIN", "SALE_ALL"})})
 * @ORM\Entity
 */
class SpkIndBkCommerc
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
     * @ORM\Column(name="LEASE_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $municipalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT", type="smallint", nullable=true)
     */
    private $insuranceDeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $loadUnloadCost;

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
     * @var string
     *
     * @ORM\Column(name="LEASE_MESONIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseMesonin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_STORAGE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorage;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PALLET", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costPallet;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_INDUSTRIAL", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentIndustrial;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOfficeMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_STORAGE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorageMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_INDUSTRIAL_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_ALL", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $saleAll;

    /**
     * @var string
     *
     * @ORM\Column(name="MINLEASETERM", type="string", length=32, nullable=true)
     */
    private $minleaseterm;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_RENT_DAY", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseRentDay;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $municipalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATING_EXP_TYPE", type="string", length=128, nullable=true)
     */
    private $operatingExpType;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=128, nullable=true)
     */
    private $vatType;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_TYPE", type="string", length=128, nullable=true)
     */
    private $utilityType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS", type="string", length=256, nullable=true)
     */
    private $commercialTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_TYPE", type="string", length=128, nullable=true)
     */
    private $saleType;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $storageCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $officeCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="MEZZANINE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $mezzanineCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="IND_CURRENCY", type="string", length=16, nullable=true)
     */
    private $indCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $costCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_SQM_CURRENCY", type="string", length=16, nullable=true)
     */
    private $costSqmCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_CURRENCY", type="string", length=16, nullable=true)
     */
    private $loadCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_CURRENCY", type="string", length=16, nullable=true)
     */
    private $utilityCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_CURRENCY", type="string", length=16, nullable=true)
     */
    private $opexCurrency;


}
