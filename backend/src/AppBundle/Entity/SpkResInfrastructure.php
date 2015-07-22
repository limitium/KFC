<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResInfrastructure
 *
 * @ORM\Table(name="SPK_RES_INFRASTRUCTURE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RES_INFRASTRUCTURE_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkResInfrastructure
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
     * @ORM\Column(name="PARKING_TYPE1", type="string", length=128, nullable=true)
     */
    private $parkingType1;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_ENTRANCE1", type="string", length=32, nullable=true)
     */
    private $parkingEntrance1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKING_COUNT1", type="smallint", nullable=true)
     */
    private $parkingCount1;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_COMMENT1", type="string", length=64, nullable=true)
     */
    private $parkingComment1;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_TYPE2", type="string", length=128, nullable=true)
     */
    private $parkingType2;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_ENTRANCE2", type="string", length=32, nullable=true)
     */
    private $parkingEntrance2;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKING_COUNT2", type="smallint", nullable=true)
     */
    private $parkingCount2;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_COMMENT2", type="string", length=64, nullable=true)
     */
    private $parkingComment2;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_TYPE3", type="string", length=128, nullable=true)
     */
    private $parkingType3;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_ENTRANCE3", type="string", length=32, nullable=true)
     */
    private $parkingEntrance3;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKING_COUNT3", type="smallint", nullable=true)
     */
    private $parkingCount3;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_COMMENT3", type="string", length=64, nullable=true)
     */
    private $parkingComment3;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=1024, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=1024, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="WASHING", type="string", length=1, nullable=true)
     */
    private $washing;


}
