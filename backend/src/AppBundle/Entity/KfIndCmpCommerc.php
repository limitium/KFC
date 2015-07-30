<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfIndCmpCommerc
 *
 * @ORM\Table(name="KF_IND_CMP_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_IND_CMP_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_5_1304391716__K6_K1_17_18_19_20", columns={"SECCODEID", "SPK_PROPERTYID", "RENT_MIN", "RENT_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_5_1304391716__K1_K6_17_18_19_20", columns={"SPK_PROPERTYID", "SECCODEID", "RENT_MIN", "RENT_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_c_5_1304391716__K6", columns={"SECCODEID"})})
 * @ORM\Entity
 */
class KfIndCmpCommerc
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
     * @ORM\Column(name="RENT_STORAGE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorageMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_STORAGE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorageMax;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOfficeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MESONIN_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseMesoninMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MESONIN_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseMesoninMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $municipalCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $municipalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $insuranceDepositMin;

    /**
     * @var string
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $insuranceDepositMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PALLET_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costPalletMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PALLET_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costPalletMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $loadUnloadCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $loadUnloadCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_CONTRACT", type="string", length=32, nullable=true)
     */
    private $leaseContract;

    /**
     * @var string
     *
     * @ORM\Column(name="RATE_INDEXATION", type="string", length=1, nullable=true)
     */
    private $rateIndexation;

    /**
     * @var string
     *
     * @ORM\Column(name="INF_ON_DEMAND", type="string", length=1, nullable=true)
     */
    private $infOnDemand;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT_RUS", type="text", length=16, nullable=true)
     */
    private $commentRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT_ENG", type="text", length=16, nullable=true)
     */
    private $commentEng;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseIndustrialMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MINLEASETERM", type="string", length=32, nullable=true)
     */
    private $minleaseterm;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_EXP_TYPE", type="string", length=128, nullable=true)
     */
    private $operationalExpType;

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
     * @ORM\Column(name="COMMERCIA_TERMS", type="string", length=32, nullable=true)
     */
    private $commerciaTerms;


}
