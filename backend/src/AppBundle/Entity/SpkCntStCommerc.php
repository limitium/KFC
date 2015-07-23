<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntStCommerc
 *
 * @ORM\Table(name="SPK_CNT_ST_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_ST_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkCntStCommerc
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
     * @ORM\Column(name="LAND_COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $landCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $landCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $houseCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $houseCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COTTAGE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $cottageAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="COTTAGE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $cottageAreaMax;

    /**
     * @var float
     *
     * @ORM\Column(name="TOWNHOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $townhouseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="TOWNHOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $townhouseAreaMax;

    /**
     * @var float
     *
     * @ORM\Column(name="APARTMENT_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $apartmentAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="APARTMENT_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $apartmentAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COTTAGE_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $cottageCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COTTAGE_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $cottageCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="TOWNHOUSE_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $townhouseCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="TOWNHOUSE_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $townhouseCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="APARTMENT_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $apartmentCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="APARTMENT_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $apartmentCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_FEE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfFee;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
