<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConstruction
 *
 */
class SpkRetConstruction
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
    private $storeysCount;

    /**
     * @var integer
     *
     */
    private $tradeStoreysCount;

    /**
     * @var string
     *
     */
    private $columnStep;

    /**
     * @var integer
     *
     */
    private $entranceCount;

    /**
     * @var integer
     *
     */
    private $escalatorCount;

    /**
     * @var string
     *
     */
    private $escalatorDescription;

    /**
     * @var integer
     *
     */
    private $travolatorCount;

    /**
     * @var string
     *
     */
    private $travolatorDescription;

    /**
     * @var integer
     *
     */
    private $liftCount;

    /**
     * @var integer
     *
     */
    private $visitorsLiftCount;

    /**
     * @var integer
     *
     */
    private $panoramicLiftCount;

    /**
     * @var string
     *
     */
    private $panoramicLiftDescription;

    /**
     * @var integer
     *
     */
    private $goodsLiftCount;

    /**
     * @var string
     *
     */
    private $goodsLiftDescription;

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
    private $storefront;


}
