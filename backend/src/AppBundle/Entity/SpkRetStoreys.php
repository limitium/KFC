<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetStoreys
 *
 * @ORM\Table(name="SPK_RET_STOREYS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_STOREYS_PRIMARY", columns={"SPK_RET_STOREYSID"})}, indexes={@ORM\Index(name="SPK_RET_STOREYS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetStoreys
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_RET_STOREYSID", type="string", length=12, nullable=false)
     */
    private $spkRetStoreysid;

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
     * @var integer
     *
     * @ORM\Column(name="STOREY_NUMBER", type="smallint", nullable=true)
     */
    private $storeyNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $square;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=128, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $leaseMax;


}
