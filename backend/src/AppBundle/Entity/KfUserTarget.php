<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTarget
 *
 * @ORM\Table(name="KF_USER_TARGET", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TARGET_PRIMARY", columns={"KF_USER_TARGETID"})})
 * @ORM\Entity
 */
class KfUserTarget
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TARGETID", type="string", length=12, nullable=false)
     */
    private $kfUserTargetid;

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
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="ESTIMATED_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $estimatedAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROBABILITY", type="smallint", nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
