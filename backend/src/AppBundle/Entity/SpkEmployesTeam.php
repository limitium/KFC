<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkEmployesTeam
 *
 */
class SpkEmployesTeam
{
    /**
     * @var string
     *
     */
    private $spkEmployesTeamid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $team;

    /**
     * @var string
     *
     */
    private $userid;

    /**
     * @var string
     *
     */
    private $employeRole;

    /**
     * @var float
     *
     */
    private $part;

    /**
     * @var string
     *
     */
    private $comments;


}
