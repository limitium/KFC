<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingPayments
 *
 * @ORM\Table(name="KF_MARKETING_PAYMENTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PAYMENTS_PRIMARY", columns={"KF_MARKETING_PAYMENTSID"})}, indexes={@ORM\Index(name="KF_MARKETING_PAYMENTS_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingPayments
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PAYMENTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingPaymentsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTOR", type="string", length=12, nullable=true)
     */
    private $contractor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PAID_DATE", type="datetime", nullable=true)
     */
    private $paidDate;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_INCL_VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountInclVat;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=32, nullable=true)
     */
    private $vatType;

    /**
     * @var float
     *
     * @ORM\Column(name="VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="TO_ACCOUNTING", type="string", length=1, nullable=true)
     */
    private $toAccounting;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_DATE", type="datetime", nullable=true)
     */
    private $estimatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;


}
