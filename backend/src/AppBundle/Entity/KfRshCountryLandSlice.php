<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshCountryLandSlice
 *
 * @ORM\Table(name="kf_rsh_country_land_slice")
 * @ORM\Entity
 */
class KfRshCountryLandSlice
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
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
