<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBuildingStage
 *
 * @ORM\Table(name="SPK_OFF_BUILDING_STAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_BUILDING_STAGE_PRIMARY", columns={"SPK_OFF_BUILDING_STAGEID"})}, indexes={@ORM\Index(name="SPK_OFF_BUILDING_STAGE_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkOffBuildingStage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OFF_BUILDING_STAGEID", type="string", length=12, nullable=false)
     */
    private $spkOffBuildingStageid;

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
     * @ORM\Column(name="STAGE", type="string", length=128, nullable=true)
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="STAGE_DATE", type="string", length=32, nullable=true)
     */
    private $stageDate;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=128, nullable=true)
     */
    private $preparedness;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=1024, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENT_STAGE", type="string", length=1, nullable=true)
     */
    private $currentStage;

    /**
     * @var integer
     *
     * @ORM\Column(name="STAGE_YEAR", type="integer", nullable=true)
     */
    private $stageYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="STAGE_QUARTER", type="smallint", nullable=true)
     */
    private $stageQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="STAGE_MONTH", type="smallint", nullable=true)
     */
    private $stageMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="STAGE_DAY", type="smallint", nullable=true)
     */
    private $stageDay;

    /**
     * @var string
     *
     * @ORM\Column(name="PHASE_NUMBER", type="string", length=12, nullable=true)
     */
    private $phaseNumber;


}
