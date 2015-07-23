<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAudit
 *
 * @ORM\Table(name="SPK_AUDIT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_AUDIT_PRIMARY", columns={"SPK_AUDITID"})})
 * @ORM\Entity
 */
class SpkAudit
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_AUDITID", type="string", length=12, nullable=false)
     */
    private $spkAuditid;

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
     * @ORM\Column(name="USERID", type="string", length=32, nullable=true)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOGONDATE", type="datetime", nullable=true)
     */
    private $logondate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOGOFFDATE", type="datetime", nullable=true)
     */
    private $logoffdate;


}
