<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshResidentialAptSlice
 *
 * @ORM\Table(name="kf_rsh_residential_apt_slice")
 * @ORM\Entity
 */
class KfRshResidentialAptSlice
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
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="total_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

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
     * @ORM\Column(name="operational_cost", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="CAR_PLACE_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $carPlaceCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="car_place", type="smallint", nullable=true)
     */
    private $carPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="string", length=64, nullable=true)
     */
    private $fitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=64, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="DISCOUNT", type="string", length=32, nullable=true)
     */
    private $discount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
