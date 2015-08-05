<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactlink
 *
 * @ORM\Table(name="CONTACTLINK", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTACTLINK", columns={"CONTACTLINKID"})}, indexes={@ORM\Index(name="XIE1CONTACTLINK", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class Contactlink
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTLINKID", type="string", length=12, nullable=false)
     */
    private $contactlinkid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RCSEQNO", type="integer", nullable=false)
     */
    private $rcseqno;

    /**
     * @var string
     *
     * @ORM\Column(name="RCCOMMANDSTRING", type="string", length=80, nullable=true)
     */
    private $rccommandstring;

    /**
     * @var string
     *
     * @ORM\Column(name="RCDESC", type="string", length=80, nullable=true)
     */
    private $rcdesc;

    /**
     * @var string
     *
     * @ORM\Column(name="RCSERVERID", type="string", length=80, nullable=true)
     */
    private $rcserverid;

    /**
     * @var string
     *
     * @ORM\Column(name="RCINVENTORYPATH", type="string", length=128, nullable=true)
     */
    private $rcinventorypath;

    /**
     * @var string
     *
     * @ORM\Column(name="RCAPPLICATIONPATH", type="string", length=128, nullable=true)
     */
    private $rcapplicationpath;

    /**
     * @var string
     *
     * @ORM\Column(name="RCNICID", type="string", length=80, nullable=true)
     */
    private $rcnicid;

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
     * @var string
     *
     * @ORM\Column(name="RCPARAMETERSTRING", type="string", length=128, nullable=true)
     */
    private $rcparameterstring;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;


}
