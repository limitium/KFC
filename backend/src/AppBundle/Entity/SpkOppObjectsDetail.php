<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjectsDetail
 *
 * @ORM\Table(name="SPK_OPP_OBJECTS_DETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_OBJECTS_DETAIL_PRIMARY", columns={"SPK_OPP_OBJECTSID"})})
 * @ORM\Entity
 */
class SpkOppObjectsDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_OBJECTSID", type="string", length=12, nullable=false)
     */
    private $spkOppObjectsid;

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
     * @var float
     *
     * @ORM\Column(name="FINAL_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalRent;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalSquare;

    /**
     * @var float
     *
     * @ORM\Column(name="OPERATIONAL_PAYMENTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $operationalPayments;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOPSIT_REQUEST", type="float", precision=53, scale=0, nullable=true)
     */
    private $depopsitRequest;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT", type="float", precision=53, scale=0, nullable=true)
     */
    private $deposit;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPEYMENT_REQUEST", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepeymentRequest;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPAYMENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepayment;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $paymentType;

    /**
     * @var float
     *
     * @ORM\Column(name="PERCENT_BLACK_WHITE", type="float", precision=53, scale=0, nullable=true)
     */
    private $percentBlackWhite;

    /**
     * @var float
     *
     * @ORM\Column(name="PERCENT_OBOROT", type="float", precision=53, scale=0, nullable=true)
     */
    private $percentOborot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_END_DATE", type="datetime", nullable=true)
     */
    private $leaseEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_NDS", type="string", length=1, nullable=true)
     */
    private $isNds;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=1024, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR_TYPE", type="string", length=64, nullable=true)
     */
    private $dogovorType;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_SQM_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalSqmCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_LAND_SQM_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalLandSqmCost;

    /**
     * @var float
     *
     * @ORM\Column(name="START_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $startRent;

    /**
     * @var float
     *
     * @ORM\Column(name="START_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $startCost;


}
