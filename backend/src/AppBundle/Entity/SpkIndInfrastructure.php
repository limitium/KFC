<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndInfrastructure
 *
 */
class SpkIndInfrastructure
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
     * @var integer
     *
     */
    private $phoneLines;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var integer
     *
     */
    private $truckPlaces;

    /**
     * @var integer
     *
     */
    private $carPlaces;

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
     * @var float
     *
     */
    private $carCost;

    /**
     * @var float
     *
     */
    private $truckCost;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isLocalrailway;


}
