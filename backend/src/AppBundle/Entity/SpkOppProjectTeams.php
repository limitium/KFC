<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppProjectTeams
 *
 */
class SpkOppProjectTeams
{
    /**
     * @var string
     *
     */
    private $spkOppProjectTeamsid;

    /**
     * @var string
     *
     */
    private $opportunityid;

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
    private $userRole;

    /**
     * @var float
     *
     */
    private $part;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $broker;

    /**
     * @var float
     *
     */
    private $part2;


}
