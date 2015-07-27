<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOpportunityDetail
 *
 */
class SpkOpportunityDetail
{
    /**
     * @var string
     *
     */
    private $opportunityid;

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
    private $contactid;

    /**
     * @var string
     *
     */
    private $resellerContactid;

    /**
     * @var float
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $isDogovor;

    /**
     * @var string
     *
     */
    private $isOfferta;

    /**
     * @var float
     *
     */
    private $commitionKf;

    /**
     * @var string
     *
     */
    private $isPercent;

    /**
     * @var \DateTime
     *
     */
    private $dogovorDate;

    /**
     * @var \DateTime
     *
     */
    private $offertaDate;

    /**
     * @var string
     *
     */
    private $dogovorNumber;

    /**
     * @var string
     *
     */
    private $isAct;

    /**
     * @var string
     *
     */
    private $actNumber;

    /**
     * @var string
     *
     */
    private $isBill;

    /**
     * @var string
     *
     */
    private $billNumber;

    /**
     * @var string
     *
     */
    private $isInvoice;

    /**
     * @var string
     *
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     *
     */
    private $actDate;

    /**
     * @var \DateTime
     *
     */
    private $billDate;

    /**
     * @var \DateTime
     *
     */
    private $invoiceDate;

    /**
     * @var string
     *
     */
    private $isCompetitor;

    /**
     * @var string
     *
     */
    private $competitorid;

    /**
     * @var float
     *
     */
    private $oppAmount;

    /**
     * @var float
     *
     */
    private $potentialCost;

    /**
     * @var float
     *
     */
    private $potentialCommisionKf;

    /**
     * @var float
     *
     */
    private $potentialSquare;

    /**
     * @var string
     *
     */
    private $potentialCommisionType;

    /**
     * @var float
     *
     */
    private $potentialRent;

    /**
     * @var string
     *
     */
    private $commisionType;

    /**
     * @var float
     *
     */
    private $commisionKf;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $contractType;

    /**
     * @var \DateTime
     *
     */
    private $serviceActDate;

    /**
     * @var string
     *
     */
    private $serviceActNumber;

    /**
     * @var string
     *
     */
    private $isServiceAct;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

    /**
     * @var \DateTime
     *
     */
    private $tenantpayDate;

    /**
     * @var string
     *
     */
    private $isWip;

    /**
     * @var string
     *
     */
    private $kfCurrency;

    /**
     * @var string
     *
     */
    private $objectNotIndb;

    /**
     * @var string
     *
     */
    private $targetAcquisition;

    /**
     * @var string
     *
     */
    private $referraldesc;

    /**
     * @var string
     *
     */
    private $isPrepaymant;

    /**
     * @var string
     *
     */
    private $includeVat;

    /**
     * @var string
     *
     */
    private $whopays;

    /**
     * @var string
     *
     */
    private $isInactive;


}
