<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsAgents
 *
 * @ORM\Table(name="SPK_REQUESTS_AGENTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQUESTS_AGENTS_PRIMARY", columns={"SPK_REQUESTS_AGENTSID"})}, indexes={@ORM\Index(name="SPK_REQUESTS_AGENTS_SPK_REQUESTSID", columns={"SPK_REQUESTSID"})})
 * @ORM\Entity
 */
class SpkRequestsAgents
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTS_AGENTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsAgentsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;


}
