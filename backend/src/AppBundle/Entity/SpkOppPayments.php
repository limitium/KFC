<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppPayments
 *
 */
class SpkOppPayments
{
    /**
     * @var string
     *
     */
    private $spkOppPaymentsid;

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
     * @var \DateTime
     *
     */
    private $paymentDate;

    /**
     * @var integer
     *
     */
    private $paymentNumber;

    /**
     * @var float
     *
     */
    private $amount;

    /**
     * @var string
     *
     */
    private $managerid;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $moneyNal;

    /**
     * @var string
     *
     */
    private $moneyPerevod;

    /**
     * @var string
     *
     */
    private $moneyOffshore;

    /**
     * @var string
     *
     */
    private $isSubcontract;

    /**
     * @var string
     *
     */
    private $isPrepayment;

    /**
     * @var string
     *
     */
    private $currency;

    /**
     * @var string
     *
     */
    private $paymentDateCmp;


}
