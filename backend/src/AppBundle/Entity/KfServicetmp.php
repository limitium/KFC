<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfServicetmp
 *
 * @ORM\Table(name="KF_SERVICETMP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SERVICETMP_PRIMARY", columns={"KF_SERVICETMPID"})})
 * @ORM\Entity
 */
class KfServicetmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SERVICETMPID", type="string", length=12, nullable=false)
     */
    private $kfServicetmpid;

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
     * @ORM\Column(name="KF_SERVICEID", type="string", length=12, nullable=true)
     */
    private $kfServiceid;


}
