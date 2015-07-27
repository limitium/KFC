<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcCommerc
 *
 */
class SpkOffOcCommerc
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
    private $leaseCostMin;

    /**
     * @var string
     *
     */
    private $leaseCostMax;

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

    /**
     * @var float
     *
     */
    private $kfCommision;

    /**
     * @var float
     *
     */
    private $totalAreaKoef;

    /**
     * @var float
     *
     */
    private $operationalCost;

    /**
     * @var float
     *
     */
    private $additionalCost;

    /**
     * @var float
     *
     */
    private $deposit;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $operatingExpType;

    /**
     * @var integer
     *
     */
    private $leaseLength;

    /**
     * @var string
     *
     */
    private $termOfLeaseMin;

    /**
     * @var string
     *
     */
    private $termOfLeaseMax;

    /**
     * @var float
     *
     */
    private $fitoutCompensation;

    /**
     * @var float
     *
     */
    private $utilityCost;

    /**
     * @var string
     *
     */
    private $vatType;

    /**
     * @var string
     *
     */
    private $commercialTerms;

    /**
     * @var string
     *
     */
    private $utilityType;

    /**
     * @var string
     *
     */
    private $rentalHolidays;

    /**
     * @var float
     *
     */
    private $yield;

    /**
     * @var string
     *
     */
    private $oppStructure;

    /**
     * @var string
     *
     */
    private $ownershipCert;

    /**
     * @var string
     *
     */
    private $ownershipType;

    /**
     * @var string
     *
     */
    private $rentalStatusEng;

    /**
     * @var string
     *
     */
    private $rentalStatusRus;

    /**
     * @var float
     *
     */
    private $rentalRateAvg;

    /**
     * @var string
     *
     */
    private $rraCur;

    /**
     * @var float
     *
     */
    private $priceTaSqm;

    /**
     * @var float
     *
     */
    private $priceLaSqm;

    /**
     * @var string
     *
     */
    private $commercialTermsSale;


}
