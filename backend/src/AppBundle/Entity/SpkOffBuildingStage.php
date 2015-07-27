<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBuildingStage
 *
 */
class SpkOffBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkOffBuildingStageid;

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
    private $stageDate;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $currentStage;

    /**
     * @var integer
     *
     */
    private $stageYear;

    /**
     * @var integer
     *
     */
    private $stageQuarter;

    /**
     * @var integer
     *
     */
    private $stageMonth;

    /**
     * @var integer
     *
     */
    private $stageDay;

    /**
     * @var string
     *
     */
    private $phaseNumber;


}
