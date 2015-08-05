<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agents
 *
 * @ORM\Table(name="AGENTS", uniqueConstraints={@ORM\UniqueConstraint(name="XPKAGENTS", columns={"AGENTID"})})
 * @ORM\Entity
 */
class Agents
{
    /**
     * @var string
     *
     * @ORM\Column(name="AGENTID", type="string", length=12, nullable=false)
     */
    private $agentid;

    /**
     * @var string
     *
     * @ORM\Column(name="AGENTNAME", type="string", length=32, nullable=true)
     */
    private $agentname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENABLED", type="integer", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUPID", type="string", length=12, nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="HOSTID", type="string", length=12, nullable=true)
     */
    private $hostid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NEXTRUN", type="datetime", nullable=true)
     */
    private $nextrun;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIOD", type="integer", nullable=true)
     */
    private $period;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIODSPEC", type="integer", nullable=true)
     */
    private $periodspec;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIODDATA", type="integer", nullable=true)
     */
    private $perioddata;

    /**
     * @var integer
     *
     * @ORM\Column(name="ITERATIONS", type="integer", nullable=true)
     */
    private $iterations;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=16, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=255, nullable=true)
     */
    private $email;

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
