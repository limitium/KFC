<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshRetailSlice
 *
 * @ORM\Table(name="kf_rsh_retail_slice")
 * @ORM\Entity
 */
class KfRshRetailSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_STAGE", type="string", length=128, nullable=true)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_BIG", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateBig;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_BIG", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateBig;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_LIT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateLit;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_LIT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateLit;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_CHILD", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateChild;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_CHILD", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateChild;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_SHOUES", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateShoues;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_SHOUES", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateShoues;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RATE_LEATHER", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $minRateLeather;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RATE_LEATHER", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $maxRateLeather;

    /**
     * @var float
     *
     * @ORM\Column(name="SRED_VZV_LIT_ANCH", type="float", precision=53, scale=0, nullable=true)
     */
    private $sredVzvLitAnch;

    /**
     * @var float
     *
     * @ORM\Column(name="SRED_VZV_BIG_ANCH", type="float", precision=53, scale=0, nullable=true)
     */
    private $sredVzvBigAnch;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_SALE_COST", type="decimal", precision=20, scale=6, nullable=true)
     */
    private $avgSaleCost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
