<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntBuildingStage
 *
 * @ORM\Table(name="SPK_CNT_BUILDING_STAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_BUILDING_STAGE_PRIMARY", columns={"SPK_CNT_BUILDING_STAGEID"})}, indexes={@ORM\Index(name="SPK_CNT_BUILDING_STAGE_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkCntBuildingStage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CNT_BUILDING_STAGEID", type="string", length=12, nullable=false)
     */
    private $spkCntBuildingStageid;

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
     * @ORM\Column(name="STAGE", type="string", length=32, nullable=true)
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="BULDING_START_MONTH", type="string", length=16, nullable=true)
     */
    private $buldingStartMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_END_MONTH", type="string", length=16, nullable=true)
     */
    private $buildingEndMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="STAGE_TYPE", type="string", length=32, nullable=true)
     */
    private $stageType;

    /**
     * @var integer
     *
     * @ORM\Column(name="HOUSES_COUNT", type="smallint", nullable=true)
     */
    private $housesCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="AVAILABLE_HOUSES_COUNT", type="smallint", nullable=true)
     */
    private $availableHousesCount;

    /**
     * @var float
     *
     * @ORM\Column(name="HOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $houseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="HOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $houseAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_TYPE", type="string", length=32, nullable=true)
     */
    private $houseType;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_START_YEAR", type="string", length=4, nullable=true)
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_END_YEAR", type="string", length=4, nullable=true)
     */
    private $buildingEndYear;


}
