<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingPlan
 *
 * @ORM\Table(name="KF_MARKETING_PLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PLAN_PRIMARY", columns={"KF_MARKETING_PLANID"})}, indexes={@ORM\Index(name="KF_MARKETING_PLAN_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfMarketingPlan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PLANID", type="string", length=12, nullable=false)
     */
    private $kfMarketingPlanid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

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
     * @ORM\Column(name="BUDGET_TYPE", type="string", length=64, nullable=true)
     */
    private $budgetType;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH1", type="float", precision=53, scale=0, nullable=true)
     */
    private $month1;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH1YEAR", type="string", length=8, nullable=true)
     */
    private $month1year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH2", type="float", precision=53, scale=0, nullable=true)
     */
    private $month2;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH2YEAR", type="string", length=8, nullable=true)
     */
    private $month2year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH3", type="float", precision=53, scale=0, nullable=true)
     */
    private $month3;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH3YEAR", type="string", length=8, nullable=true)
     */
    private $month3year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH4", type="float", precision=53, scale=0, nullable=true)
     */
    private $month4;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH4YEAR", type="string", length=8, nullable=true)
     */
    private $month4year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH5", type="float", precision=53, scale=0, nullable=true)
     */
    private $month5;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH5YEAR", type="string", length=8, nullable=true)
     */
    private $month5year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH6", type="float", precision=53, scale=0, nullable=true)
     */
    private $month6;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH6YEAR", type="string", length=8, nullable=true)
     */
    private $month6year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH7", type="float", precision=53, scale=0, nullable=true)
     */
    private $month7;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH7YEAR", type="string", length=8, nullable=true)
     */
    private $month7year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH8", type="float", precision=53, scale=0, nullable=true)
     */
    private $month8;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH8YEAR", type="string", length=8, nullable=true)
     */
    private $month8year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH9", type="float", precision=53, scale=0, nullable=true)
     */
    private $month9;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH9YEAR", type="string", length=8, nullable=true)
     */
    private $month9year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH10", type="float", precision=53, scale=0, nullable=true)
     */
    private $month10;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH10YEAR", type="string", length=8, nullable=true)
     */
    private $month10year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH11", type="float", precision=53, scale=0, nullable=true)
     */
    private $month11;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH11YEAR", type="string", length=8, nullable=true)
     */
    private $month11year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH12", type="float", precision=53, scale=0, nullable=true)
     */
    private $month12;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH12YEAR", type="string", length=8, nullable=true)
     */
    private $month12year;


}
