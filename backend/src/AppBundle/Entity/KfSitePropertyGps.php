<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSitePropertyGps
 *
 * @ORM\Table(name="kf_site_property_gps")
 * @ORM\Entity
 */
class KfSitePropertyGps
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
     * @ORM\Column(name="ptype", type="string", length=64, nullable=true)
     */
    private $ptype;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT", type="string", length=10, nullable=true)
     */
    private $export;


}
