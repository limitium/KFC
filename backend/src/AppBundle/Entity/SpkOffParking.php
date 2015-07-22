<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffParking
 *
 * @ORM\Table(name="SPK_OFF_PARKING", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_PARKING_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_PARKING_5_192719739__K1_7_8_10_11_17", columns={"SPK_PROPERTYID", "UNDERGROUND_PLACE_COUNT", "UNDERGROUND_COST", "GROUND_PLACE_COUNT", "GROUND_COST", "KOEF"}), @ORM\Index(name="_dta_index_SPK_OFF_PARKING_5_192719739__K7_8_10_11_17", columns={"UNDERGROUND_PLACE_COUNT", "UNDERGROUND_COST", "GROUND_PLACE_COUNT", "GROUND_COST", "KOEF"}), @ORM\Index(name="_dta_index_SPK_OFF_PARKING_5_192719739__K7_K1_8_10_11_17", columns={"UNDERGROUND_PLACE_COUNT", "SPK_PROPERTYID", "UNDERGROUND_COST", "GROUND_PLACE_COUNT", "GROUND_COST", "KOEF"}), @ORM\Index(name="_dta_index_SPK_OFF_PARKING_5_192719739__K1_7_8", columns={"SPK_PROPERTYID", "UNDERGROUND_PLACE_COUNT", "UNDERGROUND_COST"}), @ORM\Index(name="_dta_index_SPK_OFF_PARKING_5_192719739__K1_6_7_8_9_10_11_12_13_14_15_16_17_18_19_20", columns={"SPK_PROPERTYID", "UNDERGROUND_LEVEL_COUNT", "UNDERGROUND_PLACE_COUNT", "UNDERGROUND_COST", "GROUND_LEVEL_COUNT", "GROUND_PLACE_COUNT", "GROUND_COST", "ROOF_LEVEL_COUNT", "ROOF_PLACE_COUNT", "ROOF_COST", "COMMENTS_RUS", "COMMENTS_ENG", "KOEF", "PARKING_COST", "LIFT_COUNT_NEW", "LIFT_WEIGHT_NEW"})})
 * @ORM\Entity
 */
class SpkOffParking
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
     * @ORM\Column(name="UNDERGROUND_PLACE_COUNT", type="smallint", nullable=true)
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
     * @ORM\Column(name="GROUND_PLACE_COUNT", type="smallint", nullable=true)
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
     * @ORM\Column(name="ROOF_PLACE_COUNT", type="smallint", nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="KOEF", type="string", length=16, nullable=true)
     */
    private $koef;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_COST", type="string", length=128, nullable=true)
     */
    private $parkingCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="LIFT_COUNT_NEW", type="smallint", nullable=true)
     */
    private $liftCountNew;

    /**
     * @var integer
     *
     * @ORM\Column(name="LIFT_WEIGHT_NEW", type="integer", nullable=true)
     */
    private $liftWeightNew;


}
