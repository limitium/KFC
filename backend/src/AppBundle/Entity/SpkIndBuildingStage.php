<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBuildingStage
 *
 */
class SpkIndBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkIndBuildingStageid;

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
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $mesoninArea;

    /**
     * @var float
     *
     */
    private $availiableArea;

    /**
     * @var \DateTime
     *
     */
    private $startDate;

    /**
     * @var string
     *
     */
    private $iscurrent;

    /**
     * @var \DateTime
     *
     */
    private $endDate;

    /**
     * @var string
     *
     */
    private $finished;


}
