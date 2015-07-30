<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserSalesplan
 *
 * @ORM\Table(name="KF_USER_SALESPLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_SALESPLAN_PRIMARY", columns={"KF_USER_SALESPLANID"})})
 * @ORM\Entity
 */
class KfUserSalesplan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_SALESPLANID", type="string", length=12, nullable=false)
     */
    private $kfUserSalesplanid;

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
     * @var float
     *
     * @ORM\Column(name="AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;


}
