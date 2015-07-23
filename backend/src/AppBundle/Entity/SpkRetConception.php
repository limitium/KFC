<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConception
 *
 * @ORM\Table(name="SPK_RET_CONCEPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_CONCEPTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetConception
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="ZONE_SIZE_TYPE", type="string", length=32, nullable=true)
     */
    private $zoneSizeType;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSISTING_OF", type="string", length=64, nullable=true)
     */
    private $consistingOf;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEEKDAYS_VISITORS_MIN", type="integer", nullable=true)
     */
    private $weekdaysVisitorsMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEEKDAYS_VISITORS_MAX", type="integer", nullable=true)
     */
    private $weekdaysVisitorsMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEEKEND_VISITORS_MIN", type="integer", nullable=true)
     */
    private $weekendVisitorsMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEEKEND_VISITORS_MAX", type="integer", nullable=true)
     */
    private $weekendVisitorsMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="FOODCORT_OPERATORS", type="smallint", nullable=true)
     */
    private $foodcortOperators;

    /**
     * @var integer
     *
     * @ORM\Column(name="FOODCORT_TABLES", type="smallint", nullable=true)
     */
    private $foodcortTables;

    /**
     * @var float
     *
     * @ORM\Column(name="FOODCORT_AREA_KITCHEN", type="float", precision=53, scale=0, nullable=true)
     */
    private $foodcortAreaKitchen;

    /**
     * @var float
     *
     * @ORM\Column(name="FOODCORT_AREA_TABLES", type="float", precision=53, scale=0, nullable=true)
     */
    private $foodcortAreaTables;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_SERVICES", type="string", length=128, nullable=true)
     */
    private $additionalServices;

    /**
     * @var string
     *
     * @ORM\Column(name="WORK_TIME", type="string", length=64, nullable=true)
     */
    private $workTime;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_INFO", type="string", length=64, nullable=true)
     */
    private $contactInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=256, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=256, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="CONCEPTION_TYPE", type="string", length=64, nullable=true)
     */
    private $conceptionType;


}
