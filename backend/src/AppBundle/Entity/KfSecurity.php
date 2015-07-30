<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSecurity
 *
 * @ORM\Table(name="KF_SECURITY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SECURITY_PRIMARY", columns={"KF_SECURITYID"})})
 * @ORM\Entity
 */
class KfSecurity
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SECURITYID", type="string", length=12, nullable=false)
     */
    private $kfSecurityid;

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
     * @var integer
     *
     * @ORM\Column(name="SALESPLAN", type="smallint", nullable=true)
     */
    private $salesplan;


}
