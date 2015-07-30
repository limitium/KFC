<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffCmpTech
 *
 * @ORM\Table(name="KF_OFF_CMP_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_CMP_TECH_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfOffCmpTech
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_DISTRICT", type="string", length=64, nullable=true)
     */
    private $kfDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_TYPE", type="string", length=128, nullable=true)
     */
    private $complexType;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="RETAIL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $retailArea;

    /**
     * @var float
     *
     * @ORM\Column(name="RESIDENTIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $residentialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="HOTEL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $hotelArea;

    /**
     * @var float
     *
     * @ORM\Column(name="MIN_BLOCK_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $minBlockArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETION_QUATER", type="smallint", nullable=true)
     */
    private $completionQuater;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETION_YEAR", type="smallint", nullable=true)
     */
    private $completionYear;

    /**
     * @var float
     *
     * @ORM\Column(name="STEP_ACCESSIBILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $stepAccessibility;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="MREF_CLASS", type="string", length=32, nullable=true)
     */
    private $mrefClass;


}
