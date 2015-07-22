<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkEmployesTeam
 *
 * @ORM\Table(name="SPK_EMPLOYES_TEAM", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_EMPLOYES_TEAM_PRIMARY", columns={"SPK_EMPLOYES_TEAMID"})}, indexes={@ORM\Index(name="SPK_EMPLOYES_TEAM_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkEmployesTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_EMPLOYES_TEAMID", type="string", length=12, nullable=false)
     */
    private $spkEmployesTeamid;

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
     * @ORM\Column(name="TEAM", type="string", length=32, nullable=true)
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYE_ROLE", type="string", length=32, nullable=true)
     */
    private $employeRole;

    /**
     * @var float
     *
     * @ORM\Column(name="PART", type="float", precision=53, scale=0, nullable=true)
     */
    private $part;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=128, nullable=true)
     */
    private $comments;


}
