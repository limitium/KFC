<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConstruction
 *
 * @ORM\Table(name="SPK_RET_CONSTRUCTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_CONSTRUCTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetConstruction
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
     * @ORM\Column(name="STOREYS_COUNT", type="smallint", nullable=true)
     */
    private $storeysCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRADE_STOREYS_COUNT", type="smallint", nullable=true)
     */
    private $tradeStoreysCount;

    /**
     * @var string
     *
     * @ORM\Column(name="COLUMN_STEP", type="string", length=32, nullable=true)
     */
    private $columnStep;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENTRANCE_COUNT", type="smallint", nullable=true)
     */
    private $entranceCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESCALATOR_COUNT", type="smallint", nullable=true)
     */
    private $escalatorCount;

    /**
     * @var string
     *
     * @ORM\Column(name="ESCALATOR_DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $escalatorDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRAVOLATOR_COUNT", type="smallint", nullable=true)
     */
    private $travolatorCount;

    /**
     * @var string
     *
     * @ORM\Column(name="TRAVOLATOR_DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $travolatorDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="LIFT_COUNT", type="smallint", nullable=true)
     */
    private $liftCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="VISITORS_LIFT_COUNT", type="smallint", nullable=true)
     */
    private $visitorsLiftCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="PANORAMIC_LIFT_COUNT", type="smallint", nullable=true)
     */
    private $panoramicLiftCount;

    /**
     * @var string
     *
     * @ORM\Column(name="PANORAMIC_LIFT_DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $panoramicLiftDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="GOODS_LIFT_COUNT", type="smallint", nullable=true)
     */
    private $goodsLiftCount;

    /**
     * @var string
     *
     * @ORM\Column(name="GOODS_LIFT_DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $goodsLiftDescription;

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
     * @var float
     *
     * @ORM\Column(name="STOREFRONT", type="float", precision=53, scale=0, nullable=true)
     */
    private $storefront;


}
