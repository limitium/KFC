<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppAgents
 *
 * @ORM\Table(name="KF_OPP_AGENTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_AGENTS_PRIMARY", columns={"KF_OPP_AGENTSID"})}, indexes={@ORM\Index(name="KF_OPP_AGENTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppAgents
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_AGENTSID", type="string", length=12, nullable=false)
     */
    private $kfOppAgentsid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="AGENTS", type="string", length=512, nullable=true)
     */
    private $agents;


}
