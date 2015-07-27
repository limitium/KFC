<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntBuildingStage
 *
 */
class SpkCntBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkCntBuildingStageid;

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
    private $stage;

    /**
     * @var string
     *
     */
    private $buldingStartMonth;

    /**
     * @var string
     *
     */
    private $buildingEndMonth;

    /**
     * @var string
     *
     */
    private $stageType;

    /**
     * @var integer
     *
     */
    private $housesCount;

    /**
     * @var integer
     *
     */
    private $availableHousesCount;

    /**
     * @var float
     *
     */
    private $houseAreaMin;

    /**
     * @var float
     *
     */
    private $houseAreaMax;

    /**
     * @var string
     *
     */
    private $houseType;

    /**
     * @var float
     *
     */
    private $landAreaMin;

    /**
     * @var float
     *
     */
    private $landAreaMax;

    /**
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingEndYear;


}
