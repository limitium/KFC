<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCntPropLocation
 *
 * @ORM\Table(name="KF_CNT_PROP_LOCATION", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CNT_PROP_LOCATION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfCntPropLocation
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var float
     *
     * @ORM\Column(name="LATITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="LONGITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $longitude;


}
