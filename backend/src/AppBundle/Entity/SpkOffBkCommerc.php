<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkCommerc
 *
 */
class SpkOffBkCommerc
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
    private $baseRent;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var string
     *
     */
    private $other;

    /**
     * @var string
     *
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     */
    private $costPerSqmMax;

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
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;


}
