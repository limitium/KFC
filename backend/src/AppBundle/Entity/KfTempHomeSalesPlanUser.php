<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempHomeSalesPlanUser
 *
 * @ORM\Table(name="KF_TEMP_HOME_SALES_PLAN_USER")
 * @ORM\Entity
 */
class KfTempHomeSalesPlanUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=12, nullable=true)
     */
    private $ssn;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=4, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="broker", type="string", length=12, nullable=true)
     */
    private $broker;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_closed", type="smallint", nullable=true)
     */
    private $yearClosed;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=53, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="PLAN_AMOUNT", type="float", precision=53, scale=0, nullable=false)
     */
    private $planAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="PLAN_AMOUNT_PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $planAmountProbability;

    /**
     * @var integer
     *
     * @ORM\Column(name="place_dep", type="bigint", nullable=true)
     */
    private $placeDep;

    /**
     * @var integer
     *
     * @ORM\Column(name="place_all", type="bigint", nullable=true)
     */
    private $placeAll;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;


}
