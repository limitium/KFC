<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSitePropertyPics
 *
 * @ORM\Table(name="kf_site_property_pics")
 * @ORM\Entity
 */
class KfSitePropertyPics
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=12, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SLX_ID", type="string", length=12, nullable=false)
     */
    private $slxId;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_ID", type="string", length=12, nullable=true)
     */
    private $kfId;

    /**
     * @var string
     *
     * @ORM\Column(name="GPS_ID", type="string", length=50, nullable=true)
     */
    private $gpsId;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_ID", type="string", length=14, nullable=true)
     */
    private $photoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVER_LINK", type="string", length=2000, nullable=true)
     */
    private $serverLink;

    /**
     * @var string
     *
     * @ORM\Column(name="file_size", type="string", length=2000, nullable=true)
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT", type="string", length=10, nullable=true)
     */
    private $export;

    /**
     * @var string
     *
     * @ORM\Column(name="ptype", type="string", length=64, nullable=true)
     */
    private $ptype;


}
