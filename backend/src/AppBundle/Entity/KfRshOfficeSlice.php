<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshOfficeSlice
 *
 * @ORM\Table(name="kf_rsh_office_slice")
 * @ORM\Entity
 */
class KfRshOfficeSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FREE_SALE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeSaleArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseCostMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $costMin;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $costMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATING_EXP_TYPE", type="string", length=64, nullable=true)
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
     * @ORM\Column(name="UNDERGROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $undergroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $groundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOF_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $roofCost;

    /**
     * @var string
     *
     * @ORM\Column(name="USD", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $usd;

    /**
     * @var string
     *
     * @ORM\Column(name="EUR", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $eur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
