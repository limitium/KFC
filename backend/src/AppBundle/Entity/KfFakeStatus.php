<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfFakeStatus
 *
 * @ORM\Table(name="KF_FAKE_STATUS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_FAKE_STATUS_PRIMARY", columns={"KF_FAKE_STATUSID"})})
 * @ORM\Entity
 */
class KfFakeStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_FAKE_STATUSID", type="string", length=12, nullable=false)
     */
    private $kfFakeStatusid;

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
     * @ORM\Column(name="STATUS", type="string", length=128, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_TYPE", type="string", length=128, nullable=true)
     */
    private $statusType;


}
