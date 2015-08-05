<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="CONTRACT", uniqueConstraints={@ORM\UniqueConstraint(name="PK_CONTRACT", columns={"CONTRACTID"}), @ORM\UniqueConstraint(name="XAK1CONTRACT", columns={"ACCOUNTID", "CONTRACTID"})})
 * @ORM\Entity
 */
class Contract
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICECODE", type="string", length=12, nullable=true)
     */
    private $servicecode;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPECODE", type="string", length=12, nullable=true)
     */
    private $typecode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PURCHASEDATE", type="datetime", nullable=true)
     */
    private $purchasedate;

    /**
     * @var float
     *
     * @ORM\Column(name="PERIOD", type="float", precision=53, scale=0, nullable=true)
     */
    private $period;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDINGDATE", type="datetime", nullable=true)
     */
    private $endingdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTLEFT", type="string", length=32, nullable=true)
     */
    private $contractleft;

    /**
     * @var string
     *
     * @ORM\Column(name="BLANKET", type="string", length=1, nullable=true)
     */
    private $blanket;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTCALL", type="string", length=1, nullable=true)
     */
    private $firstcall;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTTICKET", type="string", length=1, nullable=true)
     */
    private $firstticket;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRACEPERIOD", type="integer", nullable=true)
     */
    private $graceperiod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FIRSTDATE", type="datetime", nullable=true)
     */
    private $firstdate;

    /**
     * @var string
     *
     * @ORM\Column(name="AMOUNT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD1", type="string", length=80, nullable=true)
     */
    private $userfield1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD2", type="string", length=80, nullable=true)
     */
    private $userfield2;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD3", type="string", length=80, nullable=true)
     */
    private $userfield3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD4", type="string", length=80, nullable=true)
     */
    private $userfield4;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD5", type="string", length=80, nullable=true)
     */
    private $userfield5;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD6", type="string", length=80, nullable=true)
     */
    private $userfield6;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD7", type="string", length=80, nullable=true)
     */
    private $userfield7;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD8", type="string", length=80, nullable=true)
     */
    private $userfield8;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD9", type="string", length=80, nullable=true)
     */
    private $userfield9;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD10", type="string", length=80, nullable=true)
     */
    private $userfield10;

    /**
     * @var float
     *
     * @ORM\Column(name="REMAINING", type="float", precision=53, scale=0, nullable=true)
     */
    private $remaining;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="LISTPRICE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $listprice;

    /**
     * @var string
     *
     * @ORM\Column(name="PONUMBER", type="string", length=64, nullable=true)
     */
    private $ponumber;

    /**
     * @var float
     *
     * @ORM\Column(name="DISCOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="ISACTIVE", type="string", length=1, nullable=true)
     */
    private $isactive;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCENO", type="string", length=128, nullable=true)
     */
    private $referenceno;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
