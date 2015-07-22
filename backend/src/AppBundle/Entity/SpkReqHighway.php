<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqHighway
 *
 * @ORM\Table(name="SPK_REQ_HIGHWAY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQ_HIGHWAY_PRIMARY", columns={"SPK_REQ_HIGHWAYID"})}, indexes={@ORM\Index(name="SPK_REQ_HIGHWAY_SPK_REQ_REQUIREMENTSID", columns={"SPK_REQ_REQUIREMENTSID"})})
 * @ORM\Entity
 */
class SpkReqHighway
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQ_HIGHWAYID", type="string", length=12, nullable=false)
     */
    private $spkReqHighwayid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQ_REQUIREMENTSID", type="string", length=12, nullable=false)
     */
    private $spkReqRequirementsid;

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
     * @ORM\Column(name="HIGHWAYID", type="string", length=12, nullable=true)
     */
    private $highwayid;


}
