<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResInfrastructure
 *
 */
class SpkResInfrastructure
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
    private $parkingType1;

    /**
     * @var string
     *
     */
    private $parkingEntrance1;

    /**
     * @var integer
     *
     */
    private $parkingCount1;

    /**
     * @var string
     *
     */
    private $parkingComment1;

    /**
     * @var string
     *
     */
    private $parkingType2;

    /**
     * @var string
     *
     */
    private $parkingEntrance2;

    /**
     * @var integer
     *
     */
    private $parkingCount2;

    /**
     * @var string
     *
     */
    private $parkingComment2;

    /**
     * @var string
     *
     */
    private $parkingType3;

    /**
     * @var string
     *
     */
    private $parkingEntrance3;

    /**
     * @var integer
     *
     */
    private $parkingCount3;

    /**
     * @var string
     *
     */
    private $parkingComment3;

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
    private $washing;


}
