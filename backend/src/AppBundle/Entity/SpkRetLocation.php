<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetLocation
 *
 */
class SpkRetLocation
{
    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $cityZone;

    /**
     * @var string
     *
     */
    private $cityDescription;

    /**
     * @var string
     *
     */
    private $nearMetro;

    /**
     * @var float
     *
     */
    private $distanceFromMetro;

    /**
     * @var string
     *
     */
    private $highway;

    /**
     * @var float
     *
     */
    private $distanceFromRoad;

    /**
     * @var string
     *
     */
    private $visualAvailabilityRoad;

    /**
     * @var string
     *
     */
    private $surroundedBuildingup;

    /**
     * @var string
     *
     */
    private $shattleBus;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;

    /**
     * @var string
     *
     */
    private $shuttleBusCost;

    /**
     * @var float
     *
     */
    private $footAvailability;

    /**
     * @var float
     *
     */
    private $vehicleAvailability;

    /**
     * @var string
     *
     */
    private $visualAvailabilityMetro;


}
