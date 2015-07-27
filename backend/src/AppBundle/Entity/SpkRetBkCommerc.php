<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetBkCommerc
 *
 */
class SpkRetBkCommerc
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
    private $defaultRate;

    /**
     * @var string
     *
     */
    private $defaultCost;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var integer
     *
     */
    private $defaultDeposit;

    /**
     * @var integer
     *
     */
    private $defaultPrepayment;

    /**
     * @var string
     *
     */
    private $additionalConditions;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var integer
     *
     */
    private $termOfLease;

    /**
     * @var float
     *
     */
    private $kfCommission;

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
    private $finalCost;

    /**
     * @var string
     *
     */
    private $finalRate;

    /**
     * @var string
     *
     */
    private $usdRate;

    /**
     * @var string
     *
     */
    private $eurRate;

    /**
     * @var string
     *
     */
    private $rateCur;

    /**
     * @var string
     *
     */
    private $cuRate;

    /**
     * @var string
     *
     */
    private $finalCostCur;

    /**
     * @var string
     *
     */
    private $industrialCur;

    /**
     * @var string
     *
     */
    private $officeRentalRateCur;

    /**
     * @var string
     *
     */
    private $costCur;

    /**
     * @var string
     *
     */
    private $opexCur;

    /**
     * @var string
     *
     */
    private $finalRateCur;

    /**
     * @var string
     *
     */
    private $costObject;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $depositText;

    /**
     * @var string
     *
     */
    private $termText;

    /**
     * @var string
     *
     */
    private $costObjectCur;


}
