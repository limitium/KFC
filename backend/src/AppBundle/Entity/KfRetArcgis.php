<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRetArcgis
 *
 * @ORM\Table(name="KF_RET_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RET_ARCGIS_PRIMARY", columns={"KF_RET_ARCGISID"})})
 * @ORM\Entity
 */
class KfRetArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RET_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfRetArcgisid;

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
     * @ORM\Column(name="COMPNAME", type="string", length=16, nullable=true)
     */
    private $compname;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=10, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RUS", type="string", length=128, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SMALL_ADDRESS", type="string", length=1000, nullable=true)
     */
    private $smallAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="CONCEPTION_TYPE", type="string", length=64, nullable=true)
     */
    private $conceptionType;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=1000, nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATE_OPEN_YEAR", type="integer", nullable=true)
     */
    private $dateOpenYear;

    /**
     * @var string
     *
     * @ORM\Column(name="PROF", type="string", length=1, nullable=true)
     */
    private $prof;

    /**
     * @var string
     *
     * @ORM\Column(name="LANDLORD", type="string", length=1000, nullable=true)
     */
    private $landlord;

    /**
     * @var float
     *
     * @ORM\Column(name="LATITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="LONGTITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $longtitude;


}
