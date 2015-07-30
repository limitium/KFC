<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNalPayments
 *
 * @ORM\Table(name="KF_NAL_PAYMENTS")
 * @ORM\Entity
 */
class KfNalPayments
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_NAL_PAYMENTSID", type="string", length=12, nullable=false)
     */
    private $kfNalPaymentsid;

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
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;


}
