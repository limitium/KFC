<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractincident
 *
 * @ORM\Table(name="CONTRACTINCIDENT", uniqueConstraints={@ORM\UniqueConstraint(name="PK_CONTRACTINCIDENT", columns={"CONTRACTINCIDENTID"})}, indexes={@ORM\Index(name="XAK1CONTRACTINCIDENT", columns={"CONTRACTID", "TICKETID", "TICKETACTIVITYID"})})
 * @ORM\Entity
 */
class Contractincident
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTINCIDENTID", type="string", length=12, nullable=false)
     */
    private $contractincidentid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETID", type="string", length=12, nullable=false)
     */
    private $ticketid;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETACTIVITYID", type="string", length=12, nullable=true)
     */
    private $ticketactivityid;

    /**
     * @var float
     *
     * @ORM\Column(name="HOURS", type="float", precision=53, scale=0, nullable=true)
     */
    private $hours;

    /**
     * @var string
     *
     * @ORM\Column(name="DOLLARS", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $dollars;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;


}
