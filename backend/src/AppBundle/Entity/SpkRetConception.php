<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConception
 *
 */
class SpkRetConception
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
    private $zoneSizeType;

    /**
     * @var string
     *
     */
    private $consistingOf;

    /**
     * @var integer
     *
     */
    private $weekdaysVisitorsMin;

    /**
     * @var integer
     *
     */
    private $weekdaysVisitorsMax;

    /**
     * @var integer
     *
     */
    private $weekendVisitorsMin;

    /**
     * @var integer
     *
     */
    private $weekendVisitorsMax;

    /**
     * @var integer
     *
     */
    private $foodcortOperators;

    /**
     * @var integer
     *
     */
    private $foodcortTables;

    /**
     * @var float
     *
     */
    private $foodcortAreaKitchen;

    /**
     * @var float
     *
     */
    private $foodcortAreaTables;

    /**
     * @var string
     *
     */
    private $additionalServices;

    /**
     * @var string
     *
     */
    private $workTime;

    /**
     * @var string
     *
     */
    private $contactInfo;

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
    private $conceptionType;


}
