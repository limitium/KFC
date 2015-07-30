<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshCountryHouseSlice
 *
 * @ORM\Table(name="kf_rsh_country_house_slice")
 * @ORM\Entity
 */
class KfRshCountryHouseSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=10, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Building_stage", type="string", length=14, nullable=false)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=32, nullable=true)
     */
    private $status;

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
     * @ORM\Column(name="COST_PER_100_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Min;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Max;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=256, nullable=true)
     */
    private $market;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
