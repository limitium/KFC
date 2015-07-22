<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppPayments
 *
 * @ORM\Table(name="SPK_OPP_PAYMENTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_PAYMENTS_PRIMARY", columns={"SPK_OPP_PAYMENTSID"})}, indexes={@ORM\Index(name="KF_SR_IX_PayDay_incl", columns={"PAYMENT_DATE", "AMOUNT"}), @ORM\Index(name="SPK_OPP_PAYMENTS_OPPORTUNITYID", columns={"OPPORTUNITYID"}), @ORM\Index(name="KF_SR_IX_oppID_fls_incl", columns={"OPPORTUNITYID", "IS_SUBCONTRACT", "AMOUNT"})})
 * @ORM\Entity
 */
class SpkOppPayments
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_PAYMENTSID", type="string", length=12, nullable=false)
     */
    private $spkOppPaymentsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PAYMENT_DATE", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PAYMENT_NUMBER", type="integer", nullable=true)
     */
    private $paymentNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=1024, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=1, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="MONEY_NAL", type="string", length=1, nullable=true)
     */
    private $moneyNal;

    /**
     * @var string
     *
     * @ORM\Column(name="MONEY_PEREVOD", type="string", length=1, nullable=true)
     */
    private $moneyPerevod;

    /**
     * @var string
     *
     * @ORM\Column(name="MONEY_OFFSHORE", type="string", length=1, nullable=true)
     */
    private $moneyOffshore;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_SUBCONTRACT", type="string", length=1, nullable=true)
     */
    private $isSubcontract;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PREPAYMENT", type="string", length=1, nullable=true)
     */
    private $isPrepayment;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_DATE_cmp", type="string", length=10, nullable=true)
     */
    private $paymentDateCmp;


}
