<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntDescription
 *
 * @ORM\Table(name="SPK_CNT_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkCntDescription
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
     * @ORM\Column(name="BRIEF_RUS", type="text", length=16, nullable=true)
     */
    private $briefRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_ENG", type="text", length=16, nullable=true)
     */
    private $briefEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_RUS", type="text", length=16, nullable=true)
     */
    private $siteRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_ENG", type="text", length=16, nullable=true)
     */
    private $siteEng;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_RUS", type="text", length=16, nullable=true)
     */
    private $houseRus;

    /**
     * @var string
     *
     * @ORM\Column(name="HOUSE_ENG", type="text", length=16, nullable=true)
     */
    private $houseEng;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_RUS", type="text", length=16, nullable=true)
     */
    private $landRus;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_ENG", type="text", length=16, nullable=true)
     */
    private $landEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SETTLEMENT_RUS", type="text", length=16, nullable=true)
     */
    private $settlementRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SETTLEMENT_ENG", type="text", length=16, nullable=true)
     */
    private $settlementEng;

    /**
     * @var string
     *
     * @ORM\Column(name="ADV_RUS", type="text", length=16, nullable=true)
     */
    private $advRus;

    /**
     * @var string
     *
     * @ORM\Column(name="ADV_ENG", type="text", length=16, nullable=true)
     */
    private $advEng;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING_RUS", type="text", length=16, nullable=true)
     */
    private $planningRus;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING_ENG", type="text", length=16, nullable=true)
     */
    private $planningEng;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_RUS", type="text", length=16, nullable=true)
     */
    private $additionalRus;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_ENG", type="text", length=16, nullable=true)
     */
    private $additionalEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD", type="integer", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER", type="string", length=32, nullable=true)
     */
    private $specialOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="NOVELTY", type="string", length=1, nullable=true)
     */
    private $novelty;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESCRIPTION_RUS", type="text", length=16, nullable=true)
     */
    private $specialOfferDescriptionRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESCRIPTION_ENG", type="text", length=16, nullable=true)
     */
    private $specialOfferDescriptionEng;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTNOTPUBLISH", type="string", length=1, nullable=true)
     */
    private $costnotpublish;

    /**
     * @var string
     *
     * @ORM\Column(name="ATTACH_WITH_SETTLEMENT", type="string", length=1, nullable=true)
     */
    private $attachWithSettlement;

    /**
     * @var string
     *
     * @ORM\Column(name="WEEKLYOFFER", type="string", length=1, nullable=true)
     */
    private $weeklyoffer;

    /**
     * @var string
     *
     * @ORM\Column(name="WATER", type="string", length=1, nullable=true)
     */
    private $water;

    /**
     * @var string
     *
     * @ORM\Column(name="GOLF", type="string", length=1, nullable=true)
     */
    private $golf;

    /**
     * @var string
     *
     * @ORM\Column(name="SKI", type="string", length=1, nullable=true)
     */
    private $ski;

    /**
     * @var string
     *
     * @ORM\Column(name="EQUEST", type="string", length=1, nullable=true)
     */
    private $equest;

    /**
     * @var string
     *
     * @ORM\Column(name="DONT_SHOW_LEASE", type="string", length=32, nullable=true)
     */
    private $dontShowLease;

    /**
     * @var float
     *
     * @ORM\Column(name="OLD_PRICE", type="float", precision=53, scale=0, nullable=true)
     */
    private $oldPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_STYLE", type="string", length=128, nullable=true)
     */
    private $siteStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_KEY_PROPERTY", type="string", length=1, nullable=true)
     */
    private $isKeyProperty;

    /**
     * @var string
     *
     * @ORM\Column(name="PLOT_TYPE", type="string", length=32, nullable=true)
     */
    private $plotType;

    /**
     * @var string
     *
     * @ORM\Column(name="INFRASTRUCTURE_TYPE", type="string", length=32, nullable=true)
     */
    private $infrastructureType;

    /**
     * @var string
     *
     * @ORM\Column(name="OLD_SALE", type="string", length=32, nullable=true)
     */
    private $oldSale;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_SALE", type="string", length=32, nullable=true)
     */
    private $newSale;

    /**
     * @var string
     *
     * @ORM\Column(name="STYLE_TYPE", type="string", length=32, nullable=true)
     */
    private $styleType;

    /**
     * @var string
     *
     * @ORM\Column(name="FOREST", type="string", length=1, nullable=true)
     */
    private $forest;

    /**
     * @var string
     *
     * @ORM\Column(name="APARTMENT", type="string", length=1, nullable=true)
     */
    private $apartment;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTEXT", type="string", length=1, nullable=true)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="BROCHURE", type="string", length=1, nullable=true)
     */
    private $brochure;

    /**
     * @var string
     *
     * @ORM\Column(name="BANNER", type="string", length=1, nullable=true)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="BANNERMANAGERID", type="string", length=12, nullable=true)
     */
    private $bannermanagerid;


}
