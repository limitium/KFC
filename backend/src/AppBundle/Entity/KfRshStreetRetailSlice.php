<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshStreetRetailSlice
 *
 * @ORM\Table(name="kf_rsh_street_retail_slice")
 * @ORM\Entity
 */
class KfRshStreetRetailSlice
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
     * @ORM\Column(name="status", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_STAGE", type="string", length=128, nullable=true)
     */
    private $buildingStage;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_DEFAULT_RATE", type="decimal", precision=38, scale=6, nullable=true)
     */
    private $avgDefaultRate;

    /**
     * @var string
     *
     * @ORM\Column(name="AVG_DEFAULT_COST", type="decimal", precision=38, scale=6, nullable=true)
     */
    private $avgDefaultCost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
