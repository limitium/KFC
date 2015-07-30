<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserLead
 *
 * @ORM\Table(name="KF_USER_LEAD", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_LEAD_PRIMARY", columns={"KF_USER_LEADID"})})
 * @ORM\Entity
 */
class KfUserLead
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_LEADID", type="string", length=12, nullable=false)
     */
    private $kfUserLeadid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;


}
