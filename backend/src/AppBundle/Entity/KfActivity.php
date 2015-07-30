<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActivity
 *
 * @ORM\Table(name="KF_ACTIVITY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACTIVITY_PRIMARY", columns={"ACTIVITYID"})})
 * @ORM\Entity
 */
class KfActivity
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITYID", type="string", length=12, nullable=false)
     */
    private $activityid;

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
     * @ORM\Column(name="OTHERACCOUNTID", type="string", length=12, nullable=true)
     */
    private $otheraccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERCONTACTID", type="string", length=12, nullable=true)
     */
    private $othercontactid;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERACCOUNTNAME", type="string", length=256, nullable=true)
     */
    private $otheraccountname;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERCONTACTNAME", type="string", length=256, nullable=true)
     */
    private $othercontactname;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_FLAG", type="string", length=1, nullable=true)
     */
    private $kfFlag;


}
