<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResDescription
 *
 * @ORM\Table(name="SPK_RES_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RES_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkResDescription
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
     * @ORM\Column(name="ADVANTAGE_RUS", type="text", length=16, nullable=true)
     */
    private $advantageRus;

    /**
     * @var string
     *
     * @ORM\Column(name="ADVANTAGE_ENG", type="text", length=16, nullable=true)
     */
    private $advantageEng;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_COMMENTS_RUS", type="text", length=16, nullable=true)
     */
    private $briefCommentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_COMMENTS_ENG", type="text", length=16, nullable=true)
     */
    private $briefCommentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_COMMENTS_RUS", type="text", length=16, nullable=true)
     */
    private $siteCommentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_COMMENTS_ENG", type="text", length=16, nullable=true)
     */
    private $siteCommentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="BROCHURE", type="string", length=1, nullable=true)
     */
    private $brochure;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFOTO", type="string", length=128, nullable=true)
     */
    private $profoto;

    /**
     * @var string
     *
     * @ORM\Column(name="BROCH_COMPLETION", type="string", length=128, nullable=true)
     */
    private $brochCompletion;

    /**
     * @var string
     *
     * @ORM\Column(name="FOTO_COMPLETION", type="string", length=128, nullable=true)
     */
    private $fotoCompletion;

    /**
     * @var string
     *
     * @ORM\Column(name="URGENCY", type="string", length=1, nullable=true)
     */
    private $urgency;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER", type="string", length=1, nullable=true)
     */
    private $specialOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="SPEC_OFFER_DESCRIPT", type="text", length=16, nullable=true)
     */
    private $specOfferDescript;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_COMPLEX", type="string", length=1, nullable=true)
     */
    private $isComplex;

    /**
     * @var string
     *
     * @ORM\Column(name="USE_ADDRESS", type="string", length=1, nullable=true)
     */
    private $useAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="LIFESTYLE", type="string", length=512, nullable=true)
     */
    private $lifestyle;

    /**
     * @var string
     *
     * @ORM\Column(name="BANNER", type="string", length=1, nullable=true)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTEXT", type="string", length=1, nullable=true)
     */
    private $context;


}
