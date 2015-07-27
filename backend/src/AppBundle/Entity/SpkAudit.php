<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAudit
 *
 */
class SpkAudit
{
    /**
     * @var string
     *
     */
    private $spkAuditid;

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
    private $userid;

    /**
     * @var \DateTime
     *
     */
    private $logondate;

    /**
     * @var \DateTime
     *
     */
    private $logoffdate;


}
