<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingTeam
 *
 * @ORM\Table(name="KF_MARKETING_TEAM", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_TEAM_PRIMARY", columns={"KF_MARKETING_TEAMID"})}, indexes={@ORM\Index(name="KF_MARKETING_TEAM_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_TEAMID", type="string", length=12, nullable=false)
     */
    private $kfMarketingTeamid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="USER_ROLE", type="string", length=64, nullable=true)
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
     * @ORM\Column(name="NOTES", type="string", length=512, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKER", type="string", length=12, nullable=true)
     */
    private $broker;


}
