<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfProjectExport
 *
 * @ORM\Table(name="KF_PROJECT_EXPORT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROJECT_EXPORT_PRIMARY", columns={"KF_PROJECTSID"})}, indexes={@ORM\Index(name="KF_PROJECT_EXPORT_SECCODEID", columns={"SECCODEID"})})
 * @ORM\Entity
 */
class KfProjectExport
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfProjectsid;

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
     * @ORM\Column(name="EXPORT_TO_WEB", type="string", length=1, nullable=true)
     */
    private $exportToWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_LOCATION", type="string", length=1, nullable=true)
     */
    private $showLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=true)
     */
    private $spkAddressid;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_CLIENT", type="string", length=1, nullable=true)
     */
    private $showClient;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;

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
     * @var float
     *
     * @ORM\Column(name="ACCURACY", type="float", precision=53, scale=0, nullable=true)
     */
    private $accuracy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS_TEXT", type="string", length=1024, nullable=true)
     */
    private $addressText;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
