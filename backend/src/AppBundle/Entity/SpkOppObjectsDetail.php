<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjectsDetail
 *
 */
class SpkOppObjectsDetail
{
    /**
     * @var string
     *
     */
    private $spkOppObjectsid;

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
    private $finalRent;

    /**
     * @var float
     *
     */
    private $finalSquare;

    /**
     * @var float
     *
     */
    private $operationalPayments;

    /**
     * @var float
     *
     */
    private $depopsitRequest;

    /**
     * @var float
     *
     */
    private $deposit;

    /**
     * @var float
     *
     */
    private $prepeymentRequest;

    /**
     * @var float
     *
     */
    private $prepayment;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var float
     *
     */
    private $percentBlackWhite;

    /**
     * @var float
     *
     */
    private $percentOborot;

    /**
     * @var \DateTime
     *
     */
    private $leaseEndDate;

    /**
     * @var string
     *
     */
    private $isNds;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $dogovorType;

    /**
     * @var float
     *
     */
    private $finalCost;

    /**
     * @var float
     *
     */
    private $finalSqmCost;

    /**
     * @var float
     *
     */
    private $finalLandSqmCost;

    /**
     * @var float
     *
     */
    private $startRent;

    /**
     * @var float
     *
     */
    private $startCost;


}
