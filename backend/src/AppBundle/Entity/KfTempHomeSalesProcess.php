<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempHomeSalesProcess
 *
 * @ORM\Table(name="KF_TEMP_HOME_SALES_PROCESS", indexes={@ORM\Index(name="KF_IX_CONTACTID", columns={"CONTACTID"}), @ORM\Index(name="KF_IX_MEGAID", columns={"MEGAID"})})
 * @ORM\Entity
 */
class KfTempHomeSalesProcess
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="MEGAID", type="string", length=12, nullable=false)
     */
    private $megaid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTRUS", type="string", length=256, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="NAMELFRUS", type="string", length=146, nullable=true)
     */
    private $namelfrus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEOPENED", type="datetime", nullable=true)
     */
    private $dateopened;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPTYPE", type="string", length=321, nullable=true)
     */
    private $opptype;

    /**
     * @var string
     *
     * @ORM\Column(name="STEP", type="string", length=37, nullable=true)
     */
    private $step;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONES", type="string", length=8000, nullable=false)
     */
    private $phones;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=64, nullable=true)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="ACTUALAMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actualamount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECLOSED", type="datetime", nullable=true)
     */
    private $dateclosed;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WIP", type="string", length=1, nullable=true)
     */
    private $isWip;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALES_STEP", type="integer", nullable=false)
     */
    private $salesStep;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTMANAGERID", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC", type="string", length=1674, nullable=false)
     */
    private $poiskAbc;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC_RUS", type="string", length=516, nullable=false)
     */
    private $poiskAbcRus;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_123", type="string", length=585, nullable=true)
     */
    private $poisk123;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_EMAIL", type="string", length=388, nullable=true)
     */
    private $poiskEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_IDS", type="string", length=51, nullable=true)
     */
    private $poiskIds;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;


}
