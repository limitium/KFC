<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffParking
 *
 */
class SpkOffParking
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
    private $koef;

    /**
     * @var string
     *
     */
    private $parkingCost;

    /**
     * @var integer
     *
     */
    private $liftCountNew;

    /**
     * @var integer
     *
     */
    private $liftWeightNew;


}
