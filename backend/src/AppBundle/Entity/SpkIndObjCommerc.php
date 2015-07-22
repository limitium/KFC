<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndObjCommerc
 *
 * @ORM\Table(name="SPK_IND_OBJ_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_OBJ_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_IND_OBJ_COMMERC_7_2029250284__K1_K23", columns={"SPK_PROPERTYID", "KF_COMMISSION"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_COMMERC_7_2029250284__K23_K1", columns={"KF_COMMISSION", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_COMMERC_7_2029250284__K23", columns={"KF_COMMISSION"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_COMMERC_5_2029250284__K1_17", columns={"SPK_PROPERTYID", "SALE_COST_MIN"}), @ORM\Index(name="_dta_index_SPK_IND_OBJ_COMMERC_5_2029250284__K1_17_23", columns={"SPK_PROPERTYID", "SALE_COST_MIN", "KF_COMMISSION"})})
 * @ORM\Entity
 */
class SpkIndObjCommerc
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
     * @ORM\Column(name="LEASE_OFFICE_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseOfficeMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_OFFICE_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseOfficeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseIndustrialMax;

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
     * @ORM\Column(name="COST_PALLET", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPallet;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $loadUnloadCost;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=512, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=512, nullable=true)
     */
    private $commentsEng;

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
     * @var float
     *
     * @ORM\Column(name="TERM_OF_LEASE", type="float", precision=53, scale=0, nullable=true)
     */
    private $termOfLease;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION", type="string", length=32, nullable=true)
     */
    private $indexation;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_MESONIN_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseMesoninMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_MESONIN_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseMesoninMax;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommission;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_CONTRACT", type="string", length=64, nullable=true)
     */
    private $leaseContract;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseIndustrial;

    /**
     * @var string
     *
     * @ORM\Column(name="MINLEASETERM", type="string", length=32, nullable=true)
     */
    private $minleaseterm;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATION_EXP_TYPE", type="string", length=128, nullable=true)
     */
    private $operationExpType;

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
     * @ORM\Column(name="COMMERCIAL_TERMS", type="string", length=128, nullable=true)
     */
    private $commercialTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_STORAGE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $rentStorageCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $rentOfficeCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MEZZANINE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $rentMezzanineCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_INDUSTRIAL_CURRENCY", type="string", length=16, nullable=true)
     */
    private $rentIndustrialCurrency;

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

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_CURRENCY", type="string", length=16, nullable=true)
     */
    private $loadUnloadCurrency;


}
