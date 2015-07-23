<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndDescription
 *
 * @ORM\Table(name="SPK_IND_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_IND_DESCRIPTION_5_1559012635__K1_12_13", columns={"SPK_PROPERTYID", "TPL", "BUILD_TO_SUIT"})})
 * @ORM\Entity
 */
class SpkIndDescription
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
     * @ORM\Column(name="BRIEF_RUS", type="string", length=512, nullable=true)
     */
    private $briefRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_ENG", type="string", length=512, nullable=true)
     */
    private $briefEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_RUS", type="string", length=2048, nullable=true)
     */
    private $siteRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_ENG", type="string", length=2048, nullable=true)
     */
    private $siteEng;

    /**
     * @var string
     *
     * @ORM\Column(name="ANCHOR_RUS", type="string", length=512, nullable=true)
     */
    private $anchorRus;

    /**
     * @var string
     *
     * @ORM\Column(name="ANCHOR_ENG", type="string", length=512, nullable=true)
     */
    private $anchorEng;

    /**
     * @var string
     *
     * @ORM\Column(name="TPL", type="string", length=1, nullable=true)
     */
    private $tpl;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILD_TO_SUIT", type="string", length=1, nullable=true)
     */
    private $buildToSuit;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_NAME_RUS", type="string", length=256, nullable=true)
     */
    private $siteNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_NAME_ENG", type="string", length=256, nullable=true)
     */
    private $siteNameEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD", type="integer", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER", type="string", length=1, nullable=true)
     */
    private $specialOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESC_RUS", type="string", length=2048, nullable=true)
     */
    private $specialOfferDescRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_DESC_ENG", type="string", length=2048, nullable=true)
     */
    private $specialOfferDescEng;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_NAME_RUS", type="string", length=512, nullable=true)
     */
    private $briefNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_NAME_ENG", type="string", length=512, nullable=true)
     */
    private $briefNameEng;


}
