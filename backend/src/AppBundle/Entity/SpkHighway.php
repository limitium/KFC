<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkHighway
 *
 * @ORM\Table(name="SPK_HIGHWAY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_HIGHWAY_PRIMARY", columns={"SPK_HIGHWAYID"})}, indexes={@ORM\Index(name="SPK_HIGHWAY_HIGHWAY_NUMBER", columns={"SPK_HIGHWAYID", "HIGHWAY_RUS", "HIGHWAY_ENG"})})
 * @ORM\Entity
 */
class SpkHighway
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_HIGHWAYID", type="string", length=12, nullable=false)
     */
    private $spkHighwayid;

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
     * @ORM\Column(name="HIGHWAY_RUS", type="string", length=64, nullable=true)
     */
    private $highwayRus;

    /**
     * @var string
     *
     * @ORM\Column(name="HIGHWAY_ENG", type="string", length=64, nullable=true)
     */
    private $highwayEng;

    /**
     * @var string
     *
     * @ORM\Column(name="HIGHWAY_NUMBER", type="string", length=3, nullable=true)
     */
    private $highwayNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="CIAN_NUMBER", type="string", length=3, nullable=true)
     */
    private $cianNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="intareaid", type="integer", nullable=true)
     */
    private $intareaid;

    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=10, nullable=true)
     */
    private $ssn;


}
