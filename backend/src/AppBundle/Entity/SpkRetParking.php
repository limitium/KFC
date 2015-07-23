<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetParking
 *
 * @ORM\Table(name="SPK_RET_PARKING", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_PARKING_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetParking
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
     * @var integer
     *
     * @ORM\Column(name="UNDERGROUND_LEVEL_COUNT", type="smallint", nullable=true)
     */
    private $undergroundLevelCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="UNDERGROUND_PLACE_COUNT", type="integer", nullable=true)
     */
    private $undergroundPlaceCount;

    /**
     * @var string
     *
     * @ORM\Column(name="UNDERGROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $undergroundCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="GROUND_LEVEL_COUNT", type="smallint", nullable=true)
     */
    private $groundLevelCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="GROUND_PLACE_COUNT", type="integer", nullable=true)
     */
    private $groundPlaceCount;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUND_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $groundCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOF_LEVEL_COUNT", type="smallint", nullable=true)
     */
    private $roofLevelCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOF_PLACE_COUNT", type="integer", nullable=true)
     */
    private $roofPlaceCount;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOF_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $roofCost;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_INDEX", type="string", length=12, nullable=true)
     */
    private $parkingIndex;

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
     * @var integer
     *
     * @ORM\Column(name="MULTILEVEL_LEVEL_COUNT", type="smallint", nullable=true)
     */
    private $multilevelLevelCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="MULTILEVEL_PLACE_COUNT", type="integer", nullable=true)
     */
    private $multilevelPlaceCount;

    /**
     * @var string
     *
     * @ORM\Column(name="MULTILEVEL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $multilevelCost;


}
