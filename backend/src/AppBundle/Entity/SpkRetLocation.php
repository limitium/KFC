<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetLocation
 *
 * @ORM\Table(name="SPK_RET_LOCATION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_LOCATION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetLocation
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
     * @ORM\Column(name="CITY_ZONE", type="string", length=32, nullable=true)
     */
    private $cityZone;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY_DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $cityDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="NEAR_METRO", type="string", length=1, nullable=true)
     */
    private $nearMetro;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_FROM_METRO", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceFromMetro;

    /**
     * @var string
     *
     * @ORM\Column(name="HIGHWAY", type="string", length=64, nullable=true)
     */
    private $highway;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_FROM_ROAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceFromRoad;

    /**
     * @var string
     *
     * @ORM\Column(name="VISUAL_AVAILABILITY_ROAD", type="string", length=1, nullable=true)
     */
    private $visualAvailabilityRoad;

    /**
     * @var string
     *
     * @ORM\Column(name="SURROUNDED_BUILDINGUP", type="string", length=32, nullable=true)
     */
    private $surroundedBuildingup;

    /**
     * @var string
     *
     * @ORM\Column(name="SHATTLE_BUS", type="string", length=1, nullable=true)
     */
    private $shattleBus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=256, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=256, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SHUTTLE_BUS_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $shuttleBusCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FOOT_AVAILABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $footAvailability;

    /**
     * @var float
     *
     * @ORM\Column(name="VEHICLE_AVAILABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $vehicleAvailability;

    /**
     * @var string
     *
     * @ORM\Column(name="VISUAL_AVAILABILITY_METRO", type="string", length=32, nullable=true)
     */
    private $visualAvailabilityMetro;


}
