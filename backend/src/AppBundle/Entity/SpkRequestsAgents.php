<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsAgents
 *
 */
class SpkRequestsAgents
{
    /**
     * @var string
     *
     */
    private $spkRequestsAgentsid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

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
    private $accountid;


}
