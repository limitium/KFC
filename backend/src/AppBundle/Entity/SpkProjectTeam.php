<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkProjectTeam
 *
 * @ORM\Table(name="SPK_PROJECT_TEAM", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_PROJECT_TEAM_PRIMARY", columns={"SPK_PROJECT_TEAMID"})}, indexes={@ORM\Index(name="SPK_PROJECT_TEAM_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkProjectTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROJECT_TEAMID", type="string", length=12, nullable=false)
     */
    private $spkProjectTeamid;

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
     * @ORM\Column(name="ACTIVITY_CATEGORY", type="string", length=32, nullable=true)
     */
    private $activityCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=512, nullable=true)
     */
    private $comments;


}
