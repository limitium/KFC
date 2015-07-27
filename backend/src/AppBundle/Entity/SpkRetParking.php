<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetParking
 *
 */
class SpkRetParking
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
    private $undergroundLevelCount;

    /**
     * @var integer
     *
     */
    private $undergroundPlaceCount;

    /**
     * @var string
     *
     */
    private $undergroundCost;

    /**
     * @var integer
     *
     */
    private $groundLevelCount;

    /**
     * @var integer
     *
     */
    private $groundPlaceCount;

    /**
     * @var string
     *
     */
    private $groundCost;

    /**
     * @var integer
     *
     */
    private $roofLevelCount;

    /**
     * @var integer
     *
     */
    private $roofPlaceCount;

    /**
     * @var string
     *
     */
    private $roofCost;

    /**
     * @var string
     *
     */
    private $parkingIndex;

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
     * @var integer
     *
     */
    private $multilevelLevelCount;

    /**
     * @var integer
     *
     */
    private $multilevelPlaceCount;

    /**
     * @var string
     *
     */
    private $multilevelCost;


}
