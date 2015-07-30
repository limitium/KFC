<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffCmpCommerc
 *
 * @ORM\Table(name="KF_OFF_CMP_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_CMP_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfOffCmpCommerc
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
     * @ORM\Column(name="OPERATING_EXPENSES_TYPE", type="string", length=64, nullable=true)
     */
    private $operatingExpensesType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS", type="string", length=64, nullable=true)
     */
    private $commercialTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=64, nullable=true)
     */
    private $vat;

    /**
     * @var float
     *
     * @ORM\Column(name="UTILITY_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $utilityCost;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_TYPE", type="string", length=64, nullable=true)
     */
    private $utilityType;

    /**
     * @var float
     *
     * @ORM\Column(name="FIT_OUT_COMPENSATION", type="float", precision=53, scale=0, nullable=true)
     */
    private $fitOutCompensation;

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
     * @ORM\Column(name="SALE_PRICE", type="float", precision=53, scale=0, nullable=true)
     */
    private $salePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_CURRENCY", type="string", length=32, nullable=true)
     */
    private $saleCurrency;

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
     * @ORM\Column(name="CERTIFICATE_OWNERSHIP", type="string", length=128, nullable=true)
     */
    private $certificateOwnership;

    /**
     * @var string
     *
     * @ORM\Column(name="OWNERSHIP_TYPE", type="string", length=128, nullable=true)
     */
    private $ownershipType;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_RUS", type="string", length=128, nullable=true)
     */
    private $rentalStatusRus;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_ENG", type="string", length=128, nullable=true)
     */
    private $rentalStatusEng;

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
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS_SALE", type="string", length=256, nullable=true)
     */
    private $commercialTermsSale;


}
