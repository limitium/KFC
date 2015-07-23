<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffDescription
 *
 * @ORM\Table(name="SPK_OFF_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_DESCRIPTION_5_1504724413__K1_16", columns={"SPK_PROPERTYID", "LONG_BRIEF"})})
 * @ORM\Entity
 */
class SpkOffDescription
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
     * @ORM\Column(name="LISTING_RUS", type="text", length=16, nullable=true)
     */
    private $listingRus;

    /**
     * @var string
     *
     * @ORM\Column(name="LISTING_ENG", type="text", length=16, nullable=true)
     */
    private $listingEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_TARGET", type="string", length=64, nullable=true)
     */
    private $siteTarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD_LEASE", type="integer", nullable=true)
     */
    private $ordLease;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD_SALE", type="integer", nullable=true)
     */
    private $ordSale;

    /**
     * @var string
     *
     * @ORM\Column(name="COMM_TERMS_SITE", type="string", length=128, nullable=true)
     */
    private $commTermsSite;

    /**
     * @var string
     *
     * @ORM\Column(name="LONG_BRIEF", type="string", length=1, nullable=true)
     */
    private $longBrief;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER", type="string", length=1, nullable=true)
     */
    private $specialOffer;

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
     * @ORM\Column(name="SPECIAL_OFFER_SALE", type="string", length=1, nullable=true)
     */
    private $specialOfferSale;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESC_SALE_RUS", type="text", length=16, nullable=true)
     */
    private $specialOfferDescSaleRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESC_SALE_ENG", type="text", length=16, nullable=true)
     */
    private $specialOfferDescSaleEng;

    /**
     * @var string
     *
     * @ORM\Column(name="INFRASTRUCTURE_SITE", type="string", length=1024, nullable=true)
     */
    private $infrastructureSite;


}
