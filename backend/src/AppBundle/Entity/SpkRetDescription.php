<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetDescription
 *
 * @ORM\Table(name="SPK_RET_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetDescription
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
     * @ORM\Column(name="BRIEF_RUS", type="string", length=256, nullable=true)
     */
    private $briefRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_ENG", type="string", length=256, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="ORD", type="smallint", nullable=true)
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
     * @ORM\Column(name="HIDE_NUMBER", type="string", length=1, nullable=true)
     */
    private $hideNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="HIDE_TAREA", type="string", length=1, nullable=true)
     */
    private $hideTarea;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=64, nullable=true)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_DESCRIPTION_RUS", type="string", length=256, nullable=true)
     */
    private $specialDescriptionRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_DESCRIPTION_ENG", type="string", length=256, nullable=true)
     */
    private $specialDescriptionEng;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION_DESCRIPTION", type="string", length=2048, nullable=true)
     */
    private $locationDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_DESCRIPTION", type="string", length=2048, nullable=true)
     */
    private $areaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTRANCE_DESCRIPTION", type="string", length=2048, nullable=true)
     */
    private $entranceDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="TENANT", type="string", length=512, nullable=true)
     */
    private $tenant;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOP_WINDOW", type="string", length=1, nullable=true)
     */
    private $shopWindow;


}
