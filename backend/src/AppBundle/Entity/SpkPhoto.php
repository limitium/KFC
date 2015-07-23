<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPhoto
 *
 * @ORM\Table(name="SPK_PHOTO", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_PHOTO_PRIMARY", columns={"SPK_PHOTOID"})}, indexes={@ORM\Index(name="SPK_PHOTO_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkPhoto
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PHOTOID", type="string", length=12, nullable=false)
     */
    private $spkPhotoid;

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
     * @ORM\Column(name="DESCRIPTION", type="string", length=64, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_TYPE", type="string", length=32, nullable=true)
     */
    private $photoType;

    /**
     * @var integer
     *
     * @ORM\Column(name="PHOTO_ORDER", type="smallint", nullable=true)
     */
    private $photoOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF", type="string", length=1, nullable=true)
     */
    private $brief;

    /**
     * @var string
     *
     * @ORM\Column(name="FILENAME", type="string", length=256, nullable=true)
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="SITE_ORDER", type="smallint", nullable=true)
     */
    private $siteOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="BRIEF_ORDER", type="smallint", nullable=true)
     */
    private $briefOrder;


}
