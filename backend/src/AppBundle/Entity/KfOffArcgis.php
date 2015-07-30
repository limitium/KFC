<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffArcgis
 *
 * @ORM\Table(name="KF_OFF_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_ARCGIS_PRIMARY", columns={"KF_OFF_ARCGISID"})})
 * @ORM\Entity
 */
class KfOffArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OFF_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfOffArcgisid;

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
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

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
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPL_YEAR", type="string", length=50, nullable=true)
     */
    private $complYear;

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

    /**
     * @var string
     *
     * @ORM\Column(name="COMPL_YEAR_NEW", type="string", length=32, nullable=true)
     */
    private $complYearNew;


}
