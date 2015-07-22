<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppProjectTeams
 *
 * @ORM\Table(name="SPK_OPP_PROJECT_TEAMS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_PROJECT_TEAMS_PRIMARY", columns={"SPK_OPP_PROJECT_TEAMSID"})}, indexes={@ORM\Index(name="SPK_OPP_PROJECT_TEAMS_OPPORTUNITYID", columns={"OPPORTUNITYID", "BROKER"})})
 * @ORM\Entity
 */
class SpkOppProjectTeams
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_PROJECT_TEAMSID", type="string", length=12, nullable=false)
     */
    private $spkOppProjectTeamsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="USER_ROLE", type="string", length=128, nullable=true)
     */
    private $userRole;

    /**
     * @var float
     *
     * @ORM\Column(name="PART", type="float", precision=53, scale=0, nullable=true)
     */
    private $part;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=1024, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKER", type="string", length=12, nullable=true)
     */
    private $broker;

    /**
     * @var float
     *
     * @ORM\Column(name="PART2", type="float", precision=53, scale=0, nullable=true)
     */
    private $part2;


}
