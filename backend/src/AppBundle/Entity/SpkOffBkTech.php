<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkTech
 *
 */
class SpkOffBkTech
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
    private $storeyNumber;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var float
     *
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     */
    private $ventilation;

    /**
     * @var integer
     *
     */
    private $phoneLineCount;

    /**
     * @var string
     *
     */
    private $telecommunication;

    /**
     * @var string
     *
     */
    private $provider;

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
    private $decoration;

    /**
     * @var integer
     *
     */
    private $storeyCountMax;

    /**
     * @var integer
     *
     */
    private $complYear;

    /**
     * @var integer
     *
     */
    private $complQuarter;

    /**
     * @var integer
     *
     */
    private $complMonth;

    /**
     * @var integer
     *
     */
    private $complDay;


}
