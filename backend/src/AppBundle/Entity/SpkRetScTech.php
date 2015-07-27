<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScTech
 *
 */
class SpkRetScTech
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
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $tradeArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $useTradeArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $undergroundArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var float
     *
     */
    private $developmentArea;

    /**
     * @var integer
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingStartNote;

    /**
     * @var integer
     *
     */
    private $planningStartupYear;

    /**
     * @var integer
     *
     */
    private $strartupYear;

    /**
     * @var integer
     *
     */
    private $dateOpenYear;

    /**
     * @var string
     *
     */
    private $dateOpenNote;

    /**
     * @var integer
     *
     */
    private $reconstructionBeginYear;

    /**
     * @var string
     *
     */
    private $reconstructionBeginNote;

    /**
     * @var integer
     *
     */
    private $reconstructionEndYear;

    /**
     * @var string
     *
     */
    private $reconstructionEndNote;

    /**
     * @var float
     *
     */
    private $rate;

    /**
     * @var float
     *
     */
    private $entertainmentTotalArea;

    /**
     * @var string
     *
     */
    private $planningStartupQuarter;

    /**
     * @var string
     *
     */
    private $buildingStage;

    /**
     * @var float
     *
     */
    private $hotelArea;

    /**
     * @var float
     *
     */
    private $residentialArea;

    /**
     * @var float
     *
     */
    private $exhibitionArea;

    /**
     * @var string
     *
     */
    private $profTc;

    /**
     * @var string
     *
     */
    private $expIncluded;

    /**
     * @var integer
     *
     */
    private $storeys;

    /**
     * @var float
     *
     */
    private $basementArea;

    /**
     * @var float
     *
     */
    private $capArea;

    /**
     * @var float
     *
     */
    private $firstFloorArea;

    /**
     * @var float
     *
     */
    private $seconfFloorArea;

    /**
     * @var float
     *
     */
    private $entresolArea;

    /**
     * @var string
     *
     */
    private $shopName;

    /**
     * @var float
     *
     */
    private $saleArea;

    /**
     * @var string
     *
     */
    private $firstLine;

    /**
     * @var string
     *
     */
    private $windows;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $techComments;

    /**
     * @var string
     *
     */
    private $houseType;


}
