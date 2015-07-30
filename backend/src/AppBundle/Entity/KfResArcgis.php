<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResArcgis
 *
 * @ORM\Table(name="KF_RES_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RES_ARCGIS_PRIMARY", columns={"KF_RES_ARCGISID"})})
 * @ORM\Entity
 */
class KfResArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RES_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfResArcgisid;

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
     * @var string
     *
     * @ORM\Column(name="AREA_RUS", type="string", length=128, nullable=true)
     */
    private $areaRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILD_QUARTER", type="string", length=1000, nullable=true)
     */
    private $buildQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILD_YEAR", type="integer", nullable=true)
     */
    private $buildYear;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $livingArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKING", type="smallint", nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="INFRASTRUCTURE", type="string", length=1000, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDER", type="string", length=1000, nullable=true)
     */
    private $builder;

    /**
     * @var integer
     *
     * @ORM\Column(name="APARTMENTS_COUNT", type="smallint", nullable=true)
     */
    private $apartmentsCount;

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
