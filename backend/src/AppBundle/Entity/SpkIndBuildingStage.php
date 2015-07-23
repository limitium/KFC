<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBuildingStage
 *
 * @ORM\Table(name="SPK_IND_BUILDING_STAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_BUILDING_STAGE_PRIMARY", columns={"SPK_IND_BUILDING_STAGEID"})}, indexes={@ORM\Index(name="SPK_IND_BUILDING_STAGE_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkIndBuildingStage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_IND_BUILDING_STAGEID", type="string", length=12, nullable=false)
     */
    private $spkIndBuildingStageid;

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
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="MESONIN_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $mesoninArea;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILIABLE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $availiableArea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="START_DATE", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ISCURRENT", type="string", length=1, nullable=true)
     */
    private $iscurrent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END_DATE", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="FINISHED", type="string", length=1, nullable=true)
     */
    private $finished;


}
