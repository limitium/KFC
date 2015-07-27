<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScCommerc
 *
 */
class SpkRetScCommerc
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
    private $scTarget;

    /**
     * @var string
     *
     */
    private $investmentVolume;

    /**
     * @var string
     *
     */
    private $goodsTurnover;

    /**
     * @var string
     *
     */
    private $buildingCost;

    /**
     * @var string
     *
     */
    private $buildingCostPerSqm;

    /**
     * @var integer
     *
     */
    private $leaserCount;

    /**
     * @var integer
     *
     */
    private $leaserAnchorCount;

    /**
     * @var float
     *
     */
    private $blockAreaMin;

    /**
     * @var float
     *
     */
    private $blockAreaMax;

    /**
     * @var float
     *
     */
    private $termOfLeaseMin;

    /**
     * @var float
     *
     */
    private $termOfLeaseAvg;

    /**
     * @var float
     *
     */
    private $termOfLeaseMax;

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
    private $leaseCostAvg;

    /**
     * @var string
     *
     */
    private $saleCostMin;

    /**
     * @var string
     *
     */
    private $saleCostMax;

    /**
     * @var string
     *
     */
    private $municipalCost;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $advertismentExpenses;

    /**
     * @var string
     *
     */
    private $decoration;

    /**
     * @var string
     *
     */
    private $insuranceDeposit;

    /**
     * @var string
     *
     */
    private $prepay;

    /**
     * @var string
     *
     */
    private $payOrder;

    /**
     * @var string
     *
     */
    private $contractConditions;

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
    private $kfCommission;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var float
     *
     */
    private $valu;

    /**
     * @var string
     *
     */
    private $cur;

    /**
     * @var string
     *
     */
    private $typ;

    /**
     * @var string
     *
     */
    private $listing;

    /**
     * @var float
     *
     */
    private $usdRate;

    /**
     * @var float
     *
     */
    private $eurRate;

    /**
     * @var float
     *
     */
    private $cuRate;

    /**
     * @var string
     *
     */
    private $buildingCostCur;

    /**
     * @var string
     *
     */
    private $buildingCostSqmCur;

    /**
     * @var string
     *
     */
    private $rentCur;

    /**
     * @var string
     *
     */
    private $saleCostCur;

    /**
     * @var string
     *
     */
    private $municipalCostCur;


}
